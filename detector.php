<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/header.php");
?>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header>
      <div class="head-bg head-bg-fluid">
        <div class="masthead">
          <div
            class="head-bg-img"
            style="
              background-image: url('../../assets/img/title-background-detector.jpg');
            "
          ></div>
          <div class="container h-100">
            <div class="h-100 align-items-center">
              <div class="head-title text-center text-title">
                宇宙線・検出器について
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- 宇宙線 -->
    <section class="page-section" id="intro">
      <div class="container section">
        <div class="pull-left">
          <h2 class="section-title">宇宙線</h2>
        </div>
        <div class="container">
          <p>
            　　宇宙線は太陽や太陽系外等様々なところから地球にやってきます。宇宙線は大気中の原子と相互作用してそのエネルギ
            ーから複数の粒子が生成され、シャワーのように大量の粒子の形となり地表に降り注ぎます。地表で観測される宇宙線の
            ほとんどはミューオンで、およそ手のひらの大きさに１秒間に１つ通過するぐらいの数が光の速さで飛んできています。
          </p>
          <div class="row">
            <div class="container-img w-75 col-md-9 mx-auto">
              <img src="./assets/img/cosmicray-introduction.png" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />

    <!-- 宇宙線 -->
    <section class="page-section" id="intro">
      <div class="container section">
        <div class="pull-left">
          <h2 class="section-title">宇宙線検出器</h2>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5 col-lg-5">
            <div class="pull-left">
              <h2 class="section-title">検出器の仕組み</h2>
            </div>
            <div class="container">
              <p>
                宇宙線検出器では、宇宙線によって発光する物質が含まれたシンチレーターを用いています。宇宙線によってシンチレーター内で起こった発光は、半導体等によって電流に変換されます。この電気信号を増幅・処理することでどのような
                タイミングでどんな宇宙線が来たかを調べることができます。
              </p>
              <br /><br />
            </div>
          </div>
          <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="container-img w-100 col-md-12 mx-auto">
              <img src="./assets/img/detector-introduction.png" />
            </div>
          </div>
          <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
            <div class="ratio ratio-16x9">
              <video
                class="ratio-item"
                autoplay
                muted
                loop
                poster="./assets/img/intro-clip.jpg"
              >
                <source
                  src=""
                  data-src="./assets/img/detector-poweron.mp4"
                  type="video/mp4"
                />
              </video>
            </div>
          </div>
          <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="pull-left">
              <h2 class="section-title">検出器の使い方</h2>
            </div>
            <div class="container">
              <p>
                検出器は一般的なWindows
                PCにUSBで接続するうことができ、自動的にデータ収集が行われます。２つの検出器を組み合わせることで同時に２つの検出器を通過する宇宙線を検出したり、内蔵された温度・湿度・圧力センサーを組み合わせて様々な探究テーマに使用することができます。
              </p>
              <br /><br />
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr />
    <!-- 宇宙線 -->
    <section class="page-section" id="intro">
      <div class="container section">
        <div class="pull-left">
          <h2 class="section-title">解析</h2>
        </div>
        <div class="container">
          <p>
            宇宙線の測定で得られるデータ量は膨大になるため、それぞれの目的に合わせた解析コードを自分たちでプログラミングして解析を行うことになります。難しそうに聞こえますが、今まで全くプログラミングをしたことがない中高生でも２時間程度の解析入門に参加することで、誰でもできるようになります。逆に言えば、宇宙線の探究を行いながらプログラミング、ビックデータ解析、統計処理といった様々な科学探究に必要なスキルを習得することができます。
          </p>
          <div class="row">
            <div class="container-img col-md-6 mx-auto">
              <img src="./assets/img/application-introduction.jpg" />
            </div>
            <div class="container-img col-md-6 mx-auto">
              <img src="./assets/img/colaboratory-introduction.png" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr />
    <!-- 宇宙線 -->
    <section class="page-section" id="intro">
      <div class="container section">
        <div class="pull-left">
          <h2 class="section-title">宇宙線検出器に興味のある方へ</h2>
        </div>
        <div class="container">
          <p>
            宇宙線探究活動を始めませんか。検出器は東北大学を中心とした大学生によって製作され、探究活動に興味を持つ中高生を中心に配布活動を行っています。興味のある方は<a
              href="index.html#contact"
              >こちら</a
            >に連絡ください。
          </p>
          <div class="row">
            <div class="container-img col-md-6 mx-auto">
              <img src="./assets/img/develop-introduction1.jpg" />
            </div>
            <div class="container-img col-md-6 mx-auto">
              <img src="./assets/img/develop-introduction2.jpg" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>