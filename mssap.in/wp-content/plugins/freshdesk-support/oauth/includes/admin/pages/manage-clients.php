<?php function wo_admin_manage_clients_page() {
	wp_enqueue_style( 'wo_admin' );
	wp_enqueue_script( 'wo_admin' );
	?>
    <div class="wrap">

        <h2><?php _e( 'SSO Integration', 'wp-oauth' ); ?>
            <a class="add-new-h2 "
               href="<?php echo admin_url( 'admin.php?page=wo_add_client' ); ?>"
               title="Batch"><?php _e( 'Add New Client', 'wp-oauth' ); ?></a>
        </h2>

        <div class="section group">
            <div class="col span_4_of_12">
                <p>Enable Freshworks SSO with OAuth2.0 by adding clients. This is an advanced option and requires configuration.</p>
				<?php $CodeTableList = new WO_Table();
				$CodeTableList->prepare_items();
				$CodeTableList->display(); ?>
            </div>
        </div>

    </div>
<?php }