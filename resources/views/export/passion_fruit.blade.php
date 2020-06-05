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
                    <li class="active">Passion Fruit</li>
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

                            <a href="/images/events/new/passion4.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/new/passion4.jpg" class="attachment-shop_single wp-post-image" alt="kenya-passion-fruit" title="" >
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
                        <!--eof .images -->
                   
                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title ">Passion Fruit</h1>


                        <div style="text-align:justify;">
                            <p>The passion fruit has an eclectic mix of uses, mostly savory, not limited to fresh juice, cocktails, and dessert topping. Alternatively, you can sieve the pulp and mix it with avocado and milk to  brew a nutritious juice for the whole family.</p>
                            <p>The climate of the Rift Valley geological demarcation, which is tropical and partly temperate, is the secret to the high yields of Kenya passion. Choosing Kenyan passion fruit is an easy choice, and because we offers good quality, your quality needs are easily won.</p>
                            <p>We are happy to supply high quality Kenya passion fruits, grown and maintained by the ever dedicated family farmers from whom we source. Order yours today!</p>
                        </div>
                        <h5 style="text-align:center;">Our Varieties</h5>
                            <ol>
                               <li> Passiflora edulis–</li>
                                  <p>  This is purple in colour when ripe, quite acidic, and tasty and juiciness varies. It has a strong aromatic scent and is round in shape. This variety is suited to the subtropical regions.</p>
                                  <li>   Passiflora flavicarpa</li>
                                  <p>It is yellow when ripe, oval in shape and less aromatic. This variety is adapted to the tropics, thus does very well in Kenya.</p>
                           
                               </ol> 
                               <h5 style="text-align:center;">Nutritional Values</h5>
                            <ol>
                               
                               <li>Rich in antioxidants</li> 
                               <li>Boosts the immune system</li>
                             
                               <li> Good source of fiber</li> 
                               <li>Low glycemic index</li> 
                               <li>Improve insulin sensitivity</li>
                               </ol> 

                       
                               <a href="{{route('order')}}" class="theme_button color2">
                                Order Passion fruit Now
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
                                        <img src="/images/events/thornmellon5.jpeg" alt=" kenyan-thorn-mellon">
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
                                    <a href="{{route('rosemary')}}">
                                        <img src="/images/events/new/rosemary2.jpg" alt="bananas-in-kenya" style="height:200px !important;">
                                    </a>

                                    <div class="cs main_color4 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Rosemary</span>
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
                                        <img src="/images/events/new/dill.jpeg" alt="dill-in-kenya" style="height:200px !important;">
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


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>

@endsection