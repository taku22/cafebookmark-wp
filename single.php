<?php get_header(); ?>
<div class="wrapper">
  <div class="container">
    <main class="main">
    <?php if(have_posts()): the_post(); ?>
      <article <?php post_class( 'articleWrapper' ); ?>>

        <div class="article">
          <!--アイキャッチ取得-->
          <div class="article-img">
            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
          </div>
          <!--タイトル-->
          <h1 class="article__title"><?php the_title(); ?></h1>
          <div class="article-info">
            <!--カテゴリ取得-->
            <?php if(has_category() ): ?>
              <span class="cat-data">
                <?php echo get_the_category_list( ' ' ); ?>
              </span>
            <?php endif; ?>
            <!--投稿日を取得-->
            <span class="article-date">
              <i class="far fa-clock"></i>
              <time
              datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
              </time>
            </span>
            <!--著者を取得-->
            <span class="article-author">
              <i class="fas fa-user"></i><?php the_author(); ?>
            </span>
            <span><?php the_tags(); ?></span>
          </div>
          <!--本文取得-->
          <?php the_content(); ?>
          <div class="articl__footer">
            <div class="footer__snsShare">
              <div class="snsShare__round--twitter"><i class="fab fa-twitter fa-3x"></i></div>
              <div class="snsShare__round--line"><i class="fab fa-line fa-3x"></i></div>
              <div class="snsShare__round--facebook"><i class="fab fa-facebook-square fa-3x"></i></div>
              <div class="snsShare__round--pinterest"><i class="fab fa-pinterest-square fa-3x"></i></div>
            </div>
          <!--タグ-->
          <div class="article-tag">
            <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
          ); ?>
          </div>
      </div>
      </article>
    <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <div class="googleAdSense--pconly">
    <div class="googleAdSense__wrapper"><img src="https://placehold.jp/300x250.png"></div>
  </div>
  <div class="latestArchive">
    <div class="latestArchive__title">
      <p>最新記事</p>
    </div>
    <div class="latestArchive__wrapper">
      <div class="latestArchive__container"><img src="https://placehold.jp/240x160.png">
        <p>タイトル</p>
      </div>
      <div class="latestArchive__container"><img src="https://placehold.jp/240x160.png">
        <p>タイトル</p>
      </div>
      <div class="latestArchive__container"><img src="https://placehold.jp/240x160.png">
        <p>タイトル</p>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

