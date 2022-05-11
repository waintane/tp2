<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
    <?php show_admin_bar(true); ?>

    <style>
        /* À compléter pour récupérer la nouvelle couleur du clipPath */
        .home::after {
             background-color : <?=  get_theme_mod('background_body_clippath');?>
        }

        .site {
            background-color:<?=  get_theme_mod('background_body');?>;
        }

    </style>    
</head>

<body <?php body_class("site"); ?> >

    <header class="site__header">
        <section class="site__header__titre">
            <?php the_custom_logo(); ?>
            <h1 class="header__titre">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h2 class="header__description"><?php bloginfo('description'); ?></h2>
        </section>
        <div class="util">
           
            </div>
            <?php get_search_form(); ?>
            <!-- form recherche -->
        </div>
    </header>
    <section class="site__barre">
        <input type="checkbox" id="chk-burger">
        <label for="chk-burger" id="burger"  class="burger">
            <div class="burger__ligne"></div>
            <div class="burger__ligne"></div>
            <div class="burger__ligne"></div>
        </label>
        <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
    </section>