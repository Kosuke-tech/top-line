<?php get_header(); ?>
<section class="archiveColumn category flexLayout">
    <div class="flexLayout__main">
        <h2 class="archiveColumn__title">コラム一覧</h2>
        <div class="category__title"><?php single_cat_title('カテゴリー：'); ?></div>
        <div class="archiveColumn__contentsWrapper">
            <?php if (have_posts()): ?>
                <ul class="archiveColumn__list">
                    <?php while (have_posts()): the_post(); ?>
                        <li class="archiveColumn__listItem">

                            <a class="archiveColumn__cardLink" href="<?php the_permalink(); ?>">
                                <div class="archiveColumn__linkWrapper">
                                    <div class="archiveColumn__imgWrap">
                                        <?php if (has_post_thumbnail()) {; ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php } else {; ?>
                                            <img class="archiveColumn__img" alt="投稿記事画像"
                                                src="<?php echo esc_url(get_theme_file_uri('/img/logo@x1.png')) ?>"
                                                srcset="<?php echo esc_url(get_theme_file_uri('/img/logo@1x.png')) ?> 1x,
                                                <?php echo esc_url(get_theme_file_uri('/img/logo@2x.png')) ?> 2x">
                                        <?php }; ?>
                                    </div>

                                    <div class="archiveColumn__articleTextWrap">
                                        <div class="archiveColumn__date">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </div>
                                        <div class="archiveColumn__articleTitle">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="archiveColumn__excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            <?php endif; ?>
            <?php
            $args = array(
                'mid_size' => 2,
                'prev_text' => '前',
                'next_text' => '次',
                'paged' => $paged,
            );
            the_posts_pagination($args);
            ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</section>
<?php get_template_part('parts/business', 'go'); ?>
<?php get_footer(); ?>