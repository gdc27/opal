<?php
// à utiliser avec front-page.php
//wp_redirect(site_url());
//exit;
?>
<?php get_header(); ?>



<section id='content'>
  <aside class="droite" id="right_box">
      <!-- partie de droite-->
  <?php get_sidebar(); ?>
  </aside>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
  <!-- gauche -->
  <div class="gauche" id="left_box">
   	  <!-- Display the Title as a link to the Post's permalink. -->

   	  <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


   	  <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

   	  <small>Date et auteur : <?php the_time('j F Y à G:i'); ?> par <?php the_author_posts_link(); ?></small>


   	<!-- Display the Post's content in a div box. -->

   	<div class="entry">
      <div>
   		  <?php the_content(); ?>
      </div>
   	</div>

    <p style="font-size:.9em;">
      <!-- Display the number of comments. -->
      Cet article a <a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'aucun commentaire', 'un commentaire', '% commentaires' ); ?></a>.
   	  <!-- Display a comma separated list of the Post's Categories. -->
   	  <span class="postmetadata">Posté dans <?php the_category( ', ' ); ?></span>
    </p>

    <div id="commentaires_box">
      <p>Commentaires : <p>
      <?php
        if ( comments_open() || get_comments_number() ) :
                comments_template();
        endif;
      ?>
    </div>
  </div> <!-- fin partie gauche -->

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>


<?php get_footer(); ?>
