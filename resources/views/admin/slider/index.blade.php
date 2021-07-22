@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Sliders
                        <a href="#" class="btn btn-info btn-round waves-effect waves-light m-1" data-toggle="modal"
                        data-target="#slider_modal">Add Slider</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="slider_table" class="table table-bordered ">
                                <thead>

                                        <th>Title</th>
                                        <th>SubTitle</th>
                                        <th>Action</th>

                                </thead>
                                 <tbody>

                                </tbody>
                                <tfoot>

                                    <th>Title</th>
                                    <th>SubTitle</th>
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
<div class="modal fade slider_modal" id="slider_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Add Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="slider_add" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <textarea name="title" id="description" cols="30" rows="10" class="form-control form-control-rounded">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Subtile</label>
                        <textarea name="subtitle" id="description" cols="30" rows="10" class="form-control form-control-rounded">

                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="main_image">Main Sevirce Image</label>
                        <input type="file" class="form-control form-control-rounded" id="main_image"
                            placeholder="Enter Service Main Name" name="main_image">
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

        var table = $('#slider_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('slider.index')}}",
        columns:[
        {data: 'title', name: 'title'},
        {data: 'subtitle', name: 'subtitle'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        columnDefs:[

        ]

        });








   function sliderdelete(slider_id) {
       console.log(slider_id);
    $.ajax({
           url:'/slider/destroy/',
           method:'delete',
           data:{
               slider_id:slider_id,
                 _token: "{{ csrf_token() }}",
           },
           success: function (data) {

var html = "";
if (data.errors) {
    Lobibox.notify("error", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "fa fa-times-circle",
        msg: data.success,
    });
}
if (data.warning) {
    html =
        '<div class="alert alert-warning">' +
        data.warning +
        "</div>";
}
if (data.success) {
    Lobibox.notify("success", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "fa fa-check-circle", //path to image
        msg: data.message,
     });

     console.log(data.success);
}
$('#slider_modal').modal('hide');
$('#slider_table').DataTable().ajax.reload();
},

       });
    }



    $("#slider_add").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "/slider/store",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",

            success: function (data) {

                var html = "";
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

                     console.log(data.success);
                }
                $('#slider_modal').modal('hide');
                $('#slider_table').DataTable().ajax.reload();
            },
            error: function (err) {
            Lobibox.notify("error", {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: "top right",
                icon: "fa fa-times-circle",
                msg: "Image Upload failed. Try again",
            });
            console.log(err.message);
                                },
        });
    });

</script>


@endsection
