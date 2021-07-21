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

                    {{--  <li> COMMENT OUT TO INCLUDE PRODUCTS PAGE
                        <a href="{{route('products')}}">Product</a>
                    </li>  --}}

                    <li class="active">Brocolli</li>
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

                            <a href="{{asset('images/events/new/broccoli5.jpg')}}" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="{{asset('images/events/new/broccoli5.jpg')}}" class="attachment-shop_single wp-post-image" alt="broccoli" title="" >
                            </a>

                            <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Broccoli</span>
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


                        <h1 itemprop="name" class="product_title ">Brocolli</h1>


                        <div style="text-align:justify;">
                            <p>Broccoli originated in Italy and has been enjoyed there since Roman times but is now grown and enjoyed around the world. While grown in many parts of the world, some of the best broccoli is grown in Kenya hence the popularity of Kenya broccoli. Kenya is uniquely suited for growing broccoli thanks to its near perfect environment for growing a wide variety of fruits and vegetables.</p>
                             <p> Moderately uniform cool temperatures are best for growth and quality of broccoli. Too much heat can prevent curd formation. Exposure to cool temperatures of less than 100C after planting results to bolting (premature formation of flowers) and this leads to formation of small heads called ‘buttons’. The optimum temperature range for curd formation is 13.9-200C. Above 200C, quality is reduced. Above 250C, curds may not form at all.As temperatures near freezing, injury occurs and there is no curd development. High temperature during curd development may result in loss of compactness and development of ricey curds.Suitable soils are those that are well-drained, friable and with high water-holding capacity. The best soil pH is 5.5–6.5.The crop requires constant water supply for good growth and yields.This conditions make Kenya the ideal place to grow the best brocolli Varieties</p>
                                <h5 style="text-align:center;">Our Varieties</h5>
                                <ol>

                                    <li>Green broccoli (Calabrese) </li>
                                   <li>Broccolini </li>
                                   <li>Broccoflower (Romanesco) </li>

                                   </ol>
                                    <h5 style="text-align:center;">Nutritional Value</h5>
                                   <ol>.
                                      .

                                       <li>Rich in calcium, potassium, Vitamin C and protein.</li>


                                       <li>Good source of dietary fibre, which facilitates good digestion</li>

                                       <li>  Maintains a healthy heart by reducing cholesterol</li>
                                       <li>  Keeps the skin young and glowing.</li>

                                       <li>   Rich in anti-oxidants.</li>


                                      </ol>
                                      <a href="{{route('order')}}" class="theme_button color3">
                                        Order Brocolli Now
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
                                    <a href="{{route('cabbage')}}">
                                        <img src=" {{asset('images/events/new/cabbage.jpg')}}" alt="cabbage"  style="height:227px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Cabbages</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('lemon_grass')}}">
                                        <img src="{{asset('images/events/new/lemonGrass.jpg')}}" alt="lemon-grass-hd" style="height:227px !important;">
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
                                        <img src="{{asset('images/events/new/broccoli5.jpg')}}" alt="broccoli"  style="height:227px !important;">
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
                                    <a href="{{route('butternut')}}">
                                        <img src="{{asset('images/events/new/butternut.jpg')}}" alt="butternut" style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Butternut</span>
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
