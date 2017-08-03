<?php get_header(); ?>
<div class="container">
    <h1>Here are your available courses!</h1>
</div>
<div>
    <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" onClick="search_for_courses()">Find!</button>
      </form>
</div>
    <?php
    $args = array(
        'post_type' => 'Course',
        'category__in'  => 4
    );
    $courses = new WP_Query( $args );
    ?>
<div>
    <ul>
        <?php foreach($courses->posts as $course){ ?>
            <li><a href="<?php echo get_the_permalink($course->ID); ?>"><?php echo $course->post_title; ?></a></li>
        <?php } ?>

    </ul>

</div>
<?php get_footer(); ?>