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
    <div class="container mt-3 text-white">
        <div class="row">
            <div class="col text-center">
                <img src="<?php the_field('image'); ?>" class="img-fluid" alt="Post Image">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <h3 class="fw-bold"><?php the_title(); ?></h3>
                <p class="">Дата публікації: <?php the_date('d.m.Y'); ?></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <p class="fw-bold">Рейтинг: <?php the_field('rating'); ?>/10</p>
            </div>
            <div class="col text-end">
                <a href="<?php the_field('link'); ?>" class="btn btn-outline-light rounded-0">Посилання на гру</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col mb-5">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer()?>
</body>
</html>
