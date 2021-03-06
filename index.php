<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>

<div class="hero-image">
    <div class="hero-image-title">
        <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/heading_hero.svg" alt="ガスのちからで毎日の暮らしを安全・快適に " class="for_pc">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/heading_heroImage-sp.svg" alt="ガスのちからで毎日の暮らしを安全・快適に " class="for_sp">
        <div class="hero-image-en-caption for_pc">
            <p><font color="#d97520">We</font> are a company that invents places <br> that continue to make business to <br> become a new culture before long.</p>
        </div>
        <div class="hero-image-en-caption for_tablet">
            <p><font color="#d97520">We</font> are a company that invents places <br> that continue to make business to <br> become a new culture before long.</p>
        </div>
        <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button hero-image-contact-button for_pc">
            <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/hero-image-sep.svg" alt="we are nagisa gas" class="hero-image-sep for_pc">
    <div class="hero-image-photo-box">
        <img
            src="<?php echo $upload_dir['baseurl']; ?>/2020/12/hero-image-photo.jpg.webp"
            alt="ナギサガス"
            class="hero-image-photo">
        <div class="top-news for_pc">
            <?php $args = [
            'post_type' => 'news',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 1,
            ]; ?>
            <?php $loop = new WP_Query($args); ?>
            <ul class="top-news-list">
                <?php while ($loop->have_posts()):
                $loop->the_post(); ?>
                <?php
                endwhile; ?>
                <li>
                    <div class="top-news-box">
                        <a href="<?php the_permalink(); ?>" class="top-news-image-wrapper">
                            <img class="clip circle" src="<?php echo catch_first_image(); ?>" alt="お知らせ"/>
                        </a>
                        <div class="top-news-text">
                            <a href="<?php the_permalink(); ?>">
                                <div class="top-date"><?php echo get_post_time('Y m d /【D】'); ?></div>
                                <div class="top-title"><?php the_title(); ?></div>
                            </a>
                        </div>
                    </div>
                    <a class="go-top-news" href="<?php the_permalink(); ?>"><i class="far fa-play-circle"></i>記事を読む</a>
                </li>
            </ul>
        </div>
        <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button hero-image-contact-button for_sp">
            <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <div class="top-news for_sp">
        <?php $args = [
        'post_type' => 'news',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 1,
        ]; ?>
        <?php $loop = new WP_Query($args); ?>
        <ul class="top-news-list">
            <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <li>
                <div class="top-news-box">
                    <div class="top-photo-area">
                        <img src="<?php echo catch_first_image(); ?>" alt="お知らせ"/>
                        <div class="top-date-box">
                            <p>-新着情報</p>
                            <div class="top-news-year"><?php the_time('Y.m'); ?></div>
                            <div class="top-news-date"><?php the_time('d'); ?></div>
                            <div class="top-news-week"><?php echo get_post_time('D'); ?></div>
                        </div>
                    </div>
                    <div class="top-title">
                        <?php the_title(); ?></div>
                    <a href="<?php the_permalink(); ?>"><i class="far fa-play-circle"></i>記事を読む</a>
                </div>
            </li>
            <?php
            endwhile; ?>
        </ul>
    </div>
</div>
<div class="category">
    <div class="category_wrapper">
        <div class="category_item">
            <h1 class="category_main-heading">商品の購入+</br>取り付けを</h1>
            <h2 class="category_sub-heading">ご希望のお客様</h2>
            <button class="category_button js-trigger">
                <div class="category_button-inner">サービス紹介ページへ</div>
                <div class="category_button-inner">▶︎</div>
            </button>
        </div>
        <div class="category_item">
            <h1 class="category_main-heading">取り付け工事</br>のみを</h1>
            <h2 class="category_sub-heading">ご希望のお客様</h2>
            <button class="category_button js-trigger">
                <div class="category_button-inner">サービス紹介ページへ</div>
                <div class="category_button-inner">▶︎</div>
            </button>
        </div>
        <div class="category_item">
            <h1 class="category_main-heading">商品の選定+</br>購入+取り付けを</h1>
            <h2 class="category_sub-heading">ご希望のお客様</h2>
            <button class="category_button js-trigger">
                <div class="category_button-inner">サービス紹介ページへ</div>
                <div class="category_button-inner">▶︎</div>
            </button>
        </div>
    </div>
