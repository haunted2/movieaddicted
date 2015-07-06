<?php

/**
 * @file
 * Display Suite Small Right Column configuration.
 */

function ds_small_right_column() {
  return array(
    'label' => t('Small Right Column'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (small_right_column.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (small_right_column.png)
    // 'image' => TRUE,
  );
}
