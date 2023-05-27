<header class="bg-dark text-light py-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">AboutGames</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Головна</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="reviewsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Огляди</a>
                            <ul class="dropdown-menu" aria-labelledby="reviewsDropdown">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => -1
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) :
                                    while ($query->have_posts()) : $query->the_post();
                                        ?>
                                        <li><a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php
                                    endwhile;
                                endif;

                                wp_reset_postdata();
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
