<?php

$pageTitle = "Greetings | Cocomo Creative";

include ($_SERVER['DOCUMENT_ROOT'] . "/cocomocreative/inc/loader.php");
include ($root_directory . "/portfolio/inc/begin.php");

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

  <body onLoad="MM_preloadImages('portfolio/images/portfolio/print_speakers_thumbroll.jpg','portfolio/images/portfolio/electronote_thumbroll.jpg','portfolio/images/portfolio/willm_thumbroll.jpg','portfolio/images/portfolio/cellardoor_thumbroll.jpg','portfolio/images/portfolio/lesjamelles_thumbroll.jpg','portfolio/images/portfolio/pierrequiroule_thumbroll.jpg','portfolio/images/portfolio/activeminds_thumbroll.jpg')">

<?php

$section = "The Work";

include ($root_directory . '/portfolio/inc/nav.php');

?>

<div class="row-fluid banner">
    <article>
      <h1 class="text-center">GREETINGS</h1>
    </article>
    </div>
    
<div id="wrap">
<div class="container-fluid">
  <div class="row-fluid">
    <article class="span12">
    
    	<div class="span8 project_items">
        	<div class="project_item">
        		<div class="span12 project_image">
   	    			<img src="../images/portfolio/greetings_1.jpg" width="740" height="577" alt="Cellar Door Selections Holiday Card">
        		</div>
                <div class="project_caption">
                	<h4>Cellar Door Selections Holiday Card</h4>
                </div>
            </div>
	
                <div class="row-fluid">
        			<div class="span12 project_image_medium text-center">
   	    				<img src="../images/portfolio/greetings_2.jpg" width="492" height="761" alt="Valentine's in Paris">
        			</div>
                </div>
                <div class="row-fluid">
                    <div class="span12 project_image_medium text-center">
   	    				<img src="../images/portfolio/greetings_3.jpg" width="492" height="761" alt="Valentine's in Paris">
        			</div>
                </div>
	            <div class="row-fluid">
        			<div class="span12 project_image_medium text-center">
   	    				<img src="../images/portfolio/greetings_4.jpg" width="492" height="761" alt="Valentine's in Paris">
        			</div>
                </div>
                <div class="row-fluid">
                    <div class="span12 project_image_medium text-center">
   	    				<img src="../images/portfolio/greetings_5.jpg" width="492" height="761" alt="Valentine's in Paris">
        			</div>
                </div>
                <div class="row-fluid">
                    <div class="span12 project_image_medium text-center">
   	    				<img src="../images/portfolio/greetings_6.jpg" width="492" height="761" alt="Valentine's in Paris">
        			</div>
                </div>               
                <div class="project_caption">
                		<h4>Dividers for Valentine's Day in Paris Guide</h4>
                </div>

        </div>
    
   	  <div class="span4">
      		<div class="project_name">
            	<h2 class="text-left">GREETINGS</h2>
            </div>
      		<div class="project_description">
<p class="project_description">Here are just a few examples of seasonal pieces that I have created.</p>
<p class="project_description"> The first is for an email blast sent out over the holidays. The company was trying to increase their use of social media, so I tried to bring in twitter-related design elements. </p>
<p class="project_description">The second is a series used in a booklet to aid tourists traveling in Paris around Valentine's Day. This project was a blast and helped me a lot when I traveled to Paris myself.</p>
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