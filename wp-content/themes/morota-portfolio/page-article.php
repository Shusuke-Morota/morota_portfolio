<?php get_header(); ?>
<div class="articlePage">
  <main>
    <div class="container">
      <h2 class="heading">WORKS</h2>
      <div class="contentsWrapper">
        <div class="cards">
          <?php
            $wp_query = sub_loop(12);
            if ($wp_query->have_posts()):
            while($wp_query->have_posts()): $wp_query->the_post();
          ?>
          <?php
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $noImage = get_template_directory_uri() . '/assets/img/no-image.png';
          ?>
          <div class="card">
            <?php if($url) : ?>
              <div class="thumbnail" style="background-image: url('<?php echo $url; ?>');"></div>
            <?php else : ?>
              <div class="thumbnail" style="background-image: url('<?php echo $noImage; ?>')";></div>
            <?php endif; ?>
            <div class="cardBody">
              <div class="detail">
                <time class="date"><?php the_time('Y.m.d'); ?></time>
                <p class="title"><?php the_title(); ?></p>
                <div class="body"><?php the_content(); ?></div>
              </div>
              <ul class="tags"><?php upper_limit_output_tags(); ?></ul>
            </div>
          </div>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    <div class="paginationWrapper"></div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
