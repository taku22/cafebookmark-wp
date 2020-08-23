<?php get_header(); ?>
<div class="wrapper">
  <div class="container">
    <main class="topPage">
      <div class="carousel">
        <p>連載一覧</p>
        <div class="carousel__container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="https://placehold.jp/240x160.png"></div>
              <div class="swiper-slide"><img src="https://placehold.jp/240x160.png"></div>
              <div class="swiper-slide"><img src="https://placehold.jp/240x160.png"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
      <div class="latestArticleList">
        <div class="latestArticleList__title">
          <p>最新記事</p>
        </div>
        <div class="latestArticleList__wrapper">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php get_template_part('loop-content'); ?>
          <?php endwhile; endif;  ?>
        </div>
      </div>
    </main>
 <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
