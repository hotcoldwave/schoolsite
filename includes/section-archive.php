<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <div class="card m-3">
        <div class="card-body d-flex justify-content-center align-items-center">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(
                  "blog-small"
                ); ?>" alt="" class="img-fluid mb-3 img-thumbnail">
            <?php endif; ?>

            <div class="blog-content ml-4">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
                <a class="btn btn-success" href="<?php the_permalink(); ?>">Read more</a>
            </div>
            
        </div>
    </div>

<?php
  endwhile;
else:
endif;
?>
