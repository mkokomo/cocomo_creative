<?php

$pageTitle = "Cellar Door Selections | Cocomo Creative";

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

  <body onLoad="MM_preloadImages('portfolio/images/portfolio/print_speakers_thumbroll.jpg','portfolio/images/portfolio/electronote_thumbroll.jpg','portfolio/images/portfolio/willm_thumbroll.jpg','portfolio/images/portfolio/cellardoor_thumbroll.jpg','portfolio/images/portfolio/lesjamelles_thumbroll.jpg','portfolio/images/portfolio/pierrequiroule_thumbroll.jpg','portfolio/images/portfolio/activeminds_thumbroll.jpg')">

<?php

$section = "The Work";

include ('inc/nav.php');

?>

<div class="row-fluid banner">
    <article>
      <h1 class="text-center">CELLAR DOOR SELECTIONS</h1>
    </article>
    </div>
    
<div id="wrap">
<div class="container-fluid">
  <div class="row-fluid">
    <article class="span12">
    
    	<div class="span8 project_items">
        	<div class="project_item">
        		<div class="project_image">
   	    			<img src="../images/portfolio/cellardoor_1.jpg" width="740" height="439" alt="Cellar Door Selections Logo">
        		</div>
                <div class="project_caption">
                	<h4>Cellar Door Selections Logo</h4>
                </div>
            </div>
				<div class="project_item">
        			<div class="project_image">
   	    				<img src="../images/portfolio/cellardoor_2.jpg" width="740" height="766" alt="Cellar Door Selections Technical Sheets">
        			</div>
                	<div class="project_caption">
                		<h4>Example of Technical Sheet</h4>
                	</div>
            	</div>
            	<div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/cellardoor_3.jpg" width="740" height="463" alt="Cellar Door Selections Website">
        			</div>
            	</div>
               	<div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/cellardoor_4.png" width="740" height="399" alt="Cellar Door Selections Website">
        			</div>
            	</div>
                <div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/cellardoor_5.jpg" width="740" height="582" alt="Cellar Door Selections Website">
        			</div>
            	</div>
                	<div class="row-fluid">
        			<div class="project_image text-center">
   	    				<img src="../images/portfolio/cellardoor_9.png" width="538" height="462" alt="Cellar Door Selections Website">
        			</div>
            	</div>
                <div class="row-fluid">
        			<div class="project_image">
   	    				<img src="../images/portfolio/cellardoor_7.jpg" width="740" height="582" alt="Cellar Door Selections Website">
        			</div>
            	</div>                   
                <div class="project_caption">
                	<h4>Cellar Door Selections Website</h4>
                </div>

        </div>
    
   	  <div class="span4">
      		<div class="project_name">
            	<h2 class="text-left">CELLAR DOOR SELECTIONS</h2>
            </div>
      		<div class="project_description">
<p class="project_description">Cellar Door Selections specializes in importing wines from France and Argentina and marketing these wines to distributors across the United States. As Marketing Coordinator for this small company, I wore many hats. Some of my responsibilities included designing point of sale materials, preparing them for print, printing and packaging them, and mailing them to our distributors. Perhaps my favorite part of this job was rebuilding the identity of Cellar Door Selections itself. From creating a new logo to building and coding a wordpress ready website, I did it all. I enjoyed being an integral part of this small company and also working on a team to transform the image of Cellar Door Selections.</p>
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