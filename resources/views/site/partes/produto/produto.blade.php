	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="{{ asset('')}}storage/{{ $elemento->Image1}}"><img src="{{ asset('')}}storage/{{ $elemento->Image1}}" alt=""></li>
						<li data-image="{{ asset('')}}storage/{{ $elemento->image2}}"><img src="{{ asset('')}}storage/{{ $elemento->image2}}" alt=""></li>
						<li data-image="{{ asset('')}}storage/{{ $elemento->Image3}}"><img src="{{ asset('')}}storage/{{ $elemento->image3}}" alt=""></li>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="{{ asset('')}}storage/{{ $elemento->imagem}}" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category">{{ $elemento->categoria}}</div>
						<div class="product_name">{{ $elemento->titulo}}</div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p>{{ $elemento->descricao}}</p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
									<ul class="product_color">
										<li>
											<span>Color: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul>

								</div>

								<div class="product_price">${{ $elemento->preco}}</div>
								<div class="button_container">
									<button type="button" class="button cart_button">Adicionar ao carinho</button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	@yield('produto')