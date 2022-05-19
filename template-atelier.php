<?php
get_header();
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <section class="atelier">
     <h1>Atelier</h1>
     <h3>Description de l'atelier</h3>
     
     <?php if (have_posts()):  the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <?php the_title() ?>
     <p class='atelier__animateur'>L'animateur de l'atelier : <?php the_field('animateur'); ?></p>
     <p class='atelier__local'>L'atelier se donne au local : <?php the_field('local'); ?></p> 
     <p><?php the_field('description'); ?></p>

     <h3>Horaire et date de l'atelier</h3>
     <p>Durée de chacune des séances est de : <?php the_field('duree_des_seances'); ?></p>
     <p>Date de début : <?php the_field('date_de_debut'); ?></p>
     <p>Date de fin : <?php the_field('date_de_fin'); ?></p>
     <p>La formation se donnera : <?php the_field('journee'); ?></p>
     <p>L'horaire : <?php the_field('horaire'); ?></p>
     <?php 
     $image = get_field('image');
     if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
     <?php endif; ?>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>



