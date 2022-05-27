<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>COFFE SHOP</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon-32x32.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
           function modal(){

           $("#staticBackdrop").modal('show')
           }

       function  registrar(){
       
       var formElement = document.getElementById("registroU");
       var formData = new FormData(formElement);
  


fetch('http://localhost/yerlincaicedo.github.io/registrar', {
  method: 'POST',
  body: formData
})
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(response => console.log('Success:', response));

       }

    function  Logear(){


       var formElement = document.getElementById("loginU");
       var formData = new FormData(formElement);
     
fetch('http://localhost/yerlincaicedo.github.io/logear', {
  method: 'POST',
  body: formData
})
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(response => console.log('Success:', response));
 
       }
        
        </script>

       <style type="text/css">
           
           .login-wrap{
    width:100%;
    margin:auto;
    margin-top: 3%;
    max-width:525px;
    min-height:670px;
    position:relative;
    background:url(../img/150480225.jpg) no-repeat center;
    box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
    width:100%;
    height:100%;
    position:absolute;
    padding:90px 70px 50px 70px;
    background: rgba(40, 57, 101, 0.62);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
    top:0;
    left:0;
    right:0;
    bottom:0;
    position:absolute;
    transform:rotateY(180deg);
    backface-visibility:hidden;
    transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
    display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
    text-transform:uppercase;
}
.login-html .tab{
    font-size:22px;
    margin-right:15px;
    padding-bottom:5px;
    margin:0 15px 10px 0;
    display:inline-block;
    border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
    color:#fff;
    border-color:#1161ee;
}
.login-form{
    min-height:345px;
    position:relative;
    perspective:1000px;
    transform-style:preserve-3d;
}
.login-form .group{
    margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
    width:100%;
    color:#fff;
    display:block;
}
.login-form .group .input,
.login-form .group .button{
    border:none;
    padding:15px 20px;
    border-radius:25px;
    background: rgba(255, 255, 255, 0.28);
}
.login-form .group input[data-type="password"]{
    text-security:circle;
    -webkit-text-security:circle;
}
.login-form .group .label{
    color: #f8f9fa;
    font-size:12px;
}
.login-form .group .button{
    background:#1161ee;
}
.login-form .group label .icon{
    width:15px;
    height:15px;
    border-radius:2px;
    position:relative;
    display:inline-block;
    background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
    content:'';
    width:10px;
    height:2px;
    background:#fff;
    position:absolute;
    transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
    left:3px;
    width:5px;
    bottom:6px;
    transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
    top:6px;
    right:0;
    transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
    color:#fff;
}
.login-form .group .check:checked + label .icon{
    background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
    transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
    transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
    transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
    transform:rotate(0);
}
       </style> 

    
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Primary Meta Tags -->
        
        <meta name="title" content="Colombian Coffee Shop">
        <meta name="description" content="Un espacio creado para disfrutar de las mejores experiencias alrededor de nuestra bebida colombiana emblemática.">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://metatags.io/">
        <meta property="og:title" content="Colombian Coffee Shop">
        <meta property="og:description" content="Un espacio creado para disfrutar de las mejores experiencias alrededor de nuestra bebida colombiana emblemática.">
        <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://metatags.io/">
        <meta property="twitter:title" content="Colombian Coffee Shop">
        <meta property="twitter:description" content="Un espacio creado para disfrutar de las mejores experiencias alrededor de nuestra bebida colombiana emblemática.">
        <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

        
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Empresa netamente colombiana</span>
                <span class="site-heading-lower">Colombian Coffee Shop</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">COFEE SHOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html">Nosotros</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html">Productos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html">Tienda</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact.html">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4"> 
                            <span class="section-heading-lower">Welcome</span>
                        </h2>
                        <p class="mb-3">Colombian Coffee Shop le ofrece la oportunidad de tomar un excelente café de calidad insuperable, que usted podrá saborear a cualquier hora gracias a una gran variedad de máquinas, que además de diseño, rapidez y limpieza, le ofrecerán la oportunidad perfecta para degustar un producto de calidad superior.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">CONTÁCTANOS</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestra Promesa</span>
                                <span class="section-heading-lower">Para usted</span>
                            </h2>
                            <p class="mb-0">Cuando ingresa a nuestra tienda para comenzar el día, nos dedicamos a brindarle un servicio amable, un ambiente acogedor y sobre todo, excelentes productos elaborados con ingredientes de la más alta calidad. Si no está satisfecho, háganoslo saber y haremos todo lo posible para hacer las cosas bien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer text-faded text-center py-5">
            <section class="footer__container container">
                <nav class="nav nav--footer">
                    <h2 class="footer__title">COLOMBIAN COFFEE SHOP</h2>

                    <ul class="nav__link nav__link--footer">
                        <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="index.html">Inicio</a></li>
                        <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="about.html">Nosotros</a></li>
                        <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="products.html">Productos</a></li>
                        <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="store.html">Tienda</a></li>
                        <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="contact.html">Contacto</a></li>
                        <li class="nav-item px-lg-3"><a class="nav-link text-uppercase"  onclick="modal()" href="#">login</a></li>
        
                    </ul>
                </nav>

                <form class="footer__form" action="https://formspree.io/f/xqkngowp" method="POST">
                    <h2 class="footer__newsletter">Suscribete</h2>
                    <div class="footer__inputs">
                        <input type="email" placeholder="Email:" class="footer__input" name="email" name="name"> 
                        <input type="submit" value="Registrate" class="footer__submit">
                    </div>
                </form>
            </section>

            <section class="footer__copy container">
                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__icons"><img src="./assets/img/facebook.svg" class="footer__img"></a>
                    <a href="https://twitter.com/" target="_blank" class="footer__icons"><img src="./assets/img/twitter.svg" class="footer__img"></a>
                    <a href="https://www.youtube.com/" target="_blank" class="footer__icons"><img src="./assets/img/youtube.svg" class="footer__img"></a>
                </div>

                <h3 class="footer__copyright">Derechos reservados &copy; Programación Web 51160</h3>

            </section>


            
        </footer>
        <!-- Bootstrap core JS-->
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    

