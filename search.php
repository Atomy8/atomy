<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Search results</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="css/fonts.css" type="text/css" media="all"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">


    <script src="js/jquery.js"></script>
	<script src="search/search.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>


     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/scroll_to_top.js"></script>
     <script src="js/script.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/touchTouch.jquery.js"></script>
     <script src="js/tmStickUp.js"></script>





     <!-- font-awesome font -->
    <link rel="stylesheet" href="fonts/font-awesome.css" type="text/css" media="screen">
    <!-- fontello font -->

<!--[if lt IE 9]>
     <div style=' clear: both; text-align:center; position: relative;'>
      <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
      </a>
    </div>
   <![endif]-->
   <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
   <![endif]-->
</head>
<body>
<!--button back top-->
<div id="back-top"><i class="fa fa-chevron-up"></i></div>    
<div class="main">
  <div class="div-content content_page2">  



<!--==============================header=================================-->
      <div id="stuck_container">
        <header class="content_header">
          <div class="menu_holder">
            <div class="container">
              <div class="row">
                <div class="grid_3">
                  <h1><a href="index.html"><img src="images/logo.png" alt="US School District "></a></h1>
                </div>

                <div class="grid_7">
                  <nav>
                    <ul class="sf-menu header_menu">
                      <li><a href="index.html">Home<strong></strong></a></li>
                      <li><a href="index-1.html"><span></span>About District<strong></strong></a>
                          <ul class='submenu'>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Conse ctetur adipisicing</a></li>
                            <li class='sub-menu'><a href="#">Elit sed do eiusmod tempor</a>
                               <ul class='submenu2'>
                                  <li><a href="#">Fresh</a></li>
                                  <li><a href="#">Archive</a></li>
                               </ul>
                            </li>
                            <li><a href="#">Incididunt ut labore </a></li>
                            <li><a href="#">Et dolore magna aliqua</a></li>
                          </ul>
                       </li>
                       <li><a href="index-2.html">Departments<strong></strong></a></li>
                       <li><a href="index-3.html">News<strong></strong></a></li>
                       <li id="last-li"><a href="index-4.html">Contacts<strong></strong></a></li>
                    </ul>
                  </nav>
                </div>

                <div class="grid_2">
                  <form id="search1" action="search.php" method="GET" accept-charset="utf-8">
                    <input type="text" name="s" value="" onfocus="myFocus(this);" onblur="myBlur(this);"/>
                    <a onclick="document.getElementById('search1').submit()" class="more_btn3"></a>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </header>
      </div>


	
        <div class="container">
          <div class="row">
            <div class="grid_12">

                
                  <div class="hline3">
                    <h2>Search result:</h2>
                  </div>
                  <div id="search-results"></div>

                  <div class="wrapper">
                    <div class="indent1"></div>
                  </div>
                
            </div>
          </div>

        </div>





<!--=======footer=================================-->
        

    
  </div>
  </div>

  <footer>
    <div class="footer_priv">

      <div class="container">

        <p class="txt_priv">US School District  &copy; <span id="copyright-year"></span>. <a href="index-5.html" class="link2">Privacy Policy</a></p>

        <ul class="soc_icons">
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
        </ul>

      </div>

    </div>
  </footer>

</body>
</html>