</div>
<div class="advantage">
    <div class="advantage-title">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/heading_advantage.svg" alt="ナギサガスフィッティングスの安心施工" class="for_pc section-title">
        <div class="advantage-title-sp for_sp">
            <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/heading_advantage-sp.svg" alt="ナギサガスフィッティングスの安心施工">
        </div>
        <div class="advantage-caption">
            <p class="advantage-caption-abst">他社で断られた作業でも一度ご相談下さい！ご希望であれば、女性スタッフ同行でお伺いいたします</p>
            <p class="advantage-caption-detail">ベテランスタッフが多数在籍しており、確かな品質と安全な作業をご提供いたします。また、当社の作業員は大手ガス会社にてお客様対応研修を終えておりますので、お客様のご要望・ご不安を取り除いてから作業に取り掛からせて頂きます。
        </div>
        <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button advantage-contact-button for_pc">
            <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <div class="advantage-image">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/advantage-photo.svg" alt="ナギサガスフィッティングス" class="for_pc">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/advantage-photo-sp.svg" alt="ナギサガスフィッティングス" class="for_sp">
    </div>
    <a href="<?php echo home_url(); ?>/inquiry/" class="contact-button advantage-contact-button for_sp">
        <p>無料見積もりはこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div class="product">
    <div class="product-header">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/heading_product.svg" alt="私達はガス機器から水回りまで幅広く手掛けけています" class="for_pc section-title">
        <div class="product-header-image">
            <div class="product-image-left-outer">
                <div class="product-image-left-wrapper js-trigger">
                    <img src="<?php echo $upload_dir[
                    'baseurl'
                    ]; ?>/2020/12/product-image1.png.webp" alt="ナギサガス" class="product-image-left">
                </div>
            </div>
            <div class="product-image-right-outer">
                <div class="product-image-right-wrapper js-trigger">
                    <img src="<?php echo $upload_dir[
                    'baseurl'
                    ]; ?>/2020/12/product-image2.png.webp" alt="ナギサガス" class="product-image-right">
                </div>
            </div>
        </div>
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/heading_product-sp.svg" alt="私達はガス機器から水回りまで幅広く手掛けけています" class="for_sp">
    </div>
    <div class="product-content">
        <div class="product-content-header">
            <p>こんなお悩みにお答えします！</p>
        </div>
        <div class="product-content-body">
            <div class="heater product-content-box">
                <p class="product-item-title">-給湯器-</p>
                <div class="product-card-image-outer">
                    <div class="product-card-image-wrapper js-trigger">
                        <a href="<?php echo home_url(); ?>/product/gas/">
                            <img src="<?php echo $upload_dir['baseurl']; ?>/2021/01/product01.png.webp" class="product-card-image-inner" alt="給湯器">
                        </a>
                    </div>
                </div>
                <ul class="product-item-detail">
                    <li>・すぐにお湯がでない</li>
                    <li>・自由な温度にしたい</li>
                </ul>
            </div>
            <div class="bath product-content-box">
                <p class="product-item-title">-浴室暖房乾燥機-</p>
                <div class="product-card-image-outer">
                    <div class="product-card-image-wrapper js-trigger">
                        <a href="<?php echo home_url(); ?>/product/bath/">
                            <img src="<?php echo $upload_dir['baseurl']; ?>/2021/01/product02.png.webp" class="product-card-image-inner" alt="浴室暖房乾燥機">
                        </a>  
                    </div>
                </div>
                <ul class="product-item-detail">
                    <li>・冬場のお風呂が寒い</li>
                    <li>・洗濯物の乾きが悪い</li>
                </ul>
            </div>
            <div class="kitchen product-content-box">
                <p class="product-item-title">-キッチン機器-</p>
                <div class="product-card-image-outer">
                    <div class="product-card-image-wrapper js-trigger">
                        <a href="<?php echo home_url(); ?>/product/kitchen/">
                            <img src="<?php echo $upload_dir['baseurl']; ?>/2021/01/product03.png.webp" class="product-card-image-inner" alt="キッチン機器">
                         </a>
                    </div>
                </div>
                <ul class="product-item-detail">
                    <li>・時短調理をしたい</li>
                    <li>・食器洗いが面倒だ</li>
                </ul>
            </div>
            <div class="toilet product-content-box">
                <p class="product-item-title">-トイレタリー-</p>
                <div class="product-card-image-outer">
                    <div class="product-card-image-wrapper js-trigger">
                        <a href="<?php echo home_url(); ?>/product/toilet/">
                            <img src="<?php echo $upload_dir['baseurl']; ?>/2021/01/product04.png.webp" class="product-card-image-inner" alt="トイレタリー">
                        </a>
                    </div>
                </div>
                <ul class="product-item-detail">
                    <li>・温水洗浄を使いたい</li>
                    <li>・冬場の便座が寒い</li>
                </ul>
            </div>
        </div>
    </div>
    <a href="<?php echo home_url(); ?>/product/" class="contact-button product-contact-button">
        <p>商品一覧ページはこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div class="news">
    <div class="news-header">
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/heading_news.svg" alt="私達の最近の歩みを紹介します" class="for_pc section-title">
        <div class="news-header-outer">
            <div class="news-header-wrapper js-trigger">
                <img src="<?php echo $upload_dir[
                'baseurl'
                ]; ?>/2021/01/news-title-image.jpg.webp" alt="ナギサガス" class="news-header-image for_pc">
            </div>
       </div>
        <div class="news-header-outer">
            <div class="news-header-wrapper js-trigger">
                <img src="<?php echo $upload_dir[
                'baseurl'
                ]; ?>/2020/12/news-title-image.png.webp" alt="ナギサガス" class="news-header-image for_sp">
            </div>
        </div>
        <img src="<?php echo $upload_dir[
          'baseurl'
        ]; ?>/2020/12/heading_news-sp.svg" alt="私達の最近の歩みを紹介します" class="news-header-title for_sp">
    </div>
    <div class="news-content">
        <?php $args = [
          'post_type' => 'news',
          'orderby' => 'date',
          'order' => 'DESC',
          'posts_per_page' => 4,
        ]; ?>
        <?php $loop = new WP_Query($args); ?>
        <ul class="news-list">
            <?php while ($loop->have_posts()):
              $loop->the_post(); ?>
            <?php
                $cat = get_the_category();
                $cat = $cat[0];?>
            <li class="news-item">
                <div class="news-article-box for_pc">
                    <div class="news-article-box-outer">
                        <a href="<?php the_permalink(); ?>" class="news-article-box-wrapper js-trigger">
                            <img src="<?php echo catch_first_image(); ?>" class="news-article-box-inner" alt="お知らせ"/>
                        </a>
                    </div>
                    <div class="news-article-text">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-date"><?php the_time('Y m/d（D）'); ?></div>
                            <div class="news-title"><?php the_title(); ?></div>
                        </a>
                        <div class="news-category <?php echo $cat->category_nicename; ?>"><?php the_category(); ?></div>
                    </div>
                </div>
                <div class="news-article-box for_sp">
                    <div class="news-photo-area">
                        <div class="news-date-box">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news-month"><?php the_time('Y.m'); ?></div>
                                <div class="news-date"><?php the_time('d'); ?></div>
                                <div class="news-week"><?php echo get_post_time('D'); ?></div>
                            </a>
                        </div>
                        <div class="news-article-box-outer">
                            <a href="<?php the_permalink(); ?>" class="news-article-box-wrapper js-trigger">
                                <img src="<?php echo catch_first_image(); ?>" class="news-article-box-inner" alt="お知らせ"/>
                            </a>
                        </div> 
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news-article-title"><?php the_title(); ?></div>
                    </a>
                    <div class="news-category"><?php the_category(); ?></div>
                </div>
            </li>
            <?php
            endwhile; ?>
        </ul>
    </div>
    <a href="<?php echo home_url(); ?>/news/" class="contact-button news-check-button">
        <p>記事一覧ページはこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div class="works">
    <div class="works-header for_sp">
        <div class="works-image-left-outer">
            <div class="works-image-left-wrapper js-trigger">
                <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/works-header-image1.png.webp" class="works-image-left" alt="年間で600件">
            </div>
        </div>
        <div class="works-image-right-outer">
            <div class="works-image-right-wrapper js-trigger">
                 <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/works-header-image2.png.webp" class="works-image-right" alt="累計8000件">
            </div>
        </div>
    </div>
    <div class="works-title">
        <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/heading_works.svg" alt="私達の施工実績の一部をご紹介します" class="for_pc section-title">
        <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/heading_works-sp.svg" alt="私達の施工実績の一部をご紹介します" class="for_sp">
        <div class="works-title-photo">
            <img src="<?php echo $upload_dir['baseurl']; ?>/2020/12/works-title-image-sp.png.webp" alt="私達の施工実績の一部をご紹介します" class="for_sp">
        </div>
        <div class="works-caption">
            <p class="works-caption-abst">ナギサガスには、年間で600件、累計で8000件という豊富な施工実績があり、経験に裏打ちされたノウハウを保証します</p>
            <p class="works-caption-detail">ナギサガスは創業時から、次により良い仕事ができるよう、施工実績を記録し続けてきました。記録された施工実績は、社員間での学習のために使用しており、豊富なノウハウが社内に蓄積されています。</p>
        </div>
        <a href="<?php echo home_url(); ?>/works/" class="contact-button works-check-button for_pc">
            <p>施工実績一覧はこちら<i class="fas fa-play "></i></p>
        </a>
    </div>
    <div class="works-content">
        <?php $args = [
          'post_type' => 'works',
          'orderby' => 'date',
          'order' => 'DESC',
          'posts_per_page' => 4,
        ]; ?>
        <?php $loop = new WP_Query($args); ?>
        <ul class="works-list">
            <?php while ($loop->have_posts()):
              $loop->the_post(); ?>
            <li>
                <div class="works-article-box">
                    <a href="<?php the_permalink(); ?>">
                    <div class="works-article-image-outer">
                        <div class="works-article-image-wrapper js-trigger">
                            <img src="<?php echo catch_first_image(); ?>" alt="施工実績" />
                        </div>
                    </div>
                        <div class="works-content-title"><?php the_title(); ?></div>
                    </a>
                    <div class="works-content-category"><?php the_category(); ?></div>
                </div>
            </li>
            <?php
            endwhile; ?>
        </ul>
    </div>
    <a href="<?php echo home_url(); ?>/works/" class="contact-button works-check-button for_sp">
        <p>施工実績一覧はこちら<i class="fas fa-play "></i></p>
    </a>
