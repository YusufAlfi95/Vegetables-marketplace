@extends('layouts.app')

@section('title')
    Store HomePage
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="store-carousel" style="overflow-x: hidden;">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-lg-12">
                <div id="storeCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                    <li class="active" data-target="storeCarousel" data-slide-to="0">
                        
                    </li>
                    <li data-target="storeCarousel" data-slide-to="1">

                    </li>
                    <li data-target="storeCarousel" data-slide-to="2">

                    </li>
                    </ol>
                    <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img src="./images/bg_002.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/bg_001.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/bg_003.jpg" alt="" class="d-block w-100">
                    </div>
                    </div>

                </div>
                </div>
            </div>
            </div>
        </section>

        <section class="store-trend-categories mt-4">
            <div class="container">
            
                <div class="row no-gutters ftco-services border">
                    <div class="col-4 col-lg-2 col-md-4 text-center d-flex align-self-stretch ftco-animate"  data-aos="fade-up" data-aos-delay="100" >
                        <div class="media block-6 services mb-md-0 mb-4">
                            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                                    <a href="#" class="nav-link">
                                    <img src="./images/shipping-truck.png" alt="" srcset="">
                                </a>
                            </div>
                            <div class="media-body ">
                                <h3 class="heading">Free Shipping</h3>
                                <span>On order over $100</span>
                                
                            </div>
                        </div>      
                    </div>
            
                    <div class="col-4 col-md-4 col-lg-2 text-center d-flex align-self-stretch ftco-animate"  data-aos="fade-up" data-aos-delay="200">
                        <div class="media block-6 services mb-md-0 mb-4">
                            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                                    <a href="#" class="nav-link">
                                    <img src="./images/diet.png" alt="" srcset="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Always Fresh</h3>
                                <span>Product well package</span>
                            
                            </div>
                        </div>    
                    </div>
           
                    <div class="col-4 col-md-4 col-lg-2 text-center d-flex align-self-stretch ftco-animate"  data-aos="fade-up" data-aos-delay="300">
                        <div class="media block-6 services mb-md-0 mb-4">
                            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                                    <a href="#" class="nav-link">
                                    <img src="./images/medal.png" alt="" srcset="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Superior Quality</h3>
                                <span>Quality Products</span>
                            </div>
                        </div>      
                    </div>
                    
                    <div class="col-4 col-md-4 col-lg-2 text-center d-flex align-self-stretch ftco-animate "  data-aos="fade-up" data-aos-delay="400">
                        <div class="media block-6 services mb-md-0 mb-4">
                            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                                    <a href="#" class="nav-link">
                                    <img src="./images/customer-service.png" alt="" srcset="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Extra Support</h3>
                                <span>24/7 Support</span>
                            </div>
                        </div>      
                    </div>
           
                 </div>
            </div>
        </section>


        <section class="ftco-section ftco-category ftco-no-pt mt-5 mb-2">
                <div class="container">
                    <div class="row">
                                    
                <div class="col-12" data-aos="fade-up">
                <h5 class="ml-2">Trend Category</h5>
                </div>
                        <div class="col-md-12 mb-3">
                            <div class="row">
                               
                                @forelse ($categories as $category)
                                  <div class="col-md-6">
                                    <div class="category-wrap ftco-animate img mb-3 d-flex align-items-end mt-4" 
                                    style="background-image: url( {{ Storage::url($category->photo)}})">
                                        <div class="text px-3 py-1">
                                            <h2 class="mb-0"><a href="#"> {{ $category->name}}</a></h2>
                                        </div>
                                    </div>
                                   
                                </div>
                                    
                                @empty
                                    
                                @endforelse                              
                            </div>
                        </div>

                         

                        {{-- <div class="col-md-4 mt-5">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('./images/category-3.jpg');">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Juices</a></h2>
                                </div>		
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('./images/category-4.jpg');">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Dried</a></h2>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
        </section>
    


        <section class="ftco-section mt-3 mb-5">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading text-success">Featured Products</span>
                        <h3 class="mb-3 bold">Our Products</h3>
                        <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>   		        
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Bell Pepper</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Strawberry</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Green Beans</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Purple Cabbage</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Tomatoe</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Brocolli</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Carrots</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Fruit Juice</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection