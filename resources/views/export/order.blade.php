@extends('layout.main')
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight text-uppercase">Order Online</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="{{route('index')}}">
                Home
            </a>
                    </li>
                    <li class="active">Order online</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            
        </div>


        <div class="row topmargin_40">
            <div class="col-sm-12 to_animate">
            <form class="contact-for columns_padding_5" method="get" action="{{route('order_form')}}">
                @csrf
                    <div class="row">

                        <div class="col-sm-6">
                            <p class="form-group">
                    <label for="name">Full Name <span class="required">*</span></label>
                    <input type="text" aria-required="true" size="30" value="" required name="name" id="name" class="form-control" placeholder="Full Name">
                </p>
                            <p class="form-group">
                    <label for="email">Email address<span class="required">*</span></label>
                    <input type="email" aria-required="true" size="30" value="" required name="email" id="email" class="form-control" placeholder="Email Address">
                </p>
                            <p class="form-group">
                    <label for="subject">Product<span class="required">*</span></label>
                    <input type="text" aria-required="true" size="30" value="" required name="product" id="subject" class="form-control" placeholder="Enter Product Name">
                 
                </p>
                <p class="form-group">
                    <label for="subject">Quantity<span class="required">*</span></label>
                    <input type="text" aria-required="true" size="30" value="" required name="quantity" id="subject" class="form-control" placeholder="Enter Quantity">
                 
                </p>
                        </div>
                     
                        <div class="col-sm-6">

                            <p class="contact-form-message form-group">
                    <label for="message">Additional Info</label>
                    <textarea aria-required="true" rows="3" cols="45" name="additional_info" id="message" class="form-control" placeholder="Other additional information"></textarea>
                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <p class="contact-form-submit text-center topmargin_10">
                    <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color2">Submit Order</button>
                </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection