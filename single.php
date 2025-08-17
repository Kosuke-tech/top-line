<?php get_header(); ?>
<div class="single flexLayout">
    <article class="single__inner flexlayout__main">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="single__articleWrapper">
                    <p class="single__date"><?php the_date('Y.m.d'); ?></p>
                    <h2 class="single__title"><?php the_title(); ?></h2>
                    <div class="single__imgWrap">
                    <?php if (has_post_thumbnail()) {; ?>
                        <?php the_post_thumbnail(); ?>
                    <?php } else {; ?>
                        <img class="single__img" alt="投稿記事画像"
                            src="<?php echo esc_url(get_theme_file_uri('/img/logo@x1.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('/img/logo@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('/img/logo@2x.png')) ?> 2x">
                    <?php }; ?>
                </div>
                    <div class="single__category">カテゴリー：<?php the_category('、'); ?></div>
                    <div class="single__tag"><?php the_tags(); ?></div>
                    <div class="single__text"><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>