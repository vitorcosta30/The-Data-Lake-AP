<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>The Data Lake AP |Inicio</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    919619877
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> thedatalakeap@gmail.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">

                  <a class="aa-login">Bastidores</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
   <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->

          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <!--<a class="navbar-brand aa-logo" href="index.html"> stand_<span>carros</span></a>-->
           <!-- Image based logo -->
           <a class="" href="index.php"><img src="img/logo.png" height="100px" width="100px" alt="logo"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
             <li >
              <a   href="properties.php"> Artigos </a>
            </li>
                                        

            <li><a href="contact.html">Contactos</a></li>
            <li><a href="usr.php">Gerir utillizadores</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/capa.jpg" alt="img">
          <!-- Top slider content -->
                     <div class="aa-top-slider-content">
                  <h2 style="background-color: transparent;">Bem Vindo, Administrador!</h2>
                  <p>Aqui pode adicionar novos artigos, assim como elimina-los.</p>
          <!-- / Top slider content -->
            </div>  
          <!-- / Top slider content -->
 
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <center><h2>Inserir Artigos</h2></center>
            <?php 
 $ligax = mysqli_connect('localhost', 'root', '');
 if (!$ligax) {echo '<p> Falha na ligação.</p>';}
 mysqli_select_db($ligax, 'thedatalakeap');
 $consulta = "Select * From insert_data";
 $result = mysqli_query($ligax, $consulta);
 $nregistos = mysqli_num_rows($result);


?>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                           <form name="carros" method ="POST" action="inserircarros.php" enctype="multipart/form-data">
                              
                                 Titulo
                               <input type="text" style="width: 750px" name="title" value="">
                               <br>
                                
                                 Sub-Titulo
                               <input type="text" style="width: 750px" name="descricao" value="" >
                               <br>
                                 Imagem
                               <input type="file" name="foto1" value="" >
                               <br>




                                <select name="seccao">
                                <option >Secção</option>
                                                             <?php
    for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);
                                echo '<option value="'.$registo['seccao'].'">'.$registo['seccao'].'</option>';
}

?>                               </select>
                                 <br>
                                             <?php 
 $ligax = mysqli_connect('localhost', 'root', '');
 if (!$ligax) {echo '<p> Falha na ligação.</p>';}
 mysqli_select_db($ligax, 'thedatalakeap');
 $consulta = "Select * From users";
 $result = mysqli_query($ligax, $consulta);
 $nregistos = mysqli_num_rows($result);


?>
                                <select name="autor">
                                 <option >Autor</option>
                                 <?php
                                  for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);   
                                echo ' <option value="'.$registo['usr_id'].'">'.$registo['usr_id'].'</option>';
                              }
?>
 </select>
                                Conteudo
                               <textarea  cols="20" type="text"  style="height:200px;width: 800px" name="content" value=""></textarea>
                               <br>
                                
                                Palavras Chave
                               <textarea  cols="20" type="text"  style="height:200px;width: 800px" name="key" value="" ></textarea>
                               <br>
  


                                
                                 <br>


                               Codigo Especial
                               <textarea  cols="20" type="text"  style="height:200px;width: 800px" name="special_code" value=""></textarea>
                               <br>

                               <br>
                               <br>
                                  
                   <input  class="aa-search-btn" type="submit" value="Submeter">
                  </form>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        
          <br>
          <br>
          <br>
          <br>
          <br>
      </section>
           <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <center><h2>Eliminar Artigos</h2></center>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                                                               <?php 
 $ligax = mysqli_connect('localhost', 'root', '');
 if (!$ligax) {echo '<p> Falha na ligação.</p>';}
 mysqli_select_db($ligax, 'thedatalakeap');
 $consulta = "Select * From articles";
 $result = mysqli_query($ligax, $consulta);
 $nregistos = mysqli_num_rows($result);


?>
                           <form name="carros" method ="POST" action="eliminar.php" enctype="multipart/form-data">
                              
                                Titulo
                                                           <select name="id">
                               
                                 <?php
                                  for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);   
                                echo ' <option value="'.$registo['ID'].'">'.$registo['titulo'].'</option>';
                              }
?>
 </select>
                                <br>
                               <br>
                               <br>

                                
                            
                                  
                    <input  class="aa-search-btn" type="submit" value="Submeter">
                  </form>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
         </section>
        
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="img/signin-bg.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>Sobre o projeto</h2>
                    <span></span>
                  </div>
                  <p>Este projeto é uma formação com o objetivo de formar pessoas sobre os assuntos abaixo referidos.</p>                  
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

  <!-- Latest property -->

  <!-- / Latest property -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Assuntos abordados na formação</h2>
              <span></span>
             
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-cloud"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Big Data</a></h4>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Bussiness Intelligence</a></h4>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-database"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Open Data</a></h4>
                      <p> </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-file-code-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Open Source</a></h4>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  <!-- / Service section -->

  <!-- Promo Banner Section -->

  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->
 
                
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->

  <!-- Client Testimonial -->

  <!-- Client brand -->
 
  <!-- / Client brand -->

  <!-- Latest blog -->
  <!-- / Latest blog -->

  <!-- Footer -->
  
  <!-- / Footer -->

 
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>