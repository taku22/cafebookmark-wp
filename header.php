<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>TEST</title>
  <link href="<?php echo get_template_directory_uri()?>/dist/stylesheets/main.css" rel="stylesheet">
  <?php wp_head(); ?><!--システム・プラグイン用-->

</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="snsLink"><a class="snsLink__anchor" href="#" role="button"><img class="snsLink__logo"
          src="<?php echo get_template_directory_uri()?>/dist/images/Cafebookmark_logo.png">
        <p class="snsLink__text">SNS</p>
      </a>
      <div class="snsLink__menu--closed">
        <div class="menu__wrapper">
          <div class="menu__container"><i class="fab fa-instagram-square icon-size"></i>
            <p>Instagram</p>
          </div>
          <div class="menu__container"><i class="fab fa-twitter icon-size"></i>
            <p>Twitter</p>
          </div>
          <div class="menu__container"><i class="fab fa-youtube icon-size"></i>
            <p>Youtube</p>
          </div>
        </div>
      </div>
    </div>
    <div class="header__siteTitle"><a class="siteTitle" href="#"><img class="siteTitle__title"
          src="<?php echo get_template_directory_uri()?>/dist/images/Cafebookmark_titletext.png"></a></div>
    <ul class="menu__container--pconly">
      <li><i class="fab fa-instagram-square fa-4x"></i></li>
      <li><i class="fab fa-twitter fa-4x"></i></li>
      <li><i class="fab fa-youtube fa-4x"></i></li>
    </ul>
    <div class="hamburgerMenu"><span class="hamburgerMenu__menuLine01"></span><span
        class="hamburgerMenu__menuLine02"></span><span class="hamburgerMenu__menuLine03"></span></div>
  </header>
