					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Destaques</li>
									<li>Liquidação</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div> <!-- fim tabs-->
                    
							<!-- Product Panel destaques-->
							<div class="product_panel panel active">
								<div class="featured_slider slider">
									<!-- Slider Item -->
							@foreach($destaque as $item)
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('')}}storage/{{ $item->Image1}}" style=" height: 100px; width: 80px;" alt=""></div>
											<div class="product_content">
												<div class="product_price">{{ $item->preco}}</div>
												<div class="product_name"><div><a href="product.html">{{ $item->titulo}}</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>
							@endforeach
							    </div>
								<div class="featured_slider_dots_cover"></div>
							</div><!-- Fim produto -->


							<!-- Product Panel Liquidacao-->
					        <div class="product_panel panel">
								<div class="featured_slider slider">
									<!-- Slider Item -->
							@foreach($liquidacao as $item)
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('')}}storage/{{ $item->Image1}}" style=" height: 100px; width: 80px;" alt=""></div>
											<div class="product_content">
												<div class="product_price">{{ $item->preco}}</div>
												<div class="product_name"><div><a href="product.html">{{ $item->titulo}}</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>
							@endforeach
							    </div>
								<div class="featured_slider_dots_cover"></div>
							</div><!-- Fim produto -->

						</div> <!-- fim container-->
					</div> <!-- fim destaques -->

				</div>
			</div>
		</div>
	</div>
	@yield('destaques')