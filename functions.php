<?php

/**
 * Twenty Nineteen functions and definitions
 *
 * @link http://www.torneseumprogramador.com.br
 *
 * @package WordPress
 * @subpackage desafio21diasWordpress
 * @since Desafio 21 dias 1.0
 */
add_theme_support('post-thumbnails');
add_post_type_support('produto', 'thumbnail');

function products_custom_post_type()
{
  register_post_type(
    'produtos',
    array(
      'labels'      => array(
        'name'          => __('Produtos', 'textdomain'),
        'singular_name' => __('Produto', 'textdomain'),
      ),
      'menu_icon' => 'dashicons-carrot',
      'taxonomies'            => array('category', 'post_tag'),
      'public'      => true,
      'has_archive' => true,
    )
  );
}
add_action('init', 'products_custom_post_type');