<?php
$get_form_options = get_option( 'sfwf_form_id_' . $css_form_id );
ob_start();

?>

<style type="text/css">
<?php
if ( isset( $get_form_options['form-wrapper']['font'] ) ) {
	$font_name = $get_form_options['form-wrapper']['font'];
	$font_name = str_replace( ' ', '+', $font_name );
	if ( 'Default' !== $font_name ) {
		echo "@import url('https://fonts.googleapis.com/css?family=$font_name');";
	}
}
?>


body #wpforms-<?php echo $css_form_id; ?> {
<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'form-wrapper' ); ?>
<?php echo empty( $get_form_options['form-wrapper']['background-image'] ) ? '' : 'background-image:url("' . $get_form_options['form-wrapper']['background-image'] . '");'; ?>
<?php
if ( ! empty( $get_form_options['form-wrapper']['font'] ) ) {
	if ( 'Default' == $get_form_options['form-wrapper']['font'] ) {
		echo 'font-family:inherit;';
	} else {
		echo 'font-family:' . $get_form_options['form-wrapper']['font'] . ';';
	}
}
?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'form-header' ); ?>
	<?php
	if ( empty( $get_form_options['form-header']['border-size'] ) ) {
		echo 'border-width: 0px;';
	}
	?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container .wpforms-title {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'form-title' ); ?>
	}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container .wpforms-description {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'form-description' ); ?>
	display:block;
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-submit-container .wpforms-submit, body #wpforms-<?php echo $css_form_id; ?> .wpforms-field-pagebreak button.wpforms-page-button {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'submit-button' ); ?>
	<?php
	if ( empty( $get_form_options['submit-button']['border-size'] ) ) {
		echo 'border-width: 0px;';
	}
	?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-submit-container .wpforms-submit:hover, body #wpforms-<?php echo $css_form_id; ?> .wpforms-field-pagebreak button.wpforms-page-button:hover {
	<?php echo isset( $get_form_options['submit-button']['hover-color'] ) ? 'background-color:' . $get_form_options['submit-button']['hover-color'] . ';' : ''; ?>
	<?php echo isset( $get_form_options['submit-button']['font-hover-color'] ) ? 'color:' . $get_form_options['submit-button']['font-hover-color'] . ';' : ''; ?>
   }




body #wpforms-<?php echo $css_form_id; ?> .wpforms-submit-container,body #wpforms-<?php echo $css_form_id; ?> .wpforms-field-pagebreak .wpforms-pagebreak-left{
	<?php echo empty( $get_form_options['submit-button']['text-align'] ) ? '' : 'text-align:' . $get_form_options['submit-button']['text-align'] . ';'; ?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=text],
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=email],
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=tel],
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=url],
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=password],
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=number]
{
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'text-fields' ); ?>
	<?php echo ! empty( $get_form_options['text-fields']['max-width'] ) ? ' max-width:100%; ' : ''; ?>
		<?php
		if ( empty( $get_form_options['text-fields']['border-size'] ) ) {
			echo 'border-width: 1px;';
		}
		?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field .wpforms-field-row
{
	<?php echo ! empty( $get_form_options['text-fields']['max-width'] ) ? 'width:' . $get_form_options['text-fields']['max-width'] . $main_class_object->sfwf_add_px_to_value( $get_form_options['text-fields']['max-width'] ) . '; max-width:100%; ' : ''; ?>
}



body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field textarea {
	<?php echo ! empty( $get_form_options['text-fields']['max-width'] ) ? 'width:' . $get_form_options['text-fields']['max-width'] . $main_class_object->sfwf_add_px_to_value( $get_form_options['text-fields']['max-width'] ) . '; max-width:100%; ' : ''; ?>
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'paragraph-textarea' ); ?>
		<?php
		if ( empty( $get_form_options['paragraph-textarea']['border-size'] ) ) {
			echo 'border-width: 1px;';
		}
		?>
	
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field select {

	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'dropdown-fields' ); ?>
	<?php echo ! empty( $get_form_options['dropdown-fields']['max-width'] ) ? 'max-width:100%; ' : ''; ?>
			<?php
			if ( empty( $get_form_options['dropdown-fields']['border-size'] ) ) {
				echo 'border-width: 1px;';
			}
			?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-radio li label,
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-payment-multiple li label {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'radio-inputs' ); ?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-checkbox li label {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'checkbox-inputs' ); ?>
}


body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field .wpforms-field-description {

	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'field-descriptions' ); ?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field label.wpforms-field-label {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'field-labels' ); ?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .gform_fields .gsection .gsection_title {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'section-break-title' ); ?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .gform_fields .gsection .gsection_description {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'section-break-description' ); ?>
}

