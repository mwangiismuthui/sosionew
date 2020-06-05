
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
                    <li class="active">Curry Leaves</li>
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

                            <a href="/images/events/curry5.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/curry5.jpg" class="attachment-shop_single wp-post-image" alt="kenyan-curry-leaves" title="" >
                            </a>

                            <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Curry Leaves</span>
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


                        <h1 itemprop="name" class="product_title ">Curry Leaves</h1>


                        <div style="text-align:justify;">
                            <p>The Kenya curry leaves are popular across various types of cuisines around the world where they are used as flavouring agents.The Kenya curry leaves certainly contain powerful antioxidant properties alongside the ability to control gastrointestinal challenges including indigestion, dysentery, ulcers and diabetes among others. The common nutrients present in curry leaves include fiber, calcium, phosphorous, magnesium, iron, and copper among other useful minerals.</p>
                            <h5 style="text-align:center;">Nutritional Value</h5>
                            <ol>
                                <li>Anti-diarrhea</li>
                                <li>Anti-cancer</li>
                                <li>Hair growth</li>
                                <li>Strong eyesight</li>
                                <li>Antioxidation</li>
                                <li>Prevent fungal and bacterial infections.</li>
                            </ol>
                            <p>Are you an importer, local retailer, or distributor interested in our carefully chosen Kenya curry leaves? Place Your Order and a representative will talk to you immediately.</p>
                        </div>

                 
                        <a href="{{route('order')}}" class="theme_button color3">
                            Order Curry Leaves Now
                          </a>
                       

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
                                        <img src="/images/events/carrot1.jpg" alt="fresh-kenyan-baby-carrots">
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
                                    <a href="{{route('lemon_grass')}}">
                                        <img src="/images/events/lemongrass5.jpg" alt="kenyan-lemon-grass">
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
                                        <img src="/images/events/broccoli5.jpeg" alt="organic-kenyan-brocolli" style="height:235px !important;">
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
                                        <img src="/images/events/beetroot3.jpg" alt="juicy-kenyan-beetroot" style="height:235px !important;">
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