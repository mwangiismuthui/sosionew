@extends('layout.main')
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight text-uppercase">About Us </h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="{{route('index')}}">
                Home
            </a>
                    </li>
                    <li class="active">About Us </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls page_about background_cover section_padding_top_130 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <!-- Nav tabs -->
							<ul class="nav nav-tabs topmargin_60" role="tablist">
                                    <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Who we are</a></li>
                                    <li><a href="#tab2" role="tab" data-toggle="tab">Why Us</a></li>
                                    <li><a href="#tab3" role="tab" data-toggle="tab">C.E.O's Message</a></li>
                                </ul>
    
                                <!-- Tab panes -->
                                <div class="tab-content big-padding top-color-border bottommargin_60">
    
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h4 class="text-uppercas fontsize_20 highlight4">Who we are:</h4>
                                        <p style="text-align:justify;">
                                                                                     
                                            Sosio fresh fruits and vegetables exporters primary objective is to bring you value,high quality and quarantined freshness of all produce exported.
                                         </p>
                                        <p style="text-align:justify;">
                                            We are all about filling your baskets with healthy organically grown vegetables,fruits and herbs without worrying about chemicals at a fairer price.

                                         </p>
                                        <p style="text-align:justify;">
                                            Our vision is to emerge as market leaders within the realms of providing supreme fresh fruits, vegetables and herbs and to provide rapid and excellent, around the clock customer service and value.
                                         </p>
    
                                    </div>
    
                                    <div class="tab-pane fade" id="tab2">
                                            <p class="fontsize_20 highlight4">Why choose Us</p>
             
                                            
                                            <ul class="list2 checklist color4 grey topmargin_30">
                                                <li>  Guaranteed Quality</li>
                                                <li>Fair Pricing</li>
                                                <li> 24/7 Customer Service</li>
                                                <li>Speedy Response</li>
                                            </ul> 
                                            <p class="fontsize_20 highlight4">Orders</p>
                                            <p style="text-align:justify;">Confirmation of orders will take place less than 24 hours. Orders should be made at least 3 days prior to the shipment.</p>
                                            <p class="fontsize_20 highlight4">Payments</p>
                                            <p style="text-align:justify;">We only accept prepayment by Letter of Credit or Telegraphic Transfer for new clients.  Clients are encouraged to open an account with us for frequent shipments. We send an account</p>
                                    </div>
    
                                    <div class="tab-pane fade" id="tab3">
                                            <div class="row">
                                                    <div class="col-md-6">
                            
                                                            <div class="vertical-item content-absolute hover-content">
                                                                    <div class="item-media rounded overflow_hidden" style="border-radius:20px !important;">
                                                                        <img src="images/sosio-trans-whitback.png" alt="sosio-fruits-and vegetables-logo" style="height:250px !important; " >
                                                                        <div class="media-links">
                                
                                                                        </div>
                                                                    </div>
                                                                    <header class="item-content cs main_color4 bottom_rounded">
                                                                        <div class="content-justify vertical-center">
                                                                            <h6 class="">Susan Mosiany</h6>
                                                                            <p>C.E.O </p>
                                                                        </div>
                                                                    </header>
                                                                </div>
                            
                                                    </div>
                                                    <div class="col-md-6">
                                                            <h4 class="text-uppercas fontsize_20 highlight4">To Our Customers:</h4>
                                                            <p style="text-align:justify;">
                                                                Over more than Ten years Sosio Exporters have established an enviable record of quality and accomplishment.We are  well-positioned to build on this proud legacy and at the same time take advantage of the opportunity to innovate and bring a unique perspective to all our products and services.
                                                </p>
                        
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- eof .tab-content -->
               
            </div>
        </div>
    </div>
</section>


@endsection