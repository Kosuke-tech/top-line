<?php get_header(); ?>
        <section class="aboutTop">
            <h2 class="aboutTop__title">私たちについて</h2>
            <div class="aboutTop__contentsWrapper">
                <div class="aboutTop__imgWrapper">
                    <img class="aboutTop__img" alt="" 
                    src="<?php echo esc_url(get_theme_file_uri('img/about@1x.png')); ?>" 
                    srcset="<?php echo esc_url(get_theme_file_uri('img/about@1x.png')); ?> 1x, 
                    <?php echo esc_url(get_theme_file_uri('img/about@2x.png')); ?> 2x"
                    >
                </div>
                <div class="aboutTop__textWrapper">
                    <h4 class="aboutTop__catch">「信頼でつなぐ、未来の付加価値。」</h4>
                    <p class="aboutTop__text">
                        私たちは営業支援のプロフェッショナルとして、
                        企業の成長を支える営業総合代理店です。<br>
                        <br>
                        業種や規模を問わず、多くのクライアントと共に課題を見つけ、<br>
                        最適な戦略を描き、実行してきた実績があります。

                        単なる営業代行にとどまらず、現場に深く入り込み、
                        売上拡大に直結する提案と行動で結果を出していくことが私たちの強みです。<br>
                        <br>
                        信頼関係を何よりも大切にし、
                        伴走型のパートナーとして貴社の成長を長期的に支援いたします。

                        営業に関するあらゆる悩みに応えることで、
                        次の一手を共に創り上げていきます。
                    </p>
                </div>
            </div>
        </section>
        <section class="columnTop">
            <h2 class="columnTop__title">最新のコラム</h2>
            <div class="columnTop__contentsWrapper" href="#">
                <?php
                $args = [
                    'post_type' => 'post', //デフォルトの投稿タイプ
                    'posts_per_page' => 4,
                ];
                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()): ?>
                    <ul class="columnTop__list">
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li class="columnTop__listItem">

                                <a class="columnTop__cardLink" href="#">
                                    <div class="columnTop__linkWrapper">
                                        <div class="columnTop__imgWrap">
                                            <?php if (has_post_thumbnail()) {; ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php } else {; ?>
                                                <img class="columnTop__img" alt="" 
                                                src="<?php echo esc_url(get_theme_file_uri('/img/logo@x1.png')) ?>"
                                                srcset="<?php echo esc_url(get_theme_file_uri('/img/logo@1x.png')) ?> 1x,
                                                <?php echo esc_url(get_theme_file_uri('/img/logo@2x.png')) ?> 2x"
                                                >
                                            <?php }; ?>
                                        </div>

                                        <div class="columnTop__articleTextWrap">
                                            <div class="columnTop__date">
                                                <?php echo get_the_date('Y.m.d'); ?>
                                            </div>
                                            <div class="columnTop__articleTitle">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="columnTop__excerpt">
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
            </div>
            <div class="btn">
                <div class="btn__wrapper">
                    <a class="btn__text" href="#">Read more</a>
                </div>
            </div>
        </section>

        <section class="businessTop">
            <h2 class="businessTop__title">事業概要</h2>

            <div class="businessTop__wrapeer">
                <h3 class="businessTop__catch">「電気代、もっと賢く。<br class="businessTop__break1"><span class="businessTop__catchSpan1">選択する時代へ。」</span></h3>
                <div class="businessTop__contentsWrap">
                    <div class="businessTop__imgWrap">
                        <img class="businessTop__img" alt="新電力事業"
                        src="<?php echo esc_url(get_theme_file_uri('img/business1.png')); ?>" 
                        srcset="<?php echo esc_url(get_theme_file_uri('img/business1@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business1@2x.png')); ?> 2x"
                        >
                    </div>
                    <div class="businessTop__textWrap">
                        <h4 class="businessTop__subTitle">新電力事業</h4>
                        <p class="businessTop__text">
                            新電力事業の最大の魅力は、「選べる自由」と「コストの削減」。<br>
                            <br>
                            当社では、電力の使用状況やご希望に合わせた柔軟な料金プランを取り揃え、<br>
                            一般家庭はもちろん、中小企業や店舗様にも最適な電力供給をご提案しています。<br>
                            <br>
                            これまでの「ただ使うだけ」の電気から、「自分に合った電気を選ぶ」時代へ。<br>
                            賢く切り替えて、月々の電気代の削減に貢献します。<br>
                            <br>
                            「電気を見直す」ことは、「未来を変える第一歩」です。<br>
                            ぜひ私たちと一緒に、電力の新しい選び方を始めてみませんか？
                        </p>
                    </div>
                </div>

                <h3 class="businessTop__catch">「毎月かかるものだから、<br class="businessTop__break2"><span class="businessTop__catchSpan2">ムダなく、もっとおトクに。」</span></h3>
                <div class="businessTop__contentsWrap">
                    <div class="businessTop__imgWrap">
                        <img class="businessTop__img" alt="ガス事業"
                        src="<?php echo esc_url(get_theme_file_uri('img/business2.png')); ?>" 
                        srcset="<?php echo esc_url(get_theme_file_uri('img/business2@1x.png')); ?> 1x, 
                        <?php echo esc_url(get_theme_file_uri('img/business2@2x.png')); ?> 2x"
                        >
                    </div>
                    <div class="businessTop__textWrap">
                        <h4 class="businessTop__subTitle">ガス事業</h4>
                        <p class="businessTop__text">
                            ガスの切り替えと聞くと、<br>
                            「手続きが面倒そう」「ちゃんと使えるか不安」「業者選びに失敗したくない」<br>
                            <br>
                            ──そんな不安の声を多く耳にします。<br>
                            私たちは、そうしたお客様の不安を一つずつ丁寧に取り除きながら、<br>
                            最適なガス切り替えをご提案するプロフェッショナル集団です。<br>
                            <br>
                            料金を安くするだけではなく、<br>
                            ライフスタイルや使用状況に合わせた「納得感のある提案」を大切にしています。<br>
                            <br>
                            ぜひ一度、私たちにご相談ください。安心と納得の切り替えを、<br>
                            心を込めてサポートいたします。<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="btn">
                <div class="btn__wrapper">
                    <a class="btn__text" href="#">Read more</a>
                </div>
            </div>
        </section>
        <section class="recruitTop">
            <h2 class="recruitTop__title">採用情報</h2>
            <div class="recruitTop__imgWrapper">
                <img class="recruitTop__img" alt="採用情報"
                src="<?php echo esc_url(get_theme_file_uri('img/recruit.png')); ?>" 
                srcset="<?php echo esc_url(get_theme_file_uri('img/recruit@1x.png')); ?> 1x, 
                <?php echo esc_url(get_theme_file_uri('img/recruit@2x.png')); ?> 2x"
                >
            </div>
            <div class="recruitTop__textWrapper">
                <h3 class="recruitTop__catch">「その一歩が、あなたの未来を変える。」</h3>
                <p class="recruitTop__text">
                    営業は、モノを売るだけの仕事ではありません。<br>
                    お客様の課題に向き合い、最適な解決策を提案する“信頼”の仕事です。<br>
                    <br>
                    私たちは、そんな営業のプロフェッショナルを目指す仲間を募集しています。<br>
                    <br>
                    未経験でも大丈夫。大切なのは、「挑戦したい」という気持ちと、「人と真剣に向き合える姿勢」です。<br>
                    <br>
                    実践に近い研修制度と、先輩たちの丁寧なサポートにより、ゼロからでも確実にスキルが身につきます。<br>
                    また、年齢や経験に関係なく、頑張りが正当に評価される仕組みも整えており、<br>
                    キャリアアップも実力次第。あなた自身の成長が、チームや会社の成長につながる環境です。<br>
                    <br>
                    営業の世界で自分の可能性を試したい方、人と関わることが好きな方、新しい一歩を踏み出したい方。 その想い、私たちと一緒に叶えませんか？<br>
                    あなたのエントリーを心よりお待ちしています。<br>
                </p>
            </div>
            <div class="btn">
                <div class="btn__wrapper">
                    <a class="btn__text" href="#">Read more</a>
                </div>
            </div>
        </section>
    <?php get_footer(); ?>