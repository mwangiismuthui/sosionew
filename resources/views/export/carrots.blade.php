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
                    <li>
                        <a href="{{route('products')}}">Product</a>
                    </li>
                    <li class="active">Carrots</li>
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

                            <a href="/images/events/carrot2.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/carrot2.jpg" class="attachment-shop_single wp-post-image" alt="kenya-baby-carrots" title="" >
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Nantes Carrots</span>
                                    </span>
                                </div>
                                <div>
                                  
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="item-media images muted_background text-center rounded overflow_hidden" >

                            <a href="/images/events/koruda.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/koruda.jpg" class="attachment-shop_single wp-post-image" alt="Koruda-in kenya" title="" >
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Super Kuroda</span>
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


                        <h1 itemprop="name" class="product_title ">Carrots</h1>


                        <div>
                            <p>Sosio exporters is the home for juicy fresh Kenyan  carrots . We pride ourselves in growing and exporting to the world the very best Kenyan carrots anywhere, nourished by the red volcanic soils of the Kenya and enriched by the African sun.
                             <p> Sosio exporters, strive’s everyday to ensure we deliver the freshest and highest quality Kenyan  carrots. Delivering to most destinations across the world, we are well placed to get our products to you wherever you may be. Go ahead then and contact us and we will be more than happy to deliver to you fresh and the number one quality  carrots</p>

                            </p>
                            <h5>Our varieties</h5>
                            <ol>
                                <li>
                                    Nantes
                                </li>
                                <p>The Nantes is a long, straight and very tasty carrot that is cylindrical and has a round tip.</p>
                                <li>Super Kuroda</li>
                                <p>Super Kuroda has a straight teppered shape leading to a point.</p>
                            </ol>
                            <h5>Nutritional value</h5>
                            <ol>
                                <li>Source of beta carotene, a precursor to Vitamin A</li>
                               
                                <li> Contain Vitamin C, Vitamin K, </li>
                                <li>Rich in iron and calcium pectate, which has been found to contain cholesterol reducing properties.</li>
                                <li>High source of Fiber</li>
                            </ol>
                            <p>We grow and export the two types of Kenyan  carrots in the best and professional manner to guarantee freshness. Kenyan  carrots are the very best in the world.</p>

                            <a href="{{route('order')}}" class="theme_button color3">
                                Order Carrots Now
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

                                <div class="item-media muted_background rounded overflow_hidden">
                                    <a href="{{route('cabbage')}}">
                                        <img src="/images/events/cabbage2.jpg" alt="Fresh-kenyan-cabbages" style="height:235px !important;">
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

                                <div class="item-media muted_background rounded overflow_hidden">
                                    <a href="{{route('lemon_grass')}}">
                                        <img src="/images/events/lemongrass5.jpg" alt="Kenyan-lemon-grass" style="height:235px !important;">
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
                                <div class="item-media muted_background rounded overflow_hidden" >
                                    <a href="{{route('brocolli')}}">
                                        <img src="/images/events/broccoli5.jpeg" alt="fresh-kenyan-brocolli" style="height:235px !important;">
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

                                <div class="item-media muted_background rounded overflow_hidden" >
                                    <a href="{{route('beetroot')}}">
                                        <img src="/images/events/beetroot3.jpg" alt="organic-kenyan-beetroot" style="height:235px !important;">
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