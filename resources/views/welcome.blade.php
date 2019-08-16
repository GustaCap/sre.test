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
        <section class="for-sale mb-5" id="for-sale">
                <div class="container mb-5 pb-5">
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
         <section>
                <div class="image123456 text-center text-white">
                        <div class="container">
                    {{-- <div class="text1 text-center text-white"> --}}
                            <h2><strong>Looking to Buy a new property or Sell an existing one? RealHomes provides an awesome solution!</strong></h2>
                            <h2>Texto entre secciones</h2>
                        {{-- </div> --}}
                    </div>
                </div>
        </section>


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
                <div class="container">
                    <div class="card card-about">
                        <div class="card-title text-center mt-5">
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
                                            <img class="card-img-top partners" src="data:image/png;base64,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" alt="Card image cap">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                                <img class="card-img-top partners" src="https://img.freepik.com/free-vector/travel-concept-with-landmarks_1057-4873.jpg?size=338&ext=jpg" alt="Card image cap">
                                            </div>
                            </div>
                        </div>
                    </div>
            </section>


            {{-- Section partners --}}
         <section class="partners" id="partners">
                <div class="container">
                   
                        </div>
                    </div>
            </section>


        

        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
