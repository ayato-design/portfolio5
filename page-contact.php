<?php get_header(); ?>
<main>
<section class="mailform">
    <div class="mailform_box">
        <ul class="pan_list">
            <li><a href="index.html">Home</a></li>
            <li>お問い合わせ</li>
        </ul>
        <h2><span class="en">CONTACT</span><span class="jp">お問い合わせ</span></h2>
        <div class="mailform_text">
            <p>この度はink and lineのお問い合わせページにアクセス有り難う御座います。</p>
            <p>下記フォームに必須事項を入力の上、送信ボタンを押して下さい。</p>
            <p>営業3日以内に、入力して頂いたメールアドレスに返信させて頂きます。</p>
            <p>お電話でのお問い合わせは、<span class="tel">01-2345-6789</span>迄宜しくお願いします。</p>
            <p>※受付時間：平日9:00〜18:00(土日祝定休日)</p>
        </div>
        <p><span class="red">*</span>=必須項目</p>
        <?php echo do_shortcode('[contact-form-7 id="83a2ace" title="Contact"]'); ?>
        <div class="button">
            <a href="<?php echo home_url('/'); ?>">戻る</a>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>