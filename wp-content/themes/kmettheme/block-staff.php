<div class="founders top" id="founders">
    <a class="anchor" name="founders"></a>
    <div class="container">
        <h2 class="page-header">Про нас</h2>
        <div class="row founders-list">
        <?php
            $type = 'employee';
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'caller_get_posts'=> 1);

              $my_query = new WP_Query($args);

            if( $my_query->have_posts() ) {
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 founder-info">
                    <?php if (has_post_thumbnail($item->ID)) { ?>
                        <a href="<?php echo get_permalink(); ?>" class="thumb-link">
                            <img class="big-thumb-img"
                             src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                             $imgUrl = $thumb[0]; echo $imgUrl; ?>" alt="<?php the_title();?>" /></a>
                    <?php }?>

                    <h4 class="founder-name"><?php the_title(); ?></h4>
                    <p><?php the_content(); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"></a></p>
                </div>
                <?php
                endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

        </div>
    </div>
</div>