</div>

<footer class="text-center" id="footer">&copy;Copyright 2016-2017 Shop Till You Drop!</footer>



<script>
jQuery(window).scroll(function(){
  var vscroll=jQuery(this).scrollTop();
  //console.log(vscroll);
  jQuery('#logotext').css({
    "transform" : "translate(0px, "+vscroll/2+"px)"
  });
  });

jQuery(window).scroll(function(){
  var vscroll=jQuery(this).scrollTop();
  jQuery('#back-flower').css({
    "transform" : "translate("+vscroll/5+"px, "-vscroll/12+"px)"
  });
  });

jQuery(window).scroll(function(){
  var vscroll=jQuery(this).scrollTop();
  jQuery('afore-flower').css({
    "transform" : "translate(0px, "+vscroll/2+"px)"
  });
  });

</script>

</body>
</html>
