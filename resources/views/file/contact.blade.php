@extends('layouts.app')
@section('content')

<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Contact Us</h1>
            </div>		
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>			
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="page-content">
    <div class="container">
        <div class="tr-map">
            <div id="gmap"></div>
        </div><!-- /.tr-map -->

        <div class="contact-section">
            <div class="row">
                <div class="col-md-8">
                    <div class="section">
                        <span class="tr-title">Contact Info</span>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                        <form action="#" class="tr-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required="required" placeholder="Full Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" required="required" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Subject">						
                            </div> 
                            <div class="form-group">
                                <textarea name="message" class="form-control" required="required" rows="5" placeholder="Message"></textarea>	
                            </div> 
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>					
                        </form>							
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section">
                        <span class="tr-title">Contact Info</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <ul class="tr-list info-list">
                            <li class="media"><i class="fa fa-map-signs" aria-hidden="true"></i> <span class="media-body"><span>44 Shirley Ave.</span> West Chicago, IL 60185</span></li>
                            <li class="media"><i class="fa fa-phone" aria-hidden="true"></i> <span class="media-body"><span>+0123 456 789</span> +0987 654 321</span></li>
                            <li class="media"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="media-body"><span><a href="#"><span class="__cf_email__" data-cfemail="533a3d353c13363e323a3f7d303c3e">[email&#160;protected]</span></a></span> <a href="#"><span class="__cf_email__" data-cfemail="b0c3c5c0c0dfc2c4f0d5ddd1d9dc9ed3dfdd">[email&#160;protected]</span></a></span></li>
                        </ul>
                        <span class="tr-title">Social Network</span>
                        <div class="social">
                            <ul class="tr-list">
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>							
                    </div>
                </div>
            </div>
        </div>			
    </div><!-- /.container -->
</div><!-- /.page-content -->




@endsection