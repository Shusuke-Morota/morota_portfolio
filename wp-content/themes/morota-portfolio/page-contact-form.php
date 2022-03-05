<?php get_header(); ?>
<div class="formPage">
  <main>
    <div class="container">
      <h2 class="heading">CONTACT</h2>
      <div class="formWrapper">
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
