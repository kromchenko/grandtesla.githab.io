<?php

class Sfwf_Addons_Page {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
	}

	public function register_menu() {

		add_submenu_page(  'sfwf_licenses', 'Add-Ons', 'Add-Ons', 'manage_options', 'sfwf-addons', array( $this, 'show_addons' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'add_scripts' ) );


	}

	public function add_scripts() {
		wp_enqueue_style( 'sfwf-admin-css', SFWF_URL.'/css/customizer-controls.css' );
	}

	public function show_addons() {

?>
		 <div class="wrap">
	

		<h2>Addons </h2>
		<p> You can use below addons to extend the functionality of Styler for WPForms</p>
		<br/>
	

		<div class="sfwf-extend sfwf-box">
		<img src="<?php echo SFWF_URL; ?>/css/images/Bootstrap.png">
		<h2>Bootstrap</h2>
		<div class="sfwf-extend-content">
		<p>Easily add bootstrap to your forms</p>
		<div class="sfwf-extend-buttons">
		<a href="https://wpmonks.com/downloads/gravity-forms-bootstrap-addon?src=admmenu" target="_blank" class="button-secondary nf-doc-button">Documentation</a>
		<a href="https://wpmonks.com/downloads/gravity-forms-bootstrap-addon?src=admmenu" target="_blank" title="Conditional Logic" class="button-primary nf-button">Learn More</a>
		</div>
		</div>
		</div> <!-- End Sfwf Box -->
		</div>
		 </div>
	<?php
	}



}

add_action( 'plugins_loaded', 'sfwf_addons_page' );

function sfwf_addons_page() {
	new Sfwf_Addons_Page();

}


