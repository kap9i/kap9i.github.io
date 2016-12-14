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
                            <div class="post_meta">
                                <ul>
                                    <li><?php the_category(); ?></li>
                                    <li><?php the_time('j M Y'); ?></li>
                                    <li><a href="<?php comments_link(); ?>">
                                            <i class="fa fa-comment"></i><?php comments_number('0', '1', '%'); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="miniatura">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php the_content('далее'); ?>
                            <div class="post_tags">
                                <?php the_tags('<span>Метки:</span>', ' '); ?>
                            </div>
                            <div class="social_button">
                                <h3>Поделись с друзьями в социальных сетях!</h3>
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
                            <div class="post_nav">
                                <div class="prev">
                                    <span>Предыдущая запись</span>
                                    <?php if (get_adjacent_post(false, '', true)) {
                                        previous_post_link('<p>%link</p>');
                                    } else {
                                        $first = new WP_Query('posts_per_page=1&order=DESC');
                                        $first->the_post();
                                        echo '<a href="' . get_permalink() . '"><p>Первая запись</p></a>';
                                        wp_reset_postdata();
                                    }; ?>
                                </div>
                                <div class="next">
                                    <span>Следующая запись</span>
                                    <?php if (get_adjacent_post(false, '', false)) {
                                        next_post_link('<p>%link</p>');
                                    } else {
                                        $last = new WP_Query('posts_per_page=1&order=ASC');
                                        $last->the_post();
                                        echo '<a href="' . get_permalink() . '"><p>Последняя запись</p></a>';
                                        wp_reset_postdata();
                                    }; ?>
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
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="services">
                <img src="<?php bloginfo('template_url'); ?>/img/james.jpg" alt="">
                <h3>Нужен гид? Мы рады предложить Вам свои услуги!!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquam amet at aut beatae
                    dolores est excepturi exercitationem explicabo facere fuga id ipsam ipsum iste laudantium magnam,
                    minus natus nihil non optio pariatur quae quibusdam, quo repellendus similique ut velit voluptate!
                    A, aliquam architecto asperiores aspernatur commodi delectus deserunt dignissimos dolores dolorum
                    enim error explicabo facilis harum, in ipsum iste iure magni non placeat provident quae quaerat quam
                    quibusdam, reiciendis repellendus sapiente sequi sit sunt tempore tenetur totam ullam vitae
                    voluptate. Adipisci, animi aspernatur blanditiis cumque dignissimos dolorum et facere id in ipsum
                    iure laboriosam, nostrum, numquam odit quam rem.</p>
                <ul>
                    <li><a href="#">Все услуги</a></li>
                    <li>Телефон +380954969977</li>
                    <li><a href="#">E-mail kap9i@mail.ru</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <?php comments_template(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
