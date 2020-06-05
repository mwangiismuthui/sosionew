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
                    <li class="active">Kenya Custard Apple</li>
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

                            <a href="/images/events/apple5.jpeg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/apple5.jpeg" class="attachment-shop_single wp-post-image" alt="sweet-kenyan-apple" title="" >
                            </a>

                            <div class="cs main_color entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Apples</span>
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


                        <h1 itemprop="name" class="product_title ">Kenya Custard Apple</h1>


                        <div style="text-align:justify;">
                            <p>Kenya custard apple emanates from the Annona family with origins in Central America. Its scientific name is annona reticulate and its local etymology is matomoko, a bunchy fruit consisting of several overlapping cone-like berries in every pistil. The fruit derives its popular appeal from its sweet, soft whitish creamy flesh.</p>
                            <h5>Nutritional Value:</h5>
                            <ol>
                              <li>Contain vitamin A which keeps your skin and hair healthy</li>
                              <li>Custard apples prevent expectant women from premature labour.</li>
                              <li>Helps in weight loss because it`s low in fats and cholesterol free.</li>
                              <li>Helps in building a good digestive system</li>
                              <li>Remedy for Diarrheaand Dysentery</li>
                            </ol>
                            <p>Every day is a holiday with fruits of any variety including custard apples. Come one; come all for Kenya custard apples, straight from family growers. </p>
                            <a href="{{route('order')}}" class="theme_button color1">
                                Order Apples Now
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
                                    <a href="{{route('thorn_mellon')}}">
                                        <img src="/images/events/thornmellon5.jpeg" alt="thron-mellon-varieties-in-kenya">
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
                                        <a href="{{route('herbs')}}">
                                            <img src="/images/events/new/sage.jpeg" style="height:200px !important;" alt="kenya-sage">
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
                                            <a href="{{route('dill')}}">
                                                <img src="/images/events/new/dill.jpeg" alt="kenyan-dill" style="height:200px !important;">
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
                                        <img src="/images/events/strawberry6.jpg" alt="stawberry-varieties-in-kenya">
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