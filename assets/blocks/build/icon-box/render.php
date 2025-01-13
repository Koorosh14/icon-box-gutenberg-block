<?php

$title   = !empty($attributes['title']) ? esc_html($attributes['title']) : '';
$content = !empty($attributes['content']) ? wp_kses_post($attributes['content']) : '';

?>
<div <?php echo get_block_wrapper_attributes(['class' => 'icon-box-block']); ?>>
	<div class="icon-box-content">
		<h3><?php echo $title; ?></h3>
		<p><?php echo $content; ?></p>
	</div>
</div>