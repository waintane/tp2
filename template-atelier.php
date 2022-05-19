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
     <h3>Decription de l'atelier</h3>
     
     <?php if (have_posts()):  the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <?php the_title() ?>
     <p class='atelier__animateur'><?php the_field('animateur'); ?></p>
     <p class='atelier__local'><?php the_field('local'); ?></p> 
     <p><?php the_field('description'); ?></p>

     <h3>Horaire et date de l'atelier</h3>
     <p><?php the_field('date'); ?></p>
     <p><?php the_field('heure'); ?></p>
     <?php 
     $image = get_field('image');
     if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
     <?php endif; ?>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>



