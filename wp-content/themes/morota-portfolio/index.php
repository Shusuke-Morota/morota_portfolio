<?php get_header(); ?>
<div class="topPage">
  <main>
    <section class="firstView" id="firstView">
      <div class="container">
        <h2 class="message">
          Welcome to<br>
          my portfolio page
        </h2>
        <div class="heroWrapper">
          <div class="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/working_man.png">
          </div>
          <div class="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/singing_man.png">
          </div>
        </div>
      </div>
    </section>
    <section class="about" id="aboutSection">
      <div class="container fadeUpTrigger">
        <h2 class="heading">ABOUT ME</h2>
        <div class="contentsWrapper">
          <div class="wrapper">
            <div class="profile">
              <p class="title">名前</p>
              <p class="body">諸田秀祐 Shusuke Morota</p>
            </div>
            <div class="profile">
              <p class="title">出身</p>
              <p class="body">茨城県 水戸市</p>
            </div>
            <div class="profile">
              <p class="title">自己紹介</p>
              <p class="text">
                【略歴】<br>
                大学卒業後、食品系の会社に就職し営業と配送を経験。<br>
                友人の勧めやwebの革新性に触れ、異業種転職を決意。<br>
                現在はフロントエンドエンジニアとして活動中。<br>
                <br>

                【特技】<br>
                ・アカペラサークルで培ったボイスパーカッション<br>
                ・信頼と実績のハイクオリティモノマネ<br>
                ・肉体に宿した魔石を激烈な痛みと引き換えに世に送り出す秘技
              </p>
            </div>
          </div>
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/morota.JPG" alt="諸田秀祐の画像" class="authorImage">
          </div>
        </div>
      </div>
    </section>
    <section class="works" id="worksSection">
      <div class="container fadeUpTrigger">
        <h2 class="heading">WORKS</h2>
        <div class="contentsWrapper">
          <div class="cards">
            <?php
              $wp_query = sub_loop(3);
              if ($wp_query->have_posts()):
              while($wp_query->have_posts()): $wp_query->the_post();
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
                <ul class="tags"><?php upper_limit_output_tags(); ?></ul>
              </div>
            </div>
            <?php
              endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </div>
          <div class="buttonWrapper">
            <a href="<?php echo home_url('/article/'); ?>" class="button">Show More</a>
          </div>
        </div>
      </div>
    </section>
    <section class="skills" id="skillsSection">
      <div class="container fadeUpTrigger">
        <h2 class="heading">SKILLS</h2>
        <div class="contentsWrapper">
          <ul class="tabs">
            <li class="tab is-active">All</li>
            <li class="tab">Languages</li>
            <li class="tab">Others</li>
          </ul>
          <div class="panels is-show">
            <div class="panel">
              <div class="box">
                <p class="title">HTML5</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/html-5.svg" alt="HTML5のアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">CSS3</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/css-3.svg" alt="CSS3のアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">Bootstrap</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bootstrap.svg" alt="Bootstrapのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">jQuery</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jquery.png" alt="jQueryのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">Ruby</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ruby.svg" alt="Rubyのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">Ruby on Rails</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rails.svg" alt="Railsのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">php</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/php.svg" alt="phpのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">WordPress</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress-icon.svg" alt="WordPressのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">Linux command</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/terminal.svg" alt="ターミナルのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">git</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/git.svg" alt="gitのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">GitHub</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github-icon.svg" alt="githubのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">Voice Percussion</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mic.svg" alt="マイクのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">camera</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/camera.svg" alt="カメラのアイコン" class="image">
                </p>
              </div>
            </div>
          </div>
          <div class="panels">
            <div class="panel">
            <div class="box">
              <p class="title">HTML5</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/html-5.svg" alt="HTML5のアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">CSS3</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/css-3.svg" alt="CSS3のアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">Bootstrap</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bootstrap.svg" alt="Bootstrapのアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">jQuery</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jquery.png" alt="jQueryのアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">Ruby</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ruby.svg" alt="Rubyのアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">Ruby on Rails</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rails.svg" alt="Railsのアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">php</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/php.svg" alt="phpのアイコン" class="image">
              </p>
            </div>
            <div class="box">
              <p class="title">WordPress</p>
              <p class="body">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress-icon.svg" alt="WordPressのアイコン" class="image">
              </p>
            </div>
            </div>
          </div>
          <div class="panels">
            <div class="panel">
              <div class="box">
                <p class="title">Linux command</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/terminal.svg" alt="ターミナルのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">git</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/git.svg" alt="gitのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">GitHub</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github-icon.svg" alt="githubのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">Voice Percussion</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mic.svg" alt="マイクのアイコン" class="image">
                </p>
              </div>
              <div class="box">
                <p class="title">camera</p>
                <p class="body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/camera.svg" alt="カメラのアイコン" class="image">
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact" id="contactSection">
      <div class="container  fadeUpTrigger">
        <h2 class="heading">CONTACT</h2>
        <div class="contentsWrapper">
          <p class="text">
            SNSからでも<br class="pcNone">お問い合わせいただけます
          </p>
          <div class="snsIcons">
            <div class="twitter">
            <a href="https://twitter.com/shururirara" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="twitterのアイコン" class="snsIcon">
            </a>
            </div>
            <div class="instagram">
            <a href="http://Instagram.com/SHUSUKE_MOROTA" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="instagramのアイコン" class="snsIcon">
            </a>
            </div>
          </div>
          <div class="buttonWrapper">
            <a href="<?php echo home_url('/contact/'); ?>" class="button">CONTACT</a>
          </div>
        </div>
      </div>
    </section>
    <div id="js-pagetop">
      <span class="button">TOP</span>
    </div>
  </main>
</div>
<?php get_footer(); ?>
