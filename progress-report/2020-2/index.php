<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
$urlroot = "https://tanq.kaduo.jp";
include($webroot."/header.php");
?>

    <!-- Full Page Image Header with Vertically Centered Content -->
 
    <!-- Full Page Image Header with Vertically Centered Content -->
    <header>
        <div class="head-bg head-bg-fluid">
            <div class="masthead">
                <div class="head-bg-img"></div>
                <div class="container h-100">
                    <div class="h-100 align-items-center">
                        <div class="text-center event" style="margin-top:20%">
                            <p class="text-center text-white event-date">探究進捗報告会２０２０年冬</p>
                            <p class="text-center text-white ">2020.12.22 (Tue.) 18:00 - 21:00</p>
                            <p class="title-description text-center text-white">予約不要・入退場自由</p>

                            <button onclick="location.href='https://us02web.zoom.us/j/88013307181'" type="button" class="btn btn-primary">
                                Liveに参加する
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <!-- 
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel">Liveは12月22日18時から開始されます。</p>
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    LiveはZOOM Webiner上で行われます。ZOOMクライアントをインストールするか、対応ブラウザから当日ご参加ください。
                    <a href="https://us02web.zoom.us/j/88013307181">ZOOM Webinarに移動する</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
    </div>
 -->
    <!-- 前回の進捗報告会 -->

    <section class="page-section" id="digest" style="margin-bottom: -2%">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-Y6lb9V3JPk?start=586"></iframe>
            </div>
        </div>
    </section>

    <!-- 宇宙線探索ワークショップ　探Qって？ -->
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="pull-left">
                        <h2 class="section-title">
                            宇宙線探索ワークショップ　探Qって？
                        </h2>
                    </div>
                    <div class="container">
                        <p>宇宙線の測定・観測と聞くと難しそうですが、探Qでこの宇宙線探究活動を中高生でもできるデバイスを開発・配布を行ってきており、たくさんの中高生が共同研究に加わっています。現在ではおよそ１０校の中高・高専で研究者のサポートを受けて宇宙線検出器の製作・探究活動を行っており、研究会で成果を発表するような高校生もいます。
                        </p>
                        <a href="https://tanq.kaduo.jp/"><span class="material-icons">
                            forward
                            </span> 詳しくはこちら</a>
                        <br><br>
                    </div>
                </div>
                <div class="w-100 embed-responsive embed-responsive-16by9 col-sm-12 col-md-6 col-lg-6 ">
                    <video class="embed-responsive-item" autoplay muted loop poster="https://tanq.kaduo.jp/assets/img/intro-clip.jpg">
                        <source src="" data-src="https://tanq.kaduo.jp/assets/img/intro-clip.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </section>


    <hr>
    <!-- PAGE ABOUT -->
    <section class="page-section" id="schedule">
        <div class="container section">
            <h1 class="section-title">
                スケジュール
            </h1>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:00 - 18:10
                </div>
                <div class="col-md-9">
                    <h3>イントロダクション</h3>
                    <p class="schedule-description">
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">東北大学　田中香津生</span>
                    </p>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:10 - 18:20
                </div>
                <div class="col-md-9">
                    <h3>自宅で検証、高度による宇宙線到来頻度の違い</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">豊島岡女子学園</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">早稲田大3年 大澤真優乃</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">中3 新井詩乃</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">中3 末廣和夏</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">中3 森本結衣</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/3b179a3cdb204f88b0f3f8081f56f39f'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> 前回の進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/toshimaoka-sciencc-castle-2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>サイエンスキャッスルポスター</button>
                    
                </div>

            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:25 - 18:30
                </div>
                <div class="col-md-9">
                    <h3>TBD</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">茨城県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">小山高専</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                    </p>
                </div>
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:35 - 18:45
                </div>
                <div class="col-md-9">
                    <h3>日本とアルゼンチンでの宇宙線の到来頻度の違い</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">山形興譲館、東桜学館</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 河野理夏子</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 尾崎杏華</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 高梨美佳</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/9beae5ce6ad940448bc3f5529a63f747'"  class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>進捗</button>
                    
                </div>

            </div>

            <div class="schedule row">

                <div class="col-md-3 schedule-time">
                    18:50 - 19:00
                </div>
                <div class="col-md-9">
                    <h3>太陽と宇宙線の関係</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">静岡県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">磐田南高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大4年 榎本晴日</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 西堀宙知</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 小川祐佳</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 三木花</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 宮本匠</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 鈴木洸希</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/15d2e39e9726490683553c3acb48c033'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>進捗</button>
                </div>
                
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    19:05 - 19:15
                </div>
                <div class="col-md-9">
                    <h3>μ粒子の寿命測定
                    </h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">米沢興譲館高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 斎藤隆太</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 宮原杏奈</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 高梨美佳</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 髙橋夢玖</span>
                    </p>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/kojokan-poster2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>校内発表研究ポスター</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/kojyokan-jps-2021.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>物理学会Jr.セッション研究レポート</button>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    19:20 - 19:30
                </div>
                <div class="col-md-9">
                    <h3>雲および太陽活動と宇宙線到来頻度の関係</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">山形東高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 斎藤隆太</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 秋山翔希</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 早坂大弥</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 後藤くるみ</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 倉嶋太郎</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 田中悠太郎</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 上林大悟</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/bf88a3014fd74df684f9d87e1d64b19c'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> 前回の進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/yamagata-higashi-poster-2020-Nov.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>校内発表用ポスター</button>
                </div>

            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    19:35 - 19:45
                </div>
                <div class="col-md-9">
                    <h3>宇宙線中性子を測定して積雪量を測る</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">広尾学園</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 河野理夏子</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 生嶋慶</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/78a75b046b0145e4afee3ce5ed285e0a'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> 前回の進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>//material/hiroo-jsec-report-2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>JSECレポート</button>



                </div>
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    19:50 - 20:00
                </div>
                <div class="col-md-9">
                    <h3>宇宙線による水中でのチェレンコフ光を検出する</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 丸田京華</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 塩野紗彩</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/bbeacc12ac4d45f58617955951ff1200'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> 前回の進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/wasedahonjyo-report-shiono2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>学内卒業論文</button>
                </div>

            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    20:05 - 20:15
                </div>
                <div class="col-md-9">
                    <h3>宇宙線量と気象の関係</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_city</span> <span class="margin">秋田高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 丸田京華</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 秋山翔希</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 熊谷洸希</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 渋谷遥斗</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 登藤成琉</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 水谷凜都</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 森内厚佑</span>
                    </p>
                    <button onclick="location.href='<?php echo $urlroot ?>//material/akita-jps-2021.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>物理学会Jr.セッション研究レポート</button>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    20:20 - 20:30
                </div>
                <div class="col-md-9">
                    <h3>TBD（古墳）</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院</span>

                        <br>
                    </p>
                    <p class="schedule-speaker">
                    </p>

                    <button class="btn text-white btn-sm rounded disabled"><span class="material-icons icon">article</span>進捗</button>
                </div>
            </div>


            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    20:35 - 20:45
                </div>
                <div class="col-md-9">
                    <h3>Belle2 Masterclass</h3>
                    <p class="schedule-description">

                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">米沢興譲館高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">山形大 中森健之</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高梨美佳</span>
                    </p>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/takanashi-belle2-mc-2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>Belle2 MC紹介</button>
                </div>

            </div>

            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    20:50 - 21:00
                </div>
                <div class="col-md-9">
                    <h3>色素ゲルを用いた電子ビームによる吸収線量分布測定</h3>
                    <p class="schedule-description">
                    <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大　帆足莉子</span>    
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">柳本和奏</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/3031c562b3414f6f862ee82ef13cba19'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">article
                    </span>サイエンスキャッスル要旨</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/yanagimoto-science-castle2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>サイエンスキャッスルポスター</button>
                </div>

            </div>

            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    21:05 - 21:20
                </div>
                <div class="col-md-9">
                    <h3>まとめ</h3>
                    <p class="schedule-description">
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">東北大学　田中香津生</span>
                    </p>
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
            <div class="container-img">
                <img src="https://tanq.kaduo.jp/assets/img/participants-map.png">
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
                        <p>東北大学　理学部物理学科2年</p>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/maruta.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">丸田京華</h2>
                        <hr>
                        <p>東北大学　工学部機械知能2年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/kita.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">喜多亮介</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科２年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/saito.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">齋藤隆太</h2>
                        <hr>
                        <p>東北大学　理学部物理学科2年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/osawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">大澤真優乃</h2>
                        <hr>
                        <p>早稲田大学　基幹理工学部３年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/enomoto.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">榎本晴日</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科４年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/akiyama.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">秋山翔希</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科２年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/nose.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">能勢千鶴</h2>
                        <hr>
                        <p>東北大学　理学部物理系１年</p>
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
                <div class="col-md-3 container-img">
                    <img class="rounded-circle" src="https://tanq.kaduo.jp/assets/img/self-photo.jpg">
                </div>
                <div class="col-md-9">
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item"><span class="material-icons icon">location_city</span> 東北大学サイクロトロン・ラジオアイソトープセンター</li>
                        <li class="list-group-item"><span class="material-icons icon">account_circle</span> 田中香津生</li>

                        <li class="list-group-item"><span class="material-icons icon">email</span> tanaka(at)kaduo.jp
                        </li>
                        <li class="list-group-item"><span class="material-icons icon">language</span> <a href="https://kaduo.jp/"> https://kaduo.jp/</a></li>
                        <li class="list-group-item">探Qでは宇宙線探究に関心のある中高生を募集しております。進捗報告会や宇宙線探究に関するお問い合わせはメールにてお願いします。</li>

                    </ul>
                </div>
            </div>
        </div>

    </section>



    <hr>

    <?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>