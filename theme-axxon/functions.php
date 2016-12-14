<?php

/*Загрузка скриптов и стилей*/
function load_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js');
    wp_enqueue_script('headhesive_css', get_template_directory_uri() . '/libs/headhesive/headhesive.min.js', array('jquery'), null, false);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, false);
    wp_enqueue_script('es5-shim', get_template_directory_uri() . '/libs/html5shiv/es5-shim.min.js', array('jquery'), null, false);
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/libs/html5shiv/html5shiv.min.js', array('jquery'), null, false);
    wp_enqueue_script('html5shiv-printshiv', get_template_directory_uri() . '/libs/html5shiv/html5shiv-printshiv.min.js', array('jquery'), null, false);
    wp_enqueue_script('respond.minie9', get_template_directory_uri() . '/libs/respond/respond.min.js', array('jquery'), null, false);

    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/libs/font-awesome-4.2.0/css/font-awesome.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
}

add_action('wp_enqueue_scripts', 'load_scripts');

/*Добавляем меню*/
register_nav_menu('menu', 'main menu');

/*Добавляем миниатюру*/
add_theme_support('post-thumbnails');

/*Добавляем виджеты*/
register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar_my">',
    'after_widget' => "</div>\n",
    'before_title' => '<h3>',
    'after_title' => "</h3>\n",
));

/*Комментарии*/
if ( ! function_exists( 'twentyten_comment' ) ) :
    function axxon_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case '' :
                ?>
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <?php echo get_avatar( $comment, 48 ); ?>
                        <?php printf( __( '%s<span class="says"></span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                    </div><!-- .comment-author .vcard -->
                    <?php if ( $comment->comment_approved == '0' ) : ?>
                        <em class="comment-awaiting-moderation"><?php _e( 'Ваш комментарий ожидает модерации.', 'twentyten' ); ?></em>
                        <br />
                    <?php endif; ?>

                    <div class="comment-meta commentmetadata"><i class="fa fa-clock-o"></i><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                            <?php
                            /* translators: 1: date, 2: time */
                            printf( __( '%1$s в %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Изменить)', 'twentyten' ), ' ' );
                        ?>
                    </div><!-- .comment-meta .commentmetadata -->

                    <div class="comment-body"><?php comment_text(); ?>
                        <div class="reply">
                            <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                        </div><!-- .reply -->
                    </div>


                </div><!-- #comment-##  -->

                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
                <?php
                break;
        endswitch;
    }
endif;

/*Добавляем древовидной форме комментариев ответить всплывающее окно*/
function enqueue_comment_reply() {
    if( is_singular() )
        wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );

/*Удаляем поле URL в форме комментариев*/
function remove_comment_fields($fields) {

    unset($fields['url']);

    return $fields;

}

add_filter('comment_form_default_fields', 'remove_comment_fields');