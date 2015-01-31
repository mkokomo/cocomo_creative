<?php

$pageTitle = "Active Minds | Cocomo Creative";

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
      <h1 class="text-center">Active Minds</h1>
    </article>
</div>

<div id="wrap">
<div class="container-fluid">
<!--<div class="project_container">-->
  
  <div class="row-fluid">
    <article class="span12">
    
    <div class="span8 project_items">
    	<div class="row-fluid">
        	<div class="project_item">
        		<div class="span6 project_image_double_left">
   	    			<img src="../images/portfolio/activeminds_1.jpg" width="368" height="868" alt="Active Minds Banner">
        		</div>
                <div class="span6 project_image_double_right">
                	<img src="../images/portfolio/activeminds_2.jpg" width="368" height="868" alt="Active Minds Banner">
                </div>
                <div class="clear"></div>
                <div class="project_caption">
                	<h4>Active Minds Banner</h4>
                </div>
            </div>
		</div>
        
        <div class="row-fluid">
			<div class="project_item">
            	<div class="row-fluid">
                	<div class="span12 project_image">
                    	<img src="../images/portfolio/activeminds_3.gif" width="740" height="294" alt="10 Years Commemorative Logo Prototype">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6 project_image_double_left">
                        <img src="../images/portfolio/activeminds_4.gif" width="368" height:"421" alt="10 Years Commemorative Logo Prototype">
                    </div>
                    <div class="span6 project_image_double_right">
                        <img src="../images/portfolio/activeminds_5.gif"  width="368" height:"421" alt="10 Years Commemorative Logo Prototype">
                    </div>
               </div>
               <div class="clear"></div>
               <div class="row-fluid">
               		<div class="span12 project_image">
                    	<img src="../images/portfolio/activeminds_6.gif" width="740" height="294" alt="10 Years Commemorative Logo Prototype">
                    </div>
               </div>
               <div class="project_caption">
               		<h4>Tenth National Conference Logo Prototypes</h4>
               </div>
            </div>
        </div>
        
        <div class="row-fluid">
        	<div class="project_item">
        		<div class="span6 project_image_double_left">
   	    			<img src="../images/portfolio/activeminds_11.gif" width="368" height="420" alt="2012 National Conference">
        		</div>
                <div class="span6 project_image_double_right">
                	<img src="../images/portfolio/activeminds_12.jpg" width="368" height="420" alt="2011 National Conference">
                </div>
                <div class="clear"></div>
                <div class="project_caption">
                	<h4>Previous National Conference Logos</h4>
                </div>
            </div>
		</div>
        
       <div class="row-fluid">
			<div class="project_item">
                <div class="row-fluid">
                	<div class="span12 project_image text-center">
                    	<img src="../images/portfolio/activeminds_7.gif" width="368" height="294" alt="Stress Less Week">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span4 project_image_triple_left">
                        <img src="../images/portfolio/activeminds_8.gif" width="244" alt="Stress Less Week Prototype">
                    </div>
                    <div class="span4 project_image_triple_mid">
                        <img src="../images/portfolio/activeminds_9.gif" width="244" alt="Stress Less Week Prototype">
                    </div>
                    <div class="span4 project_image_triple_right">
                        <img src="../images/portfolio/activeminds_10.gif" width="244" alt="Stress Less Week Prototype">
                    </div>
                </div>
                <div class="clear"></div>
               	<div class="project_caption">
               		<h4>Stress Less Week Logo and Prototypes</h4>
               	</div>
            </div>
		 </div>
         
         <div class="row-fluid"> 
        		<div class="project_image">
   	    			<img src="../images/portfolio/activeminds_13.gif" width="740" height="230" alt="Post Secret U Logo">
        		</div>
                <div class="project_caption">
                	<h4>Project with Frank Warren from Post Secret</h4>
                </div>
         </div>
        
         </div>
    
   	<div class="span4">
      		<div class="project_name">
            	<h2 class="text-left">Active Minds</h2>
            </div>
            <div class="project_description">
            	<p class="project_description">Active Minds is a non-profit organization that aims to change the conversation on mental health across college campuses nationwide. It promotes mental health awareness and reduces the stigma associated with it. With more than 400 chapters, Active Minds reaches thousands of young adults. </p>
            	<p class="project_description">I  have  branded several individual campaigns for Active Minds, while maintaining consistency  with the company’s own identity.</p>
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