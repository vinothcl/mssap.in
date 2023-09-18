<?php
/**
 * Server Options Page
 */
function wo_server_options_page() {
	wp_enqueue_style( 'wo_admin' );
	wp_enqueue_script( 'wo_admin' );
	wp_enqueue_script( 'jquery-ui-tabs' );

	$scopes = apply_filters( 'wo_scopes', array() );
	add_thickbox();

	$options = wo_setting();
	?>
    <div class="wrap">
        <h2>WP OAuth Server
            <small>
                | <?php echo _WO()->version; ?>
            </small>
        </h2>
        <?php settings_errors(); ?>
        <div class="section group">
            <div class="col span_6_of_6">

                <form method="post" action="options.php">
                   <?php settings_fields( 'wo-options-group' ); ?>

                   <div id="wo_tabs">
                    <ul>
                        <li><a href="#general-settings">General Settings</a></li>
                        <li><a href="#advanced-configuration">Advanced Configuration</a></li>
                    </ul>

                    <!-- GENERAL SETTINGS -->
                    <div id="general-settings">
                        <table class="form-table">
                            <tr valign="top">
                                <th scope="row">
                                    <input type="checkbox" name="wo_options[enabled]"
                                    value="1" <?php echo $options["enabled"] == "1" ? "checked='checked'" : ""; ?> />
                                </th>
                                <td>
                                    OAuth Server Enabled
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- ADVANCED CONFIGURATION -->
                    <div id="advanced-configuration">

                        <h3>Grant Types
                            <small>(Global)</small>
                            <hr>
                        </h3>
                        <p>Control which Grant Types that the server will accept.</p>
                        <table class="form-table">

                            <tr valign="top">
                                <th scope="row">Authorization Code:</th>
                                <td>
                                    <input type="checkbox" name="wo_options[auth_code_enabled]"
                                    value="1" <?php echo $options["auth_code_enabled"] == "1" ? "checked='checked'" : ""; ?> />
                                    <p class="description">HTTP redirects and WP login form when authenticating.</p>
                                </td>
                            </tr>
                        </table>

                        <h3>Misc Settings
                            <small>(Global)</small>
                            <hr>
                        </h3>
                        <table class="form-table">
                            <tr valign="top">
                                <th scope="row">Token Length</th>
                                <td>
                                    <input type="number" name="wo_options[token_length]" min="10" max="255"
                                    value="<?php echo $options["token_length"]; ?>"
                                    placeholder="40"/>
                                    <p class="description">Length of tokens</p>
                                </td>
                            </tr>

                            <tr valign="top">
                                <th scope="row">Require Exact Redirect URI:</th>
                                <td>
                                    <input type="checkbox" name="wo_options[require_exact_redirect_uri]"
                                    value="1" <?php echo $options["require_exact_redirect_uri"] == "1" ? "checked='checked'" : ""; ?> />
                                    <p class="description">Enable if exact redirect URI is required when
                                    authenticating.</p>
                                </td>
                            </tr>

                            <tr valign="top">
                                <th scope="row">Enforce State Parameter:</th>
                                <td>
                                    <input type="checkbox" name="wo_options[enforce_state]"
                                    value="1" <?php echo @$options["enforce_state"] == "1" ? "checked='checked'" : ""; ?>/>
                                    <p class="description">Enable if the "state" parameter is required when
                                    authenticating. </p>
                                </td>
                            </tr>
                        </table>

                        <!-- OpenID Connect -->
                        <!-- <h3>OpenID Connect 1.0a
                            <small>(Global)</small>
                            <hr>
                        </h3>
                        <p>
                            The OpenID Connect 1.0a works with other systems like Drupal and Moodle.
                        </p>
                        <table class="form-table">
                            <tr valign="top">
                                <th scope="row">ID Token Lifetime</th>
                                <td>
                                    <input type="number" name="wo_options[id_token_lifetime]"
                                    value="<?php echo $options["id_token_lifetime"]; ?>" placeholder="3600"/>
                                    <p class="description">How long an id_token is valid (in seconds).</p>
                                </td>
                            </tr>
                        </table> -->

                        <h3>Token Lifetimes
                            <small>(Global)</small>
                            <hr>
                        </h3>
                        <p>
                            By default Access Tokens are valid for 1 hour and Refresh Tokens are valid for 24 hours.
                        </p>

                        <table class="form-table">
                            <tr valign="top">
                                <th scope="row">Access Token Lifetime</th>
                                <td>
                                    <input type="number" name="wo_options[access_token_lifetime]"
                                    value="<?php echo $options["access_token_lifetime"]; ?>"
                                    placeholder="3600"/>
                                    <p class="description">How long an access token is valid (seconds) - Leave blank
                                    for default (1 hour)</p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <th scope="row">Refresh Token Lifetime</th>
                                <td>
                                    <input type="number" name="wo_options[refresh_token_lifetime]"
                                    value="<?php echo $options["refresh_token_lifetime"]; ?>"
                                    placeholder="86400"/>
                                    <p class="description">How long a refresh token is valid (seconds) - Leave blank
                                    for default (24 hours)</p>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <!-- / END - Advance Configuration Content -->

                </div>
                <!-- END - #Tabs Content -->

                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ) ?>"/>
                </p>
            </form>

        </div>
        <!-- END- col 4 of 6 -->
    </div>
    <!-- END OF SECTION -->
</div>
<?php }