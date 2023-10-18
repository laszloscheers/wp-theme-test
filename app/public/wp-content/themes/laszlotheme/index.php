<?php get_header(); ?>

<!-- <?php
    function greet($name) {
        echo "<p>Hello, $name</p>";
    }
    greet("Bobbie");
    greet("Michael");
?> -->
<h2>Posts </h2>
<?php
    while(have_posts()) {
        the_post();?>
        <h2> <a href="<?php the_permalink() ?>" ><?php the_title() ?> </a></h2>
        <?php the_content() ?>
        <hr>
        <?php }
?>

<?php get_footer(); ?>