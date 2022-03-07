<?php get_header(); ?>
<div class="confirmPage">
  <main>
    <div class="container">
      <h2 class="heading">CONTACT Confirm</h2>
      <div class="confirmWrapper">
      <?php
        if (have_posts()):
        while(have_posts()): the_post();
      ?>
      <?php the_content(); ?>
      <?php
        endwhile;
        endif;
      ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
