</div>

</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a class="logo footer" href="<?php bloginfo('url'); ?>"></a>
                <span class="copyright">КМЕТ 2014&copy; </span>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <ul class="row footer-menu">
                    <li class="footer-item"><a href="<?php bloginfo(url); ?>#" class=" top">головна</a></li>
                    <li class="footer-item"><a href="<?php bloginfo(url); ?>#founders" class="scroll">про нас</a></li>
                    <li class="footer-item"><a href="<?php bloginfo(url); ?>#news" class="scroll">Новини</a></li>
                    <li class="footer-item"><a href="<?php bloginfo(url); ?>#practices" class="scroll">Судова практика</a></li>
                    <li class="footer-item"><a href="<?php echo get_permalink(68);?>">Послуги</a></li>
                    <li class="footer-item"><a href="<?php echo get_permalink(70);?>">Зв'язок</a></li>
                         <!-- <?php //dynamic_sidebar('footermenu'); ?>-->
                </ul>

            </div>
            <div class="col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-8 col-xs-12">
                <address>
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
                </address>
                <ul class="social-links">
                    <li><a class="facebook" href="<?php if (get_field('facebook_link', 'options')) echo get_field('facebook_link', 'options'); ?>" target="_blank"></a></li>
                    <li><a class="twitter" href="<?php if (get_field('twitter_link', 'options')) echo get_field('twitter_link', 'options'); ?>" target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
    $(document).ready(function(){
        $('.slider4').bxSlider({
            slideWidth: 300,
            minSlides: 1,
            maxSlides: 3,
            moveSlides: 1,
            slideMargin: 0
        });

        var headerResize = function ( )
        {   var windowWidth=$(window).width();
            var headerWidth=parseInt(windowWidth*0.14*160/180);
            if (windowWidth<1100) {
                $('.header').css('left', windowWidth/2).css('width', headerWidth)
                    .css('margin-left', parseInt(windowWidth*0.14*(-80)/180))
                    .css('margin-top', headerWidth*(-80)/180);
                if (windowWidth>670) {
                    $('.left').css('margin-right', parseInt((windowWidth*0.14*80/180)+15));
                    $('.right').css('margin-left', parseInt((windowWidth*0.14*80/180)+15));}
                else {$('.right').css('margin-left', 0);}
            }
            else  {
                $('.header').css('height', 180).css('left', '50%').css('width', 160 ).css('margin-left', -80).css('margin-top', -80);
                $('.left').css('margin-right', 95);
                $('.right').css('margin-left', 95);
            }
        }
        headerResize();
        $(window).resize(function(){
            headerResize();
        });

        $(".scroll").click(function(event){
           // event.preventDefault();
            var full_url = this.href;
            var parts = full_url.split("#");
            var trgt = parts[1];
            var tglink = parts[0];
            //if (tglink==)
            var target_offset = $("#"+trgt).offset();
            var target_top = target_offset.top;
            $('html, body').animate({scrollTop:target_top}, 300);
        });
        /*$('.top').click(function() {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });*/
        $('.header').click(function() {
            $('html, body').animate({scrollTop: 0}, 300);
            return false;
        });

    });
</script>
</body>
</html>