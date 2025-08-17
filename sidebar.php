<!------------------------------------- サイドバー ------------------------------------->
<aside class="sidebar flexLayout__sidebar">
    <div class="sidebar__wrapper">
        <dl class="sidebar__list">
            <dt class="sidebar__term">コラム一覧</dt>
            <dt class="sidebar__middleHeading">カテゴリー一覧</dt>
            <dd class="sidebar__description">
                <a class="sidebar__link" href="<?php echo esc_url(home_url('/column')); ?>">すべて</a>
            </dd>
            <?php $categories = get_categories([
                'orderby' => 'slug',
                'order' => 'ASC',
            ]);

            foreach ($categories as $category) {
                echo '<dd class="sidebar__description"><a class="sidebar__link" href=" ' . get_term_link($category->term_id) . ' ">';
                echo $category->name;
                echo '</a></dd>';
            }
            ?>
        </dl>
        <dl class="sidebar__list">
            <dt class="sidebar__middleHeading">タグ一覧</dt>
            <div class="sidebar__tagInner">
                <?php
                $tags = get_tags([
                    'orderby' => 'name',
                    'order' => 'slug',
                ]);
                foreach ($tags as $item) {
                    echo '<dd class="sidebar__descriptionTags"><a class="sidebar__link" href=" ' . get_term_link($item->term_id) . ' ">';
                    echo $item->name;
                    echo '</a></dd>';
                }
                ?>
            </div>
        </dl>
    </div>
</aside>