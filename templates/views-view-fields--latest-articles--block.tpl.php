
<?php 
/*
 * A template to style the view "Latest Articles"
 * */ 
 ?>

<div class="article-slide-left">
<div class="article-slide-picture">
<?php print $fields['field_image']->content; ?>
</div>
</div>

<div class="article-slide-right">
<div class="article-slide-title">
<?php print $fields['title']->content; ?>
</div>

<div class="article-slide-body">
<?php print $fields['body']->content;?>
</div>
</div>
