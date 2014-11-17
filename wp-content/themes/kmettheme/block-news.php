<div class="news top" id="news">
    <a class="anchor" name="news"></a>
    <div class="container">
        <h2 class="page-header">Публікації</h2>
        <?php
        global $id;
        $idObj = get_category_by_slug('news');
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
                <ul class="news-head">
                    <li class="head-img">
                        <?php if (has_post_thumbnail($item->ID)) { ?>
                            <a href="<?php echo get_permalink(); ?>" class="thumb-link small news-thumb">
                                <img class="thumb-news"
                                     src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                                     $imgUrl = $thumb[0]; echo $imgUrl; ?>" alt="<?php the_title();?>" /></a>
                        <?php }?>
                    </li>
                    <li class="head-header"><h3 class="news-header"><?php the_title(); ?></h3></li>
                </ul>
                <a href="<?php the_permalink(); ?>">Читати повністю</a>
                <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
            </li>
        <?php endforeach;
        wp_reset_postdata();?>
        </ul>
        <?php } ?>
    </div>
</div>