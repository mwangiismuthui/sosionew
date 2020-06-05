@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Products
                        <a href="#" class="btn btn-info btn-round waves-effect waves-light m-1" data-toggle="modal"
                        data-target="#productmodal">Add Product</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="product_table" class="table table-bordered ">
                                <thead>
                               
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                
                                </thead>
                                 <tbody>
                                    
                                </tbody> 
                                <tfoot>
                                
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                 
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>



<!-- Modal -->
<div class="modal fade productmodal" id="productmodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="product_add" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="title">Category</label>
                      <select name="category_id" id="" class="form-control form-control-rounded">
                          <option value="">Select Product Category</option>
                          @foreach ($categories as $category)
                              
                      <option value="{{$category->id}}">{{$category->category}}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Product</label>
                       <input type="text" class="form-control form-control-rounded" name="product" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control form-control-rounded" id="price"
                            placeholder="Enter Product Price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="main_image">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-rounded"></textarea>
                     
                    </div>
                    <div class="form-group">
                        <label for="main_image">Main Product Image</label>
                        <input type="file" class="form-control form-control-rounded" id="main_image"
                            placeholder="Enter Service Main Name" name="main_image">
                    </div>
                    <div class="form-group">
                        <label for="gallery">Additional Images</label>
                        <input type="file" class="form-control form-control-rounded" id="gallery"
                            placeholder="Enter Service Additional Images" name="gallery[]">
                    </div>
                


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary shadow-primary btn-round px-5"><i
                                class="icon-checkbox3"></i> Save</button>
                    </div>
                </form>
            </div>
  
        </div>
    </div>
</div>

<!-- Large Size Modal -->

<script>
        var table = $('#product_table').DataTable({
        processing: true,
        serverSide: true,    
        ajax: "{{ route('product.index')}}",
        columns:[
        {data: 'product', name: 'product'},
        {data: 'category.category', name: 'category.category'},
        {data: 'description', name: 'description'},
        {data: 'price', name: 'price'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        columnDefs:[
       
        ]

        });




   function productdelete(product_id) {
       console.log(product_id);
    $.ajax({
           url:'/product/destroy/',
           method:'delete',
           data:{
               product_id:product_id,
                 _token: "{{ csrf_token() }}",
           },
           success:function(data){
               if (data.errors) {
                    Lobibox.notify("error", {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: "top right",
                        icon: "fa fa-times-circle",
                        msg: data.message,
                    });
                }
                if (data.success) {
                    Lobibox.notify("success", {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: "top right",
                        icon: "fa fa-check-circle", //path to image
                        msg: data.message,
                     });

                }
                $('#product_table').DataTable().ajax.reload();
            },

       });
    }



    $("#product_add").on("submit", function (event) {
        event.preventDefault();
        console.log('from');
        $.ajax({
            url: '/product/store/',
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",

            success:function(data){
               if (data.errors) {
                    Lobibox.notify("error", {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: "top right",
                        icon: "fa fa-times-circle",
                        msg: data.message,
                    });
                }
                if (data.success) {
                    Lobibox.notify("success", {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: "top right",
                        icon: "fa fa-check-circle", //path to image
                        msg: data.message,
                     });

                }

                $('#productmodal').modal('hide');
                $('#product_table').DataTable().ajax.reload();
            },
            error:function (data) {
            Lobibox.notify("error", {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: "top right",
                icon: "fa fa-times-circle",
                msg: "Something went wrong",
            });

            },
        });
    });
   
</script>


@endsection