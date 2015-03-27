<?php

function webnus_contactform_shortcode($attributes, $content){
extract(shortcode_atts(
array(
'email'=>'',
'field1'=>'',
'field2'=>'',
'type'=>'1'
),

 $attributes));


ob_start();

?>

<div class="contact-form">
<form class="frmContact container" action="#">
<?php if( 2==$type ){ ?>
<div class="col-md-6">	
<?php } ?>
<input type="hidden" name="emailTo" id="emailTo" value="<?php echo $email; ?>">     
<input type="text" placeholder="<?php _e('Name','WEBNUS_TEXT_DOMAIN'); ?>" name="txtName" id="txtName">
<input type="email" placeholder="<?php _e('Email','WEBNUS_TEXT_DOMAIN'); ?>" name="txtEmail" id="txtEmail">
<input type="text" placeholder="<?php _e('Subject','WEBNUS_TEXT_DOMAIN'); ?>" name="txtSubject" id="txtSubject">
<?php

if(!empty($field1))
	echo '<input type="text" placeholder="'. $field1 .'" name="field1" id="field1">';
if(!empty($field2))
	echo '<input type="text" placeholder="'. $field2 .'" name="field2" id="field2">';

?>
<?php if( 2==$type ){ ?>
</div>
<div class="col-md-6">	
<?php } ?>
  
<textarea placeholder="<?php _e('Message','WEBNUS_TEXT_DOMAIN'); ?>" cols="40" rows="10" name="txtText" id="txtText"></textarea>
<button class="btnSend" type="button"><?php _e('Send Your Message','WEBNUS_TEXT_DOMAIN'); ?></button>
<span class="spanMessage"></span>
<?php if( 2==$type ){ ?>
</div>

<?php } ?>



	</form>
</div>

<?php

$output = ob_get_contents();

ob_end_clean();

return $output;

}

add_shortcode('contactform','webnus_contactform_shortcode');
?>