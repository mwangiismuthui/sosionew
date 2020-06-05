@extends('layout.main')
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight text-uppercase">Contact Us</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                    <a href="{{route('index')}}">
                Home
            </a>
                    </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section id="ma" class="ls ms" data-address="Terracina, LT, Italia">
                    <!-- marker description and marker icon goes here -->
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.225995999883!2d36.8165834!3d-1.2903935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa80e474be4afaf5d!2sUhuru%20Park!5e0!3m2!1sen!2ske!4v1573682300997!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true"></iframe>
                    
                </section>
            </div>
        </div>

        <div class="row topmargin_40">
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight2 size_normal">
                        <i class="rt-icon2-phone5"></i>
                    </div>

                    <p>
            <span class="grey">Phone:</span> +254714184719<br>
            <span class="grey">WhatsApp:</span> +254714184719
        </p>

                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight2 size_normal">
                        <i class="rt-icon2-location2"></i>
                    </div>

                    <p> 
            PO Box 54378<br>
            Nairobi,Kenya
        </p>

                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight2 size_normal">
                        <i class="rt-icon2-mail"></i>
                    </div>

                    <p>sales@sosiofruitsandvegetables.com</p>

                </div>
            </div>

        </div>

        <div class="row topmargin_40">
            <div class="col-sm-12 to_animate">
            <form class=" columns_padding_5" method="get" action="{{route('contact_form')}}">
                @csrf
                    <div class="row">

                        <div class="col-sm-6">
                            <p class="form-group">
                    <label for="name">Full Name <span class="required">*</span></label>
                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" required placeholder="Full Name">
                </p>
                            <p class="form-group">
                    <label for="email">Email address<span class="required">*</span></label>
                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" required placeholder="Email Address">
                </p>
                            <p class="form-group">
                    <label for="subject">Subject<span class="required">*</span></label>
                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" required placeholder="Subject">
                </p>
                        </div>
                        <div class="col-sm-6">

                            <p class="contact-form-message form-group">
                    <label for="message">Message</label>
                    <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" required placeholder="Message"></textarea>
                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <p class="contact-form-submit text-center topmargin_10">
                                <button type="submit" class="warning">Send Message</button>
                    {{-- <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color2">Send Message</button> --}}
                </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection