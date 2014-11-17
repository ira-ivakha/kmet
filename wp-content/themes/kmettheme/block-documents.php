<div class="documents top" id="documents">
    <a class="anchor" name="documents"></a>
    <div class="container">

        <h2 class="page-header">Зразки документів</h2>
        <a href="#" class="show-all">Показати всі</a>
        <ul class="row document-list">
            <?php
            $type = 'document';
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'caller_get_posts'=> 1);

            $my_query = new WP_Query($args);

            if( $my_query->have_posts() ) {
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <li class="document">
                        <?php if (has_post_thumbnail($item->ID)) { ?>
                            <a href="<?php echo get_permalink(); ?>" class="thumb-link">
                                <img class="big-thumb-img"
                                     src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                                     $imgUrl = $thumb[0]; echo $imgUrl; ?>" alt="<?php the_title();?>" /></a>
                        <?php }?>

                        <h3 class="news-header"><?php the_title(); ?></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink() ?>" class="read-more">Читати далі</a>
                    </li>
                <?php
                endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        </ul>
    </div>