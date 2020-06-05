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
                    <li class="active">Butternut</li>
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

                            <a href="/images/events/butternut5.jpeg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/butternut5.jpeg" class="attachment-shop_single wp-post-image" alt="sweet-kenyan-butternut" title="" >
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
                        <!--eof .images -->
                   
                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title ">Butternut</h1>


                        <div style="text-align:justify;">
                            <p>Kenya Butternut is a vine like plant belonging to the cucurbitaceace family and most common among the winter –squash vegetables. The fruit is normally yellow skin, large fruit with an upper long, thick neck attached to a pear like bottom weighing up to 15kgs.its pulp Is orange In colour with a hole filled with seeds inside the fruit. </p>
                            <h5 style="text-align:center;">Our Varieties</h5>
                            <ol>
                                <li>Burpee`s butter bush</li>
                                <p>This variety is ready in 75days, with pale orange fruits, deep orange flesh, sweet flavor and buttery texture.</p>
                                <li>Waltham butternut</li>
                                <p>It is the most common type. Are pale yellow with sweet orange flesh. It matures in 85days, stores very well and good for traditional gardens.</p>
                                <li>Butter boy hybrid</li>
                                <p>Its fruits are light orange in colour and is ready in 80 days from the planting time.</p>
                            </ol>
                            <h5 style="text-align:center;">Nutritional Value</h5>
                            <ol>
                                <li>Healthy looking skin and hair-butternut is also great for your skin because of its extremely high in vitamin A</li>
                                <li>Managing diabetes-butternut is high in fiber and low in sugar levels making it a perfect meal for diabetic individuals.</li>
                                <li>Low calories and fiber for losing weight-butternut is one of the healthiest vegetables for weight loss because of its low calorie content and high level of dietary fiber.</li>
                             
                               </ol>
                            <h5 style="text-align:center;">Uses of Butternut</h5>
                            <ol>
                                <li>Roasted and tossed butternut squash seeds can be used as snacks</li>
                                <li>Added in preparations of pies, pancakes, and bread</li>
                                <li>Fresh raw butternut cubes can be added to vegetable salads.</li>
                             <li>Made into soups especially for infant , children and even adults</li>
                               </ol>
                               <a href="{{route('order')}}" class="theme_button color2">
                                Order Butternut Now
                              </a>
                        </div>

                        <div class="row product_meta small-text medium greylinks">
                     

                       

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
                                        <img src="/images/events/cabbage2.jpg" alt="healthy-kenyan-cabbage">
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
                                        <img src="/images/events/lemongrass5.jpg" alt="organic-kenyan-lemon-grass" style="height:235px !important;">
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
                                        <img src="/images/events/broccoli5.jpeg" alt="organic-kenyan-broccoli">
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
                                        <img src="/images/events/beetroot3.jpg" alt="fresh-kenyan-beetroot" style="height:235px !important;">
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