<?php get_header(); ?>

    <div class="news">
        <div class="container">
            <?php while (have_posts()) :
                the_post();
            ?>
            <article>
                <h2 class="page-header"><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail($item->ID)) { ?>
                    <a href="<?php echo get_permalink(); ?>" class="thumb-link">
                        <img class="big-thumb-img"
                             src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                             $imgUrl = $thumb[0]; echo $imgUrl; ?>" alt="<?php the_title();?>" /></a>
                <?php }?>
                <p><?php the_content(); ?></p>


            </article>
                <ul class="links">
                    <li><a href="<?php get_category_by_slug('employee'); ?>">Назад</a></li>
                    <li><?php next_post_link('%link', 'Наступна стаття', true);?></li>
                </ul>
            <?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>