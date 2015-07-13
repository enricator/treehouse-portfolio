<?php
   
   $num_posts = ( is_front_page() ) ?  4 : -1;

   $args = array(
      'post_type' => 'portfolio',
      'posts_per_page' => $num_posts
   );
   $query = new WP_Query( $args );
?>

<section class="row no-max pad">

   <?php if ( $query->have_posts() ) : ?>
   
       <!-- pagination here -->

       <!-- the loop -->
       <?php while ( $query->have_posts() ) : $query->the_post(); ?>
         <!-- <h2><?php the_title(); ?></h2> -->
         <div class="small-6 medium-4 large-3 columns grid-item">
           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
         </div>
       <?php endwhile; ?>
       <!-- end of the loop -->

       <!-- pagination here -->

   <?php endif; ?>

   <?php wp_reset_postdata(); ?>

</section>
