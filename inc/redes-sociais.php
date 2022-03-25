<?php $contato = get_page_by_title('contato'); ?>
<ul>
	<li><a href="<?php the_field('facebook'); ?>"><img src="<?php the_field('logo_facebook'); ?>" alt="Facebook Bikcraft"></a></li>
	<li><a href="<?php the_field('instagram'); ?>" target="_blank"><img src="<?php the_field('logo_instagram'); ?>" alt="Instagram Bikcraft"></a></li>
	<li><a href="<?php the_field('twitter'); ?>" target="_blank"><img src="<?php the_field('logo_twitter'); ?>" alt="Twitter Bikcraft"></a></li>
</ul>
