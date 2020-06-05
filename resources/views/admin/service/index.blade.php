@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Services
                        <a href="#" class="btn btn-info btn-round waves-effect waves-light m-1" data-toggle="modal"
                        data-target="#servicemodal">Add Service</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="service_table" class="table table-bordered ">
                                <thead>
                               
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                
                                </thead>
                                 <tbody>
                                    
                                </tbody> 
                                <tfoot>
                                
                                    <th>Service</th>
                                    <th>Description</th>
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
<div class="modal fade servicemodal" id="servicemodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="service_add" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="title">Service Name</label>
                        <input type="text" class="form-control form-control-rounded" id="service"
                            placeholder="Enter Service Name" name="service">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control form-control-rounded">

                        </textarea>
                    </div>
                  
                    <div class="form-group">
                        <label for="main_image">Main Sevirce Image</label>
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

        var table = $('#service_table').DataTable({
        processing: true,
        serverSide: true,    
        ajax: "{{ route('service.index')}}",
        columns:[
        {data: 'service', name: 'service'},
        {data: 'description', name: 'description'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        columnDefs:[
       
        ]

        });




   function servicedelete(service_id) {
       console.log(service_id);
    $.ajax({
           url:'/service/destroy/',
           method:'delete',
           data:{
               service_id:service_id,
                 _token: "{{ csrf_token() }}",
           },
           success:function(data){
               console.log('Deleted ');
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
             $('#service_table').DataTable().ajax.reload();
           }

       });
    }



    $("#service_add").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "/service/store",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success:function(data){

            console.log("success");
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

                $('#servicemodal').modal('hide');
                $('#service_table').DataTable().ajax.reload();
            },
            error: function () {
            Lobibox.notify("error", {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: "top right",
                icon: "fa fa-times-circle",
                msg: "Something went wrong!Please try again",
            });
            console.log("error");
            },
        });
    });
   
</script>


@endsection