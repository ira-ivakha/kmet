<?php get_header(); ?>

    <div class="news">
        <div class="container">
            <?php while (have_posts()) :
                the_post();
            ?>
            <article>
                <h2 class="page-header"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>


            </article>
                <ul class="links">
                    <li><?php previous_post_link('%link', 'Попередня стаття', true);?></li>
                    <li><?php next_post_link('%link', 'Наступна стаття', true);?></li>
                </ul>
            <?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>