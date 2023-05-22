<?php if ( get_theme_mod('fish_aquarium_blog_box_enable') ) : ?>

<?php $fish_aquarium_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('fish_aquarium_blog_slide_category'),
  'posts_per_page' => get_theme_mod('fish_aquarium_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $fish_aquarium_arr_posts = new WP_Query( $fish_aquarium_args );
    if ( $fish_aquarium_arr_posts->have_posts() ) :
      while ( $fish_aquarium_arr_posts->have_posts() ) :
        $fish_aquarium_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('fish_aquarium_title_unable_disable') ) : ?>
              <h3 class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>
