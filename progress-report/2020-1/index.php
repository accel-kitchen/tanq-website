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
                            <img src="../../assets/img/title.png" class="title">

                        </div>
                        <p class="text-center text-white event-date">2020.6.28 (Sun.) 16:00 - 19:00</p>
                        <p class="title-description text-center text-white event-date">予約不要・入退場自由</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="modal fade webiner_info" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel">Liveは6月28日16時~開始されます。</p>
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    LiveはZOOM Webiner上で行われます。ZOOMクライアントをインストールするか、対応ブラウザから当日ご参加ください。
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
    </div>


    <section class="page-section" id="digest">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jpn2mGVw0wQ"></iframe>
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
                        <a href="https://tanq.kaduo.jp/tanq-pamflet-2020-A4-lite.pdf"><span class="material-icons icon">picture_as_pdf</span> 探Q　パンフレット</a>
                        <br><br>
                    </div>
                </div>
                <div class="w-100 embed-responsive embed-responsive-16by9 col-sm-12 col-md-6 col-lg-6 ">
                    <video class="embed-responsive-item" autoplay muted loop poster="../../assets/img/intro-clip.jpg">
                        <source src="" data-src="../../assets/img/intro-clip.mp4" type="video/mp4">
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
                宇宙線探索ワークショップ　探Qの特徴
            </h1>
            <div class="row">

                <div class="col-md-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="../../assets/img/tanq-event-image1.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">宇宙線検出器を使う</h2>
                            <hr>
                            <p>　中高生でも簡単に作ることができるような検出器を開発し、全国の中高生へ配布を行います。また、全国の中高生に活動を知ってもらうために、オンラインや各地方で体験会を行っています。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="../../assets/img/tanq-event-image2.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">研究者と共同研究する</h2>
                            <hr>
                            <p>Slackを用いたオンラインコミュニティとZOOMを用いたビデオセッションを活用することで、全国のどこからでも中高生が研究者と一緒に探究活動ができます。

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="../../assets/img/tanq-event-image3.jpg">
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
    <section class="page-section" id="schedule">
        <div class="container section">
            <h1 class="section-title">
                スケジュール
            </h1>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    16:00 - 16:20
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
                    16:20 - 16:30
                </div>
                <div class="col-md-9">
                    <h3>自宅で検証、高度による宇宙線到来頻度の違い</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">豊島岡女子学園</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 喜多亮介</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">中3 新井詩乃</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">中3 末廣和夏</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">中3 森本結衣</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/3b179a3cdb204f88b0f3f8081f56f39f'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>
                </div>

            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    16:35 - 16:45
                </div>
                <div class="col-md-9">
                    <h3>サイクロトロン加速器施設での陽子エネルギー測定</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">東桜学館</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">東北大2年 河野理夏子</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 尾崎杏華</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 松浦侑花</span>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_box</span> <span class="margin">東大1年 上倉寛紀</span>
                        <span class="material-icons icon">account_box</span> <span class="margin">東大2年 松田青創楽</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/103969099cda4ca4a3613f752f4fb0c8'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>
                </div>
            </div>

            <div class="schedule row">

                <div class="col-md-3 schedule-time">
                    16:50 - 17:00
                </div>
                <div class="col-md-9">
                    <h3>~Cancer Fighers~ ゲルを用いてドイツDESYの大型加速器で電子ビームの線量分布を測定する</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">Japan, Argentina</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">Waseda University Honjyo Senior High School、Huechulafquen</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">Tomohiro Hayamizu</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">
                            Juan Francisco Wehinger
                            </span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">Lucio Daniel Martínez</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">Sofía Ezcurra</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">Asahi Shiozaki</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">Kisuke Sakuma</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">Shion Soga</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">Wakana Yanagimoto</span>
                    </p>
                    <button onclick="location.href='../../material/bl4s-proposal2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> Research Proposal</button>
                </div>

            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    17:05 - 17:15
                </div>
                <div class="col-md-9">
                    <h3>The Relationship between Zenith Angle Dependence of Cosmic Ray and Geomagnetic Activity
                    </h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_city</span> <span class="margin">仙台第一高等学校</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 渡邉　葵</span>
                    </p>
                    <button onclick="location.href='./material/sendai-daiichi-poster2020.pdf'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span>研究ポスター</button>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    17:20 - 17:30
                </div>
                <div class="col-md-9">
                    <h3>雲および太陽活動と宇宙線到来頻度の関係</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">山形県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">山形東高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">斎藤隆太</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 早坂大弥</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 後藤くるみ</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 倉嶋太郎</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 田中悠太郎</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 上林大悟</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/bf88a3014fd74df684f9d87e1d64b19c'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>

                </div>

            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    17:35 - 17:45
                </div>
                <div class="col-md-9">
                    <h3>宇宙線中性子を測定して積雪量を測る</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">東京都</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">広尾学園</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">河野理夏子</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 生嶋慶</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/78a75b046b0145e4afee3ce5ed285e0a'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>

                </div>
            </div>
            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    17:50 - 18:00
                </div>
                <div class="col-md-9">
                    <h3>宇宙線による水中でのチェレンコフ光を検出する</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">埼玉県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">丸田京華</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 塩野紗彩</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/bbeacc12ac4d45f58617955951ff1200'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>

                </div>

            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:05 - 18:15
                </div>
                <div class="col-md-9">
                    <h3>CMS実験のデータを解析してヒッグス粒子を探索する</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_city</span> <span class="margin">早稲田大学本庄高等学院、東桜学館</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">喜多亮介</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高1 尾崎杏華</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 柳本和奏</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 塩崎朝陽</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高3 佐久間紀丞</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/CMS-bdb1aa96574d48b4823bae6f80af1bb7'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>
                </div>
            </div>

            <div class="schedule row">
                <div class="col-md-3 schedule-time">
                    18:20 - 18:35
                </div>
                <div class="col-md-9">
                    <h3>宇宙線による人体への被ばくの影響を推定する</h3>
                    <p class="schedule-description">
                        <span class="material-icons icon">location_on</span><span class="margin">茨城県</span>
                        <span class="material-icons icon">location_city</span> <span class="margin">江戸川学園取手高等学校</span>
                        <span class="material-icons icon">supervisor_account</span> <span class="margin">喜多亮介</span>
                        <br>
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 高槌満帆</span>
                        <span class="material-icons icon">account_circle</span> <span class="margin">高2 小暮仁保</span>
                    </p>
                    <button onclick="location.href='https://www.notion.so/kaduo/6704e2ed3acf45b5a11139669695dafb'" class="btn text-white btn-sm rounded"><span class="material-icons icon">article</span> 研究概要　下書き</button>
                </div>
            </div>


            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    18:30 - 18:40
                </div>
                <div class="col-md-9">
                    <h3>KEKで開発中、国産簡易宇宙線検出器「OSECHI」の紹介</h3>
                    <p class="schedule-description">
                    </p>
                    <p class="schedule-speaker">
                        <span class="material-icons icon">account_circle</span> <span class="margin">KEK　上野一樹</span>
                    </p>
                </div>
            </div>
            <div class="schedule row">
                <div class="col-sm-6 col-md-3 schedule-time">
                    18:40 - 19:00
                </div>
                <div class="col-md-9">
                    <h3>全体交流</h3>
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
                <img src="../../assets/img/participants-map.png">
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
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/kono.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">河野理夏子</h2>
                        <hr>
                        <p>東北大学　理学部物理系2年</p>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/maruta.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">丸田京華</h2>
                        <hr>
                        <p>東北大学　工学部機械知能2年</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/kita.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">喜多亮介</h2>
                        <hr>
                        <p>東北大学　理学部物理系2年</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="../../assets/img/saito.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">齋藤隆太</h2>
                        <hr>
                        <p>東北大学　理学部物理系2年</p>
                    </div>
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
                    <img class="rounded-circle" src="../../assets/img/self-photo.jpg">
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
    <!-- ACCOMPLISHMENT -->
    <section class="page-section" id="accomplishment">
        <div class="container">
            <h1 class="section-title">
                過去の探究成果
            </h1>


            <table class="table table-striped">
                <tr>
                    <th>学校名</th>
                    <th>名前</th>
                    <th>資料</th>
                </tr>
                <tr>
                    <td>早稲田大学本庄高等学院</td>
                    <td>木村友哉</td>
                    <td><a href="../../material/kimura-thesis2019.pdf">【卒業論文】超高エネルギー宇宙線探索に向けた学校内での同時測定</a></td>
                </tr>
                <tr>
                    <td>早稲田大学本庄高等学院</td>
                    <td>宮本航歩</td>
                    <td><a href="../../material/miyamoto-thesis2019.pdf">【卒業論文】CORSIKAを用いた超高エネルギー宇宙線の同時測定範囲の推定</a></td>
                </tr>
                <tr>
                    <td>広尾学園</td>
                    <td>伊勢千沙子</td>
                    <td><a href="../../material/ise-slide-2019.pdf">【文化祭発表】広範囲同時測定による超高エネルギー宇宙線探索
                        </a></td>
                </tr>
                <tr>
                    <td>仙台第一高等学校</td>
                    <td></td>
                    <td><a href="../../material/sendai-daiichi-poster2020.pdf">【研究ポスター】The Relationship between Zenith Angle Dependence of Cosmic Ray and
                        Geomagnetic Activity
                        </a></td>
                </tr>
                <tr>
                    <td>広尾学園・早稲田大学本庄高等学院</td>
                    <td></td>
                    <td><a href="../../material/nakatani-2019-poster-lite.pdf">【中谷財団成果報告会ポスター】高校・大学連携による宇宙線計測活動
                        </a></td>
                </tr>

            </table>
        </div>

    </section>




    <hr>

    <!-- HISTORY -->
    <section class="page-section " id="history">
        <div class="container">
            <h1 class="section-title ">
                過去の活動
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
                                <img class="rounded" src="../../assets/img/iida-20191005.jpg">
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
                            <span class="username"><span class="material-icons icon">event_note</span> 科宇宙線探索ワークショップ探Q 仙台</span>
                        </div>
                        <div class="timeline-content">
                            <div class="container-img">
                                <img class="rounded" src="../../assets/img/nd-map-20200112.jpg">
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
                            <span class="username"><span class="material-icons icon">event_note</span> 科宇宙線探索ワークショップ探Q 東京</span>
                        </div>
                        <div class="timeline-content">
                            <div class="container-img">
                                <img class="rounded" src="../../assets/img/nd-map-20200113.jpg">
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


            </ul>
        </div>
    </section>
    <!-- FOOTER -->
    <footer class="footer shadow ">
        <div class="footer-meta ">
            <div class="container text-center ">

                <span class="copyright " data-animation="fadeInUp " data-animation-delay="100 ">&copy;
                    探Q &#8212; 2019-2020 All Rights Reserved.</span>
            </div>
        </div>
    </footer>
    <?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>