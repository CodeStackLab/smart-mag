<?php
/**
 * SmartMag Theme!
 * 
 * This is the typical theme initialization file. Sets up the Bunyad Framework
 * and the theme functionality.
 * 
 * ----
 * 
 * Other Code Locations:
 * 
 *  /               -  WordPress default template files.
 *  lib/            -  Contains the core Bunyad framework files.
 *  inc/            -  Functions & Classes: Helpers, Hooks, Objects.
 *  admin/          -  Admin-only content.
 *  blocks/         -  Several loops and components used in the theme.
 *  partials/       -  Template parts (partials): Views & HTML.
 *  page-templates/ -  Custom page templates.
 *  
 * NOTE: If you're looking to edit HTML, look for default WordPress templates in
 * top-level / and in partials/ folder. Use same location in a Child Theme.
 * 
 */
define('BUNYAD_THEME_VERSION', '10.3.2');

// Already initialized - some buggy plugin call?
if (class_exists('Bunyad_Core')) {
	return;
}

/**
 * Initialize Framework
 * 
 * Include the Bunyad_Base and extend it using our theme-specific class.
 */ 
require_once get_theme_file_path('lib/bunyad.php');
require_once get_theme_file_path('inc/bunyad.php');

/**
 * Main Theme File: Contains most theme-related functionality
 * 
 * See file:  inc/theme.php
 */
require_once get_theme_file_path('inc/theme.php');

// Fire up the theme - make available in Bunyad::get('theme')
Bunyad::register('theme', [
	'class' => 'Bunyad_Theme_SmartMag',
	'init'  => true
]);

// Legacy compat: Alias
Bunyad::register('smart_mag', ['object' => Bunyad::get('theme')]);

/**
 * Main Framework Configuration
 */
$bunyad = Bunyad::core()->init(apply_filters('bunyad_init_config', [
	// Due to legacy compatibility, it's named smartmag without dash.
	'theme_name'  => 'smartmag',

	// For retrieving meta values from core plugin.
	'meta_prefix' => '_bunyad',

	// Legacy compat.
	'theme_version' => BUNYAD_THEME_VERSION,
	
	// Widgets enabled.
	'post_formats' => ['gallery', 'image', 'video', 'audio'],
	
	// Sphere Core plugin components
	'sphere_components' => [
		'social-follow', 
		'breadcrumbs', 
		'auto-load-post', 
		'adblock-detect',
		'elementor\layouts',
		'elementor\dynamic-tags'
	],

	'customizer' => [
		'font_aliases' => true
	],

	'add_sidebar_class' => false,
]));

// --- Footer Copyright Migration Function ---
add_action('init', 'smartmag_update_footer_copyright');
function smartmag_update_footer_copyright() {
    if (get_option('footer_copyright_migration_v1')) {
        return;
    }
    
    $options = get_option('smartmag_theme_options');
    if (is_array($options)) {
        $options['footer_copyright'] = '&copy; 2025 Everyday Mindful Moments. Designed by Everyday Mindful Moments.';
        update_option('smartmag_theme_options', $options);
    }
    
    update_option('footer_copyright_migration_v1', true);
}

// --- Fix Menu Location Migration Function ---
add_action('init', 'smartmag_fix_menu_location_migration');
function smartmag_fix_menu_location_migration() {
    if (get_option('menu_fix_migration_v1')) {
        return;
    }
    
    // Find the original menu by looking for one that has "The Second Bloom" or "Midlife & Reinvention"
    $menus = wp_get_nav_menus();
    $target_menu_id = false;
    
    foreach ($menus as $menu) {
        $items = wp_get_nav_menu_items($menu->term_id);
        if ($items) {
            foreach ($items as $item) {
                if (stripos($item->title, 'The Second Bloom') !== false || stripos($item->title, 'Midlife') !== false || stripos($item->title, 'Latest Posts') !== false) {
                    $target_menu_id = $menu->term_id;
                    break 2;
                }
            }
        }
    }
    
    if ($target_menu_id) {
        // Set this menu back to the main location
        $locations = get_theme_mod('nav_menu_locations');
        if (!is_array($locations)) {
            $locations = array();
        }
        $locations['smartmag-main'] = $target_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
        
        // Also add the 'Meet Nancy' page to THIS menu if not already there
        $page_check = get_page_by_title('Meet Nancy');
        if ($page_check) {
            $items = wp_get_nav_menu_items($target_menu_id);
            $exists = false;
            if ($items) {
                foreach ($items as $item) {
                    if ($item->object_id == $page_check->ID && $item->object == 'page') {
                        $exists = true;
                        break;
                    }
                }
            }
            if (!$exists) {
                wp_update_nav_menu_item($target_menu_id, 0, array(
                    'menu-item-title'   => 'Meet Nancy',
                    'menu-item-object-id' => $page_check->ID,
                    'menu-item-object'  => 'page',
                    'menu-item-status'  => 'publish',
                    'menu-item-type'    => 'post_type'
                ));
            }
        }
    }
    
    update_option('menu_fix_migration_v1', true);
}
