<?php get_header(); ?>
<div class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="category_page">
                    <h2><i class="fa fa-search"></i>
                        <?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1);
                        $count = $allsearch->post_count; _e('');  echo $count . ' '; _e('результатов');
                        wp_reset_query(); ?>
                        <span> для <?php echo get_search_query(); ?></span>
                    </h2>
                    <div class="search_post_page">
                        <form action="" method="post" class="search_post">
                            <input type="search" name="s" placeholder="Введите поисковую фразу и нажмите Enter" class="input" />
                            <button type="submit" class="search_button" name="submit" value="Search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

                <div class="blog_content">
                    <div class="box_blog">
                        <h2 class="post_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                         </div>
                        <?php the_content('далее'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <div class="search_not_found">
                        <h3>Ничего не найдено</h3>
                        <p>Рекомендации по поиску записей:</p>
                        <ol>
                            <li>Проверьте правописание</li>
                            <li>Используйте синонимы</li>
                            <li>Используйте больше ключевых слов</li>
                        </ol>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="pagination">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
