<?php get_header(); ?>
<div class="tagsPage">
  <main>
    <div class="container">
      <h2 class="heading"><?php replace_page_title($current_tag); ?> Page</h2>
      <div class="contentsWrapper">
        <div class="cards">
          <?php
            if (have_posts()):
            while(have_posts()): the_post();
          ?>
          <?php
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $noImage = get_template_directory_uri() . '/assets/img/no-image.png';
          ?>
          <div class="card">
            <a href="<?php the_permalink(); ?>">
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
            </a>
              <ul class="tags"><?php no_upper_limit_output_tags(); ?></ul>
            </div>
          </div>
          <?php
            endwhile;
            endif;
          ?>
        </div>
      </div>
    <div class="paginationWrapper"></div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
