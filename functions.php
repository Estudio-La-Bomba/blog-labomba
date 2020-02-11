<?php

// Chamar a tag Title e adicionar os formatos de posts
function labomba_theme_support()
{
    // Definir as miniaturas dos posts
    add_theme_support('post-thumbnails');

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar o logotipo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'labomba_theme_support');

// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function labomba_render_title()
    {
        ?>
<title><?php wp_title('|', true, 'right');?></title>
<?php
}
    add_action('wp_head', 'labomba_render_title');
}

// Definir o tamanho o resumo
add_filter('excerpt_length', function ($length) {
    return 60;
});