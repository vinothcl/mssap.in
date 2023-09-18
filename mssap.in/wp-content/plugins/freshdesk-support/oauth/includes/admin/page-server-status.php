<?php
/**
 * Server Status
 *
 */
global $license_error;
$license_error = null;
function wo_server_status_page() {
	wp_enqueue_style( 'wo_admin' );
	wp_enqueue_script( 'wo_admin' );
	wp_enqueue_script( 'jquery-ui-tabs' );
	?>
    <div class="wrap">
        <h2><?php _e( 'Server Status', 'wp-oauth' ); ?></h2>
        <div class="section group">
            <div class="col span_4_of_6">
				<?php wo_display_settings_tabs(); ?>
            </div>
            <div class="col span_2_of_6 sidebar">

                <div class="module hire-us">
                    <h3>Visit our Documentation</h3>
                    <div class="inner">
                        <p>
                            Our robust documentation is full of information to help you in your journey. Be sure that
                            that you visit <a style="color:#fff;"
                                              href="https://wordpress.org/support/plugin/oauth2-provider/">https://wordpress.org/support/plugin/oauth2-provider/</a>
                            for support.
                        </p>

                        <a href="https://wp-oauth.com/documentation/" class="button button-primary">
                            View our Documentation
                        </a>
                    </div>
                </div>

                <div class="module">
                    <h3 style="color: #0facf3;">Need More?</h3>
                    <div class="inner">
                        <p>
                            <strong>Upgrade</strong> to Pro with discount and receive priority support and all the grant
                            types.
                        </p>

                        <ul>
                            <li>
                                Mobile Authentication
                            </li>
                            <li>
                                Desktop Software Authentication
                            </li>
                            <li>
                                All Grant Types
                            </li>
                            <li>
                                Support & Add-Ons
                            </li>
                        </ul>

                        <a href="https://wp-oauth.com/downloads/wp-oauth-server/?utm_source=wp-oauth-server-free&utm_medium=settings-page"
                           class="button button-primary">Download
                            PRO</a>

                        <h4>Use "PROME" at checkout for the discount.</h4>
                        <strong>Build <?php echo _WO()->version; ?></strong>
                    </div>
                </div>

            </div>

        </div>

    </div>
	<?php
}