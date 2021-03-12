<?php

// Add SEO requirement - Relationship Link (in head) for pagination pages
$theme_path = drupal_get_path('theme', 'pjra');
include_once($theme_path . '/includes/pager.inc');

require_once('pjra_config.php');

function pjra_preprocess_page(&$vars) {

  $vars['site_name'] = variable_get('site_name', 'drupal');

  // Do we have a node? (and not a node edit page)
  if (isset($vars['node']) && arg(2) != "edit") {

    // Check if current page is the details page of the Careers list page
    if ($vars['node']->type == CAREERS_NODE_TYPE_NAME) {
			// Show page title as Careers list page's page title
			$parent = node_load(CAREERS_NODE_ID);
			$vars['title'] = $parent->title;
		}
		// Check if current page is the Case Study details page
		elseif ($vars['node']->type == CASE_STUDIES_NODE_TYPE_NAME) {
			// Show page title as 'Case Study'
			$vars['title'] = t('Case Studies');
		}

    // Check if current page is the Services details page
    elseif ($vars['node']->type == SERVICES_NODE_TYPE_NAME) {
      $node = $vars['node'];
      // Show title display text when not empty
      if (!empty($node->field_title_display))
        $vars['title'] = t($node->field_title_display[LANGUAGE_NONE][0]['value']);
    }

    // Ref suggestions cuz it's stupid long.
    $suggests = &$vars['theme_hook_suggestions'];

    // Get path arguments.
    $args = arg();
    // Remove first argument of "node".
    unset($args[0]);

    // Set type.
    $type = "page__{$vars['node']->type}";

    // Bring it all together.
    $suggests = array_merge(
      $suggests,
      array($type),
      theme_get_suggestions($args, $type)
    );

    // if the url is: 'http://domain.com/node/123/edit'
    // and node type is 'blog'..
    //
    // This will be the suggestions:
    //
    // - page__node
    // - page__node__%
    // - page__node__123
    // - page__node__edit
    // - page__type_blog
    // - page__type_blog__%
    // - page__type_blog__123
    // - page__type_blog__edit
    //
    // Which connects to these templates:
    //
    // - page--node.tpl.php
    // - page--node--%.tpl.php
    // - page--node--123.tpl.php
    // - page--node--edit.tpl.php
    // - page--type-blog.tpl.php          << this is what you want.
    // - page--type-blog--%.tpl.php
    // - page--type-blog--123.tpl.php
    // - page--type-blog--edit.tpl.php
    //
    // Latter items take precedence.
  }
	// Check if current page is the Our People details page
	elseif (isset($vars['page']['content']['system_main']['#entity_type']) && $vars['page']['content']['system_main']['#entity_type'] == 'user') {
		// Show page title as 'Our People'
		$vars['title'] = t('Our People');
	}

}


/**
 * Returns the correct span class for a region
 */
function _pjra_content_span($columns = 1) {
  $class = FALSE;
  
  switch($columns) {
    case 1:
      $class = 'span12';
      break;
    case 2:
      $class = 'span9';
      break;
    case 3:
      $class = 'span7';
      break;
  }
  
  return $class;
}