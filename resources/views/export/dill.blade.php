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
                    <li class="active">Dill</li>
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

                            <a href="/images/events/new/dill.jpeg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/new/dill.jpeg" class="attachment-shop_single wp-post-image" alt="kenyan-dill" title="" >
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
                        <!--eof .images -->
                   
                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title ">Dill</h1>


                        <div style="text-align:justify;">
                            <p>Dill is an aromatic herb of the celery family. It’s also known as lao coriander. Dill is a great addition to many home cooked meals. The feathery green is often added to salads or soups or even used as a garnish. its commonly used raw for full flavor</p>
                            <p>Kenyan dill is highly appreciated worldwide, largely because of its strong qualities which preserve the freshness until it reaches the market. In Kenya, dill is grown throughout the year, since its key requirements – soil, water, sun and the skills to harvest it-are all abundantly available in the country.</p>
                            
                            <h5>Nutritional value:</h5>
                            <ol>
                                <li>Excellent source of proteins, carbohydrates, phosphorous, iron, magnesium sodium and potassium.</li>
                               <li>Contain riboflavin which helps for cell function, niacin thiamin, vitamin B6 and pantothenic acid which is necessary for making blood cells and convert the food you eat into energy</li>
                                <li>Used in treating infectious disease, cough, fever and kidney disease. It also helps in reducing cholesterol levels in the body and regulates blood pressure</li>
                            </ol>
                            <p>Sosio exporters observe strict quality standards for the growing, harvesting, and supply of dill from Kenya. We source fresh dill from local farmers.</p>
                        </div>
                        <a href="{{route('order')}}" class="theme_button color3">
                            Order Dill Now
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
                                        <img src="/images/events/thornmellon5.jpeg" alt="kenyan-thorn-mellon">
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
                                        <img src="/images/events/new/sage.jpeg" style="height:200px !important;" alt="kenyan-sage">
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
                                        <img src="/images/events/strawberry6.jpg" alt="kenyan-strawberry">
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