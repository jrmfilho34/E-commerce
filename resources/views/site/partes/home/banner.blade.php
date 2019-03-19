    <div class="banner">
        <div class="banner_background" style="background-image:url(images/vetores/background2.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img style=" height:350px; width: 340px;" src="{{ asset('')}}.storage/{{ $banner->imagem}}" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">{{ $banner->descricao }}</h1>
                        <div class="banner_price"><span>{{ $banner->preco}}</span>{{ $banner->preco}}</div>
                        <div class="banner_product_name">{{ $banner->titulo}}</div>
                        <div class="button banner_button"><a href="#">Comprar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@yield('banner')