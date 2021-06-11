<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
$urlroot = "https://tanq.kaduo.jp";
include($webroot."/header.php");
?>

    <!-- Full Page Image Header with Vertically Centered Content -->
 
    <header>

        <div class="head-bg head-bg-fluid">
            <div class="masthead">
                <div class="head-bg-img"></div>
                <div class="container h-100">
                    <div class="h-100 align-items-center">
                        <div class="text-center event" style="margin-top:20%">
                            <p class="text-center text-white event-date">探究進捗報告会2021年夏</p>
                            <p class="text-center text-white ">2021.6.12 (Sat.) 16:00 - 18:00</p>
                            <p class="title-description text-center text-white">予約不要・入退場自由</p>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                                Liveに参加する
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel">Liveは6月12日16時から開始されます。</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    LiveはZOOM Webiner上で行われます。ZOOMクライアントをインストールするか、対応ブラウザから当日ご参加ください。
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 前回の進捗報告会 -->

    <section class="page-section" id="digest" style="margin-bottom: -2%">
        <div class="container">
            <div class="ratio ratio-16x9">
                <iframe class="w-100" src="https://www.youtube.com/embed/Jpn2mGVw0wQ"></iframe>
            </div>
        </div>
    </section>

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
                        <a href="../../">探Qについて</a>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9">
                    <video class="w-100" autoplay muted loop poster="../../assets/img/intro-clip.jpg">
                        <source src="" data-src="../../assets/img/intro-clip.mp4" type="video/mp4">
                    </video>
                </div>
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
                    16:00 - 16:10
                </div>
                <div class="col-md-9">
                    <h3>イントロダクション</h3>
                    <p class="schedule-description">
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">Paul Scherrer Institut　田中香津生</span>
                    </p>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    16:15 - 16:25
                </div>
                <div class="col-md-9">
                    <h3>宇宙線による学校のコンクリート厚推定</h3>
                    <p class="schedule-description">
                    <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">開智高校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大　丸田京華</span>    
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 小林南奈</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/728b37c62a71498f8b919947b441cafa'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>
                    <button class="btn text-white btn-sm rounded disabled"><span class="material-icons icon">article</span>これまでの進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/kaichi-jpgu2021.pdf'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">article
                    </span>JpGU2021</button>
                </div>
            </div>




            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    16:30 - 16:40
                </div>
                <div class="col-md-9">
                    <h3>色素ゲルを用いた電子ビームによる吸収線量分布測定</h3>
                    <p class="schedule-description">
                    <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大　帆足莉子</span>    
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 柳本和奏</span>
                    </p>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/BL4S2021-proposal.pdf'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">article
                    </span>A Beamline for Schools 2021 proposal</button>
                    <button onclick="location.href='https://www.youtube.com/watch?v=hDC8kqgvEW4'" class="btn text-white btn-sm rounded"><span class="material-icons icon">videocam</span>Singapore International Science Challeng 2021 video clip</button>
                </div>
            </div>



            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    16:45 - 16:55
                </div>
                <div class="col-md-9">
                    <h3>高度と方位による宇宙線到来頻度の違い</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">豊島岡女子学園</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">早稲田大 大澤真優乃</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 新井詩乃</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 末廣和夏</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 森本結衣</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/2021-96096b546576462f88bb3afbf7e73947'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>

                    <button onclick="location.href='<?php echo $urlroot ?>/material/toshima-steamfesta2021.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>ベネッセSTEAMフェスタ 2021</button>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                17:00 - 17:10
                </div>
                <div class="col-md-9">
                    <h3>アクリル板を用いたチェレンコフ光検出</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">豊島岡女子学園</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">早稲田大 大澤真優乃</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 久保田佳歩</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 久世優果</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 浦野慈梨</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/B-3e347aad00e949798a327bec66e68638'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>
                </div>
            </div>


            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                17:15 - 17:25
                </div>
                <div class="col-md-9">
                    <h3>CsIシンチレーターを用いた線源測定</h3>
                    <p class="schedule-description">
                    <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">日比谷高校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大　帆足莉子</span>    
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 木村萌恵</span>
                    </p>
                    <button class="btn text-white btn-sm rounded disabled"><span class="material-icons icon">article</span>これまでの進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/hibiya-jpgu2021.pdf'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">article
                    </span>JpGU2021</button>
                </div>
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                17:30 - 17:40
                </div>
                <div class="col-md-9">
                    <h3>日本とアルゼンチンでの宇宙線の到来頻度の違い</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">山形興譲館、東桜学館</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大 河野理夏子</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 尾崎杏華</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 中臺遼喜</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 朝烏渓伍</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 設樂一史</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 高梨美佳</span>
                    </p>

                    <button onclick="location.href='https://www.notion.so/kaduo/6-12-c2e9ce6b38ea41fb831c3416b23f6689'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/takanashi-innovation2021.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>米沢興譲館イノベーション塾</button>
                </div>
            </div>
            <div class="schedule row">

                <div class="col-md-3 schedule-time">
                    17:45 - 17:55
                </div>
                <div class="col-md-9">
                    <h3>太陽と宇宙線の関係</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">静岡県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">磐田南高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東京工業大 榎本晴日</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 西堀宙知</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 小川祐佳</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 三木花</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 宮本匠</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 鈴木洸希</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/15d2e39e9726490683553c3acb48c033'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>
                 </div>
                
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                18:00 - 18:10
                </div>
                <div class="col-md-9">
                    <h3>古墳ミュオグラフィ</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院</span>

                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 柳本和奏</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 石澤知世</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 小野聡</span>
                    </p>

                    <button onclick="location.href='https://www.canva.com/design/DAEgJ0qBfFQ/NGxtwy8sClKsqIUqApqxiQ/view?utm_content=DAEgJ0qBfFQ'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">article
                    </span>JpGU2021</button>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                18:15 - 18:25
                </div>
                <div class="col-md-9">
                    <h3>宇宙線中性子を測定して積雪量を測る</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">広尾学園</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">山形東</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 河野理夏子</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 生嶋慶</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 佐藤麻央</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/78a75b046b0145e4afee3ce5ed285e0a'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/hiroo-jpgu2021.pdf'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">article
                    </span>JpGU2021</button>
                </div>
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:30 - 18:40
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
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 宮原杏奈</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 高梨美佳</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 髙橋夢玖</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/6-12-f56998277f474a78b12faa681fec6871'" class="btn history text-white btn-sm rounded"><span class="material-icons icon">history
                    </span> これまでの進捗</button>
                    <button onclick="location.href='<?php echo $urlroot ?>/material/kojyokan-jps-2021.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>物理学会Jr.セッション研究レポート</button>
                </div>
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:40 - 19:00
                </div>
                <div class="col-md-9">
                    <h3>ラドン検出器開発
                    </h3>
                    <p class="schedule-speaker">
                    <span class="material-icons icon">account_circle</span> <span class="margin">三明康郎</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">斎藤隆太</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">丸田京華</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">遠藤心汰朗</span>
                    </p>
                                 </div>
            </div>
            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    19:00 - 19:10
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

    <!-- CONTACT -->
    <section class="page-section" id="contact">
        <div class="container">
            <h1 class="section-title">
                コンタクト
            </h1>
            <div class="row">
                <section class="page-section" id="staff">
                    <div class="container">
                        <div class="w-100 pr-5">
                            <img class="rounded img-fluid img-fluid" src="../../assets/img/contact-eyecatch.jpg">
                        </div>
                                <ul class="m-5 list-group list-group-flush">
                                    <li class="list-group-item"><span class="material-icons icon">corporate_fare</span>加速キッチン合同会社</li>
                                    <li class="list-group-item"><span class="material-icons icon">location_city</span>〒980-0845 宮城県仙台市青葉区荒巻青葉６−６ー４０東北大学連携ビジネスインキュベータ４０１号室</li>
                                    <li class="list-group-item"><span class="material-icons icon">email</span> info@accel-kitchen.com
                                    </li>
                                    <li class="list-group-item"><span class="material-icons icon">language</span> <a href="https://accel-kitchen.com/"> https://accel-kitchen.com/</a></li>
                                </ul>
                    </div>
                </section>
            </div>
        </div>

      <hr>
</section>



    <hr>

    <?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>