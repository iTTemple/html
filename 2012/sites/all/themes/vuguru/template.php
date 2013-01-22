<?php
// $Id: template.php,v 1.21 2009/08/12 04:25:15 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to vuguru_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: vuguru_breadcrumb()
 *
 *   where vuguru is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
 * Implementation of HOOK_theme().
 */
// function vuguru_theme(&$existing, $type, $theme, $path) {
//   $hooks = zen_theme($existing, $type, $theme, $path);
//   // Add your theme hooks like this:
//   /*
//   $hooks['hook_name_here'] = array( // Details go here );
//   */
//   // @TODO: Needs detailed comments. Patches welcome!
//   return $hooks;
// }

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function vuguru_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function vuguru_preprocess_page(&$vars, $hook) {
	
	// /us/team new jquery pluggin
	if (
		// us team
		$vars['node']->nid==7 and strpos($_SERVER['REQUEST_URI'], 'edit')==0
		or
		// project main page
		$vars['node']->nid==2 and strpos($_SERVER['REQUEST_URI'], 'edit')==0
		or
		// project library
		$vars['node']->nid==23 and strpos($_SERVER['REQUEST_URI'], 'edit')==0
		or
		// project
		$vars['node']->type=="project" and strpos($_SERVER['REQUEST_URI'], 'edit')==0
		or
		// project
		$vars['node']->type=="share" and strpos($_SERVER['REQUEST_URI'], 'edit')==0
		or
		// homepage
		$vars['node']->nid==26 and strpos($_SERVER['REQUEST_URI'], 'edit')==0
		
	) {
		$vars['scripts'] = str_replace('misc/jquery.js', 'misc/jquery14.js', $vars['scripts']);
		$vars['scripts'] .= '<script type="text/javascript" src="/sites/all/themes/vuguru/js/vuguru.team.js"></script>';
	}
	
  zen_preprocess_page($vars, $hook);
  $vars['secondary_links'] = vuguru_get_secondary_links($vars);
	return $vars;
}


/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */

function vuguru_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];
  $vars['template_file'] = 'node-'. $node->nid;
  
  $vars['secondary_links'] = vuguru_get_secondary_links($vars);
  
  menu_set_active_menu_name('primary-links');
  $vars['breadcrumb'] = theme('breadcrumb', drupal_get_breadcrumb());
  
  return $vars;
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function vuguru_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function vuguru_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

function vuguru_get_secondary_links(&$vars) {
  $tree = menu_tree_page_data('primary-links');
  if (is_array($tree)) foreach ($tree as $item) {
  	
		if ($item['link']['in_active_trail']) {
			$subtree = $item['below'];
			
			// active
			if (is_array($subtree))
				foreach ($subtree as $sub) {
					if ($sub['link']['in_active_trail']==1) {
						$vars['secondary_links_javascript'] = '<script type="text/javascript">var currentPage = "'.$sub['link']['title'].'";</script>';
					}
				}
		}
	}
	
	if (($vars['type']=='project') and isset($subtree) and is_array($subtree)) {
		$first = current($subtree);
		array_unshift($subtree, $first);
		$key = key($subtree);
		$subtree[$key]['link']['title'] = 'Select...';
	}
	
	if (($vars['type']=='project_main') and isset($subtree) and is_array($subtree)) {
		$first = current($subtree);
		array_unshift($subtree, $first);
		$key = key($subtree);
		$subtree[$key]['link']['title'] = 'Select...';
		
	}
	
	return (isset($subtree) && is_array($subtree)) ? menu_tree_output($subtree) : '';
}


function vuguru_homepage_contact() {
	$contact = node_build_content(node_load(4), FALSE, FALSE);
	return $contact;
}
function vuguru_homepage_terms() {
	$contact = node_build_content(node_load(53), FALSE, FALSE);
	return $contact;
}
function vuguru_homepage_policy() {
	$contact = node_build_content(node_load(54), FALSE, FALSE);
	return $contact;
}

function vuguru_homepage_news() {
	$news = node_build_content(node_load(3), FALSE, FALSE);
	return $news;
}
function vuguru_homepage_projects() {
	$news = node_build_content(node_load(2), FALSE, FALSE);
	return $news;
}
function vuguru_homepage_us() {
	$us = node_build_content(node_load(1), FALSE, FALSE);
	return $us;
}
function vuguru_casestudy($nid) {
	return node_build_content(node_load($nid), FALSE, FALSE);
}

function vuguru_homepage_projects_menu() {
	
	$result = db_query("
		SELECT
			node.nid, title, dst
		FROM
			node, url_alias, content_type_project
		
		
		WHERE
			CONCAT('node/', node.nid) = url_alias.src
			AND
			node.type = 'project'
			AND
			content_type_project.nid = node.nid
		GROUP BY 
			url_alias.src
		ORDER BY
			content_type_project.field_project_order_value
			
	");
	
	$html = '<li class="leaf first"><a href="/projects" title="Select...">Select...</a></li>';
	$i = 0;
	while ($row = db_fetch_array($result)) {
		$html .= '<li class="leaf"><a href="'.$row['dst'].'" title="'.$row['title'].'">'.$row['title'].'</a></li>';
		$i++;
	}
	
	return $html;
	
}

