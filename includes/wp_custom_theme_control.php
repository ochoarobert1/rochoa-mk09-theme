<?php
/* --------------------------------------------------------------
CUSTOM AREA FOR OPTIONS DATA - rochoa
-------------------------------------------------------------- */

/* CUSTOM MENU PAGE AND FUNCTIONS IN ADMIN */
function register_rochoa_settings() {
    //register our settings
    register_setting( 'rochoa-settings-group', 'rochoa_dir' );
    register_setting( 'rochoa-settings-group', 'rochoa_email' );
    register_setting( 'rochoa-settings-group', 'rochoa_telf' );
    register_setting( 'rochoa-settings-group', 'rochoa_mob' );
    register_setting( 'rochoa-settings-group', 'rochoa_fb' );
    register_setting( 'rochoa-settings-group', 'rochoa_tw' );
    register_setting( 'rochoa-settings-group', 'rochoa_ig' );
    register_setting( 'rochoa-settings-group', 'rochoa_yt' );
}

function my_admin_menu() {
    add_menu_page( 'Opciones del Sitio', 'Opciones del Sitio', 'manage_options', 'rochoa_custom_options', 'my_custom_menu_page', get_template_directory_uri() . '/images/plugin-icon.png', 120  );
    /* call register settings function */
    add_action( 'admin_init', 'register_rochoa_settings' );
}

add_action( 'admin_menu', 'my_admin_menu' );



/* CUSTOM CSS FOR THIS SECTION */
function load_custom_wp_admin_style($hook) {
    if( $hook != 'toplevel_page_rochoa_custom_options' ) {
        return;
    }
    /* ENQUEUE THE CSS */
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
    wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/* SEPARATOR FOR STYLING THE CUSTOM PAGE */
function add_admin_menu_separator( $position ) {

    global $menu;

    $menu[ $position ] = array(
        0    =>    '',
        1    =>    'read',
        2    =>    'separator' . $position,
        3    =>    '',
        4    =>    'wp-menu-separator'
    );

}

function set_admin_menu_separator() {  do_action( 'admin_init', 119 );  }

add_action( 'admin_init', 'add_admin_menu_separator' );
add_action( 'admin_menu', 'set_admin_menu_separator' );

/* CUSTOM MENU PAGE CONTENT */
function my_custom_menu_page() { ?>

<div class="rochoa_custom_options-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo get_bloginfo('name'); ?>" class="logo-header" />
    <h1><?php echo get_admin_page_title(); ?></h1>
    <div class="custom-clearfix"></div>
</div>
<div class="rochoa_custom_options-content">
    <form method="post" action="options.php">
        <?php settings_fields( 'rochoa-settings-group' ); ?>
        <?php do_settings_sections( 'rochoa-settings-group' ); ?>
        <table class="form-table">

            <tr valign="top">
                <th scope="row"><?php _e('Dirección', 'rochoa'); ?></th>
                <td><textarea name="rochoa_dir" cols="95" rows="5"><?php echo esc_attr( get_option('rochoa_dir') ); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Correo Electrónico', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_email" value="<?php echo esc_attr( get_option('rochoa_email') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Teléfono', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_telf" value="<?php echo esc_attr( get_option('rochoa_telf') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Móvil', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_mob" value="<?php echo esc_attr( get_option('rochoa_mob') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php _e('Redes Sociales', 'rochoa'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Facebook', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_fb" value="<?php echo esc_attr( get_option('rochoa_fb') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Twitter', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_tw" value="<?php echo esc_attr( get_option('rochoa_tw') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Instagram', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_ig" value="<?php echo esc_attr( get_option('rochoa_ig') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Canal de Youtube', 'rochoa'); ?></th>
                <td><input type="text" size="90" name="rochoa_yt" value="<?php echo esc_attr( get_option('rochoa_yt') ); ?>" /></td>
            </tr>

        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }
