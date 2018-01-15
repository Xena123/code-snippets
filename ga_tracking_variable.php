<!-- +++partials/cta-content -->

<!-- Using a variable with a google tracking event in WordPress -->
<!-- Taken from fanaticdesign.co.uk -->
<script>
  
  var url = window.location.href;

  jQuery(function($){
  $(document).on("click", ".gaEventButton", function(){
      //console.log(url);
      ga('send', 'event', 'Services', url )}); 

  });
</script>

<div class="row cta cta--border-top">
  <div class="l-constrained--inner">
    <div class="cta__text">
      <?php echo checkField('cta_text', "<p>We're always taking on new projects.</p><p>Would you like to discuss yours?</p>"); ?>
    </div>
    <a href="<?php echo checkField('cta_link', '/contact-us'); ?>" class="gaEventButton btn--cta btn--right btn--red"><span><?php echo checkField('cta_button', 'Hire us for your project'); ?></span></a>
  </div>
</div>
