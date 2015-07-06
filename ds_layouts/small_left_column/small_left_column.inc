<?php

/**
 * @file
 * Display Suite Small Left Column configuration.
 */

function ds_small_left_column() {
  return array(
    'label' => t('Small Left Column'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (small_left_column.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (small_left_column.png)
    // 'image' => TRUE,
  );
}
