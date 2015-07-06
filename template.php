<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  movieaddicted_preprocess_html($variables, $hook);
  movieaddicted_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // movieaddicted_preprocess_node_page() or movieaddicted_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function movieaddicted_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

/*UNSET REPLY LINK FOR COMMENTS OF MOVIE AND TV_SERIES CONTENT TYPE (REVIEWS)*/
function movieaddicted_preprocess_comment(&$vars) {
 $node = menu_get_object('node', 1);
 $type = $node->type;
if (isset($type)) {
if ($type === 'movie' or $type === 'tv_series'){ unset($vars['content']['links']['comment']['#links']['comment-reply']);}
}
}

//SEARCH FORM
function movieaddicted_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
 $form['search_block_form']['#default_value'] = t('Search movies, TV series, contents, ...'); // Set a default value for the textfield

$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search movies, TV series, contents, ...';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search movies, TV series, contents, ...') {this.value = '';}";
    // Prevent user from searching the default text
}
}


//WELCOME USER SNIPPET
/*
function movieaddicted_preprocess_page(&$vars){
global $user;
$uid = $user->uid;
$account = user_load($uid);
$user_picture = theme('user_picture', array('account' =>$account));
$logged = user_is_logged_in();
if ($logged):
$name = $user->name;
$user_link = l($name, 'user/' . $uid);
$vars['welcome_user'] = 'Welcome ' . $user_link . ' ' . $user_picture;
$vars['welcome_class'] = 'welcome-logged-in';

elseif (!$logged):
$vars['welcome_user'] = 'Welcome Guest ' . $user_picture;
$vars['welcome_class'] = 'welcome-anonymous';
endif;
}
*/
