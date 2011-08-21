<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Yuen Lau :: Home Page</title>
  <meta name="description" content="The home page of Yuen Lau.">
  <meta name="author" content="Yuen Lau">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
  <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Pacifico|Muli&amp;v2" rel="stylesheet" type="text/css">
  <!-- end CSS-->

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <div id="container">
    <div id="left">
      <div id="sidebar">
	<header>
	  <a href="#" role="banner">
	    <img src="img/header.png" alt="Yuen Lau" />
	  </a>
	</header>
	<nav>
	  <ul role="navigation">
            <li><a href="Blog">Blog</a></li>
            <li><a href="Projects">Projects</a></li>
            <li><a href="ResumeCV">Resume or CV</a></li>
	  </ul>
	</nav>
	<footer>
	  <ul class="nav">
	    <li>Email :<a href="mailto:">hello@yuen-lau.com</a></li>
	    <li>Facebook :<a href="https://facebook">www.fb.me/YuenLau</a></li>
	    <li>Git-Hub :<a href="https://github">www.github.com/lauyuen</a></li>
	  </ul>
	</footer>
      </div>
    </div>
    <div id="right">
      <div id="main" role="main">
	<div id="blogpost">
	  <h1 id="title">Hello World</h1>
	  <div id="content">
	    <div id="summary">
	      A wonderful serenity has taken possession of my entire
	      soul, like these sweet mornings of spring which I enjoy
	      with my whole heart. I am alone, and feel the charm of
	      existence in this spot, which was created for the bliss
	      of souls like mine. I am so happy, my dear friend, so
	      absorbed in the exquisite sense of mere tranquil
	      existence, that I neglect my talents.
	    </div>
	    <div id="infobar">
	      <?php print date("M dS, Y"); ?>
	    </div>
	  </div>
	</div>
	<div id="blogpost" class="blue">
	  <h1 id="title">Far far away, behind the word mountains</h1>
	  <div id="content">
	    <div id="summary">
	      A wonderful serenity has taken possession of my entire
	      soul, like these sweet mornings of spring which I enjoy
	      with my whole heart. I am alone, and feel the charm of
	      existence in this spot, which was created for the bliss
	      of souls like mine. I am so happy, my dear friend, so
	      absorbed in the exquisite sense of mere tranquil
	      existence, that I neglect my talents.
	    </div>
	  </div>
	</div>
	<div id="blogpost">
	  <h1 id="title">Hello World</h1>
	  <div id="content">
	    <div id="summary">
	      A wonderful serenity has taken possession of my entire
	      soul, like these sweet mornings of spring which I enjoy
	      with my whole heart. I am alone, and feel the charm of
	      existence in this spot, which was created for the bliss
	      of souls like mine. I am so happy, my dear friend, so
	      absorbed in the exquisite sense of mere tranquil
	      existence, that I neglect my talents.
	    </div>
	    <div id="infobar">
	      <?php print date("M dS, Y"); ?>
	    </div>
	  </div>
	</div>
      </div>
    </div>
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->


  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
