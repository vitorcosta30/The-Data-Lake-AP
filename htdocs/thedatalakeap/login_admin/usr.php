<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>The Data Lake AP - Gestão de Utilizadores</title>

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

                  <a href="login_admin.php" class="aa-login">Admin</a>
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
           <a class="" href="index.php"><img src="img/logo.png" width="100px" height="100px" alt="logo"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li ><a href="index.php">Inicio</a></li>
             <li>
              <a   href="properties.php"> Artigos </a>
            </li>

            <li><a href="contact.html">Contactos</a></li>
               <li class="active"><a href="usr.php">Gerir utilizadores</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>

  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Gestão de Utilizadores</h2>
            <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>            
            <li class="active">Gestão de utilizadores</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  
            <?php 
 $ligax = mysqli_connect('localhost', 'root', '');
 if (!$ligax) {echo '<p> Falha na ligaï¿½ï¿½o.</p>';}
 mysqli_select_db($ligax, 'thedatalakeap');
 $consulta = "Select * From users";
 $result = mysqli_query($ligax, $consulta);
 $nregistos = mysqli_num_rows($result);


?>
 <!-- .$registo['portas']. -->
 <!-- .$registo['combustivel']. -->
               <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
               <center><h2>Criar Utilizadores</h2></center>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                           <form name="insert_usr" method ="POST" action="insert_usr.php" enctype="multipart/form-data">
                              
                                ID de utilizador
                               <input type="text" name="id" value="">
                                <br>
                               <br>
                               <br>
                               Password
                               <input type="password" name="pass" values="">
                               <br>
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
      <br>
         </section>
    
                     <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
             <center><h2>Eliminar Utilizadores</h2></center>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                           <form name="carros" method ="POST" action="delete_user.php" enctype="multipart/form-data">
                                                ID do Utilizador
                                                <select name="user">
                          
                                 <?php
                                  for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);   
                                echo ' <option value="'.$registo['usr_id'].'">'.$registo['usr_id'].'</option>';
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
                 

                 
          
              
                
          
            </div> 
            <!-- Start Single properties sidebar -->
 
          <!--</aside>-->
        </div>
      </div>
    </div>

  </section>

  <!-- / Properties  -->

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