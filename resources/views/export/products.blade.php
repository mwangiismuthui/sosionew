@extends('layout.main')
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight text-uppercase">Products</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="{{route('index')}}">
                Home
            </a>
                    </li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
    <div class="container">
        <div class="row" >

            <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">



                <div class="columns-2">

                    <ul id="products" class="products list-unstyled grid-view bottommargin_0">
                        <li class="product type-product">
                            <div class="side-item no-content-padding">
                                <div class="row">

                                    <div class="col-md-5">

                                        <div class="item-media muted_background rounded overflow_hidden">
                                            <a href="{{route('marjoram')}}">
                                                <img src="/images/events/new/marjoram.jpeg" alt="fresh-kenyan-marjoram" id="products-image">
                                            </a>

                                        </div>

                                        <div class="item-content topmargin_30 text-center">

                                            <h4 class="entry-title topmargin_5">
                                            <a href="{{route('marjoram')}}">Marjoram </a>
                                            </h4>

                                            <p>You can count on us for a reliable supply of marjoram from Kenya.</p>


                                            <p class="topmargin_25">
                                   
                                </p>

                                        </div>

                                    </div>

                                    <div class="col-md-7">

                                        <div class="item-content">

                                            <h4 class="entry-title topmargin_5">
                                                <a href="{{route('marjoram')}}">marjoram</a>
                                            </h4>

                                            <p>The home of high quality fressh marjoram with a wide variety to choose from.If its quality marjoram think us!Hit on us and we deliver them to you</p>


                                            <p class="topmargin_25">
                                  
                                </p>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="product type-product">
                            <div class="side-item no-content-padding">
                                <div class="row">

                                    <div class="col-md-5">

                                        <div class="item-media muted_background rounded overflow_hidden">
                                            <a href="{{route('cabbage')}}">
                                                <img src="/images/events/cabbage2.jpg" alt="fresh-kenyan-cabbage" id="products-image">
                                            </a>

                                        </div>

                                        <div class="item-content topmargin_30 text-center">

                                            <h4 class="entry-title topmargin_5">
                                                <a href="{{route('cabbage')}}">cabbage</a>
                                            </h4>

                                            <p>We are the best source of this vegetable, sourced from committed family growers in Kenya.</p>


                                            <p class="topmargin_25">
                                  
                                </p>

                                        </div>

                                    </div>

                                    <div class="col-md-7">

                                        <div class="item-content">

                                            <h4 class="entry-title topmargin_5">
                                                <a href="{{route('cabbage')}}">cabbage</a>
                                            </h4>

                                            <p>We are the best source of this vegetable, sourced from committed family growers in Kenya.</p>


                                            <p class="topmargin_25">
                                  
                                </p>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="product type-product">
                            <div class="side-item no-content-padding">
                                <div class="row">

                                    <div class="col-md-5">

                                        <div class="item-media muted_background rounded overflow_hidden">
                                            <a href="{{route('thorn_mellon')}}">
                                                <img src="/images/events/thornmellon6.jpg" alt="healthy-kenyan-thorn-mellon" id="products-image">
                                            </a>

                                        </div>

                                        <div class="item-content topmargin_30 text-center">

                                            <h4 class="entry-title topmargin_5">
                                                <a href="{{route('thorn_mellon')}}">Thorn melon</a>
                                            </h4>

                                            <p>Enjoy this nutritious friut from the comfort of your home in whichever country you're in.</p>


                                            <p class="topmargin_25">
                                 
                                </p>

                                        </div>

                                    </div>

                                    <div class="col-md-7">

                                        <div class="item-content">

                                            <h4 class="entry-title topmargin_5">
                                                <a href="{{route('thorn_mellon')}}">Thorn melon</a>
                                            </h4>

                                            <p>Enjoy this nutritious friut from the comfort of your home in whichever country you're in.</p>


                                            <p class="topmargin_25">
                                
                                </p>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="product type-product">
                                <div class="side-item no-content-padding">
                                    <div class="row">
    
                                        <div class="col-md-5">
    
                                            <div class="item-media muted_background rounded overflow_hidden">
                                                <a href="{{route('straw_berries')}}">
                                                    <img src="/images/events/strawberry6.jpg" alt="sweet-kenya-strawberries" id="products-image">
                                                </a>
    
                                                
                                            </div>
    
                                            <div class="item-content topmargin_30 text-center">
    
                                                <h4 class="entry-title topmargin_5">
                                                <a href="{{route('straw_berries')}}">staw berries</a>
                                                </h4>
    
                                                <p>The sweetness that comes with this fruit can only be enjoyed if it comes from the best.Call us for the best.</p>
    
    
                                                <p class="topmargin_25">
                                    
                                    </p>
    
                                            </div>
    
                                        </div>
    
                                        <div class="col-md-7">
    
                                            <div class="item-content">
    
                                                <h4 class="entry-title topmargin_5">
                                                    <a href="{{route('straw_berries')}}">stram berries</a>
                                                </h4>
                                                <p>The sweetness that comes with this fruit can only be enjoyed if it comes from the best.Call us for the best.</p>p>
    
    
                                                <p class="topmargin_25">
                                      
                                    </p>
    
                                            </div>
    
                                        </div>
    
                                    </div>
                                </div>
                            </li>
    
                            <li class="product type-product">
                                <div class="side-item no-content-padding">
                                    <div class="row">
    
                                        <div class="col-md-5">
    
                                            <div class="item-media muted_background rounded overflow_hidden">
                                                <a href="{{route('carrots')}}">
                                                    <img src="/images/events/carrot1.jpg" alt="organic-kenya-baby-carrots" id="products-image">
                                                </a>
    
                                            </div>
    
                                            <div class="item-content topmargin_30 text-center">
    
                                                <h4 class="entry-title topmargin_5">
                                                    <a href="{{route('carrots')}}">Carrots</a>
                                                </h4>
    
                                                <p>Kenyan carrots boast numerous health benefits. It is therefore no big surprise that they are in such high demand.</p>
    
    
                                                <p class="topmargin_25">
                                     
                                    </p>
    
                                            </div>
    
                                        </div>
    
                                        <div class="col-md-7">
    
                                            <div class="item-content">
    
                                                <h4 class="entry-title topmargin_5">
                                                    <a href="{{route('passion_fruit')}}">Carrots</a>
                                                </h4>
    
                                               <p>Kenyan carrots boast numerous health benefits. It is therefore no big surprise that they are in such high demand.We carefully sort out the best carrots in the market packaging them and delivering them right at your door step</p>
    
    
                                                <p class="topmargin_25">
                                      
                                    </p>
    
                                            </div>
    
                                        </div>
    
                                    </div>
                                </div>
                            </li>
    
                            <li class="product type-product">
                                <div class="side-item no-content-padding">
                                    <div class="row">
    
                                        <div class="col-md-5">
    
                                            <div class="item-media muted_background rounded overflow_hidden">
                                                <a href="{{route('pears')}}">
                                                    <img src="/images/events/pears5.jpg" alt="fresh-organic-kenyan-pears" id="products-image">
                                                </a>
    
                                            </div>
    
                                            <div class="item-content topmargin_30 text-center">
    
                                                <h4 class="entry-title topmargin_5">
                                                    <a href="{{route('pears')}}">pears</a>
                                                </h4>
    
                                                <p>Our Kenyan Pears are some of the most abundant fruits in Kenya and indeed the second most essential fruit in the whole of the tropics</p>
    
    
                                                <p class="topmargin_25">
                                       
                                    </p>
    
                                            </div>
    
                                        </div>
    
                                        <div class="col-md-7">
    
                                            <div class="item-content">
    
                                                <h4 class="entry-title topmargin_5">
                                                    <a href="{{route('pears')}}">pears</a>
                                                </h4>
    
                                                <p>Beef ribs ribeye tri-tip pork pig jerky doner. Ham short loin rump swine turkey pork filet mignon ham hock tri-tip ground round pork loin.</p>
    
    
                                                <p class="topmargin_25">
                                     
                                    </p>
    
                                            </div>
    
                                        </div>
    
                                    </div>
                                </div>
                            </li> <li class="product type-product">
                                    <div class="side-item no-content-padding">
                                        <div class="row">
        
                                            <div class="col-md-5">
        
                                                <div class="item-media muted_background rounded overflow_hidden">
                                                    <a href="{{route('rosemary')}}">
                                                        <img src="/images/events/new/rosemary2.jpg" alt="organicaally-grown-kenyan-rosemary" id="products-image">
                                                    </a>
        
                                                </div>
        
                                                <div class="item-content topmargin_30 text-center">
        
                                                    <h4 class="entry-title topmargin_5">
                                                    <a href="{{route('rosemary')}}">Rosemary</a>
                                                    </h4>
        
                                                    <p>We are a proud supplier of fresh and high quality Kenyan rosemary, and ensuring that its freshness will reach millions of shopping bags miles away, worldwide.</p>
        
        
                                                    <p class="topmargin_25">
                                        
                                        </p>
        
                                                </div>
        
                                            </div>
        
                                            <div class="col-md-7">
        
                                                <div class="item-content">
        
                                                    <h4 class="entry-title topmargin_5">
                                                        <a href="{{route('rosemary')}}">rosemary</a>
                                                    </h4>
        
                                                    <p>Brisket corned beef tail, t-bone tongue chicken kielbasa fatback prosciutto short ribs biltong andouille shank. Swine hamburger.</p>
        
        
                                                    <p class="topmargin_25">
                                        
                                        </p>
        
                                                </div>
        
                                            </div>
        
                                        </div>
                                    </div>
                                </li>
        
                                <li class="product type-product">
                                    <div class="side-item no-content-padding">
                                        <div class="row">
        
                                            <div class="col-md-5">
        
                                                <div class="item-media muted_background rounded overflow_hidden">
                                                    <a href="{{route('curry_leaves')}}">
                                                        <img src="/images/events/curry6.jpg" alt="fresh-kenyan-curry-leaves" id="products-image">
                                                    </a>
        
                                                   
                                                </div>
        
                                                <div class="item-content topmargin_30 text-center">
        
                                                    <h4 class="entry-title topmargin_5">
                                                        <a href="{{route('curry_leaves')}}">curry leaves</a>
                                                    </h4>
        
                                                    <p>Want great flavouring agents?Hit on us for the best Kenyan curry leaves and make food more flavoury anywhere around the world </p>
        
        
                                                    <p class="topmargin_25">
                                          
                                        </p>
        
                                                </div>
        
                                            </div>
        
                                            <div class="col-md-7">
        
                                                <div class="item-content">
        
                                                    <h4 class="entry-title topmargin_5">
                                                        <a href="{{route('curry_leaves')}}">curry leaves</a>
                                                    </h4>
        
                                                    <p>Want great flavouring agents?Hit on us for the best Kenyan curry leaves and make food more flavoury anywhere around the world </p>
        
        
                                                    <p class="topmargin_25">
                                         
                                        </p>
        
                                                </div>
        
                                            </div>
        
                                        </div>
                                    </div>
                                </li>
        
                                <li class="product type-product">
                                    <div class="side-item no-content-padding">
                                        <div class="row">
        
                                            <div class="col-md-5">
        
                                                <div class="item-media muted_background rounded overflow_hidden">
                                                    <a href="{{route('lemon_grass')}}">
                                                        <img src="/images/events/lemongrass5.jpg" alt="fresh-lemon-grass" id="products-image">
                                                    </a>
        
                                                   
                                                </div>
        
                                                <div class="item-content topmargin_30 text-center">
        
                                                    <h4 class="entry-title topmargin_5">
                                                        <a href="{{route('lemon_grass')}}">lemon grass</a>
                                                    </h4>
        
                                                    <p>Full of flavor and aromatic just as you would imagine it, that is the Kenyan Lemon grass for you.We have it all for you</p>
        
        
                                                    <p class="topmargin_25">
                                       
                                        </p>
        
                                                </div>
        
                                            </div>
        
                                            <div class="col-md-7">
        
                                                <div class="item-content">
        
                                                    <h4 class="entry-title topmargin_5">
                                                        <a href="{{route('lemon_grass')}}">lemon grass</a>
                                                    </h4>
        
                                                    <p>Full of flavor and aromatic just as you would imagine it, that is the Kenyan Lemon grass for you.We have it all for you</p>
        
                                                    <p class="topmargin_25">
                                          
                                        </p>
        
                                                </div>
        
                                            </div>
        
                                        </div>
                                    </div>
                                </li>


                    </ul>

                </div>
                <!-- eof .columns-* -->


              


            </div>
            <!--eof .col-sm-8 (main content)-->


            <!-- sidebar -->
            <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8" id="aside-m">


            

                <div class="widget widget_categories">

                    <h4 class="widget-titl">Categories</h4>
                    <ul class="greylinks list2 checklist">
                        <li class="active">
                        <a href="{{route('apples')}}" title="" class="content-justify">
                                <span>Fruits</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{route('cabbage')}}" title="" class="content-justify">
                                <span>Vegetables</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{route('herbs')}}" title="" class="content-justify">
                                <span>Herbs</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{route('spices')}}" title="" class="content-justify">
                                <span>Spices</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>

               

                <div class="widget widget_products widget_popular_entries">

                    <h4 class="widget-titl">Featured products</h4>
                    <ul class="media-list">
                        <li class="media">
                            <a class="media-left media-middle" href="{{route('mangoes')}}">
                                <img class="media-object muted_background" src="/images/events/new/mango5.jpg" alt="organically-grown-kenyan-magoes" >
                            </a>
                            <div class="media-body media-middle">
                                <h3 class="entry-title">
                                    <a href="{{route('mangoes')}}"> Mangoes</a>
                                </h3>

                             

                                
                            </div>
                        </li>

                        <li class="media">
                            <a class="media-left media-middle" href="{{route('avocadoes')}}">
                                <img class="media-object muted_background" src="/images/events/new/avocado5.jpg" alt="our-kenyan-avocadoes">
                            </a>
                            <div class="media-body media-middle">
                                <h3 class="entry-title">
                                    <a href="{{route('avocadoes')}}"> Avocadoes</a>
                                </h3>

                                

                            </div>
                        </li>

                        <li class="media">
                            <a class="media-left media-middle" href="{{route('herbs')}}">
                                <img class="media-object muted_background" src="/images/events/herbs1.jpeg" alt="organic-kenyan-herbs">
                            </a>
                            <div class="media-body media-middle">
                                <h3 class="entry-title">
                                    <a href="{{route('herbs')}}">Herbs</a>
                                </h3>

                               
                            </div>
                        </li>

                    </ul>
                </div>
                

            </aside>
            <!-- eof aside sidebar -->


        </div>
    </div>
</section>
@endsection