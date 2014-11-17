<?php get_header(); ?>
<div class="news">
    <a class="anchor" name="news"></a>
    <div class="container">
        <h2 class="page-header"><?php get_the_title(); ?></h2>
        <?php get_template_part("block",'content');?>
    </div>
</div>
<?php get_footer(); ?>