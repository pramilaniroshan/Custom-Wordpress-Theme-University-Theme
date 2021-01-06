<?php get_header(); ?>
<?php 

while(have_posts()){
    the_post(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url('<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>');"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  

    

  </div>

 

  <div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
          <p><span><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link( 'event' )?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Event Home</a></span> <span class="metabox__main"><?php the_title( ); ?></span></p>
    </div>

    <div class="generic-content"><?php the_content() ?></div>
    <br>
    <?php 
    
    

    $related_programs = get_field('related_programs');

    if($related_programs!=null){
      echo '<h2>Related Programs</h2>';
      foreach($related_programs as $program){
        ?> <li> <a href="<?php the_permalink( $program ) ?>"> <?php echo get_the_title( $program );  ?></a></li> <?php
    }
    
    
    }
    
    ?>

  </div>
<?php }
?> 
<?php get_footer(); ?>


