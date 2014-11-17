<?php get_header(); ?>
    <div class="doings">
        <a class="anchor" name="doings"></a>
        <div class="container">
            <h2 class="page-header">Події</h2>
            <?php
            $idObj = get_category_by_slug('doings');
            $id = $idObj->term_id;
            ?>
            <a href="<?php echo get_category_link($id); ?>" class="show-all">Показати всі</a>
            <?php

            $args = array( 'posts_per_page' => -1, 'offset'=> 1, 'category' => $id );
            $myposts = get_posts( $args );
            if ($myposts) {?>
                <ul class="row slider4"> <?php
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 news-slide ">

                            <h3 class="news-header"><?php the_title(); ?></h3>

                            <a href="<?php the_permalink(); ?>">Читати повністю</a>
                            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                        </li>
                    <?php endforeach;?>
                </ul>
            <?php }
            wp_reset_postdata();?>

        </div>
    </div>
<?php get_footer(); ?>