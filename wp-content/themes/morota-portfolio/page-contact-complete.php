<?php get_header(); ?>
<div class="thanksPage">
  <main>
    <div class="container">
      <h2 class="heading">CONTACT Complete</h2>
      <div class="thanksWrapper">
      <?php
        if (have_posts()):
        while(have_posts()): the_post();
      ?>
      <?php the_content(); ?>
      <?php
        endwhile;
        endif;
      ?>
      <div class="buttonWrapper">
        <a href="<?php echo home_url('/'); ?>" class="button">Top page</a>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
