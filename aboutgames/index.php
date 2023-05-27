<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head()?>
    <title>About Games</title>
</head>
<body>
<?php get_header()?>
<main class="bg-secondary">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="card mb-3 mt-4 bg-dark text-white rounded-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php the_field('image'); ?>" class="img-fluid" alt="Game Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text">Рейтинг: <?php the_field('rating'); ?>/10</p>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-light rounded-0">Детальніше про гру</a>
                                <p class="card-text mt-2"><a target="_blank" class="text-white" href="<?php the_field('link'); ?>">Посилання на гру</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </div>
</main>
<?php get_footer()?>
</body>
</html>
