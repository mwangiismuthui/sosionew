@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
 <div class="col-md-6">
@foreach ($sliders as $slider)
 <form id="slider_add" method="POST" enctype="multipart/form-data">
    @csrf
 <input type="hidden" name="slider_id" value="{{$slider->id}}" id="slider_id">
    <div class="form-group">
        <label for="title">Title</label>
        <textarea name="title" id="description" cols="30" rows="10" class="form-control form-control-rounded">
{{$slider->title}}
        </textarea>
    </div>
    <div class="form-group">
        <label for="description">Subtile</label>
        <textarea name="subtitle" id="description" cols="30" rows="10" class="form-control form-control-rounded">
{{$slider->subtitle}}
        </textarea>
    </div>
   
    <div class="form-group">
        <label for="main_image">Slider Image</label>
        <input type="file" class="form-control form-control-rounded" id="main_image"
            placeholder="Enter Slider Image" name="main_image">
    </div>
  
  


    <div class="form-group">
        <button type="submit" class="btn btn-primary shadow-primary btn-round px-5"><i
                class="icon-checkbox3"></i> Save</button>
    </div>
</form>

    </div>
<div class="col-md-6">
        <p>Current Images</p>
      
        <div class="list_image_gallery">
            <div class="icon-remove blue delete" id="imgwrapper{{$slider->id}}">
                <img class="thumbnail"
                    src="{{url('/SliderImages').'/'.$slider->image_path }}"
                    alt="image" height="300" width="300" />
             
            </div>
            @endforeach
        </div>

</div>
</div>
</div>
<script>



var slider_id =$('#slider_id').val();
    $("#slider_add").on("submit", function (event) {
        event.preventDefault();
        console.log(slider_id);
        $.ajax({
            url: '/slider/update/'+slider_id,
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