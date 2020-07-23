<!DOCTYPE html>
<html lang="en">
  <head>
        <?php  
 $ident = $_GET['id'];
 //$nomeproc2 = $_POST['tipo'];

 $ligax = mysqli_connect('localhost', 'root','');
 if (!$ligax){echo "<p> Falha na ligação."; exit; }
 mysqli_select_db($ligax, 'thedatalakeap');
 $procura = "Select * from articles
            where ID = '$ident'";
 $result = mysqli_query($ligax, $procura);
 $nregistos = mysqli_num_rows($result);

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
                <?php
 for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);  
    echo '<title>The Data Lake AP - '.$registo['seccao'];
    echo '</title>';
       }
           ?>
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
  <body>
          <?php  
 $ident = $_GET['id'];
 //$nomeproc2 = $_POST['tipo'];

 $ligax = mysqli_connect('localhost', 'root','');
 if (!$ligax){echo "<p> Falha na ligação."; exit; }
 mysqli_select_db($ligax, 'thedatalakeap');
 $procura = "Select * from articles
            where ID = '$ident'";
 $result = mysqli_query($ligax, $procura);
 $nregistos = mysqli_num_rows($result);

?>
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
           <!--<a class="navbar-brand aa-logo" href="index.html"> stand_<span>carros</span></a> -->
           <!-- Image based logo -->
           <a class="" href="index.php"><img src="img/logo.png" height="100px" width="100px" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li ><a href="index.php">Inicio</a></li>
             <li >
              <a   href="properties.php"> Artigos </a>
            </li>
             <!--class="active"-->                           

            <li ><a  href="contact.html">Contactos</a></li>

          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>

  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <?php
              for ($i=0; $i <$nregistos; $i++)  {
              $registo = mysqli_fetch_assoc($result);
                echo '<section id="aa-property-header">';
                echo '<div class="container">';
                echo  '<div class="row">';
                echo   '<div class="col-md-12">';
                echo    '<div class="aa-property-header-inner">';
                echo '<h2>'.$registo['titulo'].'</h2>';
                echo   '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
                echo '<section id="aa-contact">';
                echo   '<div class="container">';
                echo ' <div class="row">';
                echo '<div class="col-md-12">';
                echo '<div class="aa-contact-area">';
                echo '<div class="aa-contact-top">';

                echo '<center>';
                echo '<img src="login_admin/carros/'.$registo['img'].'" width="50%" height="50%" frameborder="0" >';
                echo '</center>';
                echo '<br>';
                echo '<br>';
                echo '<br>';

                echo '<div class="aa-contact-top-right" style="align: center; width: 1000px;">';
                echo '<h3>'.$registo['desenv'].'</h3>';
                echo '<p>'.$registo['content'].'</p>';
                echo '<br>';
                echo '<br>';
                echo '<center>';
                echo '<p>'.$registo['special_code'].'</p>';
                echo '</center>';
                echo '<ul class="contact-info-list">';
                echo '<center>';
                echo '<h1 style="color:#00CED1;">Partilhar</h1>';
                echo '</center>';
                echo '<div id="share-buttons">';
                echo '<center>';

                

                
                
                echo '<a href="mailto:?Subject=Artigo Sobre '.$registo['seccao'].'&amp;Body=O Artigo é '.$registo['titulo'].'  http://localhost/thedatalakeap/single_post.php?id='.$ident.'&submit=Ler+mais">';
                 echo   '<img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />';
                echo '</a>';
             
           
                echo '<a href="http://www.facebook.com/sharer.php?u="http://localhost/thedatalakeap/single_post.php?id='.$ident.'&submit=Ler+mais"" target="_blank">';
                   echo' <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />';
                echo '</a>';
                

                
               
                echo '<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://localhost/thedatalakeap/single_post.php?id='.$ident.'&submit=Ler+mais" target="_blank">';
                echo   '<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />';
                    echo '</a>';
                
                

                
                
                echo '<a href="javascript:;" onclick="window.print()">';
                echo   '<img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />';
                    echo '</a>';
                
                
                echo '<a href="http://reddit.com/submit?url=http://localhost/thedatalakeap/single_post.php?id='.$ident.'&submit=Ler+mais" target="_blank">';
                echo '<img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />';
                echo '</a>';
                


                 

               echo '<a href="https://twitter.com/share?url=http://localhost/thedatalakeap/single_post.php?id='.$ident.'&submit=Ler+mais" target="_blank">';
                    echo'<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />';
                echo'</a>';
                

                
                echo '</center>';
                echo '</div>';
                echo  '<li> <i class="fa fa-phone"></i> 919619877</li>';
                echo '<li> <i class="fa fa-envelope-o"></i>  thedatalakeap@gmail.com</li>';
                echo '</ul>';
                echo '<br>';

                echo  '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
              }
           ?>


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