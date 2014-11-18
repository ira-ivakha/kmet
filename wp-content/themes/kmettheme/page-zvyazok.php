<?php
get_header(); ?>
<div class="container">
<?php while (have_posts()) { the_post();?>
    <h2><?php the_title(); ?></h2>
    <dl>
        <?php if (get_field('phone', 'options'))
        {?>
            <dt>Тел.</dt>
            <dd><?php echo get_field('phone', 'options') . '<br />' ; ?></dd>
        <?php } ?>
        <?php if (get_field('additional_phone', 'options'))
        {?>
            <dt>Тел.</dt>
            <dd><?php echo get_field('additional_phone', 'options') . ' ' . get_field('name_additional_phone', 'options')  ; ?></dd>
        <?php } ?>
        <dt>Тел/Факс</dt>
        <dd><?php echo get_field('fax', 'options'); ?></dd>
        <dt>Email</dt>
        <dd><a href="mailto:<?php echo get_field('email', 'options'); ?>" class="mail" ><?php echo get_field('email', 'options'); ?></a></dd>
        <dt>Адреса</dt>
        <dd><?php echo get_field('adress', 'options'); ?></dd>
    </dl>


<?php } ?>
</div>
<?php get_footer(); ?>