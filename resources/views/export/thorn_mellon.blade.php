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
                    <li class="active">Thorn Mellon</li>
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

                            <a href="/images/events/thornmellon5.jpeg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/thornmellon5.jpeg" class="attachment-shop_single wp-post-image" alt="thorn-mellon-kenya" title="" >
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Thorn Mellon</span>
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


                        <h1 itemprop="name" class="product_title ">Thorn Mellon</h1>


                        <div style="text-align:justify;">
                            <p>Nothing compares to Kenya thorn melon (Kiwano), with its golden or yellow-orange fruit shell straight from the sun.  Its succulent flesh is green and translucent, consisting of a world of seeds. Owing to its distinctive horn-like spikes, the fruit augers well with the name of thorn melon. The scientific term for it is Cucumis metuliferus.  There is a plethora of fitting names, some slang for the thorn melon, including Bitter wild cucumber, hedged gourd, African cucumber, Kiwano melon, English tomato, spiked pears, horned melon and melano.</p>
                            <p>Locally, we endow Kenya thorn melon with such terms as passion mwitu,  passion lenye tete maji  or parachichi mwitu.</p>
                            <h5 style="text-algin:cnter;">Nutritional Value</h5>
                            <ol>
                                <li>Prevention of cancer and heart complications</li>
                                <li>Skin and eye health </li>
                                <li>Aiding in Stress & anxiety managment</li>
                            </ol>
                        </div>
                        <a href="{{route('order')}}" class="theme_button color2">
                            Order Thorn Mellon Now
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
                                    <a href="{{route('passion_fruit')}}">
                                        <img src="/images/events/new/passion4.jpg" alt="passion-fruit-exporters-in-kenya" style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Passion Fruit</span>
                                            </span>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>

                                

                            </div>

                            <div class="vertical-item product text-center">

                                    <div class="item-media muted_background rounded overflow_hidden" id="">
                                        <a href="{{route('dill')}}">
                                            <img src="/images/events/new/dill.jpeg" alt="dill-exporters-in-kenya" style="height:200px !important;">
                                        </a>
    
                                        <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                            <div class="price weight-black fontsize_30">
                                                <span>
                                                    <span class="amount">Dill</span>
                                                </span>
                                            </div>
                                            <div>
                                               
                                            </div>
                                        </div>
                                    </div>
    
    
                                </div>
    
    
    
    
    
     <div class="vertical-item product text-center">
    
                                    <div class="item-media muted_background rounded overflow_hidden" id="">
                                        <a href="{{route('herbs')}}">
                                            <img src="/images/events/new/sage.jpeg" style="height:200px !important;" alt="sage-exporters-in-kenya">
                                        </a>
    
                                        <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                            <div class="price weight-black fontsize_30">
                                                <span>
                                                    <span class="amount">Sage</span>
                                                </span>
                                            </div>
                                            <div>
                                                
                                            </div>
                                        </div>
                                    </div>
    
                              
                                </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('straw_berries')}}">
                                        <img src="/images/events/strawberry6.jpg" alt="strawberry-exporters-in-kenya" style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Straw Berries</span>
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