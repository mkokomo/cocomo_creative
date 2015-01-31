<?php

$pageTitle = "Wayne Farms | Cocomo Creative";

//include ($_SERVER['DOCUMENT_ROOT'] . "/cocomocreative/inc/loader.php");
include ('inc/begin.php');

?>

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

  <body onLoad="MM_preloadImages('../images/portfolio/segafredo_thumbroll.jpg','../images/portfolio/brathans_thumbroll.jpg','../images/portfolio/print_speakers_thumbroll.jpg','../images/portfolio/electronote_thumbroll.jpg','../images/portfolio/willm_thumbroll.jpg','../images/portfolio/cellardoor_thumbroll.jpg','../images/portfolio/lesjamelles_thumbroll.jpg','../images/portfolio/pierrequiroule_thumbroll.jpg','../images/portfolio/activeminds_thumbroll.jpg')">

<?php

$section = "The Work";

include ('inc/nav.php');

?>

<div class="row-fluid banner">
    <article>
      <h1 class="text-center">WAYNE FARMS</h1>
    </article>
    </div>
    
<div id="wrap">
<div class="container-fluid">
  <div class="row-fluid">
    <article class="span12">
    
    	<div class="span8 project_items">
            	<div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/waynefarms_1.jpg" alt="Segafredo Coffee">
        			</div>
            	</div>
               	<div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/waynefarms_2.jpg" alt="Segafredo Coffee">
        			</div>
            	</div>
                <div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/waynefarms_3.jpg" alt="Segafredo Coffee">
        			</div>
            	</div>
                	<div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/waynefarms_4.jpg" alt="Segafredo Coffee">
        			</div>
            	</div>                 
                <div class="project_caption">
                	<h4>Wayne Farms Chef's Craft Website</h4>
                </div>

        </div>
    
   	  <div class="span4">
      		<div class="project_name">
            	<h2 class="text-left">WAYNE FARMS</h2>
            </div>
      		<div class="project_description">
            <p class="project_description">Wayne Farms wanted a simple website where visitors can find descriptions, nutrition facts, cooking instructions, and recipes for their gourmet sausage line. The catch was that they wanted it designed and developed within a week. I had a lot of fun putting this site together from start to finish.</p>
          </div>
  	  </div>
<div class="clear"></div>       
    </article>
</div>
<hr>    
</div>
</div>

<?php include ('inc/thumbnails.php'); ?>
<?php include ('inc/footer.php'); ?>