<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/header.php");
?>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header>
        <div class="head-bg head-bg-fluid">
            <div class="masthead">
                <div class="head-bg-img" style="background-image: url('../../assets/img/title-background4.jpg')"></div>
                <div class="container h-100">
                    <div class="h-100 align-items-center">
                        <div class="head-title text-center text-title"> 全国の研究者や中高生との交流 </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Slack -->
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="pull-left">
                <h2 class="section-title">
                    Slackでのチャット交流
                </h2>
            </div>
            <div class="container">
                <p>　　私たちは宇宙線探究を行っている中高生、サポートを行う大学生メンター、アドバイスをする研究者をつなぐ国内最大の宇宙線探究ネットワークをチャットツールSlackを使って形成しています。Slack上では１５０人以上が参加して、様々な研究グループが活発に議論を行い、時には全国の異なる学校同士がデータを共有したり研究者からアドバイスをもらいながら研究を進めています。
                </p>
                <div class="row">
                    <div class="container-img w-75 col-md-9 mx-auto">
                        <img src="./assets/img/slack-introduction.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- ZOOM -->
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="pull-left">
                <h2 class="section-title">
                    ZOOMによるオンラインメンタリング
                </h2>
            </div>
            <div class="container">
                <p>　宇宙線探究を本格的に行っていくためには専門的なサポートが欠かせません。各宇宙線探究グループにはたいして大学生のメンターと研究者がそれぞれ１人ついて、一緒に研究活動を並走します。Slackでのやりとりに加えて隔週のZOOMによるオンラインビデオメンタリングを行い、研究の進捗を聞きながら一緒に方針を議論し研究を加速させます。例えばどのような解析をすべきか、どういったデータをとるべきか、研究論文の添削など様々な形でメンタリングを活用することができます。
                </p>
                <div class="row">
                    <div class="container-img w-75 col-md-9 mx-auto">
                        <img src="./assets/img/zoom-introduction.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>