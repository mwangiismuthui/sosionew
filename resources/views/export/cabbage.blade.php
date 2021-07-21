@extends('layout.main')
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="{{route('index')}}">
                Home
            </a>
                    </li>
                    {{--  <li>
                        <a href="{{route('products')}}">Product</a>
                    </li>  --}}
                    <li class="active">Cabbage</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">


                <div itemscope="" itemtype="" class="product type-product row columns_padding_25">

                    <div class="col-sm-6">
                        <div class="item-media images muted_background text-center rounded overflow_hidden" >

                            <a href=" {{asset('images/events/new/cabbage.jpg')}}" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="{{asset('images/events/new/cabbage.jpg')}}" class="attachment-shop_single wp-post-image" alt="cabbage-grown-in-kenya" title="" >
                            </a>

                            <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Cabbage</span>
                                    </span>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <!--eof .images -->

                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title ">Cabbage</h1>


                        <div style="text-align:justify;">
                            <p>Kenya cabbage (botanical name Brassica Oleracea) constitutes one of the most common family of vegetables in terms of daily use in the country and the world. They consist of multiple overlapping foliages in a light green color that in some species like broccoli, can turn purple. The leafy crop is a basic cure, in its elementary cooked form, of multiple diseases ranging from digestion problems like constipation to bone disorders like rheumatism if partaken as part of the diet regularly.</p>
                            <p>A typical growth schedule for Kenya cabbage that we derive from family growers constitutes a month-long nursery propagation of seeds. The best depth to implant the seeds is about half an inch deep. This will provide 15-centimeter high seedlings that are ready to transplant on deep rows that observe water per few heads to the maximum. Farmers sometimes have to flood the whole row while taking care not to overrun banks during the hot season.</p>
                            <p>Harvesting of Kenya cabbage follows stringent international measures to ensure they reach the market in the right condition. </p>
                            <p>We are the best source of this vegetable, sourced from committed family growers in Kenya.</p>
                            <h5 style="text-align:center;">Our Varieties</h5>
                            <ol>
                               <li>Gloria F1</li>
                               <li>Pruktor F1</li>
                               <li>Riana F1</li>
                               <li>Queen F1</li>
                               <li>Serena F1</li>
                               </ol>
                                 <h5 style="text-align:center;">Nutritional Value</h5>
                               <ol>
                                   <li> Vitamin C, also known as ascorbic acid, is a water-soluble vitamin that serves many important roles in the body.</li>
                                 <li>Good source of dietary fibre, which facilitates good digestion</li>
                                   <li>Helps in Keeping Your Heart Healthy</li>
                                <li>  Lower Blood Pressure</li>
                                  </ol>
                                  <a href="{{route('order')}}" class="theme_button color3">
                                    Order Cabbage Now
                                  </a>
                        </div>





                    </div>
                    <!-- .summary.col- -->

                </div>
                <!-- .product.row -->



                <div class="row topmargin_50">
                    <div class="col-sm-12">
                        <h3 class="text-center">Related products</h3>

                        <div class="owl-carousel topmargin_30" data-dots="false" data-loop="true" data-autoplay="true" data-responsive-lg="3">

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('carrots')}}">
                                        <img src=" {{asset('images/events/new/carrot.jpg')}}" alt="carrots-grown-in-kenya">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Carrots</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="s{{route('lemon_grass')}}">
                                        <img src=" {{asset('images/events/new/lemonGrass.jpg')}}" alt="lemon-grass">
                                    </a>

                                    <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Lemon Grass</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="vertical-item product text-center">
                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('brocolli')}}">
                                        <img src="{{asset('images/events/new/broccoli5.jpg')}}" alt="broccoli" style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color4 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Brocolli</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('beetroot')}}">
                                        <img src="{{asset('images/events/new/beetroot.jpg')}}" alt="beetroot" style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Beetroot</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>

@endsection