body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .gform_fields .gfield .ginput_container {
}

body #wpforms-confirmation-<?php echo $css_form_id; ?>  {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'confirmation-message' ); ?>
			<?php
			if ( empty( $get_form_options['confirmation-message']['border-size'] ) ) {
				echo 'border-width: 1px;';
			}
			?>
}

body #wpforms-<?php echo $css_form_id; ?> label.wpforms-error {
	<?php echo $main_class_object->swfw_get_saved_styles( $css_form_id, 'error-message' ); ?>
			<?php
			if ( empty( $get_form_options['error-message']['border-size'] ) ) {
				echo 'border-width: 1px;';
			}
			?>
}

/* Styling for Tablets */
@media only screen and (max-width: 800px) and (min-width:481px) {
	<?php if ( sfwf_isset_checker( $get_form_options['form-wrapper'], array( 'max-width-tab' ) ) ) { ?>
		body #wpforms-<?php echo $css_form_id; ?> {
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'form-wrapper' ); ?>
		}       
<?php } ?>

<?php if ( sfwf_isset_checker( $get_form_options['form-title'], array( 'font-size-tab', 'line-height-tab' ) ) ) { ?>
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container .wpforms-title {
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'form-title' ); ?>
		}       
<?php } ?>


<?php if ( sfwf_isset_checker( $get_form_options['form-description'], array( 'font-size-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container .wpforms-description{
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'form-description' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['submit-button'], array( 'font-size-tab', 'max-width-tab', 'height-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-submit-container .wpforms-submit,body #wpforms-<?php echo $css_form_id; ?> .wpforms-field-pagebreak button.wpforms-page-button {
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'submit-button' ); ?>
		}     
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['text-fields'], array( 'font-size-tab', 'max-width-tab', 'line-height-tab' ) ) ) { ?>

	 body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=text],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=email],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=tel],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=url],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=password],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=number]{
			<?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'text-fields' ); ?>
			<?php echo ! empty( $get_form_options['text-fields']['max-width-tab'] ) ? 'max-width:100%; ' : ''; ?>
		} 
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field .wpforms-field-row{
			<?php echo ! empty( $get_form_options['text-fields']['max-width-tab'] ) ? 'width:' . $get_form_options['text-fields']['max-width-tab'] . $main_class_object->sfwf_add_px_to_value( $get_form_options['text-fields']['max-width-tab'] ) . '; max-width:100%; ' : ''; ?>
}
		
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['paragraph-textarea'], array( 'max-width-tab' ) ) || sfwf_isset_checker( $get_form_options['text-fields'], array( 'max-width-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field textarea{

		<?php echo ! empty( $get_form_options['text-fields']['max-width-tab'] ) ? 'width:' . $get_form_options['text-fields']['max-width-tab'] . $main_class_object->sfwf_add_px_to_value( $get_form_options['text-fields']['max-width-tab'] ) . '; max-width:100%; ' : ''; ?>

		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'paragraph-textarea' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['dropdown-fields'], array( 'font-size-tab', 'max-width-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field select{
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'dropdown-fields' ); ?>
		 <?php echo ! empty( $get_form_options['dropdown-fields']['max-width-tab'] ) ? 'max-width:100%; ' : ''; ?>
		}       

<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['radio-inputs'], array( 'font-size-tab', 'max-width-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-radio li label,
body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-payment-multiple li label{
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'radio-inputs' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['checkbox-inputs'], array( 'font-size-tab', 'max-width-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-checkbox li label {
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'checkbox-inputs' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['field-labels'], array( 'font-size-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field label.wpforms-field-label{
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'field-labels' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['field-descriptions'], array( 'font-size-tab', 'line-height-tab' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field .wpforms-field-description {
		 <?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'field-descriptions' ); ?>
		}      

<?php } ?>

<?php if ( sfwf_isset_checker( $get_form_options['confirmation-message'], array( 'font-size-tab', 'max-width-tab', 'line-height-tab' ) ) ) { ?>
	body #wpforms-confirmation-<?php echo $css_form_id; ?> {
		<?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'confirmation-message' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['error-message'], array( 'max-width-tab' ) ) ) { ?>
	body #wpforms-<?php echo $css_form_id; ?> label.wpforms-error{
			<?php echo $main_class_object->swfw_get_saved_styles_tab( $css_form_id, 'error-message' ); ?>
		}
<?php } ?>
}

@media only screen and (max-width: 480px){
	<?php if ( sfwf_isset_checker( $get_form_options['form-wrapper'], array( 'max-width-phone' ) ) ) { ?>
		body #wpforms-<?php echo $css_form_id; ?> {
		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'form-wrapper' ); ?>
		}       
<?php } ?>

