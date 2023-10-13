@extends('layouts.user_app')
@section('content')
  
					<div class="pos-content">
						<div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
							<div class="row gx-4">
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
												<div class="info">
													<div class="title">Grill Chicken Chop&reg;</div>
													<div class="desc">chicken, egg, mushroom, salad</div>
													<div class="price">$10.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-2.jpg)"></div>
												<div class="info">
													<div class="title">Grill Pork Chop&reg;</div>
													<div class="desc">pork, egg, mushroom, salad</div>
													<div class="price">$12.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-3.jpg)"></div>
												<div class="info">
													<div class="title">Capellini Tomato Sauce&reg;</div>
													<div class="desc">spaghetti, tomato, mushroom </div>
													<div class="price">$11.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-4.jpg)"></div>
												<div class="info">
													<div class="title">Vegan Salad Bowl&reg;</div>
													<div class="desc">apple, carrot, tomato </div>
													<div class="price">$6.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="pizza">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<div class="pos-product not-available">
												<div class="img" style="background-image: url(assets/img/pos/product-5.jpg)"></div>
												<div class="info">
													<div class="title">Hawaiian Pizza&reg;</div>
													<div class="desc">pizza, crab meat, pineapple </div>
													<div class="price">$20.99</div>
												</div>
												<div class="not-available-text">
													<div>Not Available</div>
												</div>
											</div>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="burger">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-17.jpg)"></div>
												<div class="info">
													<div class="title">Perfect Burger</div>
													<div class="desc">Dill pickle, cheddar cheese, tomato, red onion, ground chuck beef</div>
													<div class="price">$8.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="drinks">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-6.jpg)"></div>
												<div class="info">
													<div class="title">Avocado Shake</div>
													<div class="desc">avocado, milk, vanilla</div>
													<div class="price">$3.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="drinks">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-7.jpg)"></div>
												<div class="info">
													<div class="title">Coffee Latte</div>
													<div class="desc">espresso, milk</div>
													<div class="price">$2.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="drinks">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-8.jpg)"></div>
												<div class="info">
													<div class="title">Vita C Detox Juice</div>
													<div class="desc">apricot, apple, carrot and ginger juice</div>
													<div class="price">$2.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="snacks">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-9.jpg)"></div>
												<div class="info">
													<div class="title">Pancake</div>
													<div class="desc">Non dairy, egg, baking soda, sugar, all purpose flour</div>
													<div class="price">$5.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="snacks">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-10.jpg)"></div>
												<div class="info">
													<div class="title">Mushroom soup</div>
													<div class="desc">Evaporated milk, marsala wine, beef cubes, chicken broth, butter</div>
													<div class="price">$3.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="snacks">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-11.jpg)"></div>
												<div class="info">
													<div class="title">Baked chicken wing</div>
													<div class="desc">Chicken wings, a1 steak sauce, honey, cayenne pepper</div>
													<div class="price">$6.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-12.jpg)"></div>
												<div class="info">
													<div class="title">Veggie Spaghetti</div>
													<div class="desc">Yellow squash, pasta, roasted red peppers, zucchini</div>
													<div class="price">$12.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-13.jpg)"></div>
												<div class="info">
													<div class="title">Vanilla Ice Cream</div>
													<div class="desc">Heavy whipping cream, white sugar, vanilla extract</div>
													<div class="price">$3.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-15.jpg)"></div>
												<div class="info">
													<div class="title">Perfect Yeast Doughnuts</div>
													<div class="desc">Chocolate hazelnut spread, bread flour, doughnuts, quick rise yeast, butter</div>
													<div class="price">$2.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-14.jpg)"></div>
												<div class="info">
													<div class="title">Macarons</div>
													<div class="desc">Almond flour, egg whites, heavy cream, food coloring, powdered sugar</div>
													<div class="price">$4.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<!-- BEGIN card -->
									<div class="card h-100">
										<div class="card-body h-100 p-1">
											<a href="#" class="pos-product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
												<div class="img" style="background-image: url(assets/img/pos/product-16.jpg)"></div>
												<div class="info">
													<div class="title">Perfect Vanilla Cupcake</div>
													<div class="desc">Baking powder, all purpose flour, plain kefir, vanilla extract</div>
													<div class="price">$2.99</div>
												</div>
											</a>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
									<!-- END card -->
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-content -->
				
					<!-- BEGIN pos-sidebar -->
					<div class="pos-sidebar" id="pos-sidebar">
						<div class="h-100 d-flex flex-column p-0">
							<!-- BEGIN pos-sidebar-header -->
							<div class="pos-sidebar-header">
								<div class="back-btn">
									<button type="button" data-toggle-class="pos-mobile-sidebar-toggled" data-toggle-target="#pos" class="btn">
										<i class="bi bi-chevron-left"></i>
									</button>
								</div>
								<div class="icon"><img src="assets/img/pos/icon-table-black.svg" class="invert-dark" alt=""></div>
								<div class="title">Table 01</div>
								<div class="order">Order: <b>#0056</b></div>
							</div>
							<!-- END pos-sidebar-header -->
						
							<!-- BEGIN pos-sidebar-nav -->
							<div class="pos-sidebar-nav">
								<ul class="nav nav-tabs nav-fill">
									<li class="nav-item">
										<a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#newOrderTab">New Order (5)</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#orderHistoryTab">Order History (0)</a>
									</li>
								</ul>
							</div>
							<!-- END pos-sidebar-nav -->
						
							<!-- BEGIN pos-sidebar-body -->
							<div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
								<!-- BEGIN #newOrderTab -->
								<div class="tab-pane fade h-100 show active" id="newOrderTab">
									<!-- BEGIN pos-order -->
									<div class="pos-order">
										<div class="pos-order-product">
											<div class="img" style="background-image: url(assets/img/pos/product-2.jpg)"></div>
											<div class="flex-1">
												<div class="h6 mb-1">Grill Pork Chop</div>
												<div class="small">$12.99</div>
												<div class="small mb-2">- size: large</div>
												<div class="d-flex">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
													<input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="pos-order-price">
											$12.99
										</div>
									</div>
									<!-- END pos-order -->
									<!-- BEGIN pos-order -->
									<div class="pos-order">
										<div class="pos-order-product">
											<div class="img" style="background-image: url(assets/img/pos/product-8.jpg)"></div>
											<div class="flex-1">
												<div class="h6 mb-1">Orange Juice</div>
												<div class="small">$5.00</div>
												<div class="small mb-2">
													- size: large<br>
													- less ice
												</div>
												<div class="d-flex">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
													<input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="02">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="pos-order-price">
											$10.00
										</div>
										<div class="pos-order-confirmation text-center d-flex flex-column justify-content-center">
											<div class="mb-1">
												<i class="bi bi-trash fs-36px lh-1"></i>
											</div>
											<div class="mb-2">Remove this item?</div>
											<div>
												<a href="#" class="btn btn-outline-default btn-sm ms-auto me-2 width-100px">No</a>
												<a href="#" class="btn btn-outline-theme btn-sm width-100px">Yes</a>
											</div>
										</div>
									</div>
									<!-- END pos-order -->
									<!-- BEGIN pos-order -->
									<div class="pos-order">
										<div class="pos-order-product">
											<div class="img" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
											<div class="flex-1">
												<div class="h6 mb-1">Grill chicken chop</div>
												<div class="small">$10.99</div>
												<div class="small mb-2">
													- size: large<br>
													- spicy: medium
												</div>
												<div class="d-flex">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
													<input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="pos-order-price">
											$10.99
										</div>
									</div>
									<!-- END pos-order -->
									<!-- BEGIN pos-order -->
									<div class="pos-order">
										<div class="pos-order-product">
											<div class="img" style="background-image: url(assets/img/pos/product-5.jpg)"></div>
											<div class="flex-1">
												<div class="h6 mb-1">Hawaiian Pizza</div>
												<div class="small">$15.00</div>
												<div class="small mb-2">
													- size: large<br>
													- more onion
												</div>
												<div class="d-flex">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
													<input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="pos-order-price">
											$15.00
										</div>
									</div>
									<!-- END pos-order -->
									<!-- BEGIN pos-order -->
									<div class="pos-order">
										<div class="pos-order-product">
											<div class="img" style="background-image: url(assets/img/pos/product-10.jpg)"></div>
											<div class="flex-1">
												<div class="h6 mb-1">Mushroom Soup</div>
												<div class="small">$3.99</div>
												<div class="small mb-2">
													- size: large<br>
													- more cheese
												</div>
												<div class="d-flex">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
													<input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
													<a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="pos-order-price">
											$3.99
										</div>
									</div>
									<!-- END pos-order -->
								</div>
								<!-- END #orderHistoryTab -->
							
								<!-- BEGIN #orderHistoryTab -->
								<div class="tab-pane fade h-100" id="orderHistoryTab">
									<div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
										<div>
											<div class="mb-3 mt-n5">
												<svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
													<path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
												</svg>
											</div>
											<h5>No order history found</h5>
										</div>
									</div>
								</div>
								<!-- END #orderHistoryTab -->
							</div>
							<!-- END pos-sidebar-body -->
						
							<!-- BEGIN pos-sidebar-footer -->
							<div class="pos-sidebar-footer">
								<div class="d-flex align-items-center mb-2">
									<div>Subtotal</div>
									<div class="flex-1 text-end h6 mb-0">$30.98</div>
								</div>
								<div class="d-flex align-items-center">
									<div>Taxes (6%)</div>
									<div class="flex-1 text-end h6 mb-0">$2.12</div>
								</div>
								<hr>
								<div class="d-flex align-items-center mb-2">
									<div>Total</div>
									<div class="flex-1 text-end h4 mb-0">$33.10</div>
								</div>
								<div class="mt-3">
									<div class="btn-group d-flex">
										<a href="#" class="btn btn-outline-default rounded-0 w-80px">
											<i class="bi bi-bell fa-lg"></i><br>
											<span class="small">Service</span>
										</a>
										<a href="#" class="btn btn-outline-default rounded-0 w-80px">
											<i class="bi bi-receipt fa-fw fa-lg"></i><br>
											<span class="small">Bill</span>
										</a>
										<a href="#" class="btn btn-outline-theme rounded-0 w-150px">
											<i class="bi bi-send-check fa-lg"></i><br>
											<span class="small">Submit Order</span>
										</a>
									</div>
								</div>
							</div>
							<!-- END pos-sidebar-footer -->
						</div>
					</div>
					<!-- END pos-sidebar -->
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
			<!-- END pos -->
			
			<!-- BEGIN pos-mobile-sidebar-toggler -->
			<a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled" data-toggle-target="#pos">
				<i class="bi bi-bag"></i>
				<span class="badge">5</span>
			</a>
			<!-- END pos-mobile-sidebar-toggler -->
		
		<!-- END #content -->
		
		{{-- @@include('./partial/theme-panel.html')
		@@include('./partial/scroll-top-btn.html') --}}
	{{-- </div> --}}
	<!-- END #app -->
	
	<!-- BEGIN #modalPosItem -->
	<div class="modal modal-pos fade" id="modalPosItem">
		<div class="modal-dialog modal-lg">
			<div class="modal-content border-0">
				<div class="card">
					<div class="card-body p-0">
						<a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
						<div class="modal-pos-product">
							<div class="modal-pos-product-img">
								<div class="img" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
							</div>
							<div class="modal-pos-product-info">
								<div class="h4 mb-2">Grill Chicken Chop</div>
								<div class="text-inverse text-opacity-50 mb-2">
									chicken, egg, mushroom, salad
								</div>
								<div class="h4 mb-3">$10.99</div>
								<div class="d-flex mb-3">
									<a href="#" class="btn btn-outline-theme"><i class="fa fa-minus"></i></a>
									<input type="text" class="form-control w-50px fw-bold mx-2 bg-inverse bg-opacity-15 border-0 text-center" name="qty" value="1">
									<a href="#" class="btn btn-outline-theme"><i class="fa fa-plus"></i></a>
								</div>
								<hr class="mx-n4">
								<div class="mb-2">
									<div class="fw-bold">Size:</div>
									<div class="option-list">
										<div class="option">
											<input type="radio" id="size3" name="size" class="option-input" checked>
											<label class="option-label" for="size3">
												<span class="option-text">Small</span>
												<span class="option-price">+0.00</span>
											</label>
										</div>
										<div class="option">
											<input type="radio" id="size1" name="size" class="option-input">
											<label class="option-label" for="size1">
												<span class="option-text">Large</span>
												<span class="option-price">+3.00</span>
											</label>
										</div>
										<div class="option">
											<input type="radio" id="size2" name="size" class="option-input">
											<label class="option-label" for="size2">
												<span class="option-text">Medium</span>
												<span class="option-price">+1.50</span>
											</label>
										</div>
									</div>
								</div>
								<div class="mb-2">
									<div class="fw-bold">Add On:</div>
									<div class="option-list">
										<div class="option">
											<input type="checkbox" name="addon[sos]" value="true" class="option-input" id="addon1">
											<label class="option-label" for="addon1">
												<span class="option-text">More BBQ sos</span>
												<span class="option-price">+0.00</span>
											</label>
										</div>
										<div class="option">
											<input type="checkbox" name="addon[ff]" value="true" class="option-input" id="addon2">
											<label class="option-label" for="addon2">
												<span class="option-text">Extra french fries</span>
												<span class="option-price">+1.00</span>
											</label>
										</div>
										<div class="option">
											<input type="checkbox" name="addon[ms]" value="true" class="option-input" id="addon3">
											<label class="option-label" for="addon3">
												<span class="option-text">Mushroom soup</span>
												<span class="option-price">+3.50</span>
											</label>
										</div>
										<div class="option">
											<input type="checkbox" name="addon[ms]" value="true" class="option-input" id="addon4">
											<label class="option-label" for="addon4">
												<span class="option-text">Lemon Juice (set)</span>
												<span class="option-price">+2.50</span>
											</label>
										</div>
									</div>
								</div>
								<hr class="mx-n4">
								<div class="row">
									<div class="col-4">
										<a href="#" class="btn btn-default h4 mb-0 d-block rounded-0 py-3" data-bs-dismiss="modal">Cancel</a>
									</div>
									<div class="col-8">
										<a href="#" class="btn btn-theme d-flex justify-content-center align-items-center rounded-0 py-3 h4 m-0">Add to cart <i class="bi bi-plus fa-2x ms-2 my-n3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-arrow">
						<div class="card-arrow-top-left"></div>
						<div class="card-arrow-top-right"></div>
						<div class="card-arrow-bottom-left"></div>
						<div class="card-arrow-bottom-right"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END #modalPosItem --> 
@endsection