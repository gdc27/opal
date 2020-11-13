<?php
/*
* Template Name: Autre
*/
// à utiliser avec front-page.php
//wp_redirect(site_url());
//exit;
?>
<?php get_header(); ?>



<section id='content'>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
  <div class="full" id="full_box">
   	  <!-- Display the Title as a link to the Post's permalink. -->

   	  <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

   	<!-- Display the Post's content in a div box. -->
     <h2> Tous les Articles</h2>
   	<div class="entry">
        <div class="article_all_item">
   		      <?php the_content(); ?>
        </div>
   	</div>
  </div> <!-- fin partie gauche -->

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>


<?php get_footer(); ?>
