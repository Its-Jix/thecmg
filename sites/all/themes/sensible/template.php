<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function sensible_preprocess_html(&$variables) {
  // Add default theme css
  drupal_add_css(path_to_theme() . '/css/style.css', array('group' => CSS_THEME, 'preprocess' => FALSE));
  // Adding theme specific js
  drupal_add_js(path_to_theme() . '/js/script.js');
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function sensible_process_html(&$variables) {

}

/**
 * Override or insert variables into the page template.
 */
function sensible_process_page(&$variables) {

}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function sensible_preprocess_maintenance_page(&$variables) {

}

/**
 * Override or insert variables into the maintenance page template.
 */
function sensible_process_maintenance_page(&$variables) {

}

/**
 * Override or insert variables into the node template.
 */
function sensible_preprocess_node(&$variables) {

}

/**
 * Override or insert variables into the block template.
 */
function sensible_preprocess_block(&$variables) {

}

/**
 * Implements theme_menu_tree().
 */
function sensible_menu_tree($variables) {

}
