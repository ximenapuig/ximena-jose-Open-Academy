<?php get_header(); ?>
    <?php
    $term_list = wp_get_post_terms($post->ID, "category");
    
    if($term_list[0]->name == "Course"){
    $args = array(
        'post_type' => 'course',
        'post_parent' => get_the_ID()
    );
    $childs = new WP_Query( $args );
    ?>
        <div class="container">
        <h1>Lessons for <?php echo get_the_title(); ?> </h1>
        <h3>Start from the last lesson and work your way up!</h3>
        <ul>
            <?php foreach($childs->posts as $lesson){ ?>
                <li><a href="<?php echo get_the_permalink($lesson->ID); ?>"><?php echo $lesson->post_title; ?></a></li>
            <?php }; ?>
        </ul>
        </div>
    <?php } else if($term_list[0]->name == "Lesson"){
      
      setup_postdata($post); ?>
      <h1> <?php the_title(); ?> </h1>
      <?php the_content();
      //echo $post->post_content;
      }
      
      ?>
          
     
</div>
<?php get_footer(); ?>