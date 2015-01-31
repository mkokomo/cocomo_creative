<?php

$pageTitle = "Cocomo Creative";

include ('inc/begin.php');

?>
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KBDNPG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBDNPG');</script>
<!-- End Google Tag Manager -->
<?php

$section = "Home";

include ('inc/nav.php');

?>
<div id="wrap_home">
	<div class="row-fluid hidden-phone hidden-tablet">
    	  <div class="span12">
      			<p class="home">&nbsp;</p>          	
          </div>
    </div>
  <div class="row-fluid">
    <div class="span12">
      <div id="logo_home"><img src="images/cocomo_logo_soon.gif" width="247px" height="288px" alt="Cocomo Creative"></div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span10 offset1">
      <p class="home">Hello! Cocomo Creative is the work of Mary Crocamo, Designer and Explorer.</p>
      <p class="home">I create things for both print and the web. <a href="portfolio/index.php">See my work.</a></p>
      <p class="home">&nbsp;</p>
    </div>
  </div>
</div>
<?php include('inc/footer.php'); ?>