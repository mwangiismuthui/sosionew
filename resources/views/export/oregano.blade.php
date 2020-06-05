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
                    <li class="active">Oregano</li>
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

                            <a href="" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/new/oregano.jpeg" class="attachment-shop_single wp-post-image" alt="kenya-oregano" title="" >
                            </a>

                            <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Oregano</span>
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


                        <h1 itemprop="name" class="product_title ">Oregano</h1>


                        <div style="text-align:justify;">
                            <p>Oregano is a culinary and medicinal herb from the mint family. The name comes from the Greek name meaning ‘joy of the mountain’. They have a unique and pleasant smell due to the presences of thymol which is a strong antiseptic property,pinene, limonene,ocimene and caryophyllen</p>
                           <p> Sosio exporters have the best oregano which is best used in omelettes, pizzas and pasta sauces. It can also be used for sprinkling meat or chicken, marinating or adding it fresh to salads giving it a very distinctive taste. Oregano is mostly added towards the end of cooking process for maximum flavor. The smaller you grind or chop the more flavor is released.
                            </p>
                          
                            <h5>Nutritional Value:</h5>
                            <ol>
                                <li>Treating infections, heart conditions, headache, muscle pains and menstrual cramps.</li>
                                <li> Rich source of dietary antioxidants which help promote cells against the effects of free radicals and improve the body’s ability to fight infections.</li>
                                <li>Protect against breast cancer by slowing or preventing its progression.</li>
                                <li>Oregano contains iron, calcium, magnesium, vitamins A, C and K which is important for helping your blood to clot.</li>
                            </ol>
                            <p>Kenya has the perfect conditions for growing oregano: a full sun as well as rich and well drained soils. Feel free to experiment with Kenya oregan.</p>
                            <p>At a fair price, we are glad to deliver it to your destination on time</p>

                        </div>

                        <a href="{{route('order')}}" class="theme_button color3">
                            Order Oregano Now
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
                                    <a href="{{route('thorn_mellon')}}">
                                        <img src="/images/events/thornmellon5.jpeg" alt="kenya-thornmellon">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Thorn Melon</span>
                                            </span>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>

                                

                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('oregano')}}">
                                        <img src="/images/events/new/oregano.jpeg" style="height:200px !important;" alt="oregano-exporters-in-kenya">
                                    </a>

                                    <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Oregano</span>
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
                                    <a href="{{route('straw_berries')}}">
                                        <img src="/images/events/strawberry6.jpg" alt="kenya-strawberry">
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