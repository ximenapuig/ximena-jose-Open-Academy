<?php get_header(); ?>
<div class="container">
    <h1>Lessons for <?php echo get_the_title(); ?> </h1>
    <?php
    $args = array(
        'post_type' => 'course',
        'post_parent' => get_the_ID()
    );
    $childs = new WP_Query( $args );
    ?>
    <ul>
        <?php foreach($childs->posts as $lesson){ ?>
            <li><a href="<?php echo get_the_permalink($lesson->ID); ?>"><?php echo $lesson->post_title; ?></a></li>
        <?php } ?>

    </ul>

</div>
<?php get_footer(); ?>