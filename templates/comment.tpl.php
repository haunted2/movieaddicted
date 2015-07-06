<?php
/**
 * @file
 * Returns the HTML for comments.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728216
 */
?>
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
    <p class="submitted">
      <?php //print $picture; ?>
      <?php //print $submitted; ?>
      <?php //print $permalink; ?>
     
    </p>

    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h3<?php print $title_attributes; ?>>
        <?php print $title; ?>
        <?php if ($new): ?>
          <mark class="new"><?php print $new; ?></mark>
        <?php endif; ?>
      </h3>
    <?php elseif ($new): ?>
      <mark class="new"><?php print $new; ?></mark>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($status == 'comment-unpublished'): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>
  
<div class="comment-left-region">
	<div class="comment-author-pane">
  <?php
  $uid = $comment->uid;
  $account = user_load($uid);
  print theme('author_pane',
    array(
      'account' => $account,
      'caller' => NULL,
      'picture_preset' => 'thumbnail',
      'context' => NULL,
      'disable_css' => FALSE,
    )
  ); 
?>
</div>
</div>

<div class="comment-right-region">
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['links']);
    print render($content);
  ?>

</div>
<div class="comment-bottom-region">
<div class="comment-links">
  <?php print render($content['links']) ?>
 </div>
 </div>
  <?php if ($signature): ?>
    <footer class="user-signature clearfix">
      <?php print $signature; ?>
    </footer>
  <?php endif; ?>
  
</article>

