<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <?php the_content(); ?>
    <p class="news-single__date"><?php echo get_the_date("d.m.Y"); ?></p>
<!-- 
    <p>
      <?php
        $fname = get_the_author_meta("first_name");
        $lname = get_the_author_meta("last_name");
      ?>
      Posted by <?php echo $fname; ?> <?php echo $lname; ?>
    </p> -->

   <?php
    //comments_template();
    ?>

<?php
  endwhile;
else:
endif;
?>
