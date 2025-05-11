<?php
function s_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support("post-thumbnails");
    add_theme_support('html5', array('search-form'));

    add_image_size('page_eyecatch', 1100, 610, true);
    add_image_size('archive_thumbnail', 200, 150, true);

    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー'
        )
    );
}

add_action('after_setup_theme', 's_theme_setup');

function s_theme_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        's-theme-common',
        get_template_directory_uri() . '/assets/js/theme-common.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        's-theme-styles',
        get_template_directory_uri() . '/assets/css/theme-styles.css',
        array(),
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 's_theme_enqueue_scripts');

function s_theme_widgets_init() {
    register_sidebar(
        array(
            'name' => 'サイドバー',
            'id' => 'sidebar-widget-area',
            'description' => '投稿・固定ページのサイドバー',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
        )
    );

    register_sidebars(
        3,
        array(
            'name' => 'フッター %d',
            'id' => 'footer-widget-area',
            'description' => 'フッターのサイドバー',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
        )
    );
}

add_action('widgets_init', 's_theme_widgets_init');

function s_theme_block_setup() {
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    // MEMO: 実際のCSSファイルに追加が必要
    // add_theme_support('editor-color-palette', array(
    //     array(
    //         'name' => 'Primary',
    //         'slug' => 'primary',
    //         'color' => '#0073aa',
    //     ),
    //     array(
    //         'name' => 'Secondary',
    //         'slug' => 'secondary',
    //         'color' => '#d54e21',
    //     ),
    //     array(
    //         'name' => 'Accent',
    //         'slug' => 'accent',
    //         'color' => '#f0f0f0',
    //     ),
    //     array(
    //         'name' => 'Background',
    //         'slug' => 'background',
    //         'color' => '#ffffff',
    //     ),
    //     array(
    //         'name' => 'Text',
    //         'slug' => 'text',
    //         'color' => '#333333',
    //     ),
    // ));
    //
    // add_theme_support('editor-font-sizes', array(
    //     array(
    //         'name' => 'Small',
    //         'size' => 12,
    //         'slug' => 'small',
    //     ),
    //     array(
    //         'name' => 'Normal',
    //         'size' => 16,
    //         'slug' => 'normal',
    //     ),
    //     array(
    //         'name' => 'Large',
    //         'size' => 24,
    //         'slug' => 'large',
    //     ),
    //     array(
    //         'name' => 'Huge',
    //         'size' => 36,
    //         'slug' => 'huge',
    //     ),
    // ));
    //
    // add_theme_support('editor-styles');
    // add_editor_style('assets/css/editor-styles.css');
    // add_editor_style('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap');
}

add_action('after_setup_theme', 's_theme_block_setup');