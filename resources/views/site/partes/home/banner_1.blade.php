	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" ><img style=" height: 600px; width: 100%;" src="{{ asset('site/images/vetores/background-2.png') }}"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">
            @foreach($banner_1 as $item)
				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">{{ $item->categoria}}</div>
										<div class="banner_2_title">{{$item->titulo}}</div>
										<div class="banner_2_text">{{ $item->descricao}}.</div>
										<div class="rating_r rating_r_4 banner_2_rating">
										<nav id="menu">
											<ul>
												<li><img src="{{ asset('site/images/icons8-star-filled-48.png')}}"style="height: 20px; width: 20px;"></li>
												<li><img src="{{ asset('site/images/icons8-star-filled-48.png')}}"style="height: 20px; width: 20px;"></li>
												<li><img src="{{ asset('site/images/icons8-star-filled-48.png')}}"style="height: 20px; width: 20px;"></li>
												<li><img src="{{ asset('site/images/icons8-star-filled-48.png')}}"style="height: 20px; width: 20px;"></li>
											</ul>
										</nav>
										</div>
										<div class="button banner_2_button"><a href="{{ route('produto',['id' => $item->id])}}">Explore</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img style="height: 400px; width: 350px;" src="{{ asset('')}}storage/{{$item->Image1}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
        @endforeach
			</div>
		</div>
	</div>
	@yield('banner_1')