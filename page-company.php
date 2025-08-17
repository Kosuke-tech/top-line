<?php get_header(); ?>
<!------------------------------------- 会社概要 ------------------------------------->
<section class="company tableContainer">
    <div class="company__title">
        <h2>会社概要</h2>
    </div>
    <table class="company__table">
        <tr class="company__tableRow">
            <th class="company__tableHeader">会社名</th>
            <td class="company__tableData">株式会社TOP LINE</td>
        </tr>
        <tr class="company__tableRow">
            <th class="company__tableHeader">設立年月日</th>
            <td class="company__tableData">2022年6月20日</td>
        </tr>
        <tr class="company__tableRow">
            <th class="company__tableHeader">本社所在地</th>
            <td class="company__tableData">埼玉県富士見市鶴瀬東 2-10-28</td>
        </tr>
        <tr class="company__tableRow">
            <th class="company__tableHeader">資本金</th>
            <td class="company__tableData">1,000,000円</td>
        </tr>
    </table>
    <div class="btn company__btn">
        <div class="btn__wrapper">
            <a class="btn__text" href="<?php echo esc_url('https://lit.link/en/topline01'); ?>">会社概要 Lit.Linkへ</a>
        </div>
    </div>
</section>
<!------------------------------------- エントリーボタン ------------------------------------->
<?php get_template_part('parts/recruit', 'entry'); ?>
<?php get_footer(); ?>