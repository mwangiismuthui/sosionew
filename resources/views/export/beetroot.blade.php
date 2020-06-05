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
                    <li class="active">Beetroot</li>
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

                            <a href="/images/events/beetroot3.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/beetroot3.jpg" class="attachment-shop_single wp-post-image" alt="beetroot-varieties-in-kenya" >
                            </a>

                            <div class="cs main_color1 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Beetroot</span>
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


                        <h1 itemprop="name" class="product_title ">Beetroot</h1>


                        <div style="text-align:justify;">
                            <p>Kenya beetroot is a hearty nutritious vegetative fruit with a healthy pink color at the fruit, root and stem with the leaves a clear green. The tuber can also feature common colors including red, white or gold.</p>
                            <p>We source Kenya beetroot from the best family growers’ areas in the country. These areas have the weather and soil parameters that are conducive for proper development of the plant. The vegetable requires moderately cool climate with some moderate sun levels of around 18 to 25 degrees Celsius. It continues to thrive the whole year under a perpetual supply of water, usually in trenches with spacing between them being 30 centimeters. Each seedling, however, needs but 10 centimeters from the other, all in loamy or slightly sandy soil with average PH of 6.0.</p>
                            <p>The beetroot from Kenya is a highly nutritious plant and the following is a list of some of its healthy effects on an individual who consumes it as a fruit, cooked vegetable salad or processed juice, regularly</p>
                            <h5 style="text-align:center;">Our Varieties</h5>
                            <ol>
                                   
                                <li>  Bolt hardy </li>
                               <li>Detroit 6 Rubidus</li>
                               <li>Chioggia Pink</li>
                               <li>Cylindra</li>
                               <li> Burpee’s Golden</li>
                               
                               </ol> 
                                <h5 style="text-align:center;">Nutritional Value</h5>
                               <ol>
                                   <li>Lowers high blood pressure</li>
                                   
                                   <li>Combats Dementia:</li>
                                   <li>Fights diabetes:</li>
                                 
                                   <li>Improves athleticism:</li>
                                   
                                
                                  </ol>
                            <p>Whether in fresh fruit or juice form, we have it all. We serve the world with the best Kenya beetroot that we source in its freshest form from our dedicated family growers. Make your order today!</p>
                            <a href="{{route('order')}}" class="theme_button color1">
                                Order Beetroot Now
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
                                        <img src="/images/events/cabbage2.jpg" alt="fresh-cabbage-from-kenya"  style="height:227px !important;">
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
                                        <img src="/images/events/lemongrass5.jpg" alt="fresh-lemon-grass-kenya" style="height:227px !important;">
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
                                        <img src="/images/events/broccoli5.jpeg" alt="broccoli"  style="height:227px !important;">
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
                                        <img src="/images/events/butternut5.jpeg" alt="butternut" style="height:235px !important;">
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