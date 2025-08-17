</main>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"
    integrity="sha512-dLxUelApnYxpLt6K2iomGngnHO83iUvZytA3YjDUCjT0HDOHKXnVYdf3hU4JjM8uEhxf9nD1/ey98U3t2vZ0qQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
</script>
<?php wp_footer(); ?>
</body>

<footer class="footer">
    <div class="footer__navWrapper blContainer">
        <a class="footer__logoWrapper" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="footer__logo" alt="ロゴ"
                src="<?php echo esc_url(get_theme_file_uri('/img/logo@1x.png')); ?>"
                srcset="<?php echo esc_url(get_theme_file_uri('img/logo@1x.png')); ?> 1x, 
            <?php echo esc_url(get_theme_file_uri('img/logo@2x.png')); ?> 2x">
        </a>
        <nav class="footer__nav">
            <ul class="footer__navList">
                <div class="footer__navListInner">
                    <li class="footer__navItem">
                        <a class="footer__navLink" href="<?php echo esc_url(home_url('/column')); ?>">コラム</a>
                        <div class="footer__subLinkWrap">
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('/category/general')); ?>">一般のお知らせ 一覧</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('category/important')); ?>">重要なお知らせ 一覧</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('category/sales')); ?>">営業ノウハウ 一覧</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('category/useful')); ?>">お役立ち情報 一覧</a>
                        </div>
                    </li>
                    <li class="footer__navItem">
                        <a class="footer__navLink" href="<?php echo esc_url(home_url('/business')); ?>">事業内容</a>
                        <div class="footer__subLinkWrap">
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('/business#target_power')); ?>">新電力事業</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('business#target_gas')); ?>">ガス事業</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('business#target_net')); ?>">インターネット回線事業</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('business#target_conservation')); ?>">節水事業</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('business#target_water')); ?>">ウォーターサーバー販売事業</a>
                        </div>
                    </li>
                </div>
                <div class="footer__navListInner">
                    <li class="footer__navItem">
                        <a class="footer__navLink" href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
                        <div class="footer__subLinkWrap">
                            <a class="footer__subLink" href="<?php echo esc_url('https://lit.link/en/topline01'); ?>">募集要項 / 代理店様募集</a>
                        </div>
                    </li>
                    <li class="footer__navItem">
                        <a class="footer__navLink" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
                        <div class="footer__subLinkWrap">
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('/recruit#target_recruit')); ?>">採用メッセージ</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('recruit#target_president')); ?>">代表者メッセージ</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('recruit#target_system')); ?>">各種制度</a>
                            <a class="footer__subLink" href="<?php echo esc_url(home_url('recruit#target_flow')); ?>">採用フロー</a>
                        </div>
                    </li>

                </div>
            </ul>
            <div class="footer__navItem footer__lineWrap">
                <a class="footer__navLink footer__lineLink" href="<?php echo esc_url('https://line.me/R/ti/p/@835fkccx'); ?>">
                    <i class="footer__lineIcon fa-2x fa-brands fa-line"></i>
                </a>
                <p class="footer__lineDescription">公式LINEはこちら</p>
            </div>
        </nav>
    </div>
    <div class="footer__copyWrap">
        <small class="footer__copy">&copy; <?php the_date('Y'); ?> TOP LINE Inc.</small>
    </div>


</footer>

</html>