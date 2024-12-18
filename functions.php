<?php
//La première page qui s'active est function.php

function theme_31w_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    //Crée une nouvelle section nommée Hero Section dans le Customizer.
    $wp_customize->add_section(
        'hero_section',
        array(
            'title' => __('Hero Section', 'theme_31w'),
            'priority' => 30, //Le paramètre priority définit l’ordre d’affichage dans le Customizer.
        )
    );

    //Définit un paramètre appelé hero_title, avec une valeur par défaut et une fonction de validation (sanitize_text_field) pour empêcher l’injection de code malveillant.
    $wp_customize->add_setting(
        'hero_title',
        array(

            'default' => __('Bienvenue sur mon site', 'theme_31w'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    //Ajoute un champ de saisie de type text pour que l’utilisateur puisse entrer le titre de la section Hero.
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Permet à l’utilisateur de définir un sous-titre pour la section Hero.
    $wp_customize->add_setting(
        'hero_subtitle',
        array(
            'default' => __('Your success starts here.', 'theme_31w'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'hero_subtitle',
        array(
            'label' => __('Hero Subtitle', 'theme_31w'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'hero_adresse',
        array(
            'default' => __('Your address here.', 'theme_31w'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'hero_adresse',
        array(
            'label' => __('Adresse', 'theme_31w'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );

        $wp_customize->add_setting(
        'hero_courriel',
        array(
            'default' => __('Your email here.', 'theme_31w'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'hero_courriel',
        array(
            'label' => __('Courriel', 'theme_31w'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'hero_telephone',
        array(
            'default' => __('Your phone here.', 'theme_31w'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'hero_telephone',
        array(
            'label' => __('Téléphone', 'theme_31w'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );
// ====================================================================
    //Permet aux utilisateurs de télécharger une image d’arrière-plan pour la section Hero. La validation (sanitize_callback) s’assure que la valeur est une URL valide.
    $wp_customize->add_setting('hero_background', array('default' =>  '', 'sanitize_callback' => 'esc_url_raw',));

    //Utilisation d’un contrôle spécifique WP_Customize_Image_Control pour afficher l’outil de gestion des images.
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array('label' => __('Hero Background Image', 'theme_31w'), 'section' => 'hero_section',)));
// ----------------------------------------------------------------------------------
    //Ajoute un paramètre pour personnaliser le texte d’un bouton d’appel à l’action (CTA) dans la section Hero.
    $wp_customize->add_setting('hero_cta_text', array('default' => __('Learn More', 'theme_31w'), 'sanitize_callback' => 'sanitize_text_field',));

    //Le champ de type text permet à l’utilisateur de saisir un message comme « En savoir plus » ou « Découvrir ».
    $wp_customize->add_control('hero_cta_text', array('label' => __('CTA Button Text', 'theme_31w'), 'section' => 'hero_section', 'type' => 'text',));

    //Permet à l’utilisateur de spécifier une URL pour le bouton CTA.
    $wp_customize->add_setting(
        'hero_cta_link',
        array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    //Le champ de type url garantit que seules des valeurs valides (liens) sont acceptées.
    $wp_customize->add_control(
        'hero_cta_link',
        array(
            'label' => __('CTA Button Link', 'theme_31w'),
            'section' => 'hero_section',
            'type' => 'url',
        )
    );

    $reseaux_sociaux = array('facebook', 'instagram'); 
    
    foreach ($reseaux_sociaux as $reseau) { 
        
        // Définir un paramètre pour chaque réseau social 
        $wp_customize->add_setting( "social_{$reseau}_url", array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', ) ); 
        // Ajouter un contrôle pour chaque réseau social 
        $wp_customize->add_control( "social_{$reseau}_url", array( 'label' => ucfirst($reseau) . ' URL', 'section' => 'hero_section', 'type' => 'url', ) );

        // Définir un paramètre pour chaque image de réseau social 
        $wp_customize->add_setting( "social_{$reseau}_icon", array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', ) ); 
        // Ajouter un contrôle pour chaque image de réseau social 
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "social_{$reseau}_icon", array( 'label' => ucfirst($reseau) . ' Icon', 'section' => 'hero_section', 'settings' => "social_{$reseau}_icon", ) ) );

        $wp_customize->add_setting('icones_sociaux', array('default' =>  '', 'sanitize_callback' => 'esc_url_raw',));

    }
}

add_action('customize_register', 'theme_31w_customize_register');

//permet d'ajouter le link de la page css au site web
function ajouter_style()
{

    wp_enqueue_style(
        'mon_style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    ); /*Pour récuperer la dernière version de wordpress*/
}
//add_action es un écouteur d'évênement comme addEventListener en js
add_action('wp_enqueue_scripts', 'ajouter_style'); //wp_enqueue_scripts est une action de add_action au même titre que click dans addEventListener

function ajout_option()
{
    // Activer le support des menus personnalisés dans le tableau de bord > apparence
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}

add_action("after_setup_theme", "ajout_option");

// function montheme_supports(){
//     add_theme_support('title-tag');
// }

// add_action('after_setup_theme', 'montheme_supports');
/*=================================================================================================== */
/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
/* query represente la requete principale, if la requete s'execute dans la page d'accueil, si la requete est une requete principale et si on n'est pas dans le tableau de bord*/
function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        //pour afficher les cours seulement, on inscrit cours, si on veut une autre catégorie, on l'inscrit ci dessous
        $query->set('category_name', 'favorite, galerie');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');
