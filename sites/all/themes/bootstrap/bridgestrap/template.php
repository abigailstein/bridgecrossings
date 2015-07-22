<?php

/**
 * @file
 * template.php
 */

function bridgestrap_preprocess_node(&$variables, $hook) {
  // $variables['submitted'] = 'ARGLEBARGLE';
  $variables['submitted'] = str_replace("Submitted ", "", $variables['submitted']);
}
