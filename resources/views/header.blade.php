<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Medikolo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../assets/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/frontend/css/animate.css">
    
    <link rel="stylesheet" href="../assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/frontend/css/aos.css">

    <link rel="stylesheet" href="../assets/frontend/css/ionicons.min.css">

    <link rel="stylesheet" href="../assets/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/frontend/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="../assets/frontend/css/icomoon.css">
    <link rel="stylesheet" href="../assets/frontend/css/style.css">
  </head>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="{{ url('/') }}">
					  <img src="../assets/medikolo/logo_medikolo.png" height="150" width="180">
					</a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Email: youremail@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">Phone: + 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{url('home')}}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Doctor</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Departments</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Pricing</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
			  @if (Route::has('login'))
                
                    @auth
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
                    @else
                      <li class="nav-item">  <a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                          <li class="nav-item">  <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                
            @endif
              
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->