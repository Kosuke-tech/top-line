<?php get_header(); ?>

<section class="businessTop">
    <h2 class="businessTop__title">事業概要</h2>

    <div class="businessTop__wrapeer" id="target_power">
        <h3 class="businessTop__catch">「電気代、もっと賢く。選択する時代へ。」</h3>
        <div class="businessTop__contentsWrap">
            <div class="businessTop__imgWrap">
                <img class="businessTop__img" alt="新電力事業"
                    src="<?php echo esc_url(get_theme_file_uri('img/business1.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/business1@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business1@2x.png')); ?> 2x">
            </div>
            <div class="businessTop__textWrap">
                <h4 class="businessTop__subTitle">新電力事業</h4>
                <p class="businessTop__text">
                    新電力事業の最大の魅力は、「選べる自由」と「コストの削減」。<br>
                    <br>
                    当社では、電力の使用状況やご希望に合わせた柔軟な料金プランを取り揃え、<br class="businessTop__break1">
                    一般家庭はもちろん、中小企業や店舗様にも最適な電力供給をご提案しています。<br>
                    <br>
                    これまでの「ただ使うだけ」の電気から、「家庭に合った電気を選ぶ」時代へ。<br>
                    賢く切り替えて、月々の電気代の削減に貢献します。<br>
                    <br>
                    「電気を見直す」ことは、「未来を変える第一歩」です。<br>
                    ぜひ私たちと一緒に、電力の新しい選び方を始めてみませんか？
                </p>
                <div class="btn businessTop__btn">
                    <?php
                    $upload_dir = wp_upload_dir();
                    $file_url = $upload_dir['baseurl'] . '/2025/04/new_electric_material.pdf';
                    ?>
                    <div class="btn__wrapper">
                        <a class="btn__text" href="<?php echo esc_url($file_url); ?>" download="">資料をダウンロード</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="businessTop__catch" id="target_gas">「毎月かかるものだから、ムダなく、もっとおトクに。」</h3>
        <div class="businessTop__contentsWrap  business__reverse">
            <div class="businessTop__imgWrap">
                <img class="businessTop__img" alt="ガス事業"
                    src="<?php echo esc_url(get_theme_file_uri('img/business2.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/business2@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business2@2x.png')); ?> 2x">
            </div>
            <div class="businessTop__textWrap">
                <h4 class="businessTop__subTitle">ガス事業</h4>
                <p class="businessTop__text">
                    ガスの切り替えのお話しやご提案をさせていただくと、<br>
                    「手続きが面倒そう」「ちゃんと使えるか不安」「業者選びに失敗したくない」<br>
                    <br>
                    ──そんな不安の声を多く耳にします。<br>
                    <br>
                    私たちは、そうしたお客さまの不安を一つずつ丁寧に取り除きながら、<br class="businessTop__break1">
                    最適なガス切り替えをご提案するプロフェッショナル集団です。<br>
                    <br>
                    料金を安くするだけではなく、<br class="businessTop__break1">
                    ライフスタイルや使用状況に合わせた「納得感のある提案」を大切にしています。<br>
                    <br>
                    ぜひ一度、私たちにご相談ください。安心と納得の切り替えを、<br class="businessTop__break1">
                    心を込めてサポートいたします。
                </p>
            </div>
        </div>
        <h3 class="businessTop__catch" id="target_net">「その回線、本当にベストですか？」</h3>
        <div class="businessTop__contentsWrap">
            <div class="businessTop__imgWrap">
                <img class="businessTop__img" alt="インターネット回線事業"
                    src="<?php echo esc_url(get_theme_file_uri('img/business3.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/business3@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business3@2x.png')); ?> 2x">
            </div>
            <div class="businessTop__textWrap">
                <h4 class="businessTop__subTitle">インターネット回線事業</h4>
                <p class="businessTop__text">
                    インターネット回線の切り替えと聞くと、<br>
                    「手続きが面倒そう」「通信が不安定にならないか心配」「どの会社がいいか分からない」<br>
                    <br>
                    ──そんなお悩みの声をよくいただきます。<br>
                    <br>
                    私たちは、そうした不安を一つひとつ丁寧に解消しながら、<br>
                    お客さまにとって最適な回線プランをご提案するプロ集団です。<br>
                    <br>
                    地域に密着したきめ細やかな対応と、これまでの豊富な導入実績を活かし、 <br class="businessTop__break1">
                    ご家庭から事業所まで、環境に合わせた最善の選択肢をご案内いたします。<br>
                    <br>
                    単に料金の安さだけではなく、<br class="businessTop__break1">
                    速度・安定性・サポート体制までトータルにご提案させていただくとともに、 <br>
                    納得と安心のインターネット環境を、心を込めてお届けいたします。
                </p>
            </div>
        </div>
        <h3 class="businessTop__catch" id="target_conservation">「“気づかぬムダ”を、“確実な節約”に。」</h3>
        <div class="businessTop__contentsWrap business__reverse">
            <div class="businessTop__imgWrap">
                <img class="businessTop__img" alt="節水事業"
                    src="<?php echo esc_url(get_theme_file_uri('img/business4.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/business4@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business4@2x.png')); ?> 2x">
            </div>
            <div class="businessTop__textWrap">
                <h4 class="businessTop__subTitle">節水事業</h4>
                <p class="businessTop__text">
                    「水道代、けっこうかかってるな…」 <br>
                    そんなあなたに今すぐできる節水のご提案です！<br>
                    <br>
                    私たちは、家庭や小規模なお店など、 <br>
                    日々の生活の中でできる節水対策を専門にサポートしています。
                    <br>
                    「効果あるの？」「使い心地は？」といった声にも、<br>
                    導入前から導入後までしっかり寄り添い、 納得のいく形で節水ライフをスタートできます。<br>
                    <br>
                    水のムダをなくすことは、家計にも地球にもやさしい選択。<br>
                    まずはお気軽にお問い合わせください。 <br>
                    あなたに合った“続けられる節水”をご案内します！
                </p>
                <div class="btn businessTop__btn">
                    <?php
                    $upload_dir = wp_upload_dir();
                    $file_url = $upload_dir['baseurl'] . '/2025/04/jef_material.pdf';
                    ?>
                    <div class="btn__wrapper">
                        <a class="btn__text" href="<?php echo esc_url($file_url); ?>" download="">資料をダウンロード</a>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="businessTop__catch" id="target_water">「今日もいい水からはじめよう。」</h3>
        <div class="businessTop__contentsWrap">
            <div class="businessTop__imgWrap">
                <img class="businessTop__img" alt="ウォーターサーバー販売事業"
                    src="<?php echo esc_url(get_theme_file_uri('img/business5.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/business5@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business5@2x.png')); ?> 2x">
            </div>
            <div class="businessTop__textWrap">
                <h4 class="businessTop__subTitle">ウォーターサーバー販売事業</h4>
                <p class="businessTop__text">
                    「毎日の水、ちょっとイイのに変えてみよう！」<br>
                    私たちのウォーターサーバーは、 <br>
                    おいしい水をもっと手軽に楽しめるアイテムです。<br>
                    <br>
                    面倒な給水や沸かす手間もなく、冷水もお湯もすぐ使える。 <br>
                    <br>
                    料理にもコーヒーにも、お子さんのミルクにも大活躍！<br>
                    しかも、使い方もシンプルで、設置・交換もとってもかんたん。<br>
                    毎日使うものだからこそ、質にもこだわりたいですよね。<br>
                    <br>

                    「お水が変わると、毎日がちょっと豊かになる」 <br>
                    その体験、あなたも始めてみませんか？
                </p>
            </div>
        </div>
    </div>
</section>
<!------------------------------------- エントリーボタン ------------------------------------->
<?php get_template_part('parts/recruit', 'entry'); ?>
</section>
<?php get_footer(); ?>

<?php get_footer(); ?>