<div <?php post_class('latestArticleList__container'); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="impWrap">
      <!-- 画像を追加 -->
      <?php if(has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>" alt="">
      <?php endif; ?>

      <!-- カテゴリ -->
      <?php if (!is_category() && has_category()): ?>
        <span class="catData">
          <?php
            $postcat = get_the_category();
            echo $postcat[0] -> name;
          ?>
        </span>
      <?php endif; ?>
    </div><!-- end imp -->
    <div class="titleText">
      <!-- タイトル -->
      <h2><?php the_title(); ?></h2>
      <!--投稿日-->
      <div class="articleDesc">
        <span class="articleDate">
          <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </span>
        <!-- 著者 -->
        <span class="articleAuthor">
          <?php the_author(); ?>
        </span>
      </div>
    </div><!-- end text -->
  </a>
</div>
