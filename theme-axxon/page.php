<?php get_header(); ?>
<div class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="blog_content">
                        <div class="box_blog">
                            <h2 class="post_title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="miniatura">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php the_content('далее'); ?>
                            <div class="social_page">
                                <h3>Расскажи друзьям о нас в социальных сетях!</h3>
                                <div>
                                    <script type="text/javascript">(function () {
                                            if (window.pluso)if (typeof window.pluso.start == "function") return;
                                            if (window.ifpluso == undefined) {
                                                window.ifpluso = 1;
                                                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                                s.type = 'text/javascript';
                                                s.charset = 'UTF-8';
                                                s.async = true;
                                                s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                                var h = d[g]('body')[0];
                                                h.appendChild(s);
                                            }
                                        })();</script>
                                    <div class="pluso" data-background="none;"
                                         data-options="big,square,line,horizontal,counter,sepcounter=1,theme=14"
                                         data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>