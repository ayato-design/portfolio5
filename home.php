<?php get_header(); ?>

<main>
<section class="news_list">
    <div class="news_list_box">
        <ul class="pan_list">
            <li><a href="index.html">Home</a></li>
            <li>ニュース</li>
        </ul>
        <h2><span class="en">NEWS</span><span class="jp">ニュース</span></h2>
        <div class="news_itemlist">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
            <div class="news_item">
                <div class="news_image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="news_itemtext">
                    <time><?php the_time('Y.m.d'); ?></time><span class="news_icon">
            <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                echo esc_html($categories[0]->name);
                }
            ?>
        </span><br>
                    <p><?php the_title(); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="button">
            <a href="<?php echo home_url('/'); ?>">戻る</a>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>