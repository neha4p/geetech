<article class="block">
	<a class="block-thumbnail" href="<?= ($settings->enable_https) ? secure_url('video') : URL::to('video'); ?><?= '/' . $video->id ?>">
		<div class="thumbnail-overlay"></div>
		<span class="play-button-small"></span>
		<img src="<?= ImageHandler::getImage($video->image, 'medium')  ?>">
		<div class="details">
			<span><?php if($video->access == 'guest'): ?>
                    <span class="type">Free Video</span>
                <?php elseif($video->access == 'subscriber'): ?>
                    <span class="type">Subscribers Only</span>
                <?php elseif($video->access == 'registered'): ?>
                    <span class="type">Registered Users</span>
                <?php endif; ?></span>
		</div>
	</a>
	<div class="block-contents">
		<a href="<?= ($settings->enable_https) ? secure_url('video') : URL::to('video'); ?><?= '/' . $video->id ?>"><?= $video->title; ?></a>

		<p class="desc"><?php if(strlen($video->description) > 90){ echo substr($video->description, 0, 78) . '...'; } else { echo $video->description; } ?></p>
		
	</div>
	<!--p class="type"><?php if($video->access == 'guest'): ?>
			<span class="label label-info">Free Video</span>
		<?php elseif($video->access == 'subscriber'): ?>
			<span class="label label-success">Subscribers Only</span>
		<?php endif; ?></p-->
</article>