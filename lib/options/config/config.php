<?php
/**
 * ReduxFramework config Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( !class_exists( 'Redux' ) ) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'ascent'; // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */// phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = __DIR__ . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$config_patterns_path = Redux_Core::$dir . '../config/patterns/';
$config_patterns_url  = Redux_Core::$url . '../config/patterns/';
$config_patterns      = array();

if ( is_dir( $config_patterns_path ) ) {
    $config_patterns_dir = opendir( $config_patterns_path );

    if ( $config_patterns_dir ) {

        // phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
        while ( false !== ( $config_patterns_file = readdir( $config_patterns_dir ) ) ) {
            if ( stristr( $config_patterns_file, '.png' ) !== false || stristr( $config_patterns_file, '.jpg' ) !== false ) {
                $name              = explode( '.', $config_patterns_file );
                $name              = str_replace( '.' . end( $name ), '', $config_patterns_file );
                $config_patterns[] = array(
                    'alt' => $name,
                    'img' => $config_patterns_url . $config_patterns_file,
                );
            }
        }
    }
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
    'a'      => array(
        'href' => array(),
    ),
    'strong' => array(),
    'br'     => array(),
    'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
    // This is where your data is stored in the database and also becomes your global variable name.
    'opt_name'                  => $opt_name,

    // Name that appears at the top of your panel.
    'display_name'              => $theme->get( 'Name' ),

    // Version that appears at the top of your panel.
    'display_version'           => $theme->get( 'Version' ),

    // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
    'menu_type'                 => 'submenu',

    // Show the sections below the admin menu item or not.
    'allow_sub_menu'            => true,

    // The text to appear in the admin menu.
    'menu_title'                => esc_html__( 'Options', 'Ascent' ),

    // The text to appear on the page title.
    'page_title'                => esc_html__( 'Global Options', 'Ascent' ),

    // Disable to create your own Google fonts loader.
    'disable_google_fonts_link' => false,

    // Show the panel pages on the admin bar.
    'admin_bar'                 => true,

    // Icon for the admin bar menu.
    'admin_bar_icon'            => 'dashicons-portfolio',

    // Priority for the admin bar menu.
    'admin_bar_priority'        => 50,

    // Sets a different name for your global variable other than the opt_name.
    'global_variable'           => $opt_name,

    // Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
    'dev_mode'                  => false,

    // Enable basic customizer support.
    'customizer'                => true,

    // Allow the panel to open expanded.
    'open_expanded'             => false,

    // Disable the save warning when a user changes a field.
    'disable_save_warn'         => false,

    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_priority'             => 90,

    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
    'page_parent'               => 'ascent_menu',

    // Permissions needed to access the options panel.
    'page_permissions'          => 'manage_options',

    // Specify a custom URL to an icon.
    'menu_icon'                 => '',

    // Force your panel to always open to a specific tab (by id).
    'last_tab'                  => '',

    // Icon displayed in the admin panel next to your menu_title.
    'page_icon'                 => 'icon-themes',

    // Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
    'page_slug'                 => $opt_name,

    // On load save the defaults to DB before user clicks save.
    'save_defaults'             => true,

    // Display the default value next to each field when not set to the default value.
    'default_show'              => false,

    // What to print by the field's title if the value shown is default.
    'default_mark'              => '*',

    // Shows the Import/Export panel when not used as a field.
    'show_import_export'        => true,

    // The time transients will expire when the 'database' arg is set.
    'transient_time'            => 60 * MINUTE_IN_SECONDS,

    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
    'output'                    => true,

    // Allows dynamic CSS to be generated for customizer and google fonts,
    // but stops the dynamic CSS from going to the page head.
    'output_tag'                => true,

    // Disable the footer credit of Redux. Please leave if you can help it.
    'footer_credit'             => ' ',

    // If you prefer not to use the CDN for ACE Editor.
    // You may download the Redux Vendor Support plugin to run locally or embed it in your code.
    'use_cdn'                   => true,

    // Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
    'admin_theme'               => 'wp',

    // Enable or disable flyout menus when hovering over a menu with submenus.
    'flyout_submenus'           => true,

    // Mode to display fonts (auto|block|swap|fallback|optional)
    // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
    'font_display'              => 'swap',

    // HINTS.
    'hints'                     => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    ),

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    // Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'database'                  => '',
    'network_admin'             => true,
    'search'                    => true,
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['admin_bar_links'][] = array(
    'id'    => 'redux-docs',
    'href'  => '//devs.redux.io/',
    'title' => __( 'Documentation', 'Ascent' ),
);

