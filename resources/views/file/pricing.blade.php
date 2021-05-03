@extends('layouts.app')
@section('content')

<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Our Pricing</h1>
            </div>		
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Pricing</li>
            </ol>			
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="tr-pricing section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="pricing">
                    <span>Personal</span>
                    <h1><sup>$</sup>59<span>/Per Month</span></h1>
                    <div class="pricing-list">
                        <ul class="tr-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Product Galleries, and Blogs.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Website Analytics</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Fully Integrated E-Commerce</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sell Unlimited Products</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Mobile-Optimized Website</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Free Custom Domain</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>24/7 Customer Support</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>3% Sales Transaction Fee</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div><!-- /.price -->
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="pricing">
                    <div class="most-popular">
                        <span>Most Popular</span>
                    </div>
                    <span>Business</span>
                    <h1><sup>$</sup>99<span>/Per Month</span></h1>
                    <div class="pricing-list">
                        <ul class="tr-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Product Galleries, and Blogs.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Website Analytics</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Fully Integrated E-Commerce</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sell Unlimited Products</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Mobile-Optimized Website</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Free Custom Domain</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>3% Sales Transaction Fee</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div><!-- /.price -->
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="pricing">
                    <span>Online Store</span>
                    <h1><sup>$</sup>199<span>/Per Month</span></h1>
                    <div class="pricing-list">
                        <ul class="tr-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Product Galleries, and Blogs.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Website Analytics</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Fully Integrated E-Commerce</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sell Unlimited Products</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Mobile-Optimized Website</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Free Custom Domain</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>3% Sales Transaction Fee</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div><!-- /.price -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.tr-pricing -->

<div class="tr-download-app bg-image section-padding section-before">
    <div class="container text-center">
        <h1>Download on App Store</h1>
        <div class="app-content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="download-app">
                        <a href="#">
                            <div class="download-image">
                                <img src="images/icons/app1.png" alt="Image" class="img-fluid">
                            </div>
                            <div class="download-info">
                                <span>available on</span>
                                <strong>Google Play</strong>
                            </div>
                        </a>					
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="download-app">
                        <a href="#">
                            <div class="download-image">
                                <img src="images/icons/app2.png" alt="Image" class="img-fluid">
                            </div>
                            <div class="download-info">
                                <span>available on</span>
                                <strong>App Store</strong>
                            </div>
                        </a>					
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="download-app">
                        <a href="#">
                            <div class="download-image">
                                <img src="images/icons/app3.png" alt="Image" class="img-fluid">
                            </div>
                            <div class="download-info">
                                <span>available on</span>
                                <strong>Windows Store</strong>
                            </div>
                        </a>										
                    </div>
                </div>
            </div><!-- /.row -->				
        </div><!-- /.app-content -->
    </div><!-- /.contaioner -->
</div><!--/. tr-download-app -->


@endsection