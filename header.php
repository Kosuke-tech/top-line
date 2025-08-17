<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <meta name="description" content="首都圏を中心に活動する総合営業代理店、株式会社TOP LINEの公式ホームページです。">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.svg')); ?>" type="image/svg+xml">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.png')); ?>" type="image_png" sizes="64×64">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Noto+Serif:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b1ecdf8a5.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <canvas id="myCanvas"></canvas>
    <header class="header">
        <div class=" header__logoWrapper">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="header__logo" alt="ロゴ"
                    src=" <?php echo esc_url(get_theme_file_uri('/img/logo_w@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/logo_w@1x.png')); ?> 1x, 
                    <?php echo esc_url(get_theme_file_uri('img/logo_w@2x.png')); ?> 2x">
            </a>
        </div>
        <nav class="header__nav">
            <ul class="header__navList">
                <li class="header__navItem">
                    <a class="header__navLink" href="<?php echo esc_url(home_url('#')); ?>">ホーム</a>
                </li>
                <li class="header__navItem">
                    <a class="header__navLink" href="<?php echo esc_url(home_url('/column')); ?>">コラム</a>
                </li>
                <li class="header__navItem">
                    <a class="header__navLink" href="<?php echo esc_url(home_url('/business')); ?>">事業概要</a>
                </li>
                <li class="header__navItem">
                    <a class="header__navLink" href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
                </li>
                <li class="header__navItem">
                    <a class="header__navLink" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
                </li>
                <li class="header__navItem header__navLine">
                    <a class="header__navLink header__navLineLink" href="<?php echo esc_url('https://line.me/R/ti/p/@835fkccx'); ?>">
                        <i class="header__navIcon fa-2x fa-brands fa-line"></i>
                    </a>
                    <p class="header__iconDescription">お問い合わせはコチラ</p>
                </li>
            </ul>
        </nav>
        <!-------------------------------------  SP menu ------------------------------------->
        <div class="header__spMenu">
            <input id="menuToggle" type="checkbox">
            <label class="hamburger" for="menuToggle">
                <span></span>
            </label>

            <div class="spIcon">
                <a class="spIcon__navLineLink" href="<?php echo esc_url('https://line.me/R/ti/p/@835fkccx'); ?>">
                    <i class="spIcon__navIcon fa-2x fa-brands fa-line"></i>
                </a>
                <p class="header__iconDescription">公式LINEアカウントはこちら</p>
            </div>

            <div class="spMenu">
                <ul class="spMenu__list">
                    <li class="spMenu__item">
                        <a class="spMenu__link" href="<?php echo esc_url(home_url('#')); ?>">ホーム</a>
                    </li>
                    <li class="spMenu__item">
                        <a class="spMenu__link" href="<?php echo esc_url(home_url('/column')); ?>">コラム</a>
                    </li>
                    <li class="spMenu__item">
                        <a class="spMenu__link" href="<?php echo esc_url(home_url('/business')); ?>">事業概要</a>
                    </li>
                    <li class="spMenu__item">
                        <a class="spMenu__link" href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
                    </li>
                    <li class="spMenu__item">
                        <a class="spMenu__link" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class=" keyVisual">
        <?php if (is_category('general')) { ; ?>
            <h1 class="keyVisual__title">一般のお知らせ コラム記事一覧</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_category('sales')) { ; ?>
            <h1 class="keyVisual__title">営業ノウハウ コラム記事一覧</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_category('useful')) { ; ?>
            <h1 class="keyVisual__title">お役立ち情報 コラム記事一覧</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_category('important')) { ; ?>
            <h1 class="keyVisual__title">重要なお知らせ コラム記事一覧</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_tag()) { ; ?>
            <h1 class="keyVisual__title">タグ別 コラム一覧</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>
            
        <?php } elseif (is_archive()) { ; ?>
            <h1 class="keyVisual__title">コラム一覧</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_page('business')) { ; ?>
            <h1 class="keyVisual__title">事業概要</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_page('company')) { ; ?>
            <h1 class="keyVisual__title">会社概要</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } elseif (is_page('recruit')) { ; ?>
            <h1 class="keyVisual__title">採用情報</h1>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>

        <?php } else{; ?>
            <h1 class="keyVisual__title">「届けるのは、<br class="keyVisual__break">たしかな付加価値と信頼です。」</h1>
            <p class="keyVisual__descriptionEn">We deliver true added value and trust.</p>
            <p class="keyVisual__descriptionJp">- 株式会社TOP LINE -</p>
        <?php }; ?>
    </div>

    <main class="blContainer">