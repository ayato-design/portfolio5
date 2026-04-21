<?php get_header(); ?>

<main>
<section class="news_list">
    <div class="news_list_box">
        <ul class="pan_list">
            <li><a href="index.html">Home</a></li>
            <li><a href="news.html">ニュース</a></li>
            <li><?php
                $categories = get_the_category();
                if (!empty($categories)) {
                echo esc_html($categories[0]->name);
                }
            ?></li>
            <li><?php the_title(); ?></li>
        </ul>
        <h2><span class="en">NEWS</span><span class="jp">ニュース</span></h2>
        <h3><?php the_title(); ?></h3>
        <time><?php the_time('Y.m.d'); ?></time><span class="news_icon">
            <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                echo esc_html($categories[0]->name);
                }
            ?>
        </span>
        <div class="news_img">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="news_text">
            <?php the_content(); ?>
        </div>
        <ul class="nb">
            <li><?php previous_post_link('%link', '前の記事'); ?></li>
            <li><?php next_post_link('%link', '次の記事'); ?></li>
        </ul>
        <div class="button">
            <a href="<?php echo home_url('/news/'); ?>">戻る</a>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>