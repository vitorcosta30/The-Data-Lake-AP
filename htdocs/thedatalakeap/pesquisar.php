<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>The Data Lake AP| Anuncios</title>

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

           <!-- Image based logo -->
           <a class="" href="index.html"><img src="img/logo.png" width="100px" height="100px" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li ><a href="index.php">Inicio</a></li>
             <li class="active">
              <a   href="properties.php"> Artigos </a>
            </li>
                                        

            <li><a href="contact.html">Contactos</a></li>

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
            <h2>Artigos</h2>
            <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>            
            <li class="active">Artigos</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">
            <!-- start properties content head -->
            <div class="aa-properties-content-head">              

              <div class="aa-properties-content-head-right">
                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
              </div>            
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body">
            <ul class="aa-properties-nav">
<?php  
 $sec = $_GET['seccao'];
 $aut = $_GET['autor'];

 $ligax = mysqli_connect('localhost', 'root','');
 if (!$ligax){echo "<p> Falha na ligação."; exit; }
 mysqli_select_db($ligax, 'thedatalakeap');
 $procura = "Select * from articles
            where autor like'%".$aut."%' or seccao like'%".$sec."%' ";
 $result = mysqli_query($ligax, $procura);
 $nregistos = mysqli_num_rows($result);

?>

            <?php
    for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);

   echo '<li>';
   echo '<article class="aa-properties-item">';
   echo '<a class="aa-properties-item-img" href="#">';
   echo '<p><img src="login_admin/carros/'.$registo['img'].'"width="480px" height="270px"></p>';
   echo '</a>';
   echo '<div class="aa-tag for-rent">';
   echo '<a>'.$registo['data'].'</a>';
   echo '</div>';
   echo '<div class="aa-properties-item-content">';
   echo '<div class="aa-properties-info">';
   echo '<span>'.$registo['keywords'].'</span>';
   echo '<span></span>';
   echo '<span></span>';                      
   echo '<span>Por '.$registo['autor'].'</span>';
   echo '</div>';
   echo '<div class="aa-properties-about" style="height: 250px;">';
   echo '<h3>'.$registo['titulo'].'</h3>';
   echo '<p>'.$registo['desenv'].'</p>';
   echo '</div>';
   echo '<div class="aa-properties-detial">';
   echo '<span class="aa-price">';
   echo '<p>Categoria: '.$registo['seccao'].'</p>';
   echo '</span>';
   //echo '<div class="col-md-2">';
   //echo '<div class="aa-single-advance-search">';
   echo ' <form action="single_post.php" method ="GET" >';
   echo '<input type="hidden" name="id" value="'.$registo['ID'].'">';
   //echo '<a class="aa-secondary-btn" href="#">';
   echo '<input class="aa-secondary-btn" type="submit" value="Ler mais" name="submit">';
   //echo '</a>';
   //echo 'Ver detalhes';
   //echo '</a>';
   echo '</form>';
   echo '</div>';
   //echo '</div>';
   //echo '</div>'; 
   echo '</div>';
   echo '</article>'; 
   echo '</li>';

 }
?>
              </ul>
            </div> 
            <!-- Start Single properties sidebar -->
 
        
        </div>
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