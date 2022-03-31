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
               <a href="index.html" class="navbar-brand">Star Wars fans</a>
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

<section id="home" class="main-home parallax-section">
     
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
          
               <div class="col-md-12 col-sm-12">
               
                    <h1>STAR WARS</h1>
                    <h4>BLOG PARA FANS</h4>
                    <a href="{{route('saga')}}" class="smoothScroll btn btn-default">Ver mas</a>
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   
                                   <img src="images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">¿Sobre que trata?</a></h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>Star Wars conocida en español como ‘La guerra de las galaxias’ es una saga de películas pertenecientes al género de la opera espacial. Los acontecimientos tienen lugar en una galaxia ficticia de nombre desconocido y en un tiempo no especificado —solo se dice que fue «hace mucho tiempo, en una galaxia muy muy lejana»—. En esta galaxia conviven junto a la raza humana multitud de especies extraterrestres que proceden de diferentes planetas y satélites, los robots y androides son personajes con gran relevancia dentro de este universo.

Las primeras películas fueron creadas por el director de cine estadounidense George Lucas. En el año 2012 The Walt Disney Company adquirió LucasFilm, la productora propiedad de George Lucas con la intención de producir sus propias películas.</p>
                              <a href="{{route('saga')}}" class="btn btn-default">Continua leyendo</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image2.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Sagas</a></h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>'Episodio IV: Una nueva esperanza' (1977)</p>
<p>'Episodio V: El imperio contraataca' (1980)</p>
<p>'Episodio VI: El regreso del Jedi' (1983)</p>
<p>'Episodio I: La amenaza fantasma' (1999)</p>
<p>'Episodio II: El ataque de los clones' (2002)</p>
<p>'Episodio III: La venganza de los Sith' (2005)</p>
<p>'Episodio VII: El despertar de la fuerza' (2015)</p>
<p>'Rogue One' (2016)</p>
<p>'Episodio VIII: Los últimos Jedi' (2017)</p>
<p>'Han Solo' (2018)</p>
<p>'Episodio IX: El ascenso de Skywalker' (2019)</p>
                              <a href="{{route('saga')}}" class="btn btn-default">Continua leyendo</a>
                         </div>
                    </div>

                    

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image3.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="{{route('personajes')}}">Personajes principales</a></h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="{{route('personajes')}}"class="btn btn-default">Continua leyendo</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image4.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="{{route('personajes')}}">Datos curiosos</a></h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>1. Darth Vader tiene la voz y cuerpo de diferentes actores</p>
                              <p>2. El «Maestro Yoda» sería protagonizado por un mono, algo muy distinto a lo que conocemos hoy</p>
                              <p>3. Los estrenos de cada entrega eran regalos de cumpleaños para George Lucas</p>
                              <p>4. El sable de luz es un factor muy importante en la historia </p>
                              <p>5. Luke Skywalker iba a pertenecer al lado oscuro</p>
                              <p>6. No quieren a Darth Vader en los eventos de Star Wars</p>
                              <p>7. Chewbacca es inspiración de un Alaskan Malamute</p>
                              
                              <a href="{{route('personajes')}}" class="btn btn-default">Continuar leyendo</a>
                         </div>
                    </div>
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
                    <p>¡¡Muchas gracias por ver el blog!!.Este blog se lo dedico a mi Padre, amante de la saga Star Wars</p>
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
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>