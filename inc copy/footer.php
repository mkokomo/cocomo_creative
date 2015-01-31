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
<body onLoad="MM_preloadImages('../images/social_linked_roll.png','../images/social_pin_roll.png','images/social_flickr_roll.png')">
<footer>
<div class="wrap_footer">
<div class="row-fluid">
  <div class="span3 text-left"> <a href="mailto:mary@cocomocreative.com"><img src="images/footer_me.png" width="233" height="233" alt="Mary Crocamo"></a> 
  </div>
  <div class="span3 text-left">
    <p class="footer_name">Mary Crocamo</p>
    <p class="footer_description">Designer & Explorer</p>
    <div class="socialmedia">
      <div class="media_button"><a href="http://www.linkedin.com/in/marycrocamo/" target="_new" onMouseOver="MM_swapImage('linkedin','','images/social_linked_roll.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/social_linked.png" alt="Linked In" name="linkedin" width="42" height="52" border="0" id="linkedin" /></a></div>
      <div class="media_button"><a href="http://twitter.com/CocomoCreative" target="_new" onMouseOver="MM_swapImage('twitter','','images/social_twitter_roll.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/social_twitter.png" alt="Twitter" name="twitter" width="42" height="52" border="0" id="twitter" /></a></div>
      <div class="media_button"><a href="http://www.pinterest.com/cocomocreative/" target="_new" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('pinterest','','images/social_pin_roll.png',1)"><img src="images/social_pin.png" alt="Pinterest" name="pinterest" width="41" height="52" border="0"></a></div>
      <div class="media_button"><a href="http://instagram.com/cocomocreative" target="_new" onMouseOver="MM_swapImage('instagram','','images/social_insta_roll.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/social_insta.png" alt="Instagram" name="instagram" width="42" height="52" border="0" id="instagram" /></a></div>
      <div class="media_button"><a href="http://www.flickr.com/photos/111410272@N02/" target="_new" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('flickr','','images/social_flickr_roll.png',1)"><img name="flickr" border="0" src="images/social_flickr.png" alt="Flickr"></a></div>
      <div class="clear"></div>
    </div>
    <p class="footer_contact">mary@<span class="littlespace"> </span>cocomocreative.com</p>
    <p class="footer_contact">410.371.9988</p>
    <p class="footer_copyright">&copy; Copyright <?php echo date('Y'); ?></p>
    <p class="footer_description">Cocomo Creative</p>
    <p class="footer_description">&nbsp;</p>
  </div>
  <div class="span6 text-center hidden-phone twitterfeed">
<a class="twitter-timeline" href="https://twitter.com/CocomoCreative" data-widget-id="438381501638397952">Tweets by @CocomoCreative</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
  <div class="clear"></div>

</div>
</footer>
<script src="http://code.jquery.com/jquery-latest.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>