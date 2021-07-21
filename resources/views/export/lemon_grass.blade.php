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
                    <li class="active">Lemon Grass</li>
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

                            <a href="{{asset('images/events/new/lemonGrass.jpg')}}" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src=" {{asset('images/events/new/lemonGrass.jpg')}}" class="attachment-shop_single wp-post-image" alt="kenyan-lemon-grass" title="" >
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
                        <!--eof .images -->

                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title ">Lemon Grass</h1>


                        <div style="text-align:justify;">
                            <p>Full of flavor and aromatic just as you would imagine it, that is the Kenyan Lemon grass for you. It is scientifically referred to as Cymbopogon, popular for both medicinal and culinary purposes. Its main component is citral which produces its unique lemon scent.</p>
                            <p>It is amazing that the Kenya lemon grass contains 99 calories for every 100 grams, yet it does not have any cholesterol. Only the white part of the lemon grass stock is eaten, pounded, crashed or sliced to release the flavor.</p>
                            <h5 style="text-align:center;">Our Varieties</h5>
                            <ol>
                                <li>Citronella</li>
                                <li>Java citronella</li>
                                <li> East Indies </li>
                            </ol>
                            <h5 style="text-align:center;">Nutritional Value</h5>
                            <ol>
                                <li>Regulates high blood pressure</li>
                                <li>Fights Yeast infection in the mouth </li>
                                <li>Fights common cold </li>
                                <li>Prevents exhaustion  </li>
                            </ol>
                            <p>We ensure that our Kenya lemon grass is delivered while maintaining the stem and leaves fresh with that desirable lemon flavor with a rose fragrance. It is harvested and picked by hand to ensure and preserve its quality.</p>
                            <a href="{{route('order')}}" class="theme_button color3">
                                Order Lemon grass Now
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
                                        <img src="{{asset('images/events/new/carrot.jpg')}}" alt="Kenyan-baby-carrots" style="height:235px !important;">
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
                                    <a href="{{route('cabbage')}}">
                                        <img src=" {{asset('images/events/new/cabbage.jpg')}}" alt="Fresh-Kenyan-Cabbages" style="height:235px !important;">
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


                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('beetroot')}}">
                                        <img src="{{asset('images/events/new/beetroot.jpg')}}" alt="fresh-kenyan-beetroot" style="height:235px !important;">
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
