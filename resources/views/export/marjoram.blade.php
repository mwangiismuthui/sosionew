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
                    <li class="active">Marjoram</li>
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
                        <div class="item-media images muted_background text-center rounded overflow_hidden" id="">

                            <a href="/images/events/new/marjoram.jpeg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/new/marjoram.jpeg" class="attachment-shop_single wp-post-image" alt="marjoram-exporters-in-kenya" title="" >
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
                        <!--eof .images -->
                   
                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title ">Marjoram</h1>


                        <div style="text-align:justify;">
                            <p> Marjoram is also known as sweet marjoram. It’s an aromatic herb in the mint family which originated from Egypt and Arabia. It has a milder flavor and is often used to garnish salads, soups and meat dishes. It can also be used as an herbal medicine and contains several compounds that may offer health benefits..</p>
                            <p>We are here to fulfill the increasing demand for Kenyan marjoram herbs, ready to source them for you from the fertile farms from our farmers.  You can count on us for a reliable supply of marjoram from Kenya.</p>
                          
                                 <h5 style="text-align:center;">Nutritional Value</h5>
                               <ol>
                                   <li>High levels of vitamin c which is one of the powerful natural anti-oxidant to help remove harmful free radical from the body.</li> 
                                 <li>Contains exceptionally high levels of beta-carotene.</li>
                                   <li>Sweet marjoram tea helps relieve nausea.</li>
                                <li>Gives a pleasant aromatic flavor to vegetables such as spinach, beans cauliflower and potato.</li>
                                  </ol>
                                  <p>Kenyan has the perfect conditions for growing marjoram, the full sun and well drained soils keeps its quality at top.</p>
                                  <p>You are assured of exceptional service, plus the highest quality of fresh marjoram at fair prices.</p>
                                  <a href="{{route('order')}}" class="theme_button color3">
                                    Order Marjoram Now
                                  </a>
                        </div>

                    
                       

                    </div>
                    <!-- .summary.col- -->

                </div>
                
    
                    </div>
               
                <div class="row topmargin_50">
                    <div class="col-sm-12">
                        <h3 class="text-center">Related products</h3>

                        <div class="owl-carousel topmargin_30" data-dots="false" data-loop="true" data-autoplay="true" data-responsive-lg="3">

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('mangoes')}}">
                                        <img src="/images/events/kent.jpg" alt="sweet-apple-mango" 
                                        style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Mangoes</span>
                                            </span>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>

                                

                            </div>

                            <div class="vertical-item product text-center">

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('apples')}}">
                                        <img src="/images/events/apple5.jpeg" alt="apples" 
                                        style="height:235px !important;">
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
                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('pears')}}">
                                        <img src="/images/events/pears6.jpg" alt="fresh-pears-kenya" 
                                        style="height:235px !important;">
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

                                <div class="item-media muted_background rounded overflow_hidden" id="">
                                    <a href="{{route('passion_fruit')}}">
                                        <img src="/images/events/new/passion4.jpg" alt="sweet-passion-fruit-kenya" 
                                        style="height:235px !important;">
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


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>

@endsection