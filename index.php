<?php
/**
 * Front page Lumo landing
 */

get_header(); ?>

<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>Записей не найдено</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>