$args['admin_bar_links'][] = array(
    'id'    => 'redux-support',
    'href'  => '//github.com/ReduxFramework/redux-framework/issues',
    'title' => __( 'Support', 'Ascent' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['share_icons'][] = array(
    'url'   => '//github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
    'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
    'url'   => '//twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
    'url'   => '//www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-linkedin',
);

// Panel Intro text -> before the form.
if ( !isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
    if ( !empty( $args['global_variable'] ) ) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace( '-', '_', $args['opt_name'] );
    }

    // translators:  Panel opt_name.
    $args['intro_text'] = '';
} else {
    $args['intro_text'] = '';
}

// Add content after the form.
$args['footer_text'] = '';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => esc_html__( 'Theme Information 1', 'Ascent' ),
        'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'Ascent' ) . '</p>',
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => esc_html__( 'Theme Information 2', 'Ascent' ),
        'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'Ascent' ) . '</p>',
    ),
);
Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'Ascent' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 * ---> START SECTIONS
 */
// -> START Logo Fields

require_once Redux_Core::$dir . '../config/sections/layout/layout.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Logo', 'Ascent' ),
        'id'    => 'lo-go',
        'desc'  => esc_html__( 'Select Your Website Logo & Favico', 'Ascent' ),
        'icon'  => 'el el-plus-sign',
    )
);

require_once Redux_Core::$dir . '../config/sections/logo/logo.php';
require_once Redux_Core::$dir . '../config/sections/logo/favicon.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Menu', 'Ascent' ),
        'id'    => 'menu',
        'desc'  => esc_html__( 'Manage Your Menu Style', 'Ascent' ),
        'icon'  => 'el el-lines',
    )
);

require_once Redux_Core::$dir . '../config/sections/menu/menu.php';
require_once Redux_Core::$dir . '../config/sections/menu/mobail-menu.php';
Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Socail Services', 'Ascent' ),
        'id'    => 'socal',
        'desc'  => esc_html__( 'Manage Your Website Socail.', 'Ascent' ),
        'icon'  => 'el el-share-alt',
    )
);

require_once Redux_Core::$dir . '../config/sections/socail/socail.php';
Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Header', 'Ascent' ),
        'id'    => 'header',
        'desc'  => esc_html__( 'Manage Your Header', 'Ascent' ),
        'icon'  => 'el el-arrow-up',
    )
);

require_once Redux_Core::$dir . '../config/sections/headers/header.php';
require_once Redux_Core::$dir . '../config/sections/headers/header-layout.php';
require_once Redux_Core::$dir . '../config/sections/headers/header-style.php';
require_once Redux_Core::$dir . '../config/sections/headers/sticky-header.php';

require_once Redux_Core::$dir . '../config/sections/socail/socail.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Typography', 'Ascent' ),
        'id'    => 'typo',
        'desc'  => esc_html__( 'Manage Your Website Typography.', 'Ascent' ),
        'icon'  => 'el el-fontsize',
    )
);

require_once Redux_Core::$dir . '../config/sections/typography/heading-typo.php';
require_once Redux_Core::$dir . '../config/sections/typography/body-typo.php';
require_once Redux_Core::$dir . '../config/sections/typography/typography.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Background', 'Ascent' ),
        'id'    => 'back',
        'desc'  => esc_html__( 'Manage Your Background.', 'Ascent' ),
        'icon'  => 'el el-website',
    )
);

require_once Redux_Core::$dir . '../config/sections/background/background.php';
require_once Redux_Core::$dir . '../config/sections/background/content-background.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Contact Template', 'Ascent' ),
        'id'    => 'cont',
        'desc'  => esc_html__( 'Manage Your Website Contact Template.', 'Ascent' ),
        'icon'  => 'el el-map-marker',
    )
);

