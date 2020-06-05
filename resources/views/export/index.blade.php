@extends('layout.main')
@section('content')
<section class="intro_section page_mainslider ds">
    <div class="flexslider vertical-nav" data-dots="true" data-nav="false">
        <ul class="slides">

            <li><img src="/images/events/new/slider3.jpg" alt="kenya-fruits" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h4 class="text-uppercas">
                                            Fresh + Healthy + Reliable
                                        </h4>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase thin">
                                                An  Oasis Of 
                                                <br> Farm Freshness
                                        
                                        </h2>
                                    </div>
                                    
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="{{route('products')}}" class="theme_button color1">
                                Our Products
                            </a>
                                    </div>
                                </div>

                            </div>
                            
            </li>

            <li>
                <img src="/images/events/new/susan1.jpg" alt="kenya-herbs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h4 class="text-uppercase">
                                                Organic + Dedication  
                                        </h4>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase thin">
                                                Organically grown for 
                                                <br>you
                                        </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="{{route('order')}}" class="theme_button color1">
                                Make an Order
                            </a>
                                    </div>
                                </div>

                            </div>
                            
            </li>

            <li>
                <img src="/images/events/new/susan2.jpg" alt="kenya-vegetables">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                      
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase thin">
                                            Guaranteed Freshness With
                                            <br>  Experience
                                        </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="{{route('about')}}" class="theme_button color1">
                                About us
                            </a>
                                    </div>
                                </div>

                            </div>
                            
            </li>

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
            <div class="col-lg-4 col-sm-6">
                <article class="vertical-item content-padding with_border color2_border rounded">
                    <div class="item-media top_rounded overflow_hidden" id="img-susan">
                        <img src="/images/events/new/mango5.jpg" alt="fresh-kenya-mangoes">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="content-justify">
                            <div>
                                <h4 id="product-header">
                                    <a href="{{route('mangoes')}}">
                            Mangoes<br> 
                        </a>
                                </h4>
                                <p id="text-export">Kenyan mangos stand tall among the best mangos in the world, making Kenya a key source of juicy and healthy mangos to the world’s leading mango markets.We exports fresh and healthy Kenya mangos to the rest of the world</p>
                            </div>
                            <div>
                                <p class="price-big highlight text-right">
                    </p>
                            </div>
                        </header>
                     
                </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/new/passion4.jpg" alt="kenya-passion-fruit">
                                <div class="media-links">
                                  
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('passion_fruit')}}">
                                    Passion Friut<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">We are happy to supply high quality Kenya passion fruits, grown and maintained by the ever dedicated family farmers from whom we source.Enjoy the best of this fruit by getting it from the best exporters of it!</p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color3_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/new/avocado5.jpg" alt="kenya-fresh-avocado">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('avocadoes')}}">
                                    Avocadoes<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">A lovely fruit with fast rising global demand. This simple natural fruit is amazingly high in healthy fats with attractive benefits to the body.We exports fresh and healthy Kenya avocados to the rest of the world and also serve the local market </p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color2_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/spices1.jpeg" alt="kenya-spices">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('spices')}}">
                                         Spices<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">Spicy food is yummy food.With our great collection of spices freshly produced from our rich Kenyan soils,sorted for the best we deliver them to you to make that meal spicier than before.They include Ginger,Tumeric,Pepper and Garlic</p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/tamarillos.jpg" alt="fresh-kenya-tree-tomato">
                                <div class="media-links">
                                  
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('tree_tomato')}}">
                                                Tree Tomato<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">The tree tomato is a small oval-shaped fruit like a medium sized tomato and tastes almost like a tomato.With huge amounts of Vitamin(A,C & E) the tree tomato has been essntial in making jam,preserves,jellies,salsa and   relishes</p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color3_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/herbs1.jpeg" alt="fresh-herbs-from-kenya">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('herbs')}}">
                                    Herbs<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">Herbs are mostly know for their medicinal value across the globe.Organic herbs are now the trend in most parts of the world.With a wide variety of them including mint,thyme,chives we selsct from the best and deliver it to you at your comfort</p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>
        </div>
        <div class="row columns_margin_bottom_20">
            <div class="col-lg-4 col-sm-6">
                <article class="vertical-item content-padding with_border color2_border rounded">
                    <div class="item-media top_rounded overflow_hidden" id="img-susan">
                        <img src="/images/events/new/dill.jpeg" alt="dill-in-kenya">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="content-justify">
                            <div>
                                <h4 id="product-header">
                                    <a href="{{route('dill')}}">
                            Dill<br> 
                        </a>
                                </h4>
                                <p id="text-export"> Our dill is sourced from small scale farmers and provides it for the local and export market. We understand the importance of fresh, well-grown dill and that is why we can confidently promise fresh  dill from Kenya.</p>
                            </div>
                            <div>
                                <p class="price-big highlight text-right">
                    </p>
                            </div>
                        </header>
                     
                </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/apple5.jpeg" alt="kenya-fresh-apples">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('apples')}}">
                                    Apples<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">'An apple a day keeps the doctor away'.We exports fresh and healthy  apples worldwide.Our Apples are well selected and graded for best quality and customer satisfaction.Varieties include Custard apples </p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color3_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/new/oregano2.jpg" alt="kenya-seedless-watermellon">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('oregano')}}">
                                    Oregano<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">Oregano is a culinary and medicinal herb from the mint family.Kenya has the perfect conditions for growing oregano: a full sun as well as rich and well drained soils. Feel free to experiment with Kenya oregano.</p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color2_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/butternut5.jpeg" alt="kenya-butternut">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('butternut')}}">
                                         Butternut<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">Butternut is a vine like plant and most common among the winter–squash vegetables.Known for preventing asthma and body weight regulation due to its high fibre,we carefully select it for you and ship it to you at your convinience</p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                <article class="vertical-item content-padding with_border color_border rounded">
                    <div class="item-media top_rounded overflow_hidden" id="img-susan">
                        <img src="/images/events/beetroot3.jpg" alt="organic-kenya-beetroot">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="content-justify">
                            <div>
                                <h4 id="product-header">
                                    <a href="{{route('beetroot')}}">
                            Beetroot<br> 
                        </a>
                                </h4>
                                <p id="text-export">Kenyan beetroot is a hearty nutritious vegetative fruit with a healthy pink color at the fruit, root and stem with the leaves a clear green.We source Kenya beetroot from the best family growers and provide them to the local and export market</p>
                            </div>
                            <div>
                                <p class="price-big highlight text-right">
                    </p>
                            </div>
                        </header>
                     
                </article>
            </div>

            <div class="col-lg-4 col-sm-6">
                    <article class="vertical-item content-padding with_border color3_border rounded">
                            <div class="item-media top_rounded overflow_hidden" id="img-susan">
                                <img src="/images/events/new/broccoli5.jpg" alt="organic-kenya-broccoli">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="content-justify">
                                    <div>
                                        <h4 id="product-header">
                                            <a href="{{route('brocolli')}}">
                                    Brocolli<br> 
                                </a>
                                        </h4>
                                        <p id="text-export">Broccoli is nature’s super food .Long known for it’s unique texture and taste, broccoli is  widely recognized for its superior health and nutritional value.We happen to be Kenya’s proud exporter of Kenyan  broccoli! Hit us up for the best Broccoli  </p>
                                    </div>
                                    <div>
                                        <p class="price-big highlight text-right">
                            </p>
                                    </div>
                                </header>
                             
                        </article>
            </div>
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