<?php
require_once (dirname(__FILE__) . '/../cmn_assets/inc/config.php');
require_once (INCLUDE_PATH . '/parts/campaign/base/index.php');
$page_title = "中標津町の注文住宅なら 北海道着工数No1ハウスメーカーの【ロゴスホーム】";
$page_description = "北海道中標津町でローコスト注⽂住宅を建てるならハウスメーカーのロゴスホームにお任せ下さい。おかげさまで北海道住宅着⼯数No.1「創エネ」「省エネ」新築住宅・⾒学会のイベント随時開催中。お気軽にお問い合わせください。";
$pageUrl = 'https://www.logoshome.jp/nakashibetsu/';

$localCSS = array(
  './assets/css/style.css?230316',
  './assets/css/add.css?240307',
);
$localJS = array(
  // './assets/js/app.js',
  // './assets/js/form.js',
);

/**
 * 例)
 * pcの画像URL出力
 * echo $cpBannerA->getUrl();
 * 
 * spの画像出力
 * echo $cpBannerA->getSpUrl();
 * 
 * alt出力
 * echo $cpBannerA->getAlt();
 * 
 * 普通のキャンペーン出力
 * echo $cp->getBaseHtml();
 * 
 * アコーディオンのキャンペーン出力
 * echo $cp->getAccordionHtml();
 *----------------------------------*/

/**
 * このページだけキャンペーン一括変更
 * $cpBannerA->setUrl('pcの画像', 'spの画像');
 * pcだけの場合
 * $cpBannerA->setUrl('pcの画像', '');
 * でも可
 *----------------------------------*/

//$cpBannerA->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerB->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerC->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerD->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerE->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');

/**
 * new CpHtml('pc画像', 'sp画像', 'キャンペーン注意事項', 'キャンペーン背景色');
 *----------------------------------*/

//$cp = new CpHtml($cpBannerA->getUrl(), $cpBannerA->getSpUrl(), $cpBodyText, '#0eb0aa');

?>
<?php require_once (INCLUDE_PATH . '/header.php'); ?>

