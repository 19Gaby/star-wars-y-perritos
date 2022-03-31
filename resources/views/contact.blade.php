<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>StarWars</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="{{route('inicio')}}" class="navbar-brand">Star Wars Fans</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{route('saga')}}">Sobre la saga</a></li>
                    <li><a href="{{route('personajes')}}">Personajes</a></li>
                    <li><a href="{{route('contactanos')}}">Te puede interesar</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-contact parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Te puede interesar</h1>
               </div>

          </div>
     </div>
</section>



<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

          <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Gabriela Menendez Gomez</h3>
                    <p>A continuacion una API que te puede interesar</p>
                    
                    @foreach ($Perro as $perrito)
                    <img src="{{$perrito}}" class="img-responsive" alt="Blog Image">
                  @endforeach
                    <div class="footer-copyright">
                         
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Contactame! c:</h3>
                    <p><i class="fa fa-globe"></i> instagram: gaby_mg</p>
                    <p><i class="fa fa-save"></i> fotoprueba8@gmail.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="https://www.facebook.com/CajetaChurro" class="fa fa-facebook"></a></li>
                         <li><a href="https://www.linkedin.com/in/menendez-gomez-gabriela-1b51a0213/" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>