require_once Redux_Core::$dir . '../config/sections/contact/contact.php';
require_once Redux_Core::$dir . '../config/sections/contact/contact-style.php';
require_once Redux_Core::$dir . '../config/sections/contact/g-maps.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Blog', 'Ascent' ),
        'id'    => 'blg',
        'desc'  => esc_html__( 'Manage Your Blog Page.', 'Ascent' ),
        'icon'  => 'el el-th-large',
    )
);

require_once Redux_Core::$dir . '../config/sections/blog/blog-page.php';
require_once Redux_Core::$dir . '../config/sections/blog/single-blog.php';

require_once Redux_Core::$dir . '../config/sections/background/background.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Breadcrumb', 'Ascent' ),
        'id'    => 'breab',
        'desc'  => esc_html__( 'Manage Your Breadcrumb.', 'Ascent' ),
        'icon'  => 'el el-chevron-right',
    )
);

require_once Redux_Core::$dir . '../config/sections/breadcrumb/breadcrumb.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Footer', 'Ascent' ),
        'id'    => 'ftr',
        'desc'  => esc_html__( 'Manage Your Blog Page.', 'Ascent' ),
        'icon'  => 'el el-arrow-down',
    )
);
require_once Redux_Core::$dir . '../config/sections/footer/footer-contant.php';
require_once Redux_Core::$dir . '../config/sections/footer/footer-style.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Pagess', 'Ascent' ),
        'id'    => 'pega',
        'desc'  => esc_html__( 'Manage Your Background.', 'Ascent' ),
        'icon'  => 'el el-screen',
    )
);

require_once Redux_Core::$dir . '../config/sections/page/page.php';
require_once Redux_Core::$dir . '../config/sections/page/blank.php';
require_once Redux_Core::$dir . '../config/sections/page/search.php';
require_once Redux_Core::$dir . '../config/sections/page/archive.php';
require_once Redux_Core::$dir . '../config/sections/page/author.php';
require_once Redux_Core::$dir . '../config/sections/page/404.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Project', 'Ascent' ),
        'id'    => 'prooject',
        'desc'  => esc_html__( 'Manage Your Project Page.', 'Ascent' ),
        'icon'  => 'el el-th-large',
    )
);

require_once Redux_Core::$dir . '../config/sections/project/project-tamplate.php';
require_once Redux_Core::$dir . '../config/sections/project/single-project.php';

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__( 'Extras', 'Ascent' ),
        'id'    => 'extra',
        'desc'  => esc_html__( 'Manage Your Breadcrumb.', 'Ascent' ),
        'icon'  => 'el el-cogs',
    )
);

require_once Redux_Core::$dir . '../config/sections/extra/website-title.php';
require_once Redux_Core::$dir . '../config/sections/extra/pagination.php';
require_once Redux_Core::$dir . '../config/sections/extra/hover.php';
require_once Redux_Core::$dir . '../config/sections/extra/button.php';

require_once Redux_Core::$dir . '../config/sections/slider/slider.php';

Redux::set_section(
    $opt_name,
    array(
        'title'  => esc_html__( 'Custom Editor', 'Ascent' ),
        'id'     => 'custom-css',
        'desc'   => esc_html__( 'Manage Your Breadcrumb.', 'Ascent' ),
        'icon'   => 'el el-css',
        'fields' => array(
            array(
                'id'     => 'projectsingle-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This tab contains heading typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the menu tab.', 'Ascent' ) ),
            ),
            array(
                'id'         => 'css_editor',
                'type'       => 'ace_editor',
                'title'      => esc_html__( 'CSS Code', 'Ascent' ),
                'subtitle'   => esc_html__( "Enter your CSS code in the field below. Do not include any tags or HTML in the field. Custom CSS entered here will override the theme CSS. In some cases, the !important tag may be needed. Don't URL encode image or svg paths. Contents of this field will be auto encoded.", 'Ascent' ),
                'mode'       => 'css',
                'full_width' => true,
                'theme'      => 'monokai',
                'default'    => "#header{\nmargin: 0 auto;\n}",
            ),
            array(
                'id'         => 'jc_editor',
                'type'       => 'ace_editor',
                'title'      => esc_html__( 'Js Code', 'Ascent' ),
                'subtitle'   => esc_html__( 'Enter your Js code in the field below.', 'Ascent' ),
                'mode'       => 'javascript',
                'theme'      => 'monokai',
                'full_width' => true,
                'default'    => "(function($){

    $(document).ready(function(){

        //code start from here



    });

})(jQuery)",
),
        ),
    )
);