<body>
  <?php require_once (INCLUDE_PATH . '/body-first.php'); ?>

  <!-- header -->
  <?php require_once (INCLUDE_PATH . '/header-nav.php'); ?>
  <!-- /header -->

  <!-- main -->
  <main class="l-main backdrop" id="a-main">
    <div class="l-fixed-banner_left js-fixed-banner">
      <ul class="l-fixed-banner_left_list">
        <li class="l-fixed-banner_left_item"><a class="l-fixed-banner_left_link l-fixed-banner_left_link-model-menu" href="#a-model-menu" style="background: #edd465;">公開中<br class="pc">一覧<img src="./assets/images/common/map_icon.png" alt=""></a></li>
      </ul>
    </div>

    <div class="l-fixed-banner_right js-fixed-banner">
      <ul class="l-fixed-banner_right_list">
        <li class="l-fixed-banner_right_item l-fixed-banner_right_item-catalog u-mb-20-pc">
          <a class="l-fixed-banner_right_item-catalog_link" href="./catalog/">
            <span class="p-fix-banner_item_pop">
              <picture>
                <source media="(max-width: 750px)" srcset="../cmn_assets/images/banner/bn_catalog/popup01_sp.png" />
                <img src="../cmn_assets/images/banner/bn_catalog/popup01_pc.png" class="u-w-100 js-clear-cache" alt="WEBですぐに見れます">
              </picture>
            </span>
            資料請求
          </a>
        </li>
        <li class="l-fixed-banner_right_item l-fixed-banner_right_item-reserve u-mb-20-pc">
          <a class="l-fixed-banner_right_item-reserve_link" href="./reserve/">
            <span class="p-fix-banner_item_pop">
              <picture>
                <source media="(max-width: 750px)" srcset="<?= $cpBannerPopup->getSpUrl(); ?>" />
                <img src="<?= $cpBannerPopup->getUrl(); ?>" class="u-w-100" alt="<?= $cpBannerPopup->getAlt(); ?>">
              </picture>
            </span>
            見学予約
          </a>
        </li>
        <li class="l-fixed-banner_right_item l-fixed-banner_right_item-pagetop"><a class="l-fixed-banner_right_link-top" href="#a-main"></a></li>
      </ul>
      <?php /* require_once(INCLUDE_PATH . '/parts/tigvideo-sp.php'); */ ?>
    </div>
    <?php /* require_once(INCLUDE_PATH . '/parts/tigvideo-pc.php'); */ ?>

    <!-- mv -->
    <div id="mv" class="p-mv">
      <div class="p-mv-top">
        <div class="mv-p-brand-popup_top_bg">
          <ul class="mv-bg-slider js-mv-bg-slider">
            <li><img class="pc" src="./assets/images/mv/mv_bg01.jpg" width="1920" height="880" alt="" /><img class="sp" src="./assets/images/mv/mv_bg01_sp.jpg" width="750" height="1080" alt="" /></li>
            <li><img class="pc" data-lazy="./assets/images/mv/mv_bg02.jpg" width="1920" height="880" alt="" /><img class="sp" src="./assets/images/mv/mv_bg02_sp.jpg" width="750" height="1080" alt="" /></li>
            <li><img class="pc" data-lazy="./assets/images/mv/mv_bg03.jpg" width="1920" height="880" alt="" /><img class="sp" data-lazy="./assets/images/mv/mv_bg03_sp.jpg" width="750" height="1080" alt="" /></li>
          </ul>
        </div>
        <div class="p-mv-top_inner">
          <h1 class="p-mv_main">
            <picture>
              <source media="(max-width: 750px)" srcset="./assets/images/mv/mv_main01_sp.png" />
              <img src="./assets/images/mv/mv_main01.png" alt="中標津町の注文住宅">
            </picture>
          </h1>
          <div class="p-mv-no1">
            <div class="p-mv-no1_bg">
              <p class="p-mv-no1_sub">おかげさまで<br>北海道住宅着工数</p>
              <p class="p-mv-no1_main">No.<span>1</span></p>
            </div>
            <p class="p-mv-no1_notice">
              ※株式会社北海道住宅通信社「北海道住宅データバンク」調べ
              ※株式会社ロゴスホーム、豊栄建設株式会社 「全道」戸建注文住宅の実績を合算。(2020年1月〜12月)
              ※株式会社ロゴスホーム、豊栄建設株式会社は株式会社ロゴスホールディングスのグループ会社です。
            </p>
          </div>
        </div>
        <div class="p-mv_banner-dgift">
          <img class="pc js-clear-cache" src="<?= $cpBannerD->getUrl(); ?>" alt="<?= $cpBannerD->getAlt(); ?>">
          <img class="sp js-clear-cache" src="<?= $cpBannerC->getUrl(); ?>" alt="<?= $cpBannerC->getAlt(); ?>">
        </div>
      </div>
    </div>
    <!-- /mv -->
    <?= $cp->getAccordionHtml() ?>

    <!-- banner -->
    <?php require_once (INCLUDE_PATH . '/parts/top-banner.php'); ?>
    <!-- /banner -->

    <!-- service -->
    <section class="p-service">
      <div class="p-service_inner">
        <p>中標津の注文住宅、新築一戸建てはロゴスホームにお任せください。<br>
          北海道の寒い冬でも暖かく過ごせる住宅性能に加え、月々の負担を軽減する省エネ住宅を、北海道で働く誰もが手の届く価格設定にこだわってご提供しています。<br>
          オープンハウスやモデルハウスは、吹き抜け・インナーガレージ・平屋などお客様の趣向に沿った等身大の住宅です。ぜひご覧ください。</p>
      </div>
    </section>
    <!-- /service -->

    <!-- popularList -->
    <div class="p-popular">
      <div class="p-popular-inner">
        <div class="p-popular-title">
          <h2 class="c-section-title-text">中標津エリアで人気の<br>モデルハウスTOP3</h2>
          <p class="c-section-subtitle-text">POPULAR MODEL HOUSE</p>
        </div>
        <div class="p-popular-slider">
          <ul class="p-popular-slider_inner js-popular-slider">


            <li class="p-popular-item js-popular-item">
              <a class="p-popular-item_link u-display-block popup-img-anima" href="#a-lh">
                <span class="icon p-model-menu_list-icon p-model-menu_list-icon_no1 -hokkaido popup-img-anima"><img src="../cmn_assets/images/model-icon/icon_no1.png" alt="人気No.1"></span>
                <img src="./assets/images/model-list/lh/link-tochi.png" alt="中標津町東1条南10丁目">
                <p class="p-model-menu_list_more">物件を見てみる</p>
              </a>
            </li>

            <!-- <li class="p-popular-item js-popular-item">
              <a class="p-popular-item_link u-display-block popup-img-anima" href="#a-lh">
                <img src="./assets/images/model-list/lh/link-tochi.png" alt="中標津町東1条南10丁目">
                <p class="p-model-menu_list_more">物件を見てみる</p>
              </a>
            </li> -->

            <li class="p-popular-item js-popular-item"><a class="p-popular-item_link u-display-block"><img src="../cmn_assets/images/common/no_img-half.png" alt="COMING SOON"></a></li>
            <li class="p-popular-item js-popular-item"><a class="p-popular-item_link u-display-block"><img src="../cmn_assets/images/common/no_img-half.png" alt="COMING SOON"></a></li>
          </ul>
        </div>
        <div class="p-popular-btn p-link-box_btn p-link-box-01_syosailink"><a class="p-popular-btn_link" href="#a-model-menu">物件をすべて見る</a></div>
      </div>
    </div>
    <!-- /popularList -->

    <!-- model-menu -->
    <article class="p-model-menu" id="a-model-menu">
      <section class="p-model-menu_inner">
        <div class="p-model-menu_title-l">
          <h2 class="c-section-title-text">中標津の新着モデルルーム</h2>
          <p class="c-section-subtitle-text">MODEL ROOM</p>
        </div>
        <h2 class="p-model-menu_title"><img src="./assets/images/model-menu/model_menu_title.png" alt="中標津町エリア NEW OPEN"></h2>
        <ul class="p-model-menu_list">
          <!-- <li class="p-model-menu_list_group-item p-model-menu_list_group-item-3 p-model-menu_list_group-item-ir js-fadein-item u-mb-40">
            <p class="p-model-menu_list_group-item_head p-model-menu_list_group-item_head-ir">
              <span class="p-model-menu_list_group-item_title p-model-menu_list_group-item_title-ir"><small>お隣同士</small>＼2棟まとめて見学できます！／</span>
            </p>
            <ul class="p-model-menu_list_group-item_inner">
              <li class="p-model-menu_list_item js-fadein-item u-mb-60">
                <a class="p-model-menu_list_link popup-img-anima" href="#a-house16">
                  <span class="icon p-model-menu_list-icon p-model-menu_list-icon_no1 -hokkaido popup-img-anima"><img src="../cmn_assets/images/model-icon/icon_no1.png" alt="人気No.1"></span>
                  <img src="./assets/images/model-list/house16/link.png?a" alt="中標津町東10条南9丁目②">
                  <p class="p-model-menu_list_more">物件を見てみる</p>
                </a>
              </li>
              <li class="p-model-menu_list_item js-fadein-item u-mb-60">
                <a class="p-model-menu_list_link popup-img-anima" href="#a-house10">
                  <img src="./assets/images/model-list/house10/link.png" alt="中標津町東10条南9丁目①">
                  <p class="p-model-menu_list_more">物件を見てみる</p>
                </a>
              </li>
            </ul>
          </li>-->

          <li class="p-model-menu_list_item js-fadein-item u-mb-60">
            <a class="p-model-menu_list_link popup-img-anima" href="#a-house1040">
              <img src="./assets/images/model-list/house1040/link.png" alt="根室市駒場町1丁目">
              <p class="p-model-menu_list_more">物件を見てみる</p>
            </a>
          </li>

          <li class="p-model-menu_list_item js-fadein-item u-mb-60">
            <a class="p-model-menu_list_link popup-img-anima" href="#a-house1013">
              <img src="./assets/images/model-list/house1013/link.png" alt="中標津町東10条南9丁目">
              <p class="p-model-menu_list_more">物件を見てみる</p>
            </a>
          </li>

          <li class="p-model-menu_list_item js-fadein-item u-mb-60">
            <a class="p-model-menu_list_link popup-img-anima" href="#a-house01">
              <img src="./assets/images/model-list/house01/link.png" alt="標津郡中標津町東13条南3丁目">
              <p class="p-model-menu_list_more">物件を見てみる</p>
            </a>
          </li>

          <li class="p-model-menu_list_item js-fadein-item u-mb-60">
            <a class="p-model-menu_list_link popup-img-anima" href="#a-lh">
              <span class="icon p-model-menu_list-icon p-model-menu_list-icon_no1 -hokkaido popup-img-anima"><img src="../cmn_assets/images/model-icon/icon_no1.png" alt="人気No.1"></span>
              <img src="./assets/images/model-list/lh/link-tochi.png" alt="中標津町東1条南10丁目">
              <p class="p-model-menu_list_more">物件を見てみる</p>
            </a>
          </li>
        </ul>
      </section>
    </article>
    <!-- /model-menu -->
    <!-- model-list -->
    <article id="a-model-list" class="p-model-list">

      <!-- house1040 -->
      <section class="p-model" id="a-house1040">
        <div class="p-model_inner p-model-bg05 p-model-logos">
          <p class="p-model_type-text"><a class="c-difference_link-icon u-mr-10" href="#a-difference"><img src="./assets/images/common/chumon_icon.png" width="112" height="162" alt="注文住宅"></a><span>OPEN HOUSE</span></p>
          <!-- <p class="p-model_type-text"><a class="c-difference_link-icon u-mr-10" href="#a-difference"><img src="./assets/images/common/semi_icon.png" width="112" height="137" alt="セミオーダー住宅"></a><span>MODEL HOUSE</span></p> -->
          <div class="p-model_box-01 p-model_flexbox u-flex-column-reverse-sp u-mb-20-pc">
            <div class="p-model_flexbox-left u-text-align-center">
            <div class="p-model_logo p-model_logo_oh-2day">
                <p class="p-model_logo_date">
                  <span class="p-model_logo_month">7</span>
                  <span class="p-model_logo_day">20<span class="p-model_logo_dayofweek">SAT</span></span>
                  <span class="p-model_logo_dot">・</span>
                  <span class="p-model_logo_day">21<span class="p-model_logo_dayofweek">SUN</span></span>
                </p>
              </div>
              <h3 class="p-model_box-01_title u-mb-40">OPEN HOUSE<br>根室市駒場町1丁目<br>オーナー様邸 完成見学会</h3>
              <h4 class="p-model_box-01_address u-mb-20">根室市駒場町1丁目36番91</h4>
              <p class="p-model_box-01_text-border u-mb-20">自由設計を楽しむ家</p>
              <!-- <p class="p-model_box-01_subtitle u-font-size-20px-pc u-text-align-center u-mb-20"></p>
              <p class="p-model_box-01_text u-text-align-center"></p> -->
            </div>
            <div class="p-model_flexbox-right u-pt-6per">
              <p class="img"><img class="js-fadein-item" src="./assets/images/model-list/house1040/top.png" alt=""></p>
              <!-- p-link-box-01 1/3 -->
              <div class="p-link-box-01 sp">
                <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/32228/" target="_blank">もっと詳細を見る</a>
                <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=32228" target="_blank">見学ご予約はこちら</a>
              </div>
            </div>
          </div>
          <!-- p-link-box-01 2/3 -->
          <div class="p-link-box-01 pc">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/32228/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=32228" target="_blank">見学ご予約はこちら</a>
          </div>
          <ul class="p-model_pickup js-model-slider-sp">
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1040/pick01.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">ゆったりくつろげる<br>
                  20帖の広々LDK</p>
                <p class="p-model_pickup-item_text">ダイニングとリビングの空間を分けながらも、キッチンからは両方に目が届き、家族とのコミュニケーションがとりやすいつくりとなっています。<br>
                  キッチン横にはパントリーがあり、食材のストックはもちろん、冷凍庫や使用頻度の低い家電なども収納できて大変便利です。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1040/pick02.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">トレンドの<br>
                  ファミリークローゼット</p>
                <p class="p-model_pickup-item_text">ユーティリティーとファミリークローゼットがつながっていて、入浴後や朝の身支度もスムーズに行えます。洗濯物をすぐにクローゼットに収納できるので片付けが楽ちん♪忙しい家事が時短化します。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1040/pick03.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">家中スッキリ整う<br>
                  充実の収納力！</p>
                <p class="p-model_pickup-item_text">シューズクローゼットや各居室のクローゼットなど、適所に必要な量の収納が充実しています。2F主寝室のウォークインクローゼットは3.4帖と大容量！衣類はもちろん、季節家電など普段使わないものまでたっぷり収納でき、家中スッキリ片付きます。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1040/pick04.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">お手入れ簡単♪<br>
                  ホーローキッチン</p>
                <p class="p-model_pickup-item_text">汚れやすいキャビネット底板やレンジフードのお手入れが簡単なタカラスタンダードのホーローキッチンを採用しています。<br>
                  ロゴスホームのキッチンは、たくさんのメーカーよりお選びいただけます♪</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1040/pick05.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">快適な暮らしに<br>
                  太陽光発電と高性能設備</p>
                <p class="p-model_pickup-item_text">約7kWのソーラーパネルを搭載し、日々の光熱費を削減して家計にやさしいお家です。冬の暖房は灯油式を採用していて寒さにも安心のつくりです。<br>
                  付加断熱や第一種換気など、家そのものを高性能にすることでより快適な暮らしを実現できます。</p>
              </div>
            </li>
          </ul>
          <div class="p-model_gallery">
            <ul class="p-model_gallery-list">
              <li class="p-model_gallery-list_item p-model_gallery-list_la_1 js-fadein-item"><img src="./assets/images/model-list/house1040/ga01.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_2 js-fadein-item"><img src="./assets/images/model-list/house1040/ga02.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1040/ga03.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1040/ga04.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_5 js-fadein-item"><img src="./assets/images/model-list/house1040/ga05.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1040/ga06.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1040/ga07.jpg?a" alt=""></li>
            </ul>
            <p class="p-model_gallery-notice u-text-align-center">※設備仕様のイメージ写真です。実際の建物とは異なります。</p>
          </div>
          <!-- <div class="p-floor">
            <h3 class="p-floor_title u-mb-60">FLOOR PLAN</h3>
            <div class="p-floor_container">
              <div class="p-floor_box p-floor_box_bigger"><img src="./assets/images/model-list/house1013/md01.jpg" alt="1階見取り図"></div>
              <div class="p-floor_box p-floor_box_bigger"><img src="./assets/images/model-list/house1013/md02.jpg" alt="2階見取り図"></div>
            </div>
          </div> -->
          <div class="p-model_details p-model_flexbox">
            <div class="p-model_details_flexbox-left">
              <div class="c-bn_amazon_present"><img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>"></div>
              <h4 class="p-model_details_title u-mb-20">根室市駒場町1丁目<br>オーナー様邸</h4>
              <p class="p-model_details_main u-mb-20">
                <strong>住所</strong>：根室市駒場町1丁目36番91<br>
                <strong>公開</strong>：7/20(土)・21(日) 2日間限定公開！10:00～17:00<br>
                <strong>予約</strong>：<?= $yoyakuText ?><br>
                <strong>担当店舗</strong>： <a href="#LH_NAKASHIBETSU">ロゴスホーム中標津</a><br>
              </p>
              <a href="tel:0153-73-1726" class="p-model_details_tel_box u-mb-20">
                <img src="/cmn_assets/images/common/icon_tel_white02.png">
                <span class="p-model_details_tel_text">0153-73-1726</span>
              </a>
              <!-- <p class="p-model_details_data">物件概要
                ■所在地:標津郡中標津町東10条南9丁目1-13
                ■交通:阿寒バス「すずらん団地」停まで徒3分
                ■学区:中標津東小学校（徒歩4分／約290m）・広陵中学校（徒歩5分／約350m）
                ■地目:宅地
                ■用途地域:第2種中高層住居専用地域
                ■建ぺい率:60％
                ■容積率:200％
                ■道路:北東側公道8mに12.5ｍ接道
                ■間取り:4LDK
                ■土地面積:241.50㎡(73.05坪)
                ■建物面積:1F: 56.31㎡(17.03坪)
                2F: 51.34㎡(15.53坪)
                ■延床: 107.65㎡(32.56坪)
                ■完成時期:2024年7月
                ■入居予定:要相談
                ■建物状況:新築
                ■構造:木造2階建
                ■工法:枠組み壁工法(2×4工法)
                ■建築確認番号:第SKK20240247号
                ■電力:北海道電力
                ■水道:公営水道
                ■ガス:お問い合わせください
                ■取引態様:売主
                ■権利:所有権
                ■都市計画:非線引き区域
                ■駐車場:3台分
                ■設備:LDK 15帖以上/ウォークインクローゼット/シューズクローゼット/システムキッチン/IHクッキングヒーター/食器洗い乾燥機/浄水器/浴室1坪以上/オートバス/シャワー付洗面化粧台/温水洗浄便座/節水型トイレ/複層ガラス/オール電化/TVモニタ付きインターホン/省エネ給湯器/エコキュート/ヒートポンプ冷暖房エアコン/電気パネルヒーター
              </p>
              <div class="p-model_details-price u-mb-20">
                <p class="p-model_details-price_head">- PRICE- </p>
                <p class="p-model_details-price_catch">建物+土地</p>
                <p class="p-model_details-price_num"><span>3,480</span>万円(税込)</p>
                <p class="p-model_details-price_data-list">
                  ＋諸費用70万円（登記・火災保険・融資手数料等）<br><br>
                  自己資金：10万円　住宅ローン：3,540万円<br>月々84,255円<br>■お支払い例：A　<br>北洋銀行：0.68％、3年固定金利、40年返済<br>
                  ①ボーナス無し：84,255円/12回<br>
                  ②ボーナス有り：67,594円/12回・100,087円/2回<br>
                  <br>
                  ■お支払い例：B　<br>北洋銀行：0.68％、3年固定金利、35年返済<br>
                  ①ボーナス無し：94,737円/12回<br>
                  ②ボーナス有り：76,004円/12回・112,541円/2回
                </p>
              </div> -->
            </div>
            <div class="p-model_details_flexbox-right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2901.951956168853!2d145.5926944!3d43.3361944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDIwJzEwLjMiTiAxNDXCsDM1JzMzLjciRQ!5e0!3m2!1sja!2sjp!4v1719551919084!5m2!1sja!2sjp"></iframe>
              <div class="c-map-link"><a href="https://maps.app.goo.gl/XCi4CxnRrHqd5VSx5" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
            </div>
          </div>
          <!-- p-link-box-01 3/3 -->
          <div class="p-link-box-01">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/32228/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=32228" target="_blank" rel="noopener">見学ご予約はこちら</a>
          </div>
        </div>
      </section>
      <!-- /house1040 -->

      <!-- house1013 -->
      <section class="p-model" id="a-house1013">
        <div class="p-model_inner p-model-bg05 p-model-logos">
          <p class="p-model_type-text"><a class="c-difference_link-icon u-mr-10" href="#a-difference"><img src="./assets/images/common/chumon_icon.png" width="112" height="162" alt="注文住宅"></a><span>MODEL HOUSE</span></p>
          <!-- <p class="p-model_type-text"><a class="c-difference_link-icon u-mr-10" href="#a-difference"><img src="./assets/images/common/semi_icon.png" width="112" height="137" alt="セミオーダー住宅"></a><span>MODEL HOUSE</span></p> -->
          <div class="p-model_box-01 p-model_flexbox u-flex-column-reverse-sp u-mb-20-pc">
            <div class="p-model_flexbox-left u-text-align-center">
              <div class="p-model_logo p-model_logo_mh">
                <p class="p-model_logo_date">
                  <span class="p-model_logo_month">7</span>
                  <span class="p-model_logo_day">20<span class="p-model_logo_dayofweek">SAT</span></span>
                </p>
              </div>
              <h3 class="p-model_box-01_title u-mb-40">MODEL HOUSE<br>中標津町東10条南9丁目<br>モデルハウス</h3>
              <h4 class="p-model_box-01_address u-mb-20">中標津町東10条南9丁目1番13</h4>
              <p class="p-model_box-01_text-border u-mb-20">軽量性・断熱性に優れたガルバリウムのお家</p>
              <!-- <p class="p-model_box-01_subtitle u-font-size-20px-pc u-text-align-center u-mb-20"></p>
              <p class="p-model_box-01_text u-text-align-center"></p> -->
            </div>
            <div class="p-model_flexbox-right u-pt-6per">
              <p class="img"><img class="js-fadein-item" src="./assets/images/model-list/house1013/top.png" alt=""></p>
              <!-- p-link-box-01 1/3 -->
              <div class="p-link-box-01 sp">
                <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/31442/" target="_blank">もっと詳細を見る</a>
                <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=31442" target="_blank">見学ご予約はこちら</a>
              </div>
            </div>
          </div>
          <!-- p-link-box-01 2/3 -->
          <div class="p-link-box-01 pc">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/31442/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=31442" target="_blank">見学ご予約はこちら</a>
          </div>
          <ul class="p-model_pickup js-model-slider-sp">
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1013/pick01.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">すぐ収納で家事ラク！<br>ランドリールーム</p>
                <p class="p-model_pickup-item_text">2Fには物干しとカウンターを備えたランドリールームがあります。カウンターで乾いた洗濯物を畳んだり、アイロン掛けをしたり自由に活用できます。そのまま隣のウォークインクローゼットに収納できるので、家事が楽にはかどります♪</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1013/pick02.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">お出かけ時に便利♪<br>玄関ホールベンチ</p>
                <p class="p-model_pickup-item_text">玄関にはベンチを設置し、外出時や帰宅時の靴の脱ぎ履きが楽に行えます。ゆっくり座れるベンチがあることで、子どもや年配の方にもやさしいつくりとなっています。
                  また、ベンチの下がオープンになっていてよく着用する靴などを置くことができます。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1013/pick03.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">可動棚付き<br>シューズクローク</p>
                <p class="p-model_pickup-item_text">玄関横には、自由にアレンジして収納できる可動棚付きのシューズクロークをもうけています。洋服掛けもあるので、濡れた雨具を干したりよく使う上着をかけたり、外出・帰宅時に大変便利です♪</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1013/pick04.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">スムーズに暮らす。<br>こだわりの回遊動線</p>
                <p class="p-model_pickup-item_text">玄関から洗面化粧台にすぐアクセスできる間取りとなっています。帰宅時にリビングを通らずすぐ手洗い・うがいができる動線なので、感染症予防など衛生面でも安心です。
                  また、2Fのウォークインクローゼットは、ランドリールームや居室からもアクセス可能で、収納や着替えがスムーズに行えます。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house1013/pick05.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">オール電化でも安心♪<br>太陽光発電</p>
                <p class="p-model_pickup-item_text">太陽光パネルを標準装備しています。太陽光発電があることで、オール電化のお家でも電気代がお得になり安心です！
                  また、売電で収入を得られる場合もあるので家計にやさしくオススメです♪</p>
              </div>
            </li>
          </ul>
          <div class="p-model_gallery">
            <ul class="p-model_gallery-list">
              <li class="p-model_gallery-list_item p-model_gallery-list_la_1 js-fadein-item"><img src="./assets/images/model-list/house1013/ga01.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_2 js-fadein-item"><img src="./assets/images/model-list/house1013/ga02.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1013/ga03.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1013/ga04.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_5 js-fadein-item"><img src="./assets/images/model-list/house1013/ga05.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1013/ga06.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house1013/ga07.jpg?a" alt=""></li>
            </ul>
            <!-- <p class="p-model_gallery-notice u-text-align-center">※設備仕様のイメージ写真です。実際の建物とは異なります。</p> -->
          </div>
          <div class="p-floor">
            <h3 class="p-floor_title u-mb-60">FLOOR PLAN</h3>
            <div class="p-floor_container">
              <div class="p-floor_box p-floor_box_bigger"><img src="./assets/images/model-list/house1013/md01.jpg" alt="1階見取り図"></div>
              <div class="p-floor_box p-floor_box_bigger"><img src="./assets/images/model-list/house1013/md02.jpg" alt="2階見取り図"></div>
            </div>
          </div>
          <div class="p-model_details p-model_flexbox">
            <div class="p-model_details_flexbox-left">
              <div class="c-bn_amazon_present"><img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>"></div>
              <h4 class="p-model_details_title u-mb-20">中標津町東10条南9丁目<br>モデルハウス</h4>
              <p class="p-model_details_main u-mb-20">
                <strong>住所</strong>：中標津町東10条南9丁目1番13<br>
                <strong>公開</strong>：7月20日(土)よりGRAND OPEN！(水・木除く)10:00～17:00<br>
                <strong>予約</strong>：<?= $yoyakuText ?><br>
                <strong>担当店舗</strong>： <a href="#LH_NAKASHIBETSU">ロゴスホーム中標津</a><br>
              </p>
              <a href="tel:0153-73-1726" class="p-model_details_tel_box u-mb-20">
                <img src="/cmn_assets/images/common/icon_tel_white02.png">
                <span class="p-model_details_tel_text">0153-73-1726</span>
              </a>
              <p class="p-model_details_data">物件概要
                ■所在地:標津郡中標津町東10条南9丁目1-13
                ■交通:阿寒バス「すずらん団地」停まで徒3分
                ■学区:中標津東小学校（徒歩4分／約290m）・広陵中学校（徒歩5分／約350m）
                ■地目:宅地
                ■用途地域:第2種中高層住居専用地域
                ■建ぺい率:60％
                ■容積率:200％
                ■道路:北東側公道8mに12.5ｍ接道
                ■間取り:4LDK
                ■土地面積:241.50㎡(73.05坪)
                ■建物面積:1F: 56.31㎡(17.03坪)
                2F: 51.34㎡(15.53坪)
                ■延床: 107.65㎡(32.56坪)
                ■完成時期:2024年7月
                ■入居予定:要相談
                ■建物状況:新築
                ■構造:木造2階建
                ■工法:枠組み壁工法(2×4工法)
                ■建築確認番号:第SKK20240247号
                ■電力:北海道電力
                ■水道:公営水道
                ■ガス:お問い合わせください
                ■取引態様:売主
                ■権利:所有権
                ■都市計画:非線引き区域
                ■駐車場:3台分
                ■設備:LDK 15帖以上/ウォークインクローゼット/シューズクローゼット/システムキッチン/IHクッキングヒーター/食器洗い乾燥機/浄水器/浴室1坪以上/オートバス/シャワー付洗面化粧台/温水洗浄便座/節水型トイレ/複層ガラス/オール電化/TVモニタ付きインターホン/省エネ給湯器/エコキュート/ヒートポンプ冷暖房エアコン/電気パネルヒーター
              </p>
              <div class="p-model_details-price u-mb-20">
                <p class="p-model_details-price_head">- PRICE- </p>
                <p class="p-model_details-price_catch">建物+土地</p>
                <p class="p-model_details-price_num"><span>3,480</span>万円(税込)</p>
                <p class="p-model_details-price_data-list">
                  ＋諸費用70万円（登記・火災保険・融資手数料等）<br><br>
                  自己資金：10万円　住宅ローン：3,540万円<br>月々84,255円<br>■お支払い例：A　<br>北洋銀行：0.68％、3年固定金利、40年返済<br>
                  ①ボーナス無し：84,255円/12回<br>
                  ②ボーナス有り：67,594円/12回・100,087円/2回<br>
                  <br>
                  ■お支払い例：B　<br>北洋銀行：0.68％、3年固定金利、35年返済<br>
                  ①ボーナス無し：94,737円/12回<br>
                  ②ボーナス有り：76,004円/12回・112,541円/2回
                </p>
              </div>
            </div>
            <div class="p-model_details_flexbox-right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d722.9542672432171!2d144.989345!3d43.547855!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDMyJzUyLjMiTiAxNDTCsDU5JzIxLjYiRQ!5e0!3m2!1sja!2sus!4v1718245566497!5m2!1sja!2sus"></iframe>
              <div class="c-map-link"><a href="https://maps.app.goo.gl/3rZcpL2HAyPTeC4W6" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
            </div>
          </div>
          <!-- p-link-box-01 3/3 -->
          <div class="p-link-box-01">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/31442/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=31442" target="_blank" rel="noopener">見学ご予約はこちら</a>
          </div>
        </div>
      </section>
      <!-- /house1013 -->


      <!-- house01 -->
      <section class="p-model" id="a-house01">
        <div class="p-model_inner p-model-bg05 p-model-logos">
          <p class="p-model_type-text"><a class="c-difference_link-icon u-mr-10" href="#a-difference"><img src="./assets/images/common/chumon_icon.png" width="112" height="162" alt="注文住宅"></a><span>OPEN HOUSE</span></p>
          <!-- <p class="p-model_type-text"><a class="c-difference_link-icon u-mr-10" href="#a-difference"><img src="./assets/images/common/semi_icon.png" width="112" height="137" alt="セミオーダー住宅"></a><span>MODEL HOUSE</span></p> -->
          <div class="p-model_box-01 p-model_flexbox u-flex-column-reverse-sp u-mb-20-pc">
            <div class="p-model_flexbox-left u-text-align-center">
              <h3 class="p-model_box-01_title u-mb-40"><br class="pc"><br class="pc">【完全予約制！】<br><br>オーナー様邸暮らしの見学会</h3>
              <h4 class="p-model_box-01_address u-mb-20">標津郡中標津町東13条南3丁目</h4>
              <p class="p-model_box-01_text-border u-mb-20">
                <strong>【アウトドア好きなご夫婦のガレージハウス】<br>ロゴスホームでお家を建てられたお客様の、<br>実際に住まわれている<br>お家をご覧いただける見学会です。</strong>
                <span class="u-font-size-80per"><br><br>今回のお家は今年お引渡しをさせていただいたお客様邸です。
                  ロゴスホームのお家づくりを経験していらっしゃるOB様だからこそ聞ける、
                  良かった点や、もっとこうしたらよかった！という点など、
                  これから始まるお家づくりの参考にしていただけること間違いなしのイベントです。<br><br>
                  完全予約制になりますので、<br>
                  お電話または予約フォームよりご予約くださいませ！
                </span>
              </p>
            </div>
            <div class="p-model_flexbox-right u-pt-6per">
              <p class="img"><img class="js-fadein-item" src="./assets/images/model-list/house01/top.png" alt=""></p>
              <!-- p-link-box-01 1/3 -->
              <div class="p-link-box-01 sp">
                <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/10976/" target="_blank">もっと詳細を見る</a>
                <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=10976" target="_blank">見学ご予約はこちら</a>
              </div>
            </div>
          </div>
          <!-- p-link-box-01 2/3 -->
          <div class="p-link-box-01 pc">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/10976/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=10976" target="_blank">見学ご予約はこちら</a>
          </div>
          <ul class="p-model_pickup js-model-slider-sp">
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house01/pick01.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">趣味のバイクやBBQのための夫婦の空間</p>
                <p class="p-model_pickup-item_text">旦那様のご趣味でもあるバイクにいつでも触れることができるように室内からの動線を考えました。また、ガレージではお天気に左右されることなくBBQも楽しむことができます♪</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house01/pick02.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">リビング上部に大きな吹き抜け<br>開放感と日当たり</p>
                <p class="p-model_pickup-item_text">日当たりがよく、趣味のものを置くリビングも圧迫感を感じることなく過ごすことが出来ます。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house01/pick03.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">ストレートのLDKと続き間</p>
                <p class="p-model_pickup-item_text">来客が多いことから、来客時は客間として使用するために設けました。普段は開放して使うことでより快適に過ごすことが出来ます。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house01/pick04.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">家族で使える収納であり、籠ってテレワークも可能</p>
                <p class="p-model_pickup-item_text">洗濯⇒干す⇒収納という一直線で家事が完結できるように配置しました。また、3帖と広いスペースのため、籠ってテレワークスペースとしても活用できます。</p>
              </div>
            </li>
            <li class="p-model_pickup-item">
              <img src="./assets/images/model-list/house01/pick05.jpg?a" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">夫婦でしっかり分けて使える6帖のWIC</p>
                <p class="p-model_pickup-item_text">アウトドア用品やバンドグッズなど共通の趣味が多いため、6帖程の広さの収納スペースを確保しました。6帖あれば収納に困らず、今後グッズが増えても安心ですね♪</p>
              </div>
            </li>
          </ul>
          <div class="p-model_gallery">
            <ul class="p-model_gallery-list">
              <li class="p-model_gallery-list_item p-model_gallery-list_la_1 js-fadein-item"><img src="./assets/images/model-list/house01/ga01.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_2 js-fadein-item"><img src="./assets/images/model-list/house01/ga02.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house01/ga03.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house01/ga04.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_5 js-fadein-item"><img src="./assets/images/model-list/house01/ga05.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house01/ga06.jpg?a" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item"><img src="./assets/images/model-list/house01/ga07.jpg?a" alt=""></li>
            </ul>
            <p class="p-model_gallery-notice u-text-align-center">※設備仕様のイメージ写真です。実際の建物とは異なります。</p>
          </div>

          <div class="p-model_details p-model_flexbox">
            <div class="p-model_details_flexbox-left">
              <div class="c-bn_amazon_present"><img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>"></div>
              <h4 class="p-model_details_title u-mb-20">標津郡中標津町東13条南3丁目<br>オーナー様邸暮らしの見学会</h4>
              <p class="p-model_details_main u-mb-20">
                <strong>住所</strong>：標津郡中標津町東13条南3丁目<br>
                <strong>公開</strong>：完全予約制！※ご見学希望日時は要相談<br>
                <strong>予約</strong>：<?= $yoyakuText ?><br>
                <strong>担当店舗</strong>： <a href="#LH_NAKASHIBETSU">ロゴスホーム中標津</a><br>
              </p>
              <a href="tel:0153-73-1726" class="p-model_details_tel_box u-mb-20">
                <img src="/cmn_assets/images/common/icon_tel_white02.png">
                <span class="p-model_details_tel_text">0153-73-1726</span>
              </a>
              <!-- <div class="p-model_details-price u-mb-20">
                <p class="p-model_details-price_head">- PRICE- </p>
                <p class="p-model_details-price_catch">建物+土地<br>（太陽光パネル・住宅設備・家具・カーテンを含む）</p>
                <p class="p-model_details-price_num"><span>2,980</span>万円(税込)</p>
                <p class="p-model_details-price_data-list"></p>
              </div>
              <p class="p-model_details_data">物件概要
                ■所在地：標津郡中標津町東18条南1丁目3番5
                ■地目：宅地
                ■用途地域：準工業地域
                ■建ぺい率：60%
                ■容積率：160%
                ■道路：北東側　4m公道
                ■間取り：4LDK
                ■建物面積：1F: 56.31㎡(17坪)
                2F: 56.31㎡(17坪)
                ■延床: 112.62㎡ (約34坪)
                ■完成時期：2023年1月
                ■入居予定：応相談
                ■建物状況：新築
                ■構造：木造
                ■工法：2x4工法
                ■建築確認番号：SKK20222777
                ■電力：北海道電力
                ■水道：中標津町上下水道
                ■ガス：LPガス
                ■取引態様：売主
                ■駐車場：カースペース3台
              </p> -->
            </div>
            <!--   <div class="p-model_details_flexbox-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d721.6498307239161!2d145.0207548292534!3d43.65650396897282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa231147652846137!2zNDPCsDM5JzIzLjQiTiAxNDXCsDAxJzE2LjciRQ!5e0!3m2!1sja!2sjp!4v1667874612229!5m2!1sja!2sjp"></iframe>
        <div class="c-map-link"><a href="https://goo.gl/maps/z2jwHjJY3oGg1Cis7" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
      </div>-->
          </div>
          <!-- p-link-box-01 3/3 -->
          <div class="p-link-box-01">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/10976/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=10976" target="_blank" rel="noopener">見学ご予約はこちら</a>
          </div>
        </div>
      </section>
      <!-- /house01 -->

      <!-- lh中標津 -->
      <section class="p-model" id="a-lh">
        <div class="p-model_inner p-model-bg03 p-model-logos">
          <div class="p-model_box-01 p-model_flexbox u-flex-column-reverse-sp u-mb-20-pc">
            <div class="p-model_flexbox-left u-text-align-center">
              <div class="p-model_logo">
                <img class="js-fadein-item is-fadein" src="/cmn_assets/images/model-list/model_logo_sr17.png" alt="">
              </div>
              <h3 class="p-model_box-01_title u-mb-40">SHOW ROOM<br>ロゴスホーム中標津<br>ショールーム</h3>
              <h4 class="p-model_box-01_address u-mb-20">標津郡中標津町東1条南10丁目2番地2-2</h4>
              <p class="p-model_box-01_text-border u-mb-20">ロゴスホーム中標津<br>ショールーム公開中！！</p>
              <p class="p-model_box-01_text">
                このショールームは私たちとお客様が一緒に、じっくり家づくりのお話しをするための場所。<br>
                ここには、機能も、デザインも、レイアウトも、もちろんご予算も、しっかりと納得するまで、<br>
                お客様と共に考えるための仕掛けがいっぱいです。
              </p>
            </div>
            <div class="p-model_flexbox-right u-pt-6per">
              <p class="img"><img class="js-fadein-item is-fadein" src="./assets/images/model-list/lh/top-tochi.png?a" alt=""></p>
              <!-- p-link-box-01 1/3 -->
              <div class="p-link-box-01 sp">
                <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/121/" target="_blank">もっと詳細を見る</a>
                <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=121" target="_blank">見学ご予約はこちら</a>
              </div>
            </div>
          </div>
          <!-- p-link-box-01 2/3 -->
          <div class="p-link-box-01 pc">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/121/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=121" target="_blank">見学ご予約はこちら</a>
          </div>

          <!-- 土地 -->
          <?php
          $land_reserve_url = "https://www.logoshome.jp/event-reserve/?eventReserveId=121";
          require_once (INCLUDE_PATH . '/parts/member-land.php'); ?>
          <!-- /土地 -->

          <ul class="p-model_pickup-flexwrap js-model-slider-sp">
            <li class="p-model_pickup-flexwrap-item"><img src="./assets/images/model-list/lh/pick01.jpg" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">住宅のプロとしてどんな些細なご不安も<br class="pc">しっかりお答えします！</p>
                <p class="p-model_pickup-item_text"></p>
              </div>
            </li>
            <li class="p-model_pickup-flexwrap-item"><img src="./assets/images/model-list/lh/pick02.jpg" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">ショールームにご来場いただいたその場で<br class="pc">資金計画・土地・間取りのご提案も可能です♪</p>
                <p class="p-model_pickup-item_text"></p>
              </div>
            </li>
            <li class="p-model_pickup-flexwrap-item"><img src="./assets/images/model-list/lh/pick03.jpg" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">お客様と共に考えるための仕掛けがいっぱいです。</p>
                <p class="p-model_pickup-item_text"></p>
              </div>
            </li>
            <li class="p-model_pickup-flexwrap-item"><img src="./assets/images/model-list/lh/pick04.jpg" alt="">
              <div class="p-model_pickup-item_box">
                <p class="p-model_pickup-item_title u-mb-20">スタッフ一同、皆様のお越しを心よりお待ちしております。</p>
                <p class="p-model_pickup-item_text"></p>
              </div>
            </li>
          </ul>
          <div class="p-model_gallery">
            <ul class="p-model_gallery-list">
              <li class="p-model_gallery-list_item p-model_gallery-list_la_1 js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga01.jpg" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_2 js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga02.jpg" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga03.jpg" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga04.jpg" alt=""></li>
              <li class="p-model_gallery-list_item p-model_gallery-list_la_5 js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga05.jpg" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga06.jpg" alt=""></li>
              <li class="p-model_gallery-list_item js-fadein-item is-fadein"><img src="./assets/images/model-list/lh/ga07.jpg" alt=""></li>
            </ul>
            <!-- <p class="p-model_gallery-notice u-text-align-center">※設備仕様のイメージ写真です。実際の建物とは異なります。</p> -->
          </div>
          <div class="p-model_details p-model_flexbox">
            <div class="p-model_details_flexbox-left">
              <div class="c-bn_amazon_present"><img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>"></div>
              <h4 class="p-model_details_title u-mb-20">ロゴスホーム中標津ショールーム</h4>
              <p class="p-model_details_main u-mb-20"> <strong>住所</strong>：標津郡中標津町東1条南10丁目2番地2<br>
                <strong>公開</strong>：毎日公開中！(水・木除く)10:00～17:00<br>
                <strong>予約</strong>：<?= $yoyakuText ?><br>
                <strong>担当店舗</strong>：<a href="#LH_NAKASHIBETSU" class="c-link-border-bottom-01">ロゴスホーム中標津</a><br>
              </p>
              <a href="tel:0153-73-1726" class="p-model_details_tel_box u-mb-20">
                <img src="/cmn_assets/images/common/icon_tel_white02.png">
                <span class="p-model_details_tel_text">0153-73-1726</span>
              </a>
            </div>
            <div class="p-model_details_flexbox-right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5784.161560173537!2d144.981974!3d43.542358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f6da44d26add905%3A0x9ced7bf2fb51e010!2z44Ot44K044K544Ob44O844Og5Lit5qiZ5rSlIOOCt-ODp-ODvOODq-ODvOODoA!5e0!3m2!1sja!2sjp!4v1692612306843!5m2!1sja!2sjp"></iframe>
              <div class="c-map-link"><a href="https://goo.gl/maps/4dsCej8m5mNrS17H9" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
            </div>
          </div>
          <!-- p-link-box-01 3/3 -->
          <div class="p-link-box-01">
            <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/event/nakashibetsu/121/" target="_blank">もっと詳細を見る</a>
            <a class="p-link-box_btn p-link-box-01_raijyolink" href="https://www.logoshome.jp/event-reserve/?eventReserveId=121" target="_blank">見学ご予約はこちら</a>
          </div>
        </div>
      </section>
      <!-- /lh中標津 -->

      <div class="u-pt-60 u-mb-20 u-text-align-center">
        <a href="https://www.logoshome.jp/event/nakashibetsu/" class="p-model_details_event">
          <span class="p-model_details_event-text">中標津町のイベント一覧へ</span>
          <span class="p-model_details_event-arrow"></span>
        </a>
      </div>

    </article>
    <!-- /model-list -->

    <!-- campaign -->
    <div id="a-dcampaign">
      <?= $cp->getBaseHtml() ?>
    </div>

    <!-- event -->
    <article id="a-event" class="p-event" style="display: none;">
      <h2 class="p-event_title">EVENT</h2>
      <p class="p-event_subtitle">イベント開催中</p>
      <section class="p-event_box">
        <div class="p-event_img"><img class="pc" src="./assets/images/event/event01.jpg" alt=""><img class="sp" src="./assets/images/event/event01_sp.jpg" alt=""></div>
        <p class="p-event_address">住所：〒080-0016 帯広市西6条南3丁目11番</p>
        <div class="p-link-box-01">
          <a class="p-link-box_btn p-link-box-01_syosailink" href="https://www.logoshome.jp/obihiro/lp/logost/" target="_blank">もっと詳細を見る</a>
          <a class="p-link-box_btn p-link-box-01_raijyolink" href="./reserve/" target="_blank">見学ご予約はこちら</a>
        </div>
      </section>
    </article>
    <!-- /event -->
    <!-- housing -->
    <article id="a-housing" class="p-housing" style="display: none;">
      <div class="p-housing_inner">
        <div class="p-housing_top u-mb-40 u-mb-20-sp">
          <h2 class="p-housing_top_title">HOUSING</h2>
          <p class="p-housing_top_text">新築一戸建て販売中!</p>
          <!--  ▼housing_container -->
          <!--  ▲housing_container -->
        </div>
      </div>
    </article>
    <!-- /housing -->
    <!-- estate -->
    <div id="a-estate" class="estate_wrapper" style="display: none;">
      <div class="estate_outer">
        <div class="estate_inner">
          <div class="estate_top">
            <h2 class="estate_top_title">ESTATE</h2>
            <p class="estate_top_text">土地情報</p>
            <!-- ▼ estate_container -->
            <!-- ▲ estate_container -->
          </div>
        </div>
      </div>
    </div>
    <!-- /estate -->
    <!-- hearts -->
    <article class="p-hearts">
      <div class="p-hearts_outer">
        <section class="p-hearts_inner">
          <div class="p-hearts_title-box">
            <h2 class="p-hearts_title-text">北海道品質<br>北海道価格</h2>
          </div>
          <div class="p-hearts_content-box">
            <p class="p-hearts_content_text">
              北海道で一番寒い町「陸別」のある十勝地方。<br>
              そんな寒いエリアでも家の中では半袖でいられるほど暖かく高い住宅性能。<br>
              でも暖房料金はしっかり抑えるよう考えられている省エネ性能。<br>
              そして、価格は「北海道で働く誰もが手の届く価格設定に」というこだわり。<br>
              この3つが揃った「十勝型住宅」の家は基本性能が高く、<br class="pc">コスパのいい家であるという証。<br>
              この土地でしか生まれない、どこにも真似できない十勝の風土を<br class="pc">活かした発想で完成した特別な「家づくり」。<br>
              私たちは「十勝型住宅」を日本一の家としてお届けしていると自負しております。
            </p>
          </div>
        </section>
      </div>
    </article>
    <!-- /hearts -->
    <!-- difference -->
    <?php require_once (INCLUDE_PATH . '/parts/difference.php'); ?>
    <!-- /difference -->
    <!-- brand -->
    <?php require_once (INCLUDE_PATH . '/parts/brand.php'); ?>
    <!-- /brand -->
    <!-- works -->
    <?php require_once (INCLUDE_PATH . '/parts/works.php'); ?>
    <!-- /works -->
    <!-- pickup -->
    <!-- <?php require_once (INCLUDE_PATH . '/parts/pickup.php'); ?> -->
    <article id="a-pickup" class="pickup">
      <div class="pickup-outer">
        <div class="pickup-inner">
          <div class="pickup-top">
            <h2 class="pickup-top-title">OSUSUME PICKUP</h2>
          </div>
          <section class="pickup-box">
            <div class="pickup-half-box pickup-img-box js-fadein-item pc"> <img class="pickup-img" src="/cmn_assets/images/pickup/pickup01.jpg" alt="" /> </div>
            <div class="pickup-half-box pickup-content-box">
              <div class="pickup-content-outer">
                <div class="pickup-img-box sp"> <img class="pickup-img" src="/cmn_assets/images/pickup/pickup01.jpg" alt="" /> </div>
                <div class="pickup-content-inner">
                  <div class="pickup-title-box">
                    <h3 class="pickup-title">北海道 土地情報<br>
                      <span>LIST</span>
                    </h3>
                    <div class="pickup-title-balloon"><img src="/cmn_assets/images/pickup/pickup_balloon01.png" width="129" height="129" alt="約60箇所UP"></div>
                  </div>
                  <div class="pickup-text-box">
                    <p class="pickup-text">
                      ロゴスホームでは、豊富な分譲地、自社土地を複数保有しています。いずれも学校、スーパー、病院や公園が徒歩圏内にある暮らしやすい土地ばかりで、人気のエリアから検索することも可能です。あなたにぴったりの土地を見つけてください。
                    </p>
                  </div>
                </div>
              </div>
              <div class="pickup-btn-box"> <a class="pickup-btn" href="https://www.logoshome.jp/housing/">ロゴスホームの土地情報</a></div>
              <!-- <div class="pickup-btn-box"> <a class="pickup-btn" href="https://housingcafe.jp/housing/" target="_blank" rel="noopener">ハウジングカフェの土地情報</a></div>-->
            </div>
          </section>
          <section class="pickup-box">
            <div class="pickup-half-box pickup-img-box js-fadein-item pc"> <img class="pickup-img" src="/cmn_assets/images/pickup/pickup02.jpg" alt="" /> </div>
            <div class="pickup-half-box pickup-content-box">
              <div class="pickup-content-outer">
                <div class="pickup-img-box sp"> <img class="pickup-img" src="/cmn_assets/images/pickup/pickup02.jpg" alt="" /> </div>
                <div class="pickup-content-inner">
                  <div class="pickup-title-box">
                    <h3 class="pickup-title">北海道 建売情報<br>
                      <span>LIST</span>
                    </h3>
                    <div class="pickup-title-balloon"><img src="/cmn_assets/images/pickup/pickup_balloon02.png" width="129" height="129" alt="随時NEWMODELUP"></div>
                  </div>
                  <div class="pickup-text-box">
                    <p class="pickup-text">
                      ロゴスホームは、お客様にリアルな家づくりをご体感いただために、多くのモデルハウスは分譲地に建築しております。また、実際にお客様がお住いになられることを想定して建築する販売型モデルハウスのため、適正価格にて提供しております。
                    </p>
                  </div>
                </div>
              </div>
              <div class="pickup-btn-box"> <a class="pickup-btn" href="https://www.logoshome.jp/house/">ロゴスホームの建売情報</a></div>
              <!--   <div class="pickup-btn-box"> <a class="pickup-btn" href="https://housingcafe.jp/house/" target="_blank" rel="noopener">ハウジングカフェの建売情報</a></div>-->
            </div>
          </section>
        </div>
      </div>
    </article>
    <!-- /pickup -->
    <!-- p-area-info -->
    <article id="a-area-info" class="p-area-info" style="display: none;">
      <div class="p-area-info_inner">
        <div class="p-area-info_head u-mb-10">
          <h2 class="c-article-title-l p-area-info_title">北海道釧路市のエリア情報</h2>
          <p class="p-area-info_catch">釧路市で注文住宅を建てるならロゴスホームにご相談ください。</p>
        </div>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">釧路市の概要</h3>
          <div class="p-area-info_section_inner">
            <p>釧路市は夏の平均気温が20℃前後と非常に涼しいという特徴があります。<br>
              その為、道外から避暑地として旅行や移住をされる方も多いです。 <br>
              そんな釧路市にこれから移住する方が参考になるような釧路市の特徴をお話します！</p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">釧路市の歴史</h3>
          <div class="p-area-info_section_inner u-pt-20 u-pb-20">
            <table class="p-area-info_table">
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1869年</th>
                <td class="p-area-info_table-desc">『クスリ』は『釧路』と改称される。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1909年</th>
                <td class="p-area-info_table-desc">電話開通。電気も使用可能になる。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1922年</th>
                <td class="p-area-info_table-desc">8月1日に市制が施行されて、釧路市になる。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1927年</th>
                <td class="p-area-info_table-desc">水道を敷設し給水開始。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1952年</th>
                <td class="p-area-info_table-desc">十勝沖地震が発生。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1961年</th>
                <td class="p-area-info_table-desc">釧路空港が開港。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1968年</th>
                <td class="p-area-info_table-desc">十勝沖地震が発生。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1975年</th>
                <td class="p-area-info_table-desc">釧路市動物園開園。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2003年</th>
                <td class="p-area-info_table-desc">十勝沖地震が発生</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2004年</th>
                <td class="p-area-info_table-desc">釧路市、阿寒町、白糠町、音別町の4市町による合併協議から白糠町が離脱。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2005年</th>
                <td class="p-area-info_table-desc">釧路市と阿寒町、音別町が新設合併し、新たに「釧路市」として発足。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2011年</th>
                <td class="p-area-info_table-desc">東北地方太平洋沖地震が発生</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2016年</th>
                <td class="p-area-info_table-desc">釧路外環状道路（釧路西IC・釧路東IC間）が開通。</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2021年</th>
                <td class="p-area-info_table-desc">道内で5番目に人口が多かった釧路市と、6番目の帯広市の人口が逆転。</td>
              </tr>
            </table>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">釧路市の人口情報</h3>
          <div class="p-area-info_section_inner">
            <h4 class="c-article-title-r u-mb-30"><span>161,706<small>人（令和4年5月末現在）</small></span></h4>
            <p>日本製紙が釧路工場から紙・パルプ事業を撤退。<br>
              子会社を含めて計約500人が働いており、多くは市外・道外への配家族も含めた<br>
              大規模な人口転出が心配され人口減少が加速する懸念がある。<br>
              <br>
              <a class="p-area-info_green-border-text" href="https://www.city.kushiro.lg.jp/shisei/toukei/jinkou/0001.html" target="_blank" rel="noopener noreferrer">※釧路市ホームページより</a>
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">釧路市の教育情報</h3>
          <div class="p-area-info_section_inner">
            <p>現在、釧路市において、様々な解決すべき課題があります。<br>
              小学校から中学校への進学の際に新しい環境での（中１ギャップ）や<br>
              学力・学習意欲の伸び悩み、児童生徒の減少や学校施設の老朽化など。<br>
              <br>
              これらの課題の解決に向け、釧路市教育委員会は、2021（令和3）年6月より <br>
              市民や有識者を含む外部委員会や関係団体と協議を重ね釧路市において<br>
              小中連携・小中一貫教育の推進が有効な方策の一つとの方向性を持った。
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">釧路市の商業施設</h3>
          <div class="p-area-info_section_inner">
            <p>釧路市には数多くのショッピングモールが存在します。</p>
            <ul class="p-area-info_list">
              <li class="p-area-info_green-border-text">・釧路フィッシャーマンズワーフ MOO(〒085-0016 北海道釧路市錦町2-4)</li>
              <li class="p-area-info_green-border-text">・イオンモール釧路昭和(〒084-0910 北海道釧路市昭和中央4丁目18−1)</li>
              <li class="p-area-info_green-border-text">・釧路和商市場(〒085-0018 北海道釧路市黒金町13-25)</li>
              <li class="p-area-info_green-border-text">・フレスポ釧路文苑(〒085-0063 北海道釧路市文苑2丁目48-11)</li>
            </ul>
            <p>様々な店舗が存在しますので食料品・日用品等の普段のお買い物も困らないので非常に生活はしやすい環境です。</p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">釧路市の自然と公園</h3>
          <div class="p-area-info_section_inner">
            <h4><span class="p-area-info_green-border-text">・鶴ケ岱公園</span></h4>
            <p class="u-mb-40">鶴ケ岱公園は鯉のいる池や日本庭園があり自然を感じながら散歩するのに最適な公園です。<br>
              公園内にあるエゾヤマザクラが釧路のサクラ開花を決める標本木に指定されており<br>
              釧路に遅い春と訪れを告げる公園でもあります。<br>
              また毎年5月にはチューリップが咲き誇る「チューリップ＆花フェア」が開催されています。</p>
            <h4><span class="p-area-info_green-border-text">・米町公園</span></h4>
            <p class="u-mb-40">米町公園は展望台からは、晴れた日には摩周岳や斜里岳、日高の山々を見渡すことができます。<br>
              釧路大漁どんぱくの時期には、隠れた花火スポットとしても密かな人気です。<br>
              また公園の近くには、米町ふるさと館が建っていて米町の歴史を知ることができます。<br>
              釧路最古の木造民家で、昔の街並の写真をはじめ、石川啄木の資料も展示されています。<br>
              喫茶コーナーでは、当時の雰囲気をそのままにお茶を楽しむこともできるでしょう。</p>
          </div>
        </section>
      </div>
    </article>
    <!-- /.p-area-info -->
    <article class="about">
      <?php require_once (INCLUDE_PATH . '/parts/about-company.php'); ?>


      <div class="about-store" id="LH_NAKASHIBETSU">
        <div class="about-store_img pc"><img src="./assets/images/about/about_store3.jpg" alt=""></div>
        <div class="about-store_box js-fadein-item">
          <h3 class="about-store_name u-font-bold u-mb-20">ロゴスホーム中標津</h3>
          <div class="about-store_data">
            <dl class="about-store_item u-mb-20">
              <dt>所在地</dt>
              <dd>〒086-1001 <br>
                標津郡中標津町東1条南10丁目2番地2</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>TEL</dt>
              <dd>0153-73-1726</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>FAX</dt>
              <dd>0153-73-1724</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>営業時間</dt>
              <dd>10:00～17:00（定休:水・木曜日 ※祝日の場合は営業）</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>施工エリア</dt>
              <dd>中標津町・標津町・別海町・弟子屈町<br>
                ＜下記のエリアは遠方のため、別料金が発生します。＞<br>
                根室市・羅臼町・斜里町</dd>
            </dl>
          </div>
          <!-- <div class="c-sns-box">
            <a href="https://www.facebook.com/%E3%83%AD%E3%82%B4%E3%82%B9%E3%83%9B%E3%83%BC%E3%83%A0%E4%B8%AD%E6%A8%99%E6%B4%A5-107342890854561" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/facebook_icon.png" alt="facebook"></a>
            <a href="https://www.instagram.com/logos_home/" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/instagram_icon.png" alt="instagram"></a>
          </div> -->
          <div class="c-sns-box">
            <a href="https://www.logoshome.jp/shop/hokkaido/nakashibetsu/" class="shop-detail-link">店舗詳細</a>
          </div>
        </div>
      </div>

    </article>
  </main>
  <!-- /main -->
  <!-- /main -->
  <nav class="p-breadcrumb js-breadcrumb">
    <ul class="p-breadcrumb_list l-inner">
      <li class="p-breadcrumb_item">
        <a href="https://www.logoshome.jp/" class="p-breadcrumb_link">注文住宅のロゴスホーム</a>
      </li>
      <li class="p-breadcrumb_item">
        <p class="p-breadcrumb_link">中標津町の注文住宅</p>
      </li>
    </ul>
  </nav>
  <!-- footer -->
  <?php require_once (INCLUDE_PATH . '/footer.php'); ?>
  <!-- /footer -->
</body>

</html>