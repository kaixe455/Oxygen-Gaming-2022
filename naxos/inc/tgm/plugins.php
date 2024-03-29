<?php
/**
 * Naxos
 * WordPress Theme
 */

// Plugins
function naxos_plugins( ) {
	$plugins = array(
        array(
			'name'               => 'Naxos Addons',
			'slug'               => 'naxos-addons',
			'version'			 => '1.3',
			'source'             => get_template_directory() . '/plugins/naxos-addons.zip',
			'required'           => true
		),
        array(
			'name'               => 'WPBakery Page Builder',
			'slug'               => 'js_composer',
			'version'			 => '6.7.0',
			'source'             => get_template_directory() . '/plugins/js_composer.zip',
			'required'           => true
		),
		array(
			'name'               => 'Redux Framework',
			'slug'               => 'redux-framework',
			'required'           => true
		),
		array(
			'name'               => 'Contact Form 7',
			'slug'               => 'contact-form-7',
			'required'           => false
		),
        array(
			'name'               => 'Instagram Feed',
			'slug'               => 'instagram-feed',
			'required'           => false
		),
		array(
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'required'           => false
		),
		array(
			'name'               => 'Envato Market',
			'slug'               => 'envato-market',
			'source'             => esc_url( 'https://envato.github.io/wp-envato-market/dist/envato-market.zip' ),
			'required'           => false
		)
	);

	$config = array(
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
		'strings'      => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'naxos' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'naxos' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'naxos' ),
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'naxos' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'naxos' ),
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'naxos' ),
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'naxos' ),
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'naxos' ),
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'naxos' ),
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'naxos' ),
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'naxos' ),
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'naxos' ),
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'naxos' ),
			'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'naxos' ),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'naxos' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'naxos' ),
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'naxos' ),
			'nag_type'                        => 'updated'
		)
	);

	tgmpa( $plugins, $config );
}

// Register
add_action( 'tgmpa_register', 'naxos_plugins' );
