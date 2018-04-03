<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <a href="mailto:<?php the_author_meta('email'); ?>"><?php the_author();?></a></p>

    <?php the_content(); ?>

</div><!-- /.blog-post -->