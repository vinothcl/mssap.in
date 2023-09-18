<?php
function wo_add_client_page() {
	wp_enqueue_style( 'wo_admin' );
	wp_enqueue_script( 'wo_admin' );
	wp_enqueue_script( 'wo_admin_select2' );
	wp_enqueue_style( 'wo_admin_select2' );
	?>
    <div class="wrap">

        <h2><?php _e( 'Create Client', 'wp-oauth' ); ?>
            <a class="add-new-h2 "
               href="<?php echo admin_url( 'admin.php?page=wo_manage_clients' ); ?>"
               title="Batch"><?php _e( 'Back to SSO Integration', 'wp-oauth' ); ?></a>
        </h2>

        <hr/>

        <form class="wo-form" action="" method="post">

			<?php wp_nonce_field( 'create_client', 'nonce' ); ?>
            <input type="hidden" name="create_client" value="1"/>

            <div class="section group">

                <div class="col span_2_of_6">

                    <label class="checkbox-grid"> Allowed Grant Types
                        <label> <strong>Authorization Code</strong>
                            <input type="checkbox" name="grant_types[]"
                                   value="authorization_code" checked/>
                            <small class="description">
                                Allows authorization code grant type for this client.
                            </small>
                        </label>
                    </label>
                </div>

                <div class="col span_4_of_6">
                    <div class="wo-background">

                        <h3><?php _e( 'Client Information', 'wp-oauth' ); ?></h3>
                        <hr/>

                        <div class="section group">
                            <div class="col span_6_of_6">
                                <label> Client Name<p class="description">Enter a uniquely identifiable name for the SSO</p>
                                    <input class="emuv-input" type="text" name="name"
                                           value="" required/>
                                </label>

                                <label> Redirect URI<p class="description">Copy this from Freshworks SSO policy setup page</p>
                                    <input class="emuv-input" type="text" name="redirect_uri"
                                           value="" placeholder=""/>
                                </label>

                                <div style="margin-top: 2.5em" class="advanced-options">
                                    <h3>Advanced Options</h3>
                                    <hr/>

                                    <label> Client Scope(s)
                                        <p class="description">
                                            Scopes can be assigned to restrict scopes. This value will also act as
                                            the
                                            default scope for this client. If you leave this field blank, the
                                            default
                                            scope will be <strong>"basic"</strong> and the client will have access
                                            to
                                            all available scopes. If you have multiple scopes, please separate with
                                            a
                                            single space.
                                        </p>
                                        <input class="emuv-input" type="text" name="scope"
                                               value="" placeholder="basic"/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<?php submit_button( __( 'Create', 'wp-oauth' ) ); ?>

        </form>

    </div>

<?php }