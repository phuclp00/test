    @extends('master')
    @section('content')
    	<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="{{route('home_view')}}">
								<img src="source_project/images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="{{route('home_view')}}">Home</a>
								</li>
								<li class="drop"><a href="{{route('shop_view')}}">Shop</a>
									
								</li>
								<li class="drop"><a href="{{route('shop_view')}}">Books</a>
									<div class="megamenu mega03">
										<ul class="item item03">
                                            <li class="title">Categories</li>
                                            @foreach($list_category as $cat_list)
											    <li><a href="shop-grid.html">{{$cat_list->cat_name}} </a></li>
                                            @endforeach
                                        </ul>	
                                        <ul class="item item03">
											<li class="title">Favourite</li>
											@foreach($top_list_category as $top_cat_list)
											    <li><a href="shop-grid.html">{{$top_cat_list->cat_name}} </a></li>
                                            @endforeach
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											
											@foreach($top_list_category as $top_cat_list)
											    <li><a href="shop-grid.html">{{$top_cat_list->cat_name}} </a></li>
                                            @endforeach
										</ul>							
									</div>
								</li>
								<li class="drop"><a href="{{route('shop_view')}}">Kids</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Top Collections</li>
											<li><a href="shop-grid.html">American Girl</a></li>
											<li><a href="shop-grid.html">Diary Wimpy Kid</a></li>
											<li><a href="shop-grid.html">Finding Dory</a></li>
											<li><a href="shop-grid.html">Harry Potter</a></li>
											<li><a href="shop-grid.html">Land of Stories</a></li>
										</ul>
										<ul class="item item02">
											<li class="title">More For Kids</li>
											<li><a href="shop-grid.html">B&N Educators</a></li>
											<li><a href="shop-grid.html">B&N Kids' Club</a></li>
											<li><a href="shop-grid.html">Kids' Music</a></li>
											<li><a href="shop-grid.html">Toys & Games</a></li>
											<li><a href="shop-grid.html">Hoodies</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="{{route('about_view')}}">Pages</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="{{route('about_view')}}">About Page</a></li>
											<li><a href="{{route('account_view')}}">My Account</a></li>
											<li><a href="{{route('cart_view')}}">Cart Page</a></li>
											<li><a href="{{route('checkout_view')}}">Checkout Page</a></li>
											<li><a href="{{route('checkout_view')}}">Wishlist Page</a></li>
											<li><a href="{{route('error_view')}}">404 Page</a></li>
											<li><a href="{{route('faq_view')}}">Faq Page</a></li>
											<li><a href="{{route('team_view')}}">Team Page</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="{{route('blog_view')}}">Blog</a>
		
								</li>
								<li><a href="{{route('contact_view')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="{{route('cart_view')}}">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="source_project/images/product/sm-img/1.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="source_project/images/product/sm-img/3.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="source_project/images/product/sm-img/2.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="{{route('cart_view')}}">View and edit cart</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="{{route('home_view')}}">Home</a>
									
								</li>
								<li><a href="{{route('about_view')}}">Pages</a>
									<ul>
										<li><a href="{{route('about_view')}}">About Page</a></li>
										
										<li><a href="{{route('account_view')}}">My Account</a></li>
										<li><a href="{{route('cart_view')}}">Cart Page</a></li>
										<li><a href="{{route('checkout_view')}}">Checkout Page</a></li>
										<li><a href="{{route('wishlist_view')}}">Wishlist Page</a></li>
										<li><a href="{{route('error_view')}}">404 Page</a></li>
										<li><a href="{{route('faq_view')}}">Faq Page</a></li>
										<li><a href="{{route('team_view')}}">Team Page</a></li>
									</ul>
								</li>
								<li><a href="{{route('shop_view')}}">Shop</a>
									
								</li>
								<li><a href="{{route('blog_view')}}">Blog</a>
									
								</li>
								<li><a href="{{route('contact_view')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
    <!-- Start Slider area ( MAX 10 SLIDE )-->
   
        <!-- Start Single Slide -->
    <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">    
        @foreach($slide_items as $slide_items)
        <div class="slide animation__style10 {{$slide_items->name}} fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                {!!$slide_items->description!!}
                            <a class="shopbtn" href="{{route('shop_view')}}">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        <!-- End Single Slide -->
    <!-- End Slider area -->
    <!-- Start BEst Seller Area -->
  
           

    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <!-- Start Single Tab Content -->
            <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
                <!-- Start Single Product -->
             @foreach($list_product as $product)
                @if($product->date_released<=20)
                    <div class="product product__style--3">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product__thumb">
                            <a class="first__img" href="{{route('product_view')}}"><img src="source_project/images/books/test_img/{{$product->img}}" alt="product image" style="width: 270px;height: 340px;"></a>
                            <a class="second__img animation1" href="{{route('product_view')}}"><img src="source_project/images/books/8k.jpg" alt="product image"style="width: 270px;height: 340px;"></a>
                            {{-- This comment will not be present in the rendered HTML 
                                // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                // Neu san pham tong ban tren 30 thi se la HOT, tren 100 la BEST SELLER   
                            --}}

                                @if($product->totall_sell>100 )
                                    <div class="hot__box">
                                        <span class="hot-label">TOP BEST SALLER</span>
                                    </div>
                                @elseif($product->totall_sell >30 )
                                    <div class="hot__box">
                                        <span class="hot-label">HOT NEW</span>
                                    </div>
                                @else
                                    <div class="hot__box color--2">
                                        <span class="hot-label"> HOT </span>
                                    </div>
                                @endif
                            </div>
                            <div class="product__content content--center">
                                <h4><a href="{{route('product_view')}}">{{$product->book_name}}</a></h4>
                                <ul class="prize d-flex">
                                    <li>{{$product->promotion_price."$"}}</li>
                                    <li class="old_prize">{{$product->price."$"}}</li>
                                </ul>
                                <div class="action">
                                    <div class="actions_inner">
                                        <ul class="add_to_links">
                                            <li><a class="cart" href="{{route('cart_view')}}"><i class="bi bi-shopping-bag4"></i></a></li>
                                            <li><a class="wishlist" href="{{route('wishlist_view')}}"><i class="bi bi-shopping-cart-full"></i></a></li>
                                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__hover--content">
                                    <ul class="rating d-flex">
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            <!-- End Single Tab Content -->
        </div>
    </section>
    <!-- Start BEst Seller Area -->
     {{-- This comment will not be present in the rendered HTML 
            // Khu vuc khanh hang dien thong tin nhan thong bao tu email  
     --}}
    <!-- Start NEwsletter Area -->
    <section class="wn__newsletter__area bg-image--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                    <div class="section__title text-center">
                        <h2>Stay With Us</h2>
                    </div>
                    <div class="newsletter__block text-center">
                        <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                        <form action="#">
                            <div class="newsletter__box">
                                <input type="email" placeholder="Enter your e-mail">
                                <button>Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End NEwsletter Area -->
     {{-- This comment will not be present in the rendered HTML 
            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
            // Neu san pham gia tren 5000 thi se la HOT   
     --}}
    <!-- Start Best Seller Area -->
    <section class="wn__bestseller__area bg--white pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="product__nav nav justify-content-center" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                        @foreach ($top_list_category as $top)
                        
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav--{{($top->cat_name)}}"role="tab">{{$top->cat_name}}</a>
                        
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab__container mt--60">
                <!-- Start Single Tab Content -->
                <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                         <!-- Start Single Product -->
                            {{--Bat dau dua ra danh sach toan bo san pham  --}}
                    @foreach ($list_product as $product):
                        
                        <div class="single__product">                       
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">  
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="{{route('product_view')}}"><img src="source_project/images/books/test_img/{{$product->img}}" alt="product image" style="width: 270px;height: 340px;"></a>
                                        <a class="second__img animation1" href="{{route('product_view')}}"><img src="source_project/images/books/8k.jpg" alt="product image"style="width: 270px;height: 340px;"></a>{{-- This comment will not be present in the rendered HTML 
                                            // START IF
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                         --}}
                                        @if($product->totall_sell>100 )
                                            <div class="hot__box">
                                                <span class="hot-label">TOP BEST SALLER</span>
                                            </div>
                                        @elseif($product->totall_sell >30 )
                                            <div class="hot__box">
                                                <span class="hot-label">HOT NEW</span>
                                            </div>
                                        @else
                                            <div class="hot__box color--2">
                                            <span class="hot-label"> HOT </span>
                                        </div>
                                        @endif
                                    {{-- This comment will not be present in the rendered HTML 
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                            // END IF 
                                         --}}
                                    </div>
                                    <div class="product__content content--center content--center">
                                        <h4><a href="{{route('product_view')}}">{{$product->book_name}}</a></h4>
                                        <ul class="prize d-flex">
                                            <li>{{$product->promotion_price."$"}}</li>
                                            <li class="old_prize">{{$product->price."$"}}</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="{{route('cart_view')}}"><i class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="{{route('wishlist_view')}}"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__hover--content">
                                            <ul class="rating d-flex">
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">  
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="{{route('product_view')}}"><img src="source_project/images/books/test_img/{{$product->img}}" alt="product image" style="width: 270px;height: 340px;"></a>
                                        <a class="second__img animation1" href="{{route('product_view')}}"><img src="source_project/images/books/8k.jpg" alt="product image"style="width: 270px;height: 340px;"></a>{{-- This comment will not be present in the rendered HTML 
                                            // START IF
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                         --}}
                                        @if($product->totall_sell>100 )
                                            <div class="hot__box">
                                                <span class="hot-label">TOP BEST SALLER</span>
                                            </div>
                                        @elseif($product->totall_sell >30 )
                                            <div class="hot__box">
                                                <span class="hot-label">HOT NEW</span>
                                            </div>
                                        @else
                                            <div class="hot__box color--2">
                                            <span class="hot-label"> HOT </span>
                                        </div>
                                        @endif
                                    {{-- This comment will not be present in the rendered HTML 
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                            // END IF 
                                         --}}
                                    </div>
                                    
                                    <div class="product__content content--center content--center">
                                        <h4><a href="{{route('product_view')}}">{{$product->book_name}}</a></h4>
                                        <ul class="prize d-flex">
                                            <li>{{$product->promotion_price."$"}}</li>
                                            <li class="old_prize">{{$product->price."$"}}</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="{{route('cart_view')}}"><i class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="{{route('wishlist_view')}}"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__hover--content">
                                            <ul class="rating d-flex">
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                       
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->              
                    </div>     
                    @endforeach
                </div>
              
                <!-- End Single Tab Content -->
                <!-- Start Single Tab Content -->
               
                <div class="row single__tab tab-pane fade" id="nav-{{($top->cat_name)}}" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        <div class="single__product">
                            @foreach ($list_product as $product_tag)
                            <!-- Start Single Product -->
                            @if($product_tag==$top->cat_name)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img src="source_project/images/books/test_img/{{$product_tag->img}}" alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img src="source_project/images/books/test_img/8k.jpg" alt="product image"></a>
                                       {{-- // START IF
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                         --}}
                                        @if($product_tag->totall_sell>100 )
                                            <div class="hot__box">
                                                <span class="hot-label">TOP BEST SALLER</span>
                                            </div>
                                        @elseif($product_tag->totall_sell >30 )
                                            <div class="hot__box">
                                                <span class="hot-label">HOT NEW</span>
                                            </div>
                                        @else
                                            <div class="hot__box color--2">
                                            <span class="hot-label"> HOT </span>
                                        </div>
                                        @endif
                                     {{-- This comment will not be present in the rendered HTML 
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                            // END IF 
                                         --}}
                                    </div>
                                    
                                    <div class="product__content content--center content--center">
                                        <h4><a href="{{route('product_view')}}">{{$product_tag->book_name}}</a></h4>
                                        <ul class="prize d-flex">
                                            <li>{{$product_tag->promotion_price."$"}}</li>
                                            <li class="old_prize">{{$product_tag->price."$"}}</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__hover--content">
                                            <ul class="rating d-flex">
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img src="source_project/images/books/test_img/{{$product_tag->img}}" alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img src="source_project/images/books/test_img/8k.jpg" alt="product image"></a>
                                       {{-- // START IF
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                         --}}
                                        @if($product_tag->totall_sell>100 )
                                            <div class="hot__box">
                                                <span class="hot-label">TOP BEST SALLER</span>
                                            </div>
                                        @elseif($product_tag->totall_sell >30 )
                                            <div class="hot__box">
                                                <span class="hot-label">HOT NEW</span>
                                            </div>
                                        @else
                                            <div class="hot__box color--2">
                                            <span class="hot-label"> HOT </span>
                                        </div>
                                        @endif
                                     {{-- This comment will not be present in the rendered HTML 
                                            // Danh sach cac san pham moi voi ngay ra mat khong qua 30 ngay 
                                            // Neu san pham gia tren 5000 thi se la HOT   
                                            // END IF 
                                         --}}
                                    </div>
                                    
                                    <div class="product__content content--center content--center">
                                        <h4><a href="{{route('product_view')}}">{{$product_tag->book_name}}</a></h4>
                                        <ul class="prize d-flex">
                                            <li>{{$product_tag->promotion_price."$"}}</li>
                                            <li class="old_prize">{{$product_tag->price."$"}}</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__hover--content">
                                            <ul class="rating d-flex">
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li class="on"><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach  
                        </div>
                    </div>  
                </div>
               
                <!-- End Single Tab Content -->
            </div>
        </div>
    </section>
    <!-- Start BEst Seller Area -->
    <!-- Start Recent Post Area -->
    <section class="wn__recent__post bg--gray ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Our <span class="color--theme">Blog</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="post__itam">
                        <div class="content">
                            <h3><a href="blog-details.html">International activities of the Frankfurt Book </a></h3>
                            <p>We are proud to announce the very first the edition of the frankfurt news.We are proud to announce the very first of  edition of the fault frankfurt news for us.</p>
                            <div class="post__time">
                                <span class="day">Dec 06, 18</span>
                                <div class="post-meta">
                                    <ul>
                                        <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                        <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="post__itam">
                        <div class="content">
                            <h3><a href="blog-details.html">Reading has a signficant info  number of benefits</a></h3>
                            <p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
                            <div class="post__time">
                                <span class="day">Mar 08, 18</span>
                                <div class="post-meta">
                                    <ul>
                                        <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                        <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="post__itam">
                        <div class="content">
                            <h3><a href="blog-details.html">The London Book Fair is to be packed with exciting </a></h3>
                            <p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
                            <div class="post__time">
                                <span class="day">Nov 11, 18</span>
                                <div class="post-meta">
                                    <ul>
                                        <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                        <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Post Area -->
    <!-- Best Sale Area -->
    <section class="best-seel-area pt--80 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center pb--50">
                        <h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider center">
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img src="source_project/images/best-sell-product/1.jpg" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product__hover--content">
                        <ul class="rating d-flex">
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single product end -->
            <!-- Single product start -->
            @foreach ($list_product as $item_bestseller)
                @if($item_bestseller->totall_sell>20 )
            
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="{{route('product_view')}}"><img src="source_project/images/books/test_img/{{$item_bestseller->img}}"" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="{{route('cart_view')}}" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="{{route('wishlist_view')}}" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product__hover--content">
                        <ul class="rating d-flex">
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <!-- Single product end -->
       
           
        </div>
    </section>
    <!-- Best Sale Area Area -->
    @endsection