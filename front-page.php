<?php get_header(); ?>

<main>
    <div class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="万年筆とノートの写真">
    </div>
<section class="news" id="news">
    <h2><span class="en">NEWS</span><span class="jp">ニュース</span></h2>
    <ul>
        <?php
    $args = array(
      'posts_per_page' => 3 // 最新3件
    );
    $news_query = new WP_Query($args);
    ?>
    <?php if ($news_query->have_posts()) : ?>
      <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
      <li><time><?php the_time('Y.m.d'); ?></time><span class="news_icon">
        <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                echo esc_html($categories[0]->name);
                }
            ?></span><br>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
    </ul>
    <div class="button">
        <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="news-link">ニュース一覧</a>
    </div>
</section>
<section class="about" id="about">
    <div class="about_img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="万年筆の写真">
    </div>
    <div class="about_text">
        <h2><span class="en">ABOUT</span><span class="jp">私たちについて</span></h2>
        <p>ink and line は、<br>書くことを通して思考や感情、日々の時間と向き合うための文房具店です。</p>
        <p>万年筆と手帳を中心に、使うほどに手に馴染み、<br>長く寄り添う道具だけを厳選しています。</p>
        <p>書く時間が、あなたの日常を静かに支えます。</p>
    </div>
</section>
<section class="business" id="business">
    <h2><span class="en">BUSINESS</span><span class="jp">事業案内</span></h2>
    <div class="business_box">
        <div class="business_left">
            <div class="business_main">
                <h3>文房具の企画・販売事業</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business-1.png" alt="">
            </div>
            <div class="business_main">
                <h3>企業・ブランド向け文房具ブランディング事業</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business-2.png" alt="">
            </div>
        </div>
        <div class="business_right">
            <div class="business_main">
                <h3>書く時間を提案するワークショップ・体験事業</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business-3.png" alt="">
            </div>
            <div class="business_main">
                <h3>コンテンツ・メディア事業</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business-4.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="company" id="company">
    <div class="company_box">
    <h2><span class="en">COMPANY</span><span class="jp">会社情報</span></h2>
    <dl>
        <dt>会社名</dt>
        <dd>インクアンドライン株式会社</dd>
        <dt>所在地</dt>
        <dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
        <dt>代表</dt>
        <dd>ＸＸＸＸＸＸ</dd>
        <dt>設立</dt>
        <dd>2021年1月1日</dd>
        <dt>資本金</dt>
        <dd>3,000,000円</dd>
        <dt>事業内容</dt>
        <dd>文房具の企画・販売事業<br>文房具ブランディング事業<br>ワークショップ・体験事業<br>コンテンツ・メディア事業</dd>
    </dl>
    </div>
        <div class="company_img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/company.png" alt="会社写真">
    </div>
</section>
<section class="works" id="works">
        <div class="works_box">
    <div class="works_text">
      <h3>ink and line(Study Project)</h3>
      <p>万年筆、手帳、ノートを中心に取り扱う架空文房具店(ink and line)のLP型企業サイト。<br>
        参考デザインを元に、Figmaでの構成再設計からHTML / CSSによるコーディングまでを行いました。<br>
        ink and lineの世界観を大事にしながら、元あるデザインに落とし込みました。</p>
    <p>使用技術</p>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript(basic)</li>
        <li>jQuery</li>
        <li>Figma</li>
        <li>Canva</li>
    </ul>
    <p>素材提供</p>
    <ul>
        <li><a href="https://unsplash.com/ja" target="_blank">Unsplash</a></li>
        <li><a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
        <li><a href="https://html5doctor.com/html-5-reset-stylesheet/" target="_blank">HTML5 Dotcor</a></li>
        <li><a href="https://sacochan-design.com/" target="_blank">SACOCHAN-DESIGN.COM</a></li>
        <li><a href="https://ja.wordpress.org/plugins/page-scroll-to-id/"  target="_blank">
Page scroll to id</a></li>
    </ul>
        <p>参考デザイン</p>
        <ul>
            <li><a href="https://code-jump.com/corporate2-menu/" target="_blank">Codejump</a></li>
        </ul>
    </div>
        <div class="works_image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    </div>
  </div>
</section>
</main>
<div class="back_button"><a href="#top">↑<br>Top</a></div>
<?php get_footer(); ?>