<?php if ( sfwf_isset_checker( $get_form_options['form-title'], array( 'font-size-phone', 'line-height-phone' ) ) ) { ?>
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container .wpforms-title {
		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'form-title' ); ?>
		}       
<?php } ?>


<?php if ( sfwf_isset_checker( $get_form_options['form-description'], array( 'font-size-phone', 'line-height-phone' ) ) ) { ?>
	body #wpforms-<?php echo $css_form_id; ?> .wpforms-head-container .wpforms-description{
		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'form-description' ); ?>
		}
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['submit-button'], array( 'font-size-phone', 'max-width-phone', 'height-phone', 'line-height-phone' ) ) ) { ?>
	body #wpforms-<?php echo $css_form_id; ?> .wpforms-submit-container .wpforms-submit, body #wpforms-<?php echo $css_form_id; ?> .wpforms-field-pagebreak button.wpforms-page-button {
		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'submit-button' ); ?>
		}
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['text-fields'], array( 'font-size-phone', 'max-width-phone', 'line-height-phone' ) ) ) { ?>

	body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=text],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=email],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=tel],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=url],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=password],
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field input[type=number]{
			<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'text-fields' ); ?>
			<?php echo ! empty( $get_form_options['text-fields']['max-width-phone'] ) ? 'max-width:100%; ' : ''; ?>
		} 

		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field .wpforms-field-row{
			<?php echo ! empty( $get_form_options['text-fields']['max-width-phone'] ) ? 'width:' . $get_form_options['text-fields']['max-width-phone'] . $main_class_object->sfwf_add_px_to_value( $get_form_options['text-fields']['max-width-phone'] ) . '; max-width:100%; ' : ''; ?>
		}
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['paragraph-textarea'], array( 'max-width-phone' ) ) || sfwf_isset_checker( $get_form_options['text-fields'], array( 'max-width-phone' ) ) ) { ?>

	body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field textarea{
		<?php echo ! empty( $get_form_options['text-fields']['max-width-phone'] ) ? 'width:' . $get_form_options['text-fields']['max-width-phone'] . $main_class_object->sfwf_add_px_to_value( $get_form_options['text-fields']['max-width-phone'] ) . '; max-width:100%; ' : ''; ?>

		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'paragraph-textarea' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['dropdown-fields'], array( 'font-size-phone', 'max-width-phone', 'line-height-phone' ) ) ) { ?>
	body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field select{
		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'dropdown-fields' ); ?>
		<?php echo ! empty( $get_form_options['dropdown-fields']['max-width-phone'] ) ? 'max-width:100%; ' : ''; ?>
		}

<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['radio-inputs'], array( 'font-size-phone', 'max-width-phone', 'line-height-phone' ) ) ) { ?>
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-radio li label,
		body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-payment-multiple li label{
			<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'radio-inputs' ); ?>
		}
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['checkbox-inputs'], array( 'font-size-phone', 'max-width-phone', 'line-height-phone' ) ) ) { ?>
	body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field-checkbox li label {
		<?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'checkbox-inputs' ); ?>
	}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['field-labels'], array( 'font-size-phone', 'line-height-phone' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field label.wpforms-field-label{
		 <?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'field-labels' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['field-descriptions'], array( 'font-size-phone', 'line-height-phone' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> .wpforms-form .wpforms-field .wpforms-field-description {
		 <?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'field-descriptions' ); ?>
		}       
<?php } ?>

<?php if ( sfwf_isset_checker( $get_form_options['confirmation-message'], array( 'font-size-phone', 'max-width-phone', 'line-height-phone' ) ) ) { ?>
	body #wpforms-confirmation-<?php echo $css_form_id; ?> {
			 <?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'confirmation-message' ); ?>
		}       
<?php } ?>
<?php if ( sfwf_isset_checker( $get_form_options['error-message'], array( 'max-width-phone' ) ) ) { ?>
	   body #wpforms-<?php echo $css_form_id; ?> label.wpforms-error{
			 <?php echo $main_class_object->swfw_get_saved_styles_phone( $css_form_id, 'error-message' ); ?>
		}       
<?php } ?>
}
/*Option to add custom CSS */

<?php
if ( isset( $get_form_options['general-settings']['custom-css'] ) ) {
	echo $get_form_options['general-settings']['custom-css'];
}
?>



		</style>
		<?php
		$styles = ob_get_contents();
		ob_end_clean();
		echo $styles;
