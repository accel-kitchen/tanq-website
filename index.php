<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/header.php");
?>


    <!-- Full Page Image Header with Vertically Centered Content -->
    <header>
        <div class="head-bg head-bg-fluid">
            <div class="masthead">
                <div class="head-bg-img"></div>
                <div class="container h-100">
                    <div class="h-100 align-items-center">
                        <div class="head-title text-center">
                            <img src="./assets/img/title.png" class="title">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- 
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="card">
                <div class=" mx-auto">
                    <img src="./assets/img/tanq-online-progressreport2020-banner.jpg" class="img-fluid card-img rounded">
                </div>
                <div class="card-img-overlay d-flex justify-content-center" style="top:40%">
                    <button class="btn btn-primary btn-lg d-blcok mx-auto align-self-center " onclick="location.href='./progress-report/2020-2/'" role="button">もっと詳しく知る</button>
                </div>
            </div>
        </div>
    </section>
    <hr>
    -->
    <!-- 宇宙線探究活動　探Qって？ -->
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pull-left">
                        <h2 class="section-title">
                            宇宙線探究活動　探Qって？
                        </h2>
                    </div>
                    <div class="container">
                        <p>宇宙線の測定・観測と聞くと難しそうですが、探Qでこの宇宙線探究活動を中高生でもできるデバイスを開発・配布を行ってきており、たくさんの中高生が共同研究に加わっています。現在ではおよそ１０校の中高・高専で研究者のサポートを受けて宇宙線検出器の製作・探究活動を行っており、研究会で成果を発表するような高校生もいます。
                        </p>
                        <a href="https://tanq.kaduo.jp/tanq-pamflet-2020-A4-lite.pdf"><span class="material-icons icon">picture_as_pdf</span> 探Q　パンフレット</a>
                        <br><br>
                    </div>
                </div>
                <div class="w-100 embed-responsive embed-responsive-16by9 col-lg-6 ">
                    <video class="embed-responsive-item" autoplay muted loop poster="./assets/img/intro-clip.jpg">
                        <source src="" data-src="./assets/img/intro-clip.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <!-- 特徴 -->
    <section class="page-section" id="feature">
        <div class="container section">
            <h1 class="section-title">
                宇宙線探究活動　探Qの特徴
            </h1>
            <div class="row">

                <div class="col-lg-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="./assets/img/tanq-event-image1.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">宇宙線検出器を使う</h2>
                            <hr>
                            <p>　中高生でも簡単に作ることができるような検出器を開発し、全国の中高生へ配布を行います。また、全国の中高生に活動を知ってもらうために、オンラインや各地方で体験会を行っています。</p>
                            <a href="./detector.php"><span class="material-icons icon">web</span>宇宙線・検出器について</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="./assets/img/tanq-event-image2.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">研究者と共同研究する</h2>
                            <hr>
                            <p>Slackを用いたオンラインコミュニティとZOOMを用いたビデオセッションを活用することで、全国のどこからでも中高生が研究者と一緒に探究活動ができます。
                            </p>
                            <a href="./communication.php"><span class="material-icons icon">web</span> 全国の研究者や中高生との交流</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="./assets/img/tanq-event-image3.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">宇宙線で世界と繋がる</h2>
                            <hr>
                            <p>他国での宇宙線探究プロジェクトと連携することで、国際交流を促進します。例えばアルゼンチンとの共同探究を行う高校生チームがあったり、アメリカの研究者とのディスカッションをする高校生がいたりします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  

    <hr>
    <!-- PAGE ABOUT -->
    <section class="page-section" id="research">
        <div class="container section">
            <h1 class="section-title">
                探究事例
            </h1>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col mb-4">

                            <a href="https://www.notion.so/kaduo/322cd840f4814bda9dda73f72fa981d0">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/edogawatorite-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線による人体への被爆の影響の推定</p>
                                            <p class="small">江戸川学園取手高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">年間の被ばく線量のうちおよそ0.2 mSvが宇宙線に由来するものと言われています。宇宙線検出器から得られる到来頻度を元に学校付近での宇宙線被ばく総量の推定を試みました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.2~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/3b179a3cdb204f88b0f3f8081f56f39f">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/toshimaoka-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>自宅で検証、高度による宇宙線到来頻度の違い</p>
                                            <p class="small">豊島岡女子学園</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の検出頻度は高度によって異なり、飛行機などでは何十倍も多く検出されます。これを、高層の自宅（２９階）でも地上との有意な差がみえるのではないかという仮説の元行っている探究です。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/103969099cda4ca4a3613f752f4fb0c8">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/touoh-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>サイクロトロン加速器施設での陽子エネルギー測定</p>
                                            <p class="small">東桜学館</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙開発を中心とした企業による放射線体制試験を東北大CYRICでは陽子ビームを用いて行っています。より柔軟な照射事業を行うために供給している陽子ビームについて様々な条件でエネルギー測定をTime Of Flight法を用いて行いました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://youtu.be/yK8ywJyEbio?t=3076">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/bl4s-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>~Cancer Fighers~ ゲルを用いてドイツDESYの大型加速器で電子ビームの線量分布を測定する</p>
                                            <p class="small">Waseda University Honjyo Senior High School、Huechulafquen</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">アルゼンチンの高校生と共同でBL4Sという高校生対象の大型加速器実験公募に挑戦し、ドイツDESYの電子加速器を用いて大型ゲル線量計での線量分布測定を検討・提案をしました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~2020.5</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/bf88a3014fd74df684f9d87e1d64b19c">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/card-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>雲および太陽活動と宇宙線到来頻度の関係</p>
                                            <p class="small">山形東高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線を長期間観測すると、太陽活動やそれに由来する気象活動と宇宙線検出頻度は相関が得られ、また宇宙線に由来した雲形成等、複雑にプロセスが絡み合っていることが様々な研究機関から報告されています。その中でも比較的短い（～１か月）の相関性について探究を行っています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/78a75b046b0145e4afee3ce5ed285e0a">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/hiroo-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線中性子を測定して積雪量を測る</p>
                                            <p class="small">広尾学園</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">積雪量の測定として宇宙線中性子の透過率を用いる手法があり、一部で既に実用化されています。簡易宇宙線検出器ベースに、販売されている装置の数十分の１のコストで同等の積雪量観測を行う装置の開発を行っています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.4~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col mb-4">
                            <a href="https://www.notion.so/2020-e64a70208e08415d96e950065b751932">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/waseda-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線による水中でのチェレンコフ光を検出する</p>
                                            <p class="small">早稲田大学本庄高等学院</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">水やアクリルといった屈折率の大きい物質では光速に近い宇宙線によってチェレンコフ光を発生し、これを受光することで宇宙線を検出することができます。こういったチェレンコフ検出器を形状や材質面で最適化しながら開発します。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.4~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/CMS-bdb1aa96574d48b4823bae6f80af1bb7">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/bmac-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>CMS実験のデータを解析してヒッグス粒子を探索する</p>
                                            <p class="small">早稲田大学本庄高等学院、東桜学館</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">IPPOG(International Particle Physics Outreach Group)主催の大型加速器実験CMSのデータ解析ワークショップに参加して、ヒッグス粒子等の粒子再構成を中心とした解析を行い、アメリカ等の研究者と交流しました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/hiroo-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>広範囲同時測定による超高エネルギー宇宙線探索</p>
                                            <p class="small">早稲田大学本庄高等学院、広尾学園</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の最大エネルギーは宇宙背景放射との相互作用でエネルギーを失うためにGZK限界という上限値があるといわれています。国内の複数の検出器でネットワーク測定を行うことで、このような超高エネルギー宇宙線の測定を試みています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2018.8~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/873ffea95da64d08a7369001e154fbaa">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/argentina-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>アルゼンチンと日本での共同宇宙線観測</p>
                                            <p class="small">米沢興譲館、東桜学館、Huechulafquen</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">日本とアルゼンチンの間で宇宙線到来頻度を比較して、地磁気や高度といった地理的条件による違いを分析しています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.12~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/35e7e2897edb4ceea9e16eba5e069a29">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/kojyokan-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>ミュオンの寿命測定</p>
                                            <p class="small">米沢興譲館</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">ミュオンはおよそ2マイクロ秒という短い寿命をもち、一瞬で崩壊してしまいます。宇宙線のミュオンについて実際に寿命を測定し、ミュオンの電荷等による違いを探ろうとしています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.7~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://youtu.be/yK8ywJyEbio?t=3827">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/card-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>The Relationship between Zenith Angle Dependence of Cosmic Ray and Geomagnetic Activity</p>
                                            <p class="small">仙台第一高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線ミュオンは荷電粒子のため地磁気の影響をうけ、地球に到達するまでの飛跡が曲がります。地上で検出する宇宙線の天頂角分布を測定することで、このような地磁気の依存性を検証しました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2019~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/edf80ac5eca64607a75ff2eb0b0d7d43">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/card-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線到来頻度と気象の関係</p>
                                            <p class="small">秋田高校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の到来頻度と気象との関係に着目し、検出器に取り付けた気温・気圧・湿度センサーの値や、気象庁の観測データを用いて宇宙線到来頻度との相関を調べています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2019~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/63d8c87378974b80a9d70f7786b02e42">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/iwataminami-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>太陽と宇宙線の関係</p>
                                            <p class="small">磐田南高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の発生源の１つである太陽の活動と宇宙線の間にどんな関係があるかを調べています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.10~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <hr>
    <!-- 参加校 -->
    <section class="page-section" id="feature">
        <div class="container section">
            <h1 class="section-title">
                参加校
            </h1>
            <div class="row">
                <div class="container-img w-75 col-lg-9 mx-auto">
                    <img src="./assets/img/participants-map2.png">
                </div>
            </div>
        </div>
    </section>


    <hr>

    <!-- Staff -->
    <section class="page-section" id="Staff">
        <div class="container section">
            <h1 class="section-title">
                メンター
            </h1>
            <div class="row w-75 mx-auto">

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/kono.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">河野理夏子</h2>
                        <hr>
                        <p>東北大学　理学部物理学科3年</p>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/maruta.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">丸田京華</h2>
                        <hr>
                        <p>東北大学　工学部機械知能3年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/kita.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">喜多亮介</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科3年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/saito.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">齋藤隆太</h2>
                        <hr>
                        <p>東北大学　理学部物理学科3年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/osawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">大澤真優乃</h2>
                        <hr>
                        <p>早稲田大学　基幹理工学部4年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/enomoto.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">榎本晴日</h2>
                        <hr>
                        <p>東京工業大学　理学院地球惑星科学系修士1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/akiyama.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">秋山翔希</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科3年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/nose.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">能勢千鶴</h2>
                        <hr>
                        <p>東北大学　理学部物理系2年</p>
                    </div>
