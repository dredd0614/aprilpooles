<?php
ob_start();
?>
jQuery(document).ready(function(){
	jQuery("button.btnSend").click(function(){
	
	var form = jQuery(this).closest('form');
	
	jQuery.ajax({type:'POST', url: '<?php echo get_template_directory_uri(); ?>/inc/contactus/contact2.php', data:jQuery(form).serialize(), success: function(response) {
		 
		 if(parseInt(response)>0)
		   {
			 if(jQuery(form).find("#spanMessage").length)
			 jQuery(form).find("#spanMessage").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Well done!','WEBNUS_TEXT_DOMAIN') ?></strong> <?php _e('Your message has been sent.','WEBNUS_TEXT_DOMAIN') ?></div>');
			 else
			 alert('<?php _e('Your message has been sent.','WEBNUS_TEXT_DOMAIN') ?>');
		   }
		   else{
			 if(jQuery(form).find("#spanMessage").length)
			 jQuery(form).find("#spanMessage").html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Error!','WEBNUS_TEXT_DOMAIN') ?> </strong> <?php _e('Something Wrong','WEBNUS_TEXT_DOMAIN') ?></div>');
			 else
			 alert('Something wrong!');
		   }   
			 
	}});
	});
	});
<?php
GLOBAL $webnus_options;

$is_sticky = $webnus_options->webnus_header_sticky();

$scrolls_value = $webnus_options->webnus_header_sticky_scrolls();

$scrolls_value = !empty($scrolls_value) ? $scrolls_value : 150;

if( '1' == $is_sticky) {
?>

jQuery(document).ready(function(){ 
jQuery(function() {
		    var header = jQuery('#header.horizontal-w');
		    var navHomeY = header.offset().top;
		    var isFixed = false;
		    var $w = jQuery(window);
		    $w.scroll(function(e) {
		        var scrollTop = $w.scrollTop();
		        var shouldBeFixed = scrollTop > <?php echo $scrolls_value; ?>;
		        if (shouldBeFixed && !isFixed) {
		            header.addClass('sticky');
		            isFixed = true;
		           
		        }
		        else if (!shouldBeFixed && isFixed)
		        {
		            header.removeClass("sticky");
		            isFixed = false;
		        }
		        e.preventDefault();
		    });
		});
	});
  

<?php
}

$out = ob_get_contents();

file_put_contents(get_template_directory(). '/js/dynjs.js', $out);

ob_end_clean();


?>