<?php
/**
 * @file
 * Returns the HTML for a wrapping container around comments.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728230
 */

// Render the comments and form first to see if we need headings.
$comments = render($content['comments']);
$comment_form = render($content['comment_form']);
?>
<section id="comments" class="comments <?php print $classes; ?>"<?php print $attributes; ?>>
<div class="review-form" id="review-form">
<?php if ($comment_form): ?>
    <h2 class="comments__form-title title comment-form review-form"><?php print t('Add new review'); ?></h2>    
    <?php print $comment_form; ?>
  <?php endif; ?>
</div>
<?php if ($comments): ?>
  <?php print render($title_prefix); ?> 
    <h2 class="reviews-label"><?php print t('Reviews'); ?></h2>
  <?php print render($title_suffix); ?>

  <?php print $comments; ?>
<?php endif; ?>
</section>
