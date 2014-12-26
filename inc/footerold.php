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
<body onLoad="MM_preloadImages('../images/social_linked_roll.png','../images/social_pin_roll.png','images/social_flickr_roll.png')"><footer>
	<div class="wrap_footer">
		<div class="row-fluid">
        
    		<div class="span3">
            	<img src="images/footer_me.png" width="233" height="233" alt="Mary Crocamo">
            </div>
            
      		<div class="span3 text-left">
            	<h2>Contact Me</h2>
            	<p class="footer_name">Mary Crocamo</p>
                <p class="footer_description">Designer & Explorer</p>
           	  	<p class="footer_contact">mary@cocomocreative.com</p>
            	<p class="footer_contact">410.371.9988</p>
       			<p class="footer_address">700 Park Avenue</p>
            	<p class="footer_address">Baltimore, MD 21201</p>
            	<p class="footer_address">&nbsp;</p>
                <p class="footer_address">&nbsp;</p>
       		</div>
            
   	    <div class="span6 text-left hidden-phone">
				<h2><a href="http://instagram.com/cocomocreative" target="_blank">Instagram Feed</a></h2>
			<div class="snapwidget hidden-phone">
       			<iframe src="http://snapwidget.com/sc/?u=Y29jb21vY3JlYXRpdmV8aW58MTUwfDV8Mnx8eWVzfDIwfGZhZGVPdXR8fG5v&v=6114" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:150px"></iframe>
			</div>
              <!--<div class="project_caption">
                	<h4>Instagram Feed</h4>
              </div> -->
		</div>
        
        <div class="clear"></div>
          
		<div class="row-fluid text-center">
        	<div class="socialmedia">
       	    	<div class="media_button"><a href="http://www.linkedin.com/in/marycrocamo/" target="_new" onMouseOver="MM_swapImage('linkedin','','images/social_linked_roll.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/social_linked.png" alt="Linked In" name="linkedin" width="42" height="52" border="0" id="linkedin" /></a></div>
                
                <div class="media_button"><a href="http://twitter.com/CocomoCreative" target="_new" onMouseOver="MM_swapImage('twitter','','images/social_twitter_roll.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/social_twitter.png" alt="Twitter" name="twitter" width="42" height="52" border="0" id="twitter" /></a></div>
                
              	<div class="media_button"><a href="http://www.pinterest.com/cocomocreative/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('pinterest','','images/social_pin_roll.png',1)"><img src="images/social_pin.png" alt="Pinterest" name="pinterest" width="41" height="52" border="0"></a></div>
                
              	<div class="media_button"><a href="http://instagram.com/cocomocreative" target="_new" onMouseOver="MM_swapImage('instagram','','images/social_insta_roll.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/social_insta.png" alt="Instagram" name="instagram" width="42" height="52" border="0" id="instagram" /></a></div>
                
                <div class="media_button"><a href="http://www.flickr.com/photos/111410272@N02/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('flickr','','images/social_flickr_roll.png',1)"><img name="flickr" border="0" src="images/social_flickr.png" alt="Flickr"></a></div>
                                
                <div class="clear"></div>
            </div>
        
        <div class="row-fluid text-center">
      		<p class="footer_copyright">&copy; Copyright <?php echo date('Y'); ?></p>
			<p class="footer_description">Cocomo Creative</p>
        </div>
             
   		<!--<div class="row-fluid footer_copyright hidden-phone text-right">
        	    <p class="footer_copyright">&copy; Copyright <?php echo date('Y'); ?></p>
				<p class="footer_description">Cocomo Creative</p>
        </div>
        <div class="row-fluid footer_copyright visible-phone text-left">
        	    <p class="footer_copyright">&copy; Copyright <?php echo date('Y'); ?></p>
				<p class="footer_description">Cocomo Creative</p>
        </div>-->
   	</div>
</div>
</footer>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>