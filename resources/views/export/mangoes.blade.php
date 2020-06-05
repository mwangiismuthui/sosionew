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
                    <li class="active">Mangoes</li>
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

                            <a href="/images/events/apple.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/apple.jpg" class="attachment-shop_single wp-post-image" alt="kenyan-apples" title="" id="prodducts-image">
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Apple Mango </span>
                                    </span>
                                </div>
                                <div>
                                   
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="item-media images muted_background text-center rounded overflow_hidden" >

                            <a href="/images/events/new/kent.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/new/kent.jpg" class="attachment-shop_single wp-post-image" alt="kent-mangoes-kenya" title="" id="prodducts-image">
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Kent Mangoes</span>
                                    </span>
                                </div>
                                <div>
                                   
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="item-media images muted_background text-center rounded overflow_hidden" >

                            <a href="/images/events/ngowe.png" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/ngowe.png" class="attachment-shop_single wp-post-image" alt="ngowe-mangoes-kenya" title="" id="prodducts-image">
                            </a>

                            <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Ngowe Mangoes</span>
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


                        <h1 itemprop="name" class="product_title "> Mangoes</h1>


                        <div style="text-align:justify;">
                            <p>Kenya mangos stand tall among the best mangos in the world, making Kenya a key source of juicy and healthy mangos to the world’s leading mango markets. For many years, this ripe yellow succulent fruit with a pleasant flavor and good fragrance continue to be part of the daily diet for many people across the globe.Did you know that mangos are the most consumed fruits in the world?.</p>
                            <p>The mango fruit belongs to the genus ‘mangnifera’ and the family of drupes- these are fruits whose seeds are surrounded by organic shells. Other plants that belong to this family are; dates, olives, and coconuts.</p>
                            <p>The warm climatic conditions temperatures of 24–27°C (75.2–80.6°F) in Eastern and coastal areas of Kenya make it the ideal place for growing the best variety of mangoes.They also provide for well drained sand, gravel and limestone soils. The optimum soil pH is between 5.5 and 7.5</p>
                
                      
                            <h5 style="text-align:center;">Our Varieties</h5>
                        <ol>
                            <li>Apple Mangos</li>
                            <p>Rich yellow/orange colour when ripe, round shaped fruits that are medium to large in size. Smooth texture, no fibres. Very sweet!</p>
                            <li>Ngowe mangos</li>
                            <p>The most common of the local Kenya mango varieties.</p>
                            <li>Kent mangos</li>
                            <p> A large greenish yellow fruit with red or crimson blush on the shoulder. Its flesh is juicy, melting deep yellow, with rich flavor</p>
                            <li>Tommy Atkins mangos</li>
                            <p>A hard mango, reddish when ripe and equally delicious.</p>
                            <p>Our mangos are grown in the best of conditions, handled carefully during harvest and packed in the best hygienic conditions befitting the global market for mangos from Kenya.</p>
                        </ol>
                           
                        <h5 style="text-align:center;">Nutritional Value</h5>
                        <ol>
                            <li>Rich in Fiber</li>
                            <p>Assisting during the digestion process and particularly preventing constipation.</p>
                            <li> Contains polyphenolic antioxidant</li>
                            <p>Prevent leukemia, breast cancer, prostate cancer and colon cancer. </p>
                            <li>Rich in Copper</li>
                            <p>  These are important in enhancing the functioning of red blood cells, the cells that carry oxygen around the body.</p>
                            <li>Rich in Vitamin A and E</li>
                            <p>Help abundantly in maintaining a good eye vision, as well as vitamin E which regulates the sex hormones</p>
                        </ol>
                        <a href="{{route('order')}}" class="theme_button color2">
                          Order Mangoes Now
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

                                <div class="item-media muted_background rounded overflow_hidden" ">
                                    <a href="{{route('apples')}}">
                                        <img src="/images/events/apple5.jpeg" alt="kenyan-apples">
                                    </a>

                                    <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Apples</span>
                                            </span>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>

                          
                            </div>

                            <div class="vertical-item product text-center">
                                <div class="item-media muted_background rounded overflow_hidden">
                                    <a href="{{route('pears')}}">
                                        <img src="/images/events/pear2.jpg" alt="kenyan-pears">
                                    </a>

                                    <div class="cs main_color4 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Pears</span>
                                            </span>
                                        </div>
                                        <div>
                                          
                                        </div>
                                    </div>
                                </div>

                            

                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" >
                                    <a href="{{route('straw_berries')}}">
                                        <img src="/images/events/strawberry6.jpg" alt="sweet-kenya-strawberries">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Stawberries</span>
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