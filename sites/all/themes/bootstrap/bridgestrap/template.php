<?php

/**
 * @file
 * template.php
 */

/* don't let Drupal truncate user name */
function bridgestrap_preprocess_username(&$vars) {
  $vars['name'] = check_plain($vars['name_raw']);
}

function bridgestrap_preprocess_node(&$variables, $hook) {
  // $variables['submitted'] = 'ARGLEBARGLE';
  $variables['submitted'] = str_replace("Submitted ", "", $variables['submitted']);
}
