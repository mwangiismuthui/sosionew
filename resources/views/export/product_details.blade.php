@extends('layout.main')
@section('content')
@foreach ($products as $product)

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
                   {{--   <li>
                        <a href="javascript:void();">Product</a>
                    </li>  --}}
                    <li class="active">{{$product->product}}</li>
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
                            <a href="{{ URL::to('/') }}/SosioFruits_Products/{{$main_image}}" alt="{{$product->product}}" itemprop="image" class="woocommerce-main-image zoom prettyPhoto">
                                <img src="{{ URL::to('/') }}/SosioFruits_Products/{{$main_image}}" alt="{{$product->product}}" alt="{{$product->product}}" class="attachment-shop_single wp-post-image"  id="prodducts-image">
                            </a>
                        </div>
                        <!--eof .images -->

                        <!-- eof .images -->
                    </div>

                    <div class="summary entry-summary col-sm-6">


                        <h1 itemprop="name" class="product_title "> {{$product->product}}</h1>


                        <div style="text-align:justify;">
                            {!!$product->main_description!!}

                        <a href="{{route('order')}}" class="theme_button color2">
                          Order {{$product->product}} Now
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
                 @foreach ($relateds as $related)
                   <div class="vertical-item product text-center">

                                <div class="item-media bottom-slider-img muted_background rounded overflow_hidden" >
                                    <a href="{{route('product.details',$related->slug)}}">
                                        <img src="{{ URL::to('/') }}/SosioFruits_Products/{{$related->productphotos->where('type','main_image')->pluck('image_path')->first()}}" alt="{{$related->product}}">
                                    </a>

                                    <div class="cs main_color2 entry-meta media-meta vertical-center text-center">
                                        <div class="price weight-black fontsize_30">
                                            <span>
                                                <span class="amount">{{$related->product}}</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>


                            </div>
            @endforeach





                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>

@endforeach

@endsection
