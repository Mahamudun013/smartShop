@extends('frontEnd.master')

@section('title')
Home
@endsection

@section('mainContent')

<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="{{ asset('public/frontEnd/images/ba1.jpg') }}" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{ asset('public/frontEnd/images/ba2.jpg') }}" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{ asset('public/frontEnd/images/ba3.jpg') }}" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('public/frontEnd/images/baa1.jpg') }}" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('public/frontEnd/images/baa2.jpg') }}" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('public/frontEnd/images/baa3.jpg') }}" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="{{ asset('public/frontEnd/images/btn_prev.png') }}" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="{{ asset('public/frontEnd/images/btn_play.png') }}" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="{{ asset('public/frontEnd/images/btn_pause.png') }}" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="{{ asset('public/frontEnd/images/btn_next.png') }}" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="{{ asset('public/frontEnd/js/pignose.layerslider.js') }}"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->

<div class="new_arrivals">
	<div class="container">
		<h3><span>new </span>arrivals</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="{{ asset('public/frontEnd/images/wed1.jpg') }}" alt=" " />
				<div class="wed-brand simpleCart_shelfItem">
					<h4>Wedding Collections</h4>
					<h5>Flat 50% Discount</h5>
					<p><span class="item_price">TK. 5000/-</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="{{ asset('public/frontEnd/images/levis1.png') }}" alt=" " />
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="#">Shop now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
						<h4>up to 50% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="#">Shop now </a>
					</div>
					<div class="mid-img">
						<img src="{{ asset('public/frontEnd/images/dig.jpg') }}" alt=" " />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="{{ asset('public/frontEnd/images/wed2.jpg') }}" alt=" " />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Spring / Summer</h4>
					<p>Shop Men</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom">
	<div class="col-md-7 content-lgrid">
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{ asset('public/frontEnd/images/p1.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Mobiles</h4>
									<span class="separator"></span>
									<p><span class="item_price">TK. 50,000/-</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-right">
			<h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
		</div>
		
		<div class="col-sm-6 content-img-right">
			<h3>Buy 1 get 1  free on <span> Branded</span> Watches</h3>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{ asset('public/frontEnd/images/p2.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Watches</h4>
							<span class="separator"></span>
							<p><span class="item_price">TK. 25,000/-</span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{ asset('public/frontEnd/images/p4.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Shoes</h4>
									<span class="separator"></span>
									<p><span class="item_price">TK. 2000/-</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="{{ asset('public/frontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						
                        @foreach($publishedProducts as $publishedProduct)
						  <div class="col-md-3 product-men" style="margin-bottom: 30px;">
							 <div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($publishedProduct->productImage) }}" alt="" class="pro-image-front" height="250" width="220">
									<img src="{{ asset($publishedProduct->productImage) }}" alt="" class="pro-image-back"  height="250" width="220">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/product-details/'.$publishedProduct->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{ url('/product-details/'.$publishedProduct->id)}}">
										     {{ $publishedProduct->productName}}
									    </a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. {{$publishedProduct->productPrice}}/-</span>
										
									</div>
									
                                @if($publishedProduct->productQuantity < 1)
                                    <button type="button" class="item_add single-item hvr-outline-out button2 text-danger"><b>Out of Stock</b></button>
                                @else

									{!! Form::open(['url'=>'/cart/add','method'=>'POST']) !!}
									<div>
										<input type="hidden" name="productId" value="{{$publishedProduct->id}}">
										<input type="hidden" name="qty" value="1">
										<button type="submit" class="item_add single-item hvr-outline-out button2" >Add to cart</button>
									</div>
									{!! Form::close() !!}
                                @endif 
																	
								</div>
							</div>
						  </div>
						@endforeach

						<div class="clearfix"></div>
					</div>



					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						
                          @foreach($offerPublishedProducts as $offerPublishedProduct)
						  <div class="col-md-3 product-men" style="margin-bottom: 30px;">
							 <div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($offerPublishedProduct->productImage) }}" alt="" class="pro-image-front" height="250" width="220">
									<img src="{{ asset($offerPublishedProduct->productImage) }}" alt="" class="pro-image-back"  height="250" width="220">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/product-details/'.$offerPublishedProduct->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New Offer</span>
										
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{ url('/product-details/'.$publishedProduct->id)}}">
										     {{ $offerPublishedProduct->productName}}
									    </a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. {{$offerPublishedProduct->productPrice}}/-</span>
										
									</div>
									
                                @if($offerPublishedProduct->productQuantity < 1)
                                    <button type="button" class="item_add single-item hvr-outline-out button2 text-danger"><b>Out of Stock</b></button>
                                @else

									{!! Form::open(['url'=>'/cart/add','method'=>'POST']) !!}
									<div>
										<input type="hidden" name="productId" value="{{$offerPublishedProduct->id}}">
										<input type="hidden" name="qty" value="1">
										<button type="submit" class="item_add single-item hvr-outline-out button2" >Add to cart</button>
									</div>
									{!! Form::close() !!}
                                @endif 
																	
								</div>
							</div>
						  </div>
						@endforeach

						<div class="clearfix"></div>						
					</div>



					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						
                              @foreach($publishedProducts as $publishedProduct)
						  <div class="col-md-3 product-men" style="margin-bottom: 30px;">
							 <div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($publishedProduct->productImage) }}" alt="" class="pro-image-front" height="250" width="220">
									<img src="{{ asset($publishedProduct->productImage) }}" alt="" class="pro-image-back"  height="250" width="220">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/product-details/'.$publishedProduct->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{ url('/product-details/'.$publishedProduct->id)}}">
										     {{ $publishedProduct->productName}}
									    </a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. {{$publishedProduct->productPrice}}/-</span>
										
									</div>
									
                                @if($publishedProduct->productQuantity < 1)
                                    <button type="button" class="item_add single-item hvr-outline-out button2 text-danger"><b>Out of Stock</b></button>
                                @else

									{!! Form::open(['url'=>'/cart/add','method'=>'POST']) !!}
									<div>
										<input type="hidden" name="productId" value="{{$publishedProduct->id}}">
										<input type="hidden" name="qty" value="1">
										<button type="submit" class="item_add single-item hvr-outline-out button2" >Add to cart</button>
									</div>
									{!! Form::close() !!}
                                @endif 
																	
								</div>
							</div>
						  </div>
						@endforeach

						<div class="clearfix"></div> 
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>


@endsection