
	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					<!-- Deals -->
					<div class="deals">
						<div class="deals_title">Ofertas da semana</div>
						<div class="deals_slider_container">	
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
						    @foreach($ofertasS as $produto)
								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="{{ asset('')}}storage/{{$produto->Image1}}" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="{{ route('produto',['id'=> $produto->id])}} ">{{ $produto->categoria}}</a></div>
											<div class="deals_item_price_a ml-auto">{{ $produto->preco}}</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">{{ $produto->titulo}}</div>
											<div class="deals_item_price ml-auto">{{ ($produto->preco - $produto->preco*($produto->desconto/100)) }}</div>
										</div>
										<!--<div class="button banner_2_button"><a href="{{ route('produto',['id' => $produto->id])}}">Saiba Mais</a></div>-->
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Avaliação: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Se apresse</div>
												<div class="deals_timer_subtitle">Oferta acaba em:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            @endforeach
							</div>
						</div>
						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
				
		