</div>
                    <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/hoashi.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">帆足莉子</h2>
                        <hr>
                        <p>東北大学　工学研究科量子エネルギー工学専攻修士1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/minakawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">皆川幸穂</h2>
                        <hr>
                        <p>東北大学　理学部研究科物理学専攻修士1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/nakagawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">中川鈴彩</h2>
                        <hr>
                        <p>東北大学　理学部化学科1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/sasaki.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">佐々木真奈香</h2>
                        <hr>
                        <p>東北大学　医学部保健学科放射線技術科学専攻1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/endo.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">遠藤心汰朗</h2>
                        <hr>
                        <p>東北大学　理学部物理学科1年</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>



    <!-- CONTACT -->
    <section class="page-section" id="contact">
        <div class="container">
            <h1 class="section-title">
                コンタクト
            </h1>
            <div class="row">
                <div class="col-lg-3 container-img">
                    <img class="rounded-circle" src="./assets/img/self-photo.jpg">
                </div>
                <div class="col-lg-9">
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item"><span class="material-icons icon">location_city</span> Paul Scherrer Institut</li>
                        <li class="list-group-item"><span class="material-icons icon">account_circle</span> 田中香津生</li>

                        <li class="list-group-item"><span class="material-icons icon">email</span> tanaka(at)kaduo.jp
                        </li>
                        <li class="list-group-item"><span class="material-icons icon">language</span> <a href="https://kaduo.jp/"> https://kaduo.jp/</a></li>
                        <li class="list-group-item">探Qでは宇宙線探究に関心のある中高生を募集しております。進捗報告会や宇宙線探究に関するお問い合わせはメールにてお願いします。</li>

                    </ul>
                </div>
            </div>
        </div>

      <hr>
