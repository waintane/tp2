<?php get_header() ?>
<main class="site__main">

<h2>Le département TIM</h2>
<?php wp_nav_menu(array(
        "menu"=> "accueil",
        "container" => "nav")); ?>
<h2>Les événements de l'année</h2>
<?php wp_nav_menu(array(
        "menu"=> "evenement",
        "container" => "nav")); ?>  
              
<h2>Les atelierss à venir</h2>
<?php wp_nav_menu(array(
        "menu"=> "atelier",
        "container" => "nav")); ?>   

   <?php if (have_posts()): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>   
   <?php endif ?>
   
</main>
<?php get_footer() ?>