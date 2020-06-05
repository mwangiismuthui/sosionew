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
                    <li class="active">Straw Berries</li>
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

                            <a href="/images/events/strawberry6.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/strawberry6.jpg" class="attachment-shop_single wp-post-image" alt="strawberry-in-kenya" title="" >
                            </a>

                            <div class="cs main_color1 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Strawberries</span>
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


                        <h1 itemprop="name" class="product_title ">Straw Berries</h1>


                        <div>
                            <p>A medicinal plant popular with the Romans in the medieval age, strawberry came to the royal households of Europe (especially France) in mid-to-late 1300s, and would not become a widespread garden plant until the 1500s. Before that, and now in some cases in the tropics, the plant  was, and still is,  accessible widely in the wild.</p>
                            <p>As an originally jungle fruit, strawberries are abundant but it takes special husbandry to nurture the high-quality, bright red, variety with big fruit, and that is exactly where the Kenya strawberry comes in courtesy of us.</p>
                            <p>Our Kenya strawberries are hygienically handled, with meticulous grading to ensure you only get the highest quality strawberries from Kenya. They are well preserved to keep them fresh. They are packed in properly ventilated containers after pre-cooling them so as to ensure that they have a prolonged shelf life</p>
                            <h5 style="text-align:center;">Our Varieties</h5>
                            <ol>
                               
                               <li>Chandler</li> 
                               <li>pajaro Douglas</li>
                               <li>Tioga selva</li> 
                               <li>Rabunda</li> 
                               <li>Tri-Star</li> 
                               <li>Tribute</li>
                               </ol> 
                                 <h5 style="text-align:center;">Nutritional Value</h5>
                               <ol>
                                   <li> Reduce the harmful oxidation of LDL (bad) cholesterol</li> 
                                 <li>Good source of dietary fibre, which facilitates good digestion</li>
                                   <li>Helps in Keeping Your Heart Healthy</li>
                                <li> Improve your blood lipid profile</li>
                                <li>Decrease oxidative stress</li>
                                  </ol>
                                  <a href="{{route('order')}}" class="theme_button color1">
                                    Order Strawberries Now
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
                                        <img src="/images/events/thornmellon5.jpeg" alt="thorn-mellon-exporters-in-kenya">
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