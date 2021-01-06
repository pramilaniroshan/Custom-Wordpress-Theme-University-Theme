
<?php get_header(); ?>



<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url('<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>');"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">All Programms
      </h1>
      <div class="page-banner__intro">
        <p>Check Our All Programms Here</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  <ul class="link-list min-list">
  <?php 
        // $today = date('Ymd');
        // $home_page_events = new WP_Query(array(
        //   'posts_per_page' => -1,
        //   'post_type' =>'event',
        //   'meta_key' => 'event_date',
        //   'orderby' => 'meta_value_num',
        //   'order' => 'ASC',
        //   'meta_query' => array(
        //     array(
        //       'key' => 'event_date',
        //       'compare' => '>=',
        //       'value' => $today,
        //       'type' => 'numeric'
        //     )
        //   )

        // ));
        
        while(have_posts( )){

          the_post(  ); ?>
        <li>
         <a href="<?php the_permalink() ?>"><?php the_title(  )?></a>
         </li>
          <?php
        }

        ?>
</ul>
  </div>

<?php get_footer(); ?>