</section>

        <!-- HISTORY -->
        <section class="page-section " id="history">
            <div class="container">
                <h1 class="section-title ">
                    過去のイベント
                </h1>
                <ul class="timeline">
                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2019年10月5日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span> 科学実験イベント　探Q</span>
                            </div>
                            <div class="timeline-content">
                                <div class="container-img">
                                    <img class="rounded" src="./assets/img/iida-20191005.jpg">
                                </div>
                                <p>
                                    長野県飯田市で総合研究大学院大学主催、公益財団法人　南信州・飯田産業センター、飯田市共催のもと開催ました。KEK素粒子原子核研究所の研究員等によって開発された簡易版宇宙線検出器の初期バージョンを用いて、実際に宇宙線の到来角度分布の測定にチャレンジしました。
                                </p>

                                <a href="https://www2.kek.jp/ipns/ja/post/2019/11/20191107/">素核研ニュース　科学実験イベント　探Qを長野県飯田市で開催</a>

                            </div>
                            <div class="timeline-likes">
                                <div class="stats">
                                    <span class="stats-text">長野県</span>
                                    <span class="stats-text">飯田市</span>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年1月12日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span> 宇宙線探索ワークショップ探Q 仙台</span>
                            </div>
                            <div class="timeline-content">
                                <div class="container-img">
                                    <img class="rounded" src="./assets/img/nd-map-20200112.jpg">
                                </div>
                                <p>
                                    東北大学サイエンスキャンパスに中高生が集まり、宇宙線検出器「Cosmic Watch」を使って、宇宙線の到来角度分布測定や建物の階数によって宇宙線の到来頻度がどう変わるかについてグループごとに挑戦しました。このイベントから宇宙線探究活動をはじめたグループ（秋田高校、豊島岡女子学園、東桜学館、早稲田大学本庄高等学院）もあります。
                                </p>
                                <a href="https://www2.kek.jp/ipns/ja/post/2020/02/20200203/">素核研ニュース　科学実験イベント　宇宙線探索ワークショップ探Q 仙台と東京で開催</a>


                            </div>
                            <div class="timeline-likes">
                                <div class="stats">
                                    <span class="stats-text">宮城県</span>
                                    <span class="stats-text">東北大学</span>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>


                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年1月13日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span> 宇宙線探索ワークショップ探Q 東京</span>
                            </div>
                            <div class="timeline-content">
                                <div class="container-img">
                                    <img class="rounded" src="./assets/img/nd-map-20200113.jpg">
                                </div>
                                <p>
                                    広尾学園に全国から中高生が集まり、宇宙線検出器「Cosmic Watch」を使って、宇宙線の到来角度分布測定や建物の階数によって宇宙線の到来頻度がどう変わるかについてグループごとに挑戦しました。このイベントから宇宙線探究活動をはじめたグループ（江戸川取手）もあります。
                                </p>

                                <a href="https://www2.kek.jp/ipns/ja/post/2020/02/20200203/">素核研ニュース　科学実験イベント　宇宙線探索ワークショップ探Q 仙台と東京で開催</a>

                            </div>
                            <div class="timeline-likes">
                                <div class="stats">
                                    <span class="stats-text">東京都</span>
                                    <span class="stats-text">広尾学園</span>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>


                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年5月1日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">radio</span> NHKラジオ　ゴジだっちゃ！で探Qの活動紹介</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    江戸川取手学園高校2年の高槌満帆さんがNHKラジオに出演し、探Qでの研究活動について紹介しました。
                                </p>

                                <a href="https://www.nhk.or.jp/daccha-blog/2020/05/01/">NHKKラジオ第一　ゴジだっちゃ！　令和２年５月１日（金）</a>

                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年6月28日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span>宇宙線探究活動進捗報告会</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    各学校の宇宙線探究活動の進捗を発表するWebinarを開催しました。
                                </p>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jpn2mGVw0wQ"></iframe>
                                </div>

                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年7月7日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">tv</span> NHKテレビ　てれまさむねで探Qの活動紹介</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    コロナ関連でのオンラインを活用した探究活動として、主に豊島岡女子学園の活動を中心に紹介されました。
                                </p>


                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年9月28日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span>宇宙線検出器製作会</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    東北大学の学生を対象に宇宙線検出器製作体験を行いました。４名の１年生が参加して、それぞれ検出器の製作・テスト測定に取り組みました。
                                </p>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年11月15日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span>オンライン宇宙線観測体験会</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    オンラインで宇宙線検出器のデータをリモートで解析しながら楽しめる宇宙線観測体験会を行いました。２０名の中学生～高校生が５つのグループに分かれて、宇宙線探究を普段行っている中高生と一緒に天頂角分布測定に挑みました。
                                </p>
                                <a href="https://tanq.kaduo.jp/workshop/online2020/">オンライン宇宙線観測体験会</a>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年12月22日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span>宇宙線探究活動進捗報告会</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    各学校の宇宙線探究活動の進捗を発表するWebinarを開催しました。
                                </p>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0Ixdd3UQ0OE"></iframe>
                                </div>
                                                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2021年1月12日,19日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span>立教新座高等学校　宇宙線探究授業</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    立教新座高校の物理の授業（５０分×２コマ×２週）で６名の高校３年生を対象とした宇宙線授業を行いました。事前に送付された宇宙線検出器を使って観測に挑戦して、統計的な解析を行いながら角度依存性等の有意性について活発に議論を行っていました。
                                </p>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>

                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="time">2020年1月16日</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="username"><span class="material-icons icon">event_note</span>豊島岡女子学園　宇宙線探究ワークショップ</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    豊島岡女子学園で宇宙線観測に関するイベントを行いました。６０名程度が参加して実際に検出器を使った観測を行うのがソーシャルディスタンスの観点で難しかったため、探求を実際に行っている中学生から研究紹介及びどうやって解析して得られた結果なのかの実演を行ってもらいました。
                                    また、同様の解析を試すことができるウェブページをお土産としてお送りして、終了後に参加者には自宅で体験してもらえるようにしました。
                                </p>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>


                </ul>
            </div>
        </section>

<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>