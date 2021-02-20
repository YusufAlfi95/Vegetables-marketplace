@extends('layouts.app')

@section('title')
    Store Category
@endsection

@section('content')
    
<div class="page-content page-shop">
       <section class="hero">
			<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg'); height: 300px;"></div>
		</section>

		<section class="ftco-section mt-5">
    	<div class="container">

			<div class="row">
				<div class="col-12 col-md-12 mt-4 mb-4 d-flex justify-content-center">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Vegetables</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Fruits</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-y-tab" data-toggle="pill" href="#pills-y" role="tab" aria-controls="pills-y" aria-selected="false">Juice</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-z-tab" data-toggle="pill" href="#pills-z" role="tab" aria-controls="pills-z" aria-selected="false">Dried</a>
							</li>
						</ul>
				</div>
			</div>
    		<div class="row d-flex justify-content-center">
    			<div class="col-12 col-md-12 mb-4 text-center ">
				<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="details.html" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" >
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
								
								</div>
							</div>
						</div>
						<div class=" col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" >
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

						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-9.jpg" >
									<span class="status">30%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Onion</a></h3>
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-10.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Apple</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>$120.00</span></p>
										</div>
									</div>
									
								</div>
							</div>`
						</div>
						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-11.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Garlic</a></h3>
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-12.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Chilli</a></h3>
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
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="details.html" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" >
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
								
								</div>
							</div>
						</div>
						<div class=" col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" >
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
    				</div>
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" >
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" >
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

						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-9.jpg" >
									<span class="status">30%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Onion</a></h3>
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-10.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Apple</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>$120.00</span></p>
										</div>
									</div>
									
								</div>
							</div>`
						</div>
						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-11.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Garlic</a></h3>
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
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-12.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Chilli</a></h3>
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

					<div class="tab-pane fade" id="pills-y" role="tabpanel" aria-labelledby="pills-y-tab">
						<div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-9.jpg" >
									<span class="status">30%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Onion</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-z" role="tabpanel" aria-labelledby="pills-z-tab"><div class="col-6 col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-12.jpg" >
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Chilli</a></h3>
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
    			</div>
    		</div>
    		
    		<div class="row mt-5 mb-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
     

     
    </div>
  

@endsection