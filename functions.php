<?php
//La première page qui s'active est function.php
//permet d'ajouter le link de la page css au site web
function ajouter_style() {
    
    wp_enqueue_style(
        'mon_style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')); /*Pour récuperer la dernière version de wordpress*/


}
//add_action es un écouteur d'évênement comme addEventListener en js
    add_action('wp_enqueue_scripts', 'ajouter_style'); //wp_enqueue_scripts est une action de add_action au même titre que click dans addEventListener