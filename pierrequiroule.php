<?php

$pageTitle = "Pierre Qui Roule | Cocomo Creative";

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
      <h1 class="text-center">Pierre Qui Roule</h1>
    </article>
</div>

<div id="wrap">
<div class="container-fluid">
<!--<div class="project_container">-->
  
<div class="row-fluid">

	<article class="span12 wrap_projects">
        <div class="span8 project_items">
             <div class="row-fluid"> 
                    <div class="project_image">
                        <img src="images/portfolio/pierrequiroule_1.jpg" width="740" height="1144" alt="Alsace Willm Backcard">
                    </div>
                    <div class="project_caption">
                        <h4>Pierre Qui Roule Backcard</h4>
                    </div>
             </div>             
        </div>
    
        <div class="span4">
                <div class="project_name">
                    <h2 class="text-left">Pierre Qui Roule</h2>
                </div>
                <div class="project_description">
                    <p class="project_description">Pierre Qui Roule, meaning &quot;Rolling Stone,&quot; is a selection of wines coming from the Languedoc region of France. The smooth, rounded stones of this region are what give minerality and complexity to these wines, both by improving drainage and reflecting sunlight onto the vines.</p>
                    <p class="project_description">I wanted to use fresh, modern packaging in order to reflect the more modern techniques used to enhance the flavor of these wines.</p>
                </div>
       </div>
<div class="clear"></div>       
    </article>
</div>
<hr>    
</div>
</div>

<div id="wrap_port_options">
    <div class="container">

    <aside>
          <!-- Thumbnails -->
      <ul class="thumbnails">

        <li class="span3">
          <div class="thumbnail">
            <a href="cellardoor.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Cellar Door Selections','','images/portfolio/cellardoor_thumbroll.jpg',1)"><img src="images/portfolio/cellardoor_thumb.jpg" alt="Cellar Door Selections" name="Cellar Door Selections" width="300" height="225" border="0"></a></div><!-- .thumbnail -->
        </li><!-- .span3 -->

        <li class="span3">
          <div class="thumbnail">
       	  <a href="willm.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Alsace Willm','','images/portfolio/willm_thumbroll.jpg',1)"><img src="images/portfolio/willm_thumb.jpg" alt="Alsace Willm" name="Alsace Willm" width="300" height="225" border="0"></a></div><!-- .thumbnail -->
        </li><!-- .span3 -->
                   
        <li class="span3">
          <div class="thumbnail">
          <a href="activeminds.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Active Minds','','images/portfolio/activeminds_thumbroll.jpg',1)"><img src="images/portfolio/activeminds_thumb.jpg" alt="Active Minds" name="Active Minds" width="300" height="225" border="0"></a></div><!-- .thumbnail -->
        </li><!-- .span3 -->
        
      <li class="span3">
          <div class="thumbnail">
          <a href="pierrequiroule.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Pierre Qui Roule','','images/portfolio/pierrequiroule_thumbroll.jpg',1)"><img src="images/portfolio/pierrequiroule_thumb.jpg" alt="Piere Qui Roule" name="Pierre Qui Roule" width="300" height="225" border="0"></a></div><!-- .thumbnail -->
        </li><!-- .span3 -->
     
        <li class="span3">
          <div class="thumbnail">
         	<a href="electronote.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Electronote','','images/portfolio/electronote_thumbroll.jpg',1)"><img src="images/portfolio/electronote_thumb.jpg" alt="Electronote" name="Electronote" width="300" height="225" border="0"></a><a href="#">
            </a>
          </div><!-- .thumbnail -->
        </li><!-- .span3 -->
      
     	<li class="span3">
          <div class="thumbnail">
       	  <a href="greetings.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Greetings','','images/portfolio/greetings_thumbroll.jpg',0)"><img src="images/portfolio/greetings_thumb.jpg" alt="Greetings" name="Greetings" width="300" height="225" border="0"></a></div><!-- .thumbnail -->
        </li><!-- .span3 -->
         
        <li class="span3">
          <div class="thumbnail">
            <a href="lesjamelles.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Les Jamelles','','images/portfolio/lesjamelles_thumbroll.jpg',1)"><img src="images/portfolio/lesjamelles_thumb.jpg" alt="Les Jamelles" name="Les Jamelles" width="300" height="225" border="0"></a></div><!-- .thumbnail -->
        </li><!-- .span3 -->
        
       <li class="span3">
          <div class="thumbnail">
              	<a href="speakersbureau.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('speakers_thumb','','images/portfolio/print_speakers_thumbroll.jpg',1)"><img src="images/portfolio/print_speakers_thumb.jpg" alt="Speakers Bureau Postcard" name="speakers_thumb" width="300" height="225" border="0"></a>
          </div>
          <!-- .thumbnail -->
        </li><!-- .span3 --> 

              
        </ul>
      </aside>
  
<!--  </div>-->

    </div> <!-- /container -->
</div> <!-- /wrap -->

<?php include('inc/footer.php'); ?>