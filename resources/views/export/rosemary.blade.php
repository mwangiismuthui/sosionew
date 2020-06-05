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
                    <li class="active">Rosemary</li>
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

                            <a href="/images/events/new/rosemary.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/new/rosemary.jpg" class="attachment-shop_single wp-post-image" alt="fresh-kenya-rosemary" title="" >
                            </a>

                            <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Rosemary</span>
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


                        <h2 itemprop="name" class="product_title ">Rosemary</h2>


                        <div style="text-align:justify;">
                            <p>Rosemary is an aromatic and distinctive herb with sweet, amazing flavor. The herb is used for medicinal, culinary, and bodily perfumes due to its amazing fragrance. Rosemary is one of the herbs when taken regularly prevents brain aging and better memory. It’s a rich source of antioxidants and anti-inflammatory compounds. Packed with carnosic acid it helps fight off damage by free radicals in the brain.</p>
                            <p>We are a proud supplier of fresh and high quality Kenyan rosemary, and ensuring that its freshness will reach millions of shopping bags miles away, worldwide. Kenya rosemary is planted in full sun and well drained soil. which makes Kenya a permanent source of the herb.</p>
                           


                           
                            <h5 style="text-align:center;">Nutritional Value:</h5>
                            <ol>
                                <li>Improves cognitive functions, .</li>
                                <li>Helps reduce stress</li>
                                <li>Improves hair and skin health as well as lower your blood sugar</li>
                            </ol>
                            <p>We take great care of our herbs as we source them from farmers. You are assured of the best quality of Kenya rosemary from us.</p>
                        </div>
                        <a href="{{route('order')}}" class="theme_button color3">
                            Order Rosemary Now
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
                                    <a href="{{route('carrots')}}">
                                        <img src="/images/events/carrot1.jpg" alt="Kenyan-baby-carrots">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Carrots</span>
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
                                        <img src="/images/events/lemongrass5.jpg" alt="Kenyan-lemon-grass">
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
                                        <img src="/images/events/broccoli5.jpeg" alt="fresh-kenyan-broccoli" style="height:235px !important;">
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
                                    <a href="{{route('beetroot')}}">
                                        <img src="/images/events/beetroot3.jpg" alt="beetroot-exporters-in-kenya" style="height:235px !important;">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">Beetroot</span>
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