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
                    <li class="active">Pears</li>
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

                            <a href="/images/events/pear2.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/pear2.jpg" class="attachment-shop_single wp-post-image" alt="kenya-pears" title="" >
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Pears</span>
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


                        <h1 itemprop="name" class="product_title ">Pears</h1>


                        <div style="text-align:justify;">
                            <p>Pears are a mild, sweet fruit with a fibrous center.They are delicious fruits that can be grown in a wide range of soils especially cold areas. Kenya Pears are some of the most abundant fruits in Kenya and indeed the second most essential fruit in the whole of the tropics. In the year 2004, the Food and Agricultural Association (FAO), an arm of the United Nations confirmed 19.2 tons worth of shipments of the fruit across the globe.</p>
                            
                            <h5 style="text-align:center;">Nutritional Value:</h5>
                            <ol>
                                <li>Fiber development which helps in digestion.</li>
                                <li>Energy giving components with 102 calories</li>
                                <li>It is also a natural antioxidant that fights against toxins in the body against tumorous growths</li>
                            </ol>
                            <p>We are always on the go sourcing the freshest Kenya pears from family growers. Whenever you need the best, we’ll be there to deliver!</p>
                        </div>
                        <a href="{{route('order')}}" class="theme_button color2">
                            Order Pears Now
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
                                        <img src="/images/events/thornmellon5.jpeg" alt="kenya-seedless-thornmellon">
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
                                        <a href="{{route('herbs')}}">
                                            <img src="/images/events/new/sage.jpeg" style="height:200px !important;" alt="kenyan-frsh-herbs">
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
                                        <a href="{{route('marjoram')}}">
                                            <img src="/images/events/new/marjoram.jpeg" alt="marjoram-expoerters-in-kenya" style="height:200px !important;">
                                        </a>
    
                                        <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                            <div class="price weight-black fontsize_30">
                                                <span>
                                                    <span class="amount">Marjoram</span>
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