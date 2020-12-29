
<html <?php language_attributes(); ?>>

<header>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="viewport" content="width=device_width , initial-scale=1" >
<?php get_header(); ?>
</header>



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
  <?php echo get_the_ID(); ?>
  <?PHP echo wp_get_post_parent_id( get_the_ID()); ?>

  
 
  
  <?php $parent_id = wp_get_post_parent_id(get_the_id()); ?> 
  
  <?php if($parent_id){
    
  
    
    ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<? echo get_permalink($parent_id); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parent_id) ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>
     
    <?php } ?>
    
        

          

        
 
  
        
    <?php 

    $is_parent_page = get_pages(
      array(
      'child of' => get_the_ID()
      ));

  if($parent_id || $is_parent_page){ ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php the_permalink(); ?>"><?php  the_title() ?></a></h2>
      <ul class="min-list">
        <li><?php

        if($parent_id){
          $findchildrenof = $parent_id;
        }else{
         $findchildrenof = get_the_id();
        }
        
        wp_list_pages(array(

          'title_li' => NULL,
          'child_of' => $findchildrenof,
          'sort_column' => 'menu_order'

        )); ?> </li>
      </ul>
    </div>
     <?php } ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>

  


<?php }
?> 
<?php get_footer(); ?>

</html>