<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="login-wrap" ng-controller="myCtrl">
    <div class="login-html">
         <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">login</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">registro</label>
        <div class="login-form">
            <div class="sign-in-htm">
            <form id="loginU">  
                <div class="form-group group">
                    <label for="user" class="label">Email</label>
                    <input id="EmailU" name="mail" type="text" class="form-control input">
                </div>
                <div class="form-group group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass"  name="password"  type="password" class="form-control input" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="form-group group">
                    <button" type="button" class="input button" onclick="Logear()">
                    Logear
                </button">
                </div>
            </form> 
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            <div class="sign-up-htm">
                <form id="registroU">
                
                <div class="form-group group">
                    <label for="user" class="label">Nombres</label>
                    <input id="Nombres" type="text" name="nombre"class="form-control input">
                </div>
               <div class="form-group group">
                    <label for="user" class="label">Apellidos</label>
                    <input id="Apellidos" type="text" name="Apellidos"class="form-control input">
                </div>
                <div class="form-group group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="Email" name="Email" type="text" class="input">
                </div>
                <div class="form-group group">
                    <label for="pass" class="label">Identificacion</label>
                    <input id="identificacion" name="identificacion" type="text" class="form-control input">
                </div>
                <div class="form-group group">
                    <label for="pass" class="label">Password</label>
                    <input id="password" type="password" name="password" class=" form-control input" data-type="password">
                </div>
                
                <div class="form-group  group">
                    <button type="button"class="button"onclick="registrar()">  Registrar</button>  
                </div>
                
    </form>


                        </div>
        </div>
    </div>
</div>


      </div>
      
    </div>
  </div>
</div>

  
 <!--  login y registro -->  


    </body>






</html>
