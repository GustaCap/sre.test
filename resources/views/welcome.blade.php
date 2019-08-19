<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SagaRealEstate</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- bootstrap and style css --}}
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        
        
        {{-- font awesome --}}
        <link href="{{ asset('fonts/css/all.css') }}" rel="stylesheet" type="text/css">            
    </head>
    <body>
        <header class="viewport">
            <div class="viewport imagen-header">
                    <nav class="navbar navbar-expand-lg static-top nav-menu nav-gradient">
                            <div class="container text-white">
                                <a class="navbar-brand text-white" href="{{ url('/') }}">
                                    SagaRealEstate
                                    {{-- Prueba{{ config('app.name', 'Laravel') }} --}}
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="fas fa-bars text-white icon-size"></span>
                                </button>
                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav mr-auto">
                
                                    </ul>
                
                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about-us">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Contact</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Contact') }}</a>
                                        </li> --}}
                                        
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
            </div>

        </header>

        {{-- Section search --}}
        <section class="searchs" id="searchs">
            <div class="searchs1">
                    <div class="container search">
                            <div class="row justify-content-center">
                                <div class="col-md-3 col-sm-3">
                                    Main Location
                                    </div>
                                <div class="col-md-3 col-sm-3">
                                    Property Status
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        Property Type
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                                <i class="fas fa-search">   Search</i>
                                            </div>
                            </div>
                    </div>
            </div>
        </section>


        {{-- Section services --}}
        <section class="services" id="services">
            <div class="container">
                <div class="card-title text-center mb-5">
                    <h1>Services</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-4">
                            <div class="card text-center card-services">
                                    <figure>
                                            <i class="fas fa-bus icon-service"></i>
                                    </figure>
                                    <div class="card-body">
                                      <h5 class="card-title">Live Customizer</h5>
                                      <p class="card-text">To help you configure and customize stuff around your website without going into code. You can customize the price format to any currency in the world. You can customize the URL slugs to your required ones.</p>
                                    </div>
                                  </div>

                        </div>
                    <div class="col-md-4 col-sm-4">
                            <div class="card text-center card-services">
                                    <figure>
                                            <i class="fas fa-bus icon-service"></i>
                                    </figure>
                                    <div class="card-body">
                                      <h5 class="card-title">Live Customizer</h5>
                                      <p class="card-text">To help you configure and customize stuff around your website without going into code. You can customize the price format to any currency in the world. You can customize the URL slugs to your required ones.</p>
                                    </div>
                                  </div>
                        
                        </div>
                        <div class="col-md-4 col-sm-4">
                                <div class="card text-center card-services">
                                        <figure>
                                                <i class="fas fa-bus icon-service"></i>
                                        </figure>
                                        <div class="card-body">
                                          <h5 class="card-title">Live Customizer</h5>
                                          <p class="card-text">To help you configure and customize stuff around your website without going into code. You can customize the price format to any currency in the world. You can customize the URL slugs to your required ones.</p>
                                        </div>
                                      </div>
                        
                            </div>
                </div>
            </div>
        </section>

        {{-- Section publicidad --}}
        <section>
                <div class="image1234 text-center text-white">
                        <div class="container">
                    {{-- <div class="text1 text-center text-white"> --}}
                            <h2><strong>Looking to Buy a new property or Sell an existing one? RealHomes provides an awesome solution!</strong></h2>
                            <h2>Texto entre secciones</h2>
                        {{-- </div> --}}
                    </div>
                </div>
        </section>


        {{-- Section about us --}}
        <section class="about-us" id="about-us">
            <div class="container">
                <div class="card card-about">
                    <div class="card-title text-center mt-5">
                        <h1>About Us</h1>
                        </div>
                            <div class="card-body p-5 text-center">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore mollitia delectus veniam laboriosam eos consequuntur nostrum earum. Quae eius quaerat optio porro eaque iste voluptatem tenetur asperiores sit nesciunt.</p>
                                </div>
                    </div>
                </div>
        </section>


        {{-- Section For sale --}}
        <section class="for-sale" id="for-sale">
                <div class="container pb-5">
                        <div class="card-title text-center card-forsale mb-5">
                            <h5>Properties</h5>
                            <h1>For Sale</h1>
                            <span>Check out latest properties for sale.</span>
                            </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-4">
                            
                                <div class="card">
                                        <img class="card-img-top" src="https://images.pexels.com/photos/2606523/pexels-photo-2606523.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                      </div>


                            </div>
                            <div class="col-md-4 col-sm-4">
                                    <div class="card">
                                            <img class="card-img-top" src="https://images.pexels.com/photos/2677398/pexels-photo-2677398.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                            <div class="card-body">
                                              <h5 class="card-title">Card title</h5>
                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                              <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                          </div>
                            
                                </div>
                                <div class="col-md-4 col-sm-4">
                                        <div class="card">
                                                <img class="card-img-top" src="https://images.pexels.com/photos/297985/pexels-photo-297985.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                            
                                    </div>
                        </div>
                    </div>
        </section>


         {{-- Section publicidad --}}
         {{-- <section>
                <div class="image123456 text-center text-white">
                        <div class="container">
                    
                            <h2><strong>Looking to Buy a new property or Sell an existing one? RealHomes provides an awesome solution!</strong></h2>
                            <h2>Texto entre secciones</h2>
                        
                    </div>
                </div>
        </section> --}}


        {{-- Section For rent --}}
        <section class="for-rent mb-5" id="for-sale">
                <div class="container mb-5 pb-5">
                        <div class="card-title text-center card-forrent mb-5">
                            <h5>Properties</h5>
                            <h1>For Rent</h1>
                            <span>Check out latest properties for sale.</span>
                            </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-4">
                            
                                <div class="card">
                                        <img class="card-img-top" src="https://images.pexels.com/photos/2606523/pexels-photo-2606523.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                      </div>


                            </div>
                            <div class="col-md-4 col-sm-4">
                                    <div class="card">
                                            <img class="card-img-top" src="https://images.pexels.com/photos/2677398/pexels-photo-2677398.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                            <div class="card-body">
                                              <h5 class="card-title">Card title</h5>
                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                              <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                          </div>
                            
                                </div>
                                <div class="col-md-4 col-sm-4">
                                        <div class="card">
                                                <img class="card-img-top" src="https://images.pexels.com/photos/297985/pexels-photo-297985.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                            
                                    </div>
                        </div>
                    </div>
        </section>


        {{-- Section publish your property --}}
        <section class="about-us" id="about-us">
                <div class="container">
                    <div class="card card-about mb-5">
                        <div class="card-title text-center mt-5">
                            <h1>Publish your property</h1>
                            </div>
                                <div class="card-body p-5 text-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore mollitia delectus veniam laboriosam eos consequuntur nostrum earum. Quae eius quaerat optio porro eaque iste voluptatem tenetur asperiores sit nesciunt.</p>
                                    </div>
                                    <div class="botton1 text-center">
                                        <a href="#" class="btn btn-primary">Publich Here!</a>
                                        </div>
                        </div>
                    </div>
            </section>


            {{-- Section publicidad --}}
         <section>
                <div class="image12345678 text-center text-white">
                        <div class="container">
                    {{-- <div class="text1 text-center text-white"> --}}
                            <h2><strong>Looking to Buy a new property or Sell an existing one? RealHomes provides an awesome solution!</strong></h2>
                            <h2>Texto entre secciones</h2>
                        {{-- </div> --}}
                    </div>
                </div>
        </section>


         {{-- Section partners --}}
         <section class="partners" id="partners">
                <div class="container partners mb-5">
                    <div class="card card-about">
                        <div class="card-title text-center mt-5">
                            <h5>Our</h5>
                            <h1>Partners</h1>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-3 col-sm-3">
                                        <img class="card-img-top partners" src="https://mediad.publicbroadcasting.net/p/shared/pmp/styles/x_large/pmpshared/201807/4bdb31a8-b4cf-446a-9e3a-222f4a549a93.jpg" alt="Card image cap">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                        <img class="card-img-top partners" src="https://imgcy.trivago.com/f_auto,q_auto/hardcodedimages/logo_fb.png" alt="Card image cap">
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                            <img class="card-img-top partners" src="https://pbs.twimg.com/media/DmVuuXGW4AAyDwb.jpg" alt="Card image cap">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                                <img class="card-img-top partners" src="https://img.freepik.com/free-vector/travel-concept-with-landmarks_1057-4873.jpg?size=338&ext=jpg" alt="Card image cap">
                                            </div>
                            </div>
                        </div>
                    </div>
            </section>


            {{-- Section partners --}}
         <section class="footer-sre" id="footer-sre">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-sm-3 bg-color-1">
                            Logo Saga Real Estate
                        </div>
                        <div class="col-md-3 col-sm-3 bg-color-2">
                            Contactos
                            </div>
                            <div class="col-md-3 col-sm-3 bg-color-3">
                                Servicios
                                </div>
                                <div class="col-md-3 col-sm-3 bg-color-4">
                                    Propaganda
                                    </div>
                    </div>
                   
                        </div>
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-sm-12 text-white text-center bg-color-5">
                                    
                                    <p class="mt-5">Copyright ©2019 All rights reserved | This template is made with by Colorlib</p>
                                
                                </div>

                            </div>
                            
                        </div>
                    </div>
            </section>


        

        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
