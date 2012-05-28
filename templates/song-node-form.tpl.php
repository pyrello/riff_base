<div class="right">
  <?php if($right): ?>
    <?php print drupal_render($right); ?>
  <?php endif; ?>
</div>
<div class="left">
  <?php if($form): ?>
    <?php print drupal_render($form); ?>
  <?php endif; ?>
</div>
<?php if($buttons): ?>
	<div class="node-buttons">
		<?php print drupal_render($buttons); ?>
	</div>
<?php endif; ?>