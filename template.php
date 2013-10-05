<?php
/*
  Preprocess
*/

/**
* Preprocesses the wrapping HTML.
*
* @param array &$variables
*   Template variables.
*/
function luise_preprocess_html(&$vars) {
  // Setup Google Webmasters Verification Meta Tag
  $google_webmasters_verification = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'google-site-verification',
      // REPLACE THIS CODE WITH THE ONE GOOGLE SUPPLIED YOU WITH
      'content' => 'mECRFe1RIJiFnbpgHzjYJ-HEIf4gsFW5tDMQfPPbTAc',
    )
  );
  // Add Google Webmasters Verification Meta Tag to head
  drupal_add_html_head($google_webmasters_verification, 'google_webmasters_verification');
}
/*
function luise_preprocess_image(&$variables) {
    if (is_null($variables['title'])) {
        $variables['title']     = '';
    }
}
*/

/* Remove empty title displaying null on images */
/* function phptemplate_image($path, $alt = '', $title = '', $attributes = NULL, $getsize = TRUE) {
  if (!$getsize || (is_file($path) && (list($width, $height, $type, $image_attributes) = @getimagesize($path)))) {
    if (!empty($title)) {
      $attributes['title'] = $title;
    }
    $attributes = drupal_attributes($attributes);
    $url = (url($path) == $path) ? $path : (base_path() . $path);
    return '<img src="'. check_url($url) .'" alt="'. check_plain($alt) . '" ' . (isset($image_attributes) ? $image_attributes : '') . $attributes .' />';
  }
}
*/


/*
function luise_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}
*/
/*
function luise_preprocess_page(&$vars,$hook) {
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');
  
  //googlefont 
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');
 
}
*/
/*
function luise_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function luise_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =  
   $vars['elements']['#block']->region .'-'. 
   $vars['elements']['#block']->module .'-'. 
   $vars['elements']['#block']->delta;
   
  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:
    
    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/
/*
function luise_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);

  // add a nodeblock 
  // in .info define a region : regions[block_in_a_node] = block_in_a_node 
  // in node.tpl  <?php if($noderegion){ ?> <?php print render($noderegion); ?><?php } ?>
  //$vars['block_in_a_node'] = block_get_blocks_by_region('block_in_a_node');
}
*/
/*
function luise_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function luise_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';    
    default:
      break;
  }

}
*/
/*
function luise_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function luise_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/

