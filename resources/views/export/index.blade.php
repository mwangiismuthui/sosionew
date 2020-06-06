@extends('layout.main')
@section('content')
<section class="intro_section page_mainslider ds">
    <div class="flexslider vertical-nav" data-dots="true" data-nav="false">
        <ul class="slides">
@foreach ($sliders as $slider)
      <li><img src="{{ URL::to('/') }}/SliderImages/{{$slider->image_path}}" alt="{{$slider->subtitle}}" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h4 class="text-uppercas">
                                            {{$slider->subtitle}}
                                        </h4>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-lowercase thin">
                                               {{$slider->title }}
                                        
                                        </h2>
                                    </div>
                                    
                                </div>

                            </div>
                            
            </li>
@endforeach
        

        </ul>

    </div>

</section>

<section class="ls section_padding_top_10 top_offset_content columns_margin_top_20">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="teaser main_bg_color offset_icon hover_icon rounded text-center">
                    <div class="teaser_icon main_bg_color size_small round">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-uppercase">
                        <a href="{{route('about')}}">
                About Us<br>
            </a>
                    </h4>
                    <p>A world-class fruits and vegetables exporting company.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teaser main_bg_color2 offset_icon hover_icon rounded text-center">
                    <div class="teaser_icon main_bg_color2 size_small round">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-uppercase">
                        <a href="{{route('about')}}">
                Mission<br> 
            </a>
                    </h4>
                    <p>To provide rapid and excellent, around-the-clock customer service and value</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teaser main_bg_color3 offset_icon hover_icon rounded text-center">
                    <div class="teaser_icon main_bg_color3 size_small round">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-uppercase">
                        <a href="{{route('about')}}">
                Vision<br>
            </a>
                    </h4>
                    <p>To emerge as market leader within the realms of providing supreme fresh fruits and vegetables..</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teaser main_bg_color4 offset_icon hover_icon rounded text-center">
                    <div class="teaser_icon main_bg_color4 size_small round">
                        <i class="fa fa-map-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-uppercase">
                        <a href="{{route('about')}}">
               Why Us<br>
            </a>
                    </h4>
                    <p>Guaranteed real farm freshness encoupled with expirience make us the best in the industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_130 section_padding_bottom_130">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12 text-center">
                <h2 class="section_header">
                    <span class="small">Our Products</span>
                   
                </h2>
            </div>
            
        </div>
     
     
        <div class="row columns_margin_bottom_20">
            @foreach ($products as $product)
            <div class="col-lg-4 col-sm-6">
                <article class="vertical-item content-padding with_border color2_border rounded">
                    
                    <div class="item-media top_rounded overflow_hidden" id="img-susan">
                        <img src="{{ URL::to('/') }}/SosioFruits_Products/{{$product->productphotos->where('type','main_image')->pluck('image_path')->first()}}" alt="{{$product->product}}">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="content-justify">
                            <div>
                                <h4 id="product-header">
                                    <a href="{{route('product.details',$product->id)}}">
                            {{$product->product}}<br> 
                        </a>
                                </h4>
                                <p id="text-export">{{$product->slug}}</p>
                            </div>
                            <div>
                     
                            </div>
                        </header>
                     
                </article>
            </div>
            @endforeach
          

             
        </div>
     
    </div> 
</section>

<section class="ds parallax page_testimonials section_padding_top_130 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">
                        <span class="small highlight3">What our clients are saying</span>
                   
                    </h2>

                    <div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="false" data-nav="true">

                        <blockquote class="with_quote">
                            <p>“Great products by Sosio fruits and Vegetables.”</p>
                            <div class="item-meta">
                                <h5>Raymond J. Jensen</h5>
                                <p class="small-text highlight3">Client</p>
                            </div>
                        </blockquote>

                        <blockquote class="with_quote">
                            <p>“Thanks for the smooth ordering process”</p>
                            <div class="item-meta">
                                <h5>Mary M. Robinson</h5>
                                <p class="small-text highlight3">Client</p>
                            </div>
                        </blockquote>

                        <blockquote class="with_quote">
                            <p>“I have worked with Sosio fruits ,and I can't find such a great company to get my fruits from! .”</p>
                            <div class="item-meta">
                                <h5>Steven S. Shelton</h5>
                                <p class="small-text highlight3">Client</p>
                            </div>
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>
    </section>

   
@endsection