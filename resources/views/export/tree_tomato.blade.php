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
                    <li class="active">Tree Tomato</li>
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

                            <a href="/images/events/tamarillos.jpg" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                <img src="/images/events/tamarillos.jpg" class="attachment-shop_single wp-post-image" alt="kenya-tamorillos" title="" >
                            </a>

                            <div class="cs main_color1 entry-meta media-meta vertical-center text-center">
                                <div class="price weight-black fontsize_30">
                                    <span>
                                        <span class="amount">Tamorillos</span>
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


                        <h1 itemprop="name" class="product_title ">Tree Tomato</h1>


                        <div>
                            <p>The tree tomato  also known as tamarillos a small oval-shaped fruit like a medium sized tomato and tastes almost like a tomato . It is a member of the soloanaceae family with tomatoes, potatoes and pepino. They are thought to have originated in the semitropical high-altitude andes of brazil and peru.
                                    The tree tomato is a subtropical tree and flourishes in altitudes of between 1500M to 3000M. It grows well where temperatures stay above 50 degrees F. But can tolerate temperature as low as 28 degrees F. Tree tomato tolerates many soil conditions as long as it is well drained, but compost –enriched soil is best for optimal growth. It also requires full sun, and protection from strong wind due to its shallow root system. Even though all optimal are provided, the lifespan of a tree tomato as about 4 years.This conditions are available in Kenya making it the best place to produce the best variety of tamarillos
                            </p>
                            <h5 style="text-align:center;">Nutritional value</h5>
                            <ol>
                                <li>Source of Potassium</li>
                                <li>Vitamin B-complex</li>
                                <p>This includes thiamin, pyridoxine and riboflavin, all of which improves the immune system and help to churn a faster rate of metabolism for a healthier, well-digestive bodily system.</p>
                                <li>Vitamin A which improves eyesight</li>
                                <li>The yellow-hued variety consist of carotenes and xanthins, all of ehivh consist of antioxidant properties against bodily toxicity.</li>
                            </ol>
                            <h5 style="text-align:center;">Uses</h5>
                            <ol>
  
                                <li> Making jam, preserves, jellies,salsa, relishes and smoothies.</li>
                                <li>Adding peeled, sliced tamarillos into salads,fruit and as toppings on cakes.</li>
                                <p> Bake or grill tamarillos like in vegetables.</p>
                                <li> Adding whole peeled tamarillos to casserole.</li>
                                <li>The yellow-hued variety consist of carotenes and xanthins, all of ehivh consist of antioxidant properties against bodily toxicity.</li>
                            </ol>

                            <p>Go ahead then and contact us and we will be more than happy to deliver to you fresh and the number one quality tree tomatoes</p>
                        </div>
                        <a href="{{route('order')}}" class="theme_button color1">
                            Order Tree Tomatoes Now
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

                                <div class="item-media muted_background rounded overflow_hidden" >
                                    <a href="{{route('thorn_mellon')}}">
                                        <img src="/images/events/thornmellon5.jpeg" alt="kenya-thorn-mellon">
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

                                <div class="item-media muted_background rounded overflow_hidden" >
                                    <a href="{{route('pears')}}">
                                        <img src="/images/events/pear2.jpg" alt="kenya-pears">
                                    </a>

                                    <div class="cs main_color3 entry-meta media-meta vertical-center text-center">
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
                                    <a href="{{route('passion_fruit')}}">
                                        <img src="/images/events/new/passion4.jpg" alt="kenya-passion-fruit">
                                    </a>

                                    <div class="cs main_color4 entry-meta media-meta vertical-center text-center">
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

                                <div class="item-media muted_background rounded overflow_hidden" >
                                    <a href="{{route('straw_berries')}}">
                                        <img src="/images/events/strawberry6.jpg" alt="sweet-strawberry-kenya">
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