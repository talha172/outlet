@extends('index')
@section('title','Boots')
@section('data')
@endsection
@parent

<!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Boots</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href={{url('index')}}>Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href={{url('shoes')}}>Shoes<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href={{url('boots')}}>Boots</a>
                                 
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->
<section class="container">
    <!-- Start Filter Bar -->
                        <div class="filter-bar d-flex flex-wrap align-items-center">
                           <div class="col-md-2 col-sm-2">Categories</div>
                            <div class="sorting">
                                <nav class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="{{url('casualshoes')}}">Casual Shoes</a></li>
                                <li><a href="{{url('boots')}}">Boots</a></li>
                                <li><a href="{{url('formalshoes')}}">Formal Shoes</a></li>
                                <li><a href="{{url('oxfords')}}">Oxfords</a></li>
                                <li><a href="{{url('loafers')}}">Loafers</a></li>
                                                                    
                            </ul>
                          </div>                        
                    </div>
                </nav>
                </div>
            </div><br>
            <!-- End Filter Bar -->
            
    <div class="row">
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/l1.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="primary-btn text-uppercase"><a href="{{url('b1')}}">Buy Now</a></button>
                                       
                                    </div>
                              </div>
                          </div>
                          <div class="price">
                                <h5 class="text">Belt 1</h5>
                                <h3 class="text">$15.00</h3>
                           </div>
                        </div>  
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/l2.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="primary-btn text-uppercase"><a href="{{url('b2')}}">Buy Now</a></button>
                                       
                                    </div>
                              </div>                          
                          </div>
                          <div class="price">
                                <h5 class="text">Belt 2</h5>
                                <h3 class="text">$12.00</h3>
                           </div>                             
                        </div>  
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/l3.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                       <button class="primary-btn text-uppercase"><a href="{{url('b3')}}">Buy Now</a></button>
                                        
                                    </div>
                              </div>                          
                          </div>
                          <div class="price">
                                <h5 class="text">Long Sleeve shirt</h5>
                                <h3 class="text">$12.00</h3>
                           </div>                             
                        </div>  
                    </div>
</section>