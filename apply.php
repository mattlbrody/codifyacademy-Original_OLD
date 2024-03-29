<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codify Academy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/ico" href="http://codifyacademy.com/favicon.ico">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Ruda:400,900,700' rel='stylesheet' type='text/css'>  
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template Styles -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/colors/turquoise.css">    
  <!-- Layer Slider -->
  <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">

  
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older browsers -->
  <!--[if lt IE 9]>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  <script src="js/phone.js"></script>
  <script src="js/modernizr.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46682051-2', 'codifyacademy.com');
  ga('send', 'pageview');

</script>
  </head>
<!--   <div class="topbar clearfix">
    <div class="container">
    <div class="col-lg-12 text-right">
              <div class="social_buttons">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
              </div>
    </div>
    </div>
  </div> -->

  <header class="header">
    <div class="container">
        <div class="site-header clearfix">
              <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                  <div class="site-title" id="title">
                      <a href="index.php" title="">
                          <h4>Codify <span>Academy</span></h4>  
                      </a>
                  </div>
              </div><!-- title area -->
              <div class="col-lg-9 col-md-12 col-sm-12">
                 <div id="nav" class="right">
                      <div class="container clearfix navbar-right">
                      <ul id="jetmenu" class="jetmenu blue">
                          <li><a href="index.php">Home</a>
                          </li>
                          <li><a href="thecourse.php">The Course</a> 
                          </li>
                          <li class="active"><a href="apply.php">Apply</a>
                          </li>
                          <li><a href="faq.php">FAQ</a>
                          </li>
                          <li><a href="contact.php">Contact</a>
                              
                          </li>
                      </ul>
                      </div>
                  </div>  
              </div>
          </div><!-- site header -->
    </div><!-- end container -->
  </header><!-- end header -->

<body>

<div class="jumbotron jumbotron-sm">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-lg-12">
              <h1 class="h1 h1course">APPLY TODAY</h1>
          </div>
      </div>
  </div>
</div>

<div class=" row rowwidth">
  <div class="col-lg-2 col-lg-offset-1">
      <div class="circleimage">
        <img src="demos/matt.jpg" class="img-circle" style="height:116px" "width:116px"/>
      </div>
  </div>
  <div class="col-lg-9">
    <h2>Questions about the process?<h2>
    <h3>Give Matt a ring, (925) 876-3287</h3>
  </div>
</div>
<br>
<hr>

<div class="container rowwidth">
  <div class="row">
      <span><p><em>Codify Academy requires that you be in New York for the duration of the on-campus portion of each 12 week semester. <strong>Admissions for classes are being done on a rolling basis, so the earlier you apply, the better</strong>.&nbsp;</em></p></span>
  </div>

<div class="row">
  <h2>Which class date are you most interested in?</h2>
    <form method="post" action="applyemail.php">
    <select name="date">  
      <option value="Tarrytown - 7/5/2014 - 9/27/2014"> TarryTown - 7/5/2014 - 9/27/2014</option>
      <option value="Tarrytown - 7/6/2014 - 9/28/2014"> Tarrytown - 7/6/2014 - 9/28/2014</option>
    </select>
</div>
  <div class="row">
    <h2>Basic Information</h2>
        <div>*Full Name:</div><input required type="text" name="fullname" class="formfield"><br>
        <div>*Email:</div><input required type="email" name="email" class="formfield"><br>
        <div>*Phone Number:</div><input required type="text" name="phonenumber"class="formfield"><br>
  </div>
  <div class="row">
    <h2> Application Questions</h2>
      <div>Why are you applying to Codify Academy?</div><textarea name="why" class="formfield1"></textarea>
      <br>
      <div>The ability to think in a structured way, both creatively and quantitatively, to solve complex problems is an important element of being a successful developer. Can you tell us anything that demonstrates your abilities in that realm? (anything from standardized test scores to experience playing a musical instrument counts) *</div><textarea name="ability" class="formfield1"></textarea>
      <br>
      <div>Do you have any previous coding experience? (Knowing your starting point will help us better craft your learning experience.)</div><textarea name="previous" class="formfield1"></textarea>
      <br>
      <div>Is there anything else you'd like us to know?</div><textarea name="anything" class="formfield1"></textarea>
      <br>
      <div class="applybutton"><input name="Apply" type="submit" value="Apply" class="button large"></a>
      </div>
      </form>
  </div>
</div>
<br>
<br>
        
  <?php include('footer.php');?>

</body>
</html>