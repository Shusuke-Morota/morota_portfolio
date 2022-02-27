<?php get_header(); ?>
<div class="singlePage">
  <main>
    <div class="container">
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
          <div class="articleContents">
            <p class="articleTitle"><?php the_title(); ?></p>
            <div class="articleBody"><?php the_content(); ?></div>
            <div class="postDate">
              <time class="date"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
          <div class="articleTags">
            <p class="title">Tags</p>
            <ul class="tags"><?php no_upper_limit_output_tags(); ?></ul>
          </div>
        </div>
      </div>
      <div class="buttonWrapper">
        <a href="#" class="button">Top Page</a>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
