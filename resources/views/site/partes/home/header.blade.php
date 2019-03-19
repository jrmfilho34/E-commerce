<header class="header">
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('site/images/phone.png')}}" alt=""></div>+49 999771330</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('site/images/mail.png')}}" alt=""></div><a href="mailto:letimodas@letimodas.com.br">letimodas@letimodas.com.br</a></div>
                    @if (Route::has('login'))
                        @auth
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li>
                                        <a href="#">Painel ADM<i class="fas fa-chevron-down"></i></a>
                                       <!-- <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>-->
                                    </li>
                                </ul>
                            </div>
                        @endauth
                    @endif
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="{{ asset('site/images/user.svg')}}" alt=""></div>
                                <div><a href="#">Registro</a></div>
                                <div><a href="/login">Entrar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="{{ route('inicio') }}"><img style="height: 140px; width: 190px;" src="{{ asset('site/images/vetores/logo2.png')}}"></a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input" placeholder="Encontre o que está procurando ...">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list">
                                                <span class="custom_dropdown_placeholder clc">Todas as Categorias</span>
                                                <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">Todas as Categorias</a></li>
                                                    <li><a class="clc" href="#">Feminino</a></li>
                                                    <li><a class="clc" href="#">Masculino</a></li>
                                                    <li><a class="clc" href="#">Infantil</a></li>
                                                    <li><a class="clc" href="#">Bebê</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('site/images/search.png')}}" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="{{ asset('site/images/heart.png')}}" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Lista de desejos</a></div>
                                    <div class="wishlist_count">115</div>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="{{ asset('site/images/cart.png')}}" alt="">
                                        <div class="cart_count"><span>10</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="{{ route('carinho') }}">Carinho</a></div>
                                        <div class="cart_price">$85</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <div class="cat_burger"><span></span><span></span><span></span></div>
                                    <div class="cat_menu_text">Categorias</div>
                                </div>

                                <ul class="cat_menu">
                                    <li><a href="{{ route('categoria',['categoria'=>'Feminino']) }}">Feminino<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                    <li><a href="{{ route('categoria',['categoria'=>'Masculino']) }}">Masculino<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="{{ route('categoria',['categoria'=>'Infantil']) }}">Infantil<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="{{ route('categoria',['categoria'=>'Bebe']) }}">Bebê<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </div>

                            <!-- Main Nav Menu -->

                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="{{ route('inicio')}}">Home<i class="fas fa-chevron-down"></i></a></li>
                                    <li class="hassubs">
                                        <a href="{{ route('categoria',['categoria'=>'Ofertas']) }}">Ofertas<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('categoria',['categoria'=>'Feminino']) }}">Feminino<i class="fas fa-chevron-down"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('categoria',['categoria'=>'Masculino']) }}">Masculino<i class="fas fa-chevron-down"></i></a></li>
                                            <li>
                                                <a href="{{ route('categoria',['categoria'=>'Infantil']) }}">Infantil<i class="fas fa-chevron-down"></i></a></li>
                                            <li>
                                                <a href="{{ route('categoria',['categoria'=>'Bebe']) }}">Bebê<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Novidades<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Mais procurados<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="{{ route('contato') }}">Contato<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </div>

                            <!-- Menu Trigger -->

                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Menu -->

        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="page_menu_content">
                            
                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item">
                                    <a href="inicio">Home<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="{{ route('categoria',['categoria'=>'Ofertas']) }}">Ofertas<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="{{ route('categoria',['categoria'=>'Feminino']) }}">Feminino<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="{{ route('categoria',['categoria'=>'Masculino']) }}">Masculino<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="{{ route('categoria',['categoria'=>'Infantil']) }}">Infantil<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="{{ route('categoria',['categoria'=>'Bebe']) }}">Bebê<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="#">Novidades<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="#">Mais procurados<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="{{ route('contato') }}">Contatos<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                            
                            <div class="menu_contact">
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('site/images/phone_white.png')}}" alt=""></div>+38 068 005 3570</div>
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('site/images/mail_white.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    @yield('header')