//Meta boxes
require_once Redux_Core::$dir . '../config/sections/metaboxes.php';

/*
 * <--- END SECTIONS
 */

/*
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR OTHER CONFIGS MAY OVERRIDE YOUR CODE.
 */

/*
 * --> Action hook examples.
 */

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 is necessary to include the dynamically generated CSS to be sent to the function.
// add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
//
// Change the arguments after they've been declared, but before the panel is created.
// add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
//
// Change the default value of a field after it's been set, but before it's been used.
// add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
//
// Dynamically add a section.
// It can be also used to modify sections/fields.
// add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');
// .
if ( !function_exists( 'compiler_action' ) ) {
    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field's value has changed and compiler=>true is set.
     *
     * @param array  $options        Options values.
     * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
     * @param array  $changed_values Any values changed since last save.
     */
    function compiler_action( array $options, string $css, array $changed_values ) {
        echo '<h1>The compiler hook has run!</h1>';
        echo '<pre>';
                                  // phpcs:ignore WordPress.PHP.DevelopmentFunctions
        print_r( $changed_values ); // Values that have changed since the last save.
                                  // echo '<br/>';
                                  // print_r($options); //Option values.
                                  // echo '<br/>';
                                  // print_r($css); // Compiler selector CSS values compiler => array( CSS SELECTORS ).
        echo '</pre>';
    }
}

if ( !function_exists( 'redux_validate_callback_function' ) ) {
    /**
     * Custom function for the callback validation referenced above
     *
     * @param array $field          Field array.
     * @param mixed $value          New value.
     * @param mixed $existing_value Existing value.
     *
     * @return array
     */
    function redux_validate_callback_function( array $field, $value, $existing_value ): array {
        $error   = false;
        $warning = false;

        // Do your validation.
        if ( 1 === (int) $value ) {
            $error = true;
            $value = $existing_value;
        } elseif ( 2 === (int) $value ) {
            $warning = true;
            $value   = $existing_value;
        }

        $return['value'] = $value;

        if ( true === $error ) {
            $field['msg']    = 'your custom error message';
            $return['error'] = $field;
        }

        if ( true === $warning ) {
            $field['msg']      = 'your custom warning message';
            $return['warning'] = $field;
        }

        return $return;
    }
}

if ( !function_exists( 'dynamic_section' ) ) {
    /**
     * Custom function for filtering the section array.
     * Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
     *
     * @param array $sections Section array.
     *
     * @return array
     */
    function dynamic_section( array $sections ): array {
        $sections[] = array(
            'title'  => esc_html__( 'Section via hook', 'Ascent' ),
            'desc'   => '<p class="description">' . esc_html__( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'Ascent' ) . '</p>',
            'icon'   => 'el el-paper-clip',

            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array(),
        );

        return $sections;
    }
}

if ( !function_exists( 'change_arguments' ) ) {
    /**
     * Filter hook for filtering the args.
     * Good for child themes to override or add to the args array.
     * It can also be used in other functions.
     *
     * @param array $args Global arguments array.
     *
     * @return array
     */
    function change_arguments( array $args ): array {
        $args['dev_mode'] = true;

        return $args;
    }
}

if ( !function_exists( 'change_defaults' ) ) {
    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     *
     * @param array $defaults Default value array.
     *
     * @return array
     */
    function change_defaults( array $defaults ): array {
        $defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'Ascent' );

        return $defaults;
    }
}

if ( !function_exists( 'redux_custom_sanitize' ) ) {
    /**
     * Function to be used if the field sanitizes argument.
     * Return value MUST be formatted or cleaned text to display.
     *
     * @param string $value Value to evaluate or clean.  Required.
     *
     * @return string
     */
    function redux_custom_sanitize( string $value ): string {
        $return = '';

        foreach ( explode( ' ', $value ) as $w ) {
            foreach ( str_split( $w ) as $k => $v ) {
                if (  ( $k + 1 ) % 2 !== 0 && ctype_alpha( $v ) ) {
                    $return .= mb_strtoupper( $v );
                } else {
                    $return .= $v;
                }
            }

            $return .= ' ';
        }

        return $return;
    }
}