</div>
<div id="contents" class="cf">
    <div id="main-cts" class="cf">
        <!--
        <section id="sec_01">
            <div class="mask">
                <div class="secInner">
                    <div class="ttl_01">
                        <div class="eng">advantage</div>
                        <h2 class="jpn">ナギサガスフィッティングスの安心施工</h2>
                    </div>
                    <div class="leftBox">
                        <p class="lead">他社で断られた作業でも一度ご相談下さい<br>ご希望であれば、女性スタッフ同行で<br class="for_pc">お伺いいたします</p>
                        <p class="plane">ベテランスタッフが多数在籍しており、確かな品質と<br class="for_pc">安全な作業をご提供いたします。<br class="for_pc">また、当社の作業員は大手ガス会社にてお客様対応研修を<br class="for_pc">終えておりますので、お客様のご要望・ご不安を<br class="for_pc">取り除いてから作業に取り掛からせて頂きます。</p>
                        <div class="btn_01"><a href="<?php echo home_url(); ?>/about/">詳しく見る</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec_02">
            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">product</div>
                    <h2 class="jpn">取扱い商品一覧</h2>
                </div>
                <ul class="list_01">
                    <li>
                        <a href="<?php echo home_url(); ?>/product/gas/">
                            <div class="imgBox"><img src="<?php echo $upload_dir[
                              'baseurl'
                            ]; ?>/product_01.jpg.webp" alt="給湯器"></div>
                            <div class="textBox">給湯器</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/product/kitchen/">
                            <div class="imgBox"><img src="<?php echo $upload_dir[
                              'baseurl'
                            ]; ?>/product_02.jpg.webp" alt="キッチン・厨房機器"></div>
                            <div class="textBox">キッチン・厨房機器</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/product/bath/">
                            <div class="imgBox"><img src="<?php echo $upload_dir[
                              'baseurl'
                            ]; ?>/product_04.jpg.webp" alt="浴室暖房乾燥機"></div>
                            <div class="textBox">浴室暖房乾燥機</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="sec_03">
            <?php $args = [
              'post_type' => 'news',
              'orderby' => 'date',
              'order' => 'DESC',
              'posts_per_page' => 4,
            ]; ?>
            <?php $loop = new WP_Query($args); ?>

            <div class="secInner">
                <div class="ttl_01">
                    <div class="eng">news</div>
                    <h2 class="jpn">新着情報</h2>
                </div>
                <?php if ($loop->have_posts()): ?>
                <ul class="list_01">
                    <?php while ($loop->have_posts()):
                      $loop->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="date"><?php the_time('Y.m.d'); ?></div>
                            <div class="title"><?php the_title(); ?></div>
                        </a>
                    </li>
                    <?php
                    endwhile; ?>
                </ul>
                <div class="btn_01"><a href="<?php echo home_url(); ?>/news/">一覧を見る</a></div>
                <?php else: ?>
                <p class="tCenter">現在新着情報はありません。</p>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </section>
        -->
    </div>
</div>
<?php get_footer(); ?>
