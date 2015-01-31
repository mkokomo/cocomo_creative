<?php

$pageTitle = "Portfolio | Cocomo Creative";

include ('inc/begin.php');

?>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

</head>

  <body onLoad="MM_preloadImages('../images/portfolio/print_speakers_thumbroll.jpg','../images/portfolio/electronote_thumbroll.jpg','../images/portfolio/willm_thumbroll.jpg','../images/portfolio/cellardoor_thumbroll.jpg','../images/portfolio/lesjamelles_thumbroll.jpg','../images/portfolio/pierrequiroule_thumbroll.jpg','../images/portfolio/activeminds_thumbroll.jpg','../images/portfolio/tobh_thumbroll.jpg','../images/portfolio/chicken_thumbroll.jpg','../images/portfolio/coleman_thumbroll.jpg','../images/portfolio/itw_thumbroll.jpg','../images/portfolio/perdue_thumbroll.jpg','../images/portfolio/segafredo_thumbroll.jpg','../images/portfolio/waynefarms_thumbroll.jpg')">
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

$section = "The Work";

include ('inc/nav.php');

?>


      <!-- Banner -->
<div class="row-fluid banner">
    <article>
      <h1 class="text-center">PORTFOLIO</h1>
    </article>
    </div>
<br />
<br />
<?php include('inc/thumbnails.php'); ?>
<br />
<?php include('inc/footer.php'); ?>