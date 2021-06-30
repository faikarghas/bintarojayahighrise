<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bintaro Jaya High Rise</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    </head>
    <body>
        <header>
            <menu>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <img class="me-5 logo" src="{{asset('/images/logo-BJHR.png')}}" alt="logo" width="80px" srcset="">
                                    <div id="menu-hamburger" class="">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li><img src="{{asset('/images/logo-wa.png')}}" alt="logo" width="40px" srcset=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </menu>
            <div class="header__bannerHome ">
                <img src="{{asset('/images/bannerbjhr.png')}}" alt="" srcset="">
                <div class="header__bannerHome-boxProduct forDesktop">
                    <img src="{{asset('/images/warna1.png')}}" width="20px" alt="logo" srcset="">
                    <img src="{{asset('/images/warna2.png')}}" width="20px" alt="logo" srcset="">
                    <img src="{{asset('/images/warna3.png')}}" width="20px" alt="logo" srcset="">
                    <img src="{{asset('/images/warna4.png')}}" width="20px" alt="logo" srcset="">
                    <img src="{{asset('/images/warna5.png')}}" width="20px" alt="logo" srcset="">
                </div>
                <div class="header__bannerHome-disc"><a href="">Discover More -></a></div>
            </div>
        </header>
        <main page="home">
            <section class="section__firstHome">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="section__firstHome-left">
                                <div class="section__firstHome-left--back"></div>
                                <div class="section__firstHome-left--front">
                                    <img src="{{asset('images/orangmuter.png')}}" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="section__firstHome-right">
                                <div class="title">
                                    <h2>TO REACH FOR</h2>
                                    <h2>THE SKY IS A WAY</h2>
                                    <h2>OF LIFE</h2>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, maxime velit, esse eligendi expedita magni tempore neque ipsam repellat corrupti dicta eum maiores aliquam autem, unde ab minus totam nisi rem veritatis dolor deserunt quam odit. A, laboriosam debitis officia quas consequatur at ipsam? Voluptate odio beatae commodi similique dignissimos enim ex labore ratione odit, ad libero, quibusdam repudiandae voluptas architecto minima exercitationem placeat molestiae quae ducimus provident eaque tenetur. Voluptate, voluptas minima quod sunt aliquam placeat laboriosam illo nisi vel id dolorum cumque aut tenetur molestiae quibusdam laudantium consequatur, corporis, nemo dolores quia. A nesciunt laboriosam labore quod, minus ipsum laborum alias necessitatibus? Provident libero impedit quis sequi ipsum cupiditate aliquid consequatur distinctio odit illo laudantium dolorem, sint laboriosam, harum unde. Amet dignissimos, sunt cumque id veritatis laborum nesciunt provident praesentium consequuntur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__secondHome">
                <div class="section__secondHome-left">
                    <img src="{{asset('images/overview.png')}}" alt="overview">
                    <div class="bg-icon">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                        <img src="{{asset('images/logo-wa.png')}}" width="20px" alt="logo-wa">
                    </div>
                </div>
                <div class="section__secondHome-right">
                    <div class="title">
                        <h2>MORE THAN</h2>
                        <h2>JUST A CLUSTER</h2>
                        <h2>OF SKYSCRAPERS</h2>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit accusantium pariatur eligendi fugiat itaque facilis! Neque repellendus error dolores nemo magni et quos placeat repudiandae numquam, veritatis aliquid qui? Distinctio non iure corrupti. Ut eaque neque nemo itaque. Exercitationem pariatur earum mollitia, nulla provident consectetur quo, esse iste quas adipisci consequuntur necessitatibus ipsam. Quae tenetur labore consectetur quos? Praesentium eligendi sunt repellendus laborum consectetur totam. Laboriosam assumenda porro quaerat eum magnam placeat ipsum earum vitae? Error quisquam officiis, consectetur iure, doloremque doloribus libero distinctio fugiat corporis harum praesentium exercitationem ut.
                    </p>
                    <div class="overview">OVERVIEW</div>
                </div>
            </section>
            <section class="section__thirdHome">
                <div class="box__pilih">
                    <ul class="mainul">
                        <li class="mainul_list">
                            <div class="mainul_list-title">
                                <h4>THE ACCENT</h4>
                            </div>
                            <ul class="mainulv1">
                                <li class="mainulv1_list">
                                    <h4>Entertaiment</h4>
                                </li>
                            </ul>
                        </li>
                        <li class="mainul_list">
                            <div class="mainul_list-title">
                                <h4>CORE CIPETE</h4>
                            </div>
                            <ul class="mainulv1">
                                <li class="mainulv1_list">
                                    <h4>Entertaiment</h4>
                                </li>
                            </ul>
                        </li>
                        <li class="mainul_list">
                            <div class="mainul_list-title">
                                <h4>SILK TOWN</h4>
                            </div>
                            <ul class="mainulv1">
                                <li class="mainulv1_list">
                                    <h4>Entertaiment</h4>
                                </li>
                            </ul>
                        </li>
                        <li class="mainul_list">
                            <div class="mainul_list-title">
                                <h4>APARTMENT EMERALD BINTARO</h4>
                            </div>
                            <ul class="mainulv1">
                                <li class="mainulv1_list">
                                    <h4>Entertaiment</h4>
                                </li>
                            </ul>
                        </li>
                        <li class="mainul_list">
                            <div class="mainul_list-title">
                                <h4>BINTARO PLAZA RESIDENCES</h4>
                            </div>
                            <ul class="mainulv1">
                                <li class="mainulv1_list">
                                    <h4>Entertaiment</h4>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

    </body>
</html>
