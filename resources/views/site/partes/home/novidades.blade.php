
	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Novidades</div>
							<ul class="clearfix">
								<li class="active">Feminino</li>
								<li>Masculino</li>
								<li>Infantil e Bebês</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">
                            @foreach($novF as $item)
								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="{{ asset('storage')}}/{{ $item->Image1}}" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">{{ $item->categoria }}</a></div>
											<div class="bestsellers_name"><a href="{{ route('produto',$item->id)}}">{{$item->titulo}}</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">{{ $item->preco}}<span>{{ $item->preco}}</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">Novo</li>
									</ul>
								</div>
							@endforeach
							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">
                            @foreach($novM as $item)
								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="{{ asset('storage')}}/{{ $item->Image1}}" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">{{ $item->categoria }}</a></div>
											<div class="bestsellers_name"><a href="product.html">{{$item->titulo}}</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">{{ $item->preco}}<span>{{ $item->preco}}</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">Novo</li>
									</ul>
								</div>
                            @endforeach
							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">
                            @foreach($novI as $item)
								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="{{ asset('storage')}}/{{ $item->Image1}}" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">{{ $item->categoria }}</a></div>
											<div class="bestsellers_name"><a href="product.html">{{$item->titulo}}</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">{{ $item->preco}}<span>{{ $item->preco}}</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">Novo</li>
									</ul>
								</div>
                            @endforeach
							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>