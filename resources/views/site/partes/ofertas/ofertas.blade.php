<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categorias</div>
							<ul class="sidebar_categories">
								<li><a href="{{ route('categoria',['categoria'=>'Feminino']) }}">Feminino</a></li>
								<li><a href="{{ route('categoria',['categoria'=>'Masculino']) }}">Masculino</a></li>
								<li><a href="{{ route('categoria',['categoria'=>'Infantil']) }}">Infantil</a></li>
								<li><a href="{{ route('categoria',['categoria'=>'Bebe']) }}">Bebê</a></li>
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Fitro</div>
							<div class="sidebar_subtitle">Preço</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Valor: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{ $total}}</span> Total de Produtos</div>
							<div class="shop_sorting">
								<span>Ordenar por:</span>
								<ul>
									<li>
										<span class="sorting_text">Melhores avaliados<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>Melhores avaliados</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>Nome</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>Preço</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>
                        @foreach($produtos as $elemento)
							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
		                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('storage')}}\{{ $elemento->Image1}}" alt=""></div>
								<div class="product_content">
									<div class="product_price">{{ $elemento->preco }}</div>
									<div class="product_name"><div><a href="#" tabindex="0">{{ $elemento->titulo }}</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">{{ $elemento->desconto }}</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
                         @endforeach
						</div>

						<!-- Shop Page Navigation -->
                        {{ $produtos->links() }}

					</div>

				</div>
			</div>
		</div>
	</div>