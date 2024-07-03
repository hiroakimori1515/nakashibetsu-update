<?php
require_once (dirname(__FILE__) . '/../cmn_assets/inc/config.php');
require_once (INCLUDE_PATH . '/parts/campaign/base/index.php');
$page_title = "札幌市の注文住宅なら 北海道着工数No1ハウスメーカーの【ロゴスホーム】";
$page_description = "北海道札幌市でローコスト注⽂住宅を建てるならハウスメーカーのロゴスホームにお任せ下さい。おかげさまで北海道住宅着⼯数No.1「創エネ」「省エネ」新築住宅・⾒学会のイベント随時開催中。お気軽にお問い合わせください。";
$pageUrl = 'https://www.logoshome.jp/sapporo/';
$page_area_name = '札幌';
$isNewAreaLp = true;

$localCSS = array(
  //'./assets/css/style.css?240207',
  //'./assets/css/add.css?231113',
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

//$cpBannerA->setUrl('/cmn_assets/images/banner/bn_odekake/dgift-a_sapporo.jpg', '/cmn_assets/images/banner/bn_odekake/dgift-a_sapporo.jpg');
//$cpBannerB->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerC->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerD->setUrl('/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_01.jpg', '/cmn_assets/images/banner/bn_shinsyun/shinsyun_ku_02.jpg');
//$cpBannerE->setUrl('/cmn_assets/images/banner/bn_odekake/dgift-e_sp_sapporo.jpg', '/cmn_assets/images/banner/bn_odekake/dgift-e_sp_sapporo.jpg');


/**
 * new CpHtml('pc画像', 'sp画像', 'キャンペーン注意事項', 'キャンペーン背景色');
 *----------------------------------*/

//$cp = new CpHtml($cpBannerA->getUrl(), $cpBannerA->getSpUrl(), $cpBodyText, '#43c759');

//$cp->setAccordionHtml('/cmn_assets/images/banner/bn_odekake/dgift-e_sp_sapporo.jpg', '/cmn_assets/images/banner/bn_odekake/dgift-e_sp_sapporo.jpg');

?>
<?php require_once (INCLUDE_PATH . '/header.php'); ?>

<body>
  <?php require_once (INCLUDE_PATH . '/body-first.php'); ?>

  <!-- header -->
  <?php require_once (INCLUDE_PATH . '/header-nav.php'); ?>
  <!-- /header -->

  <!-- main -->
  <main class="l-main" id="a-main">
    <div class="l-fixed-banner_left js-fixed-banner">
      <ul class="l-fixed-banner_left_list">
        <li class="l-fixed-banner_left_item"><a class="l-fixed-banner_left_link l-fixed-banner_left_link-model-menu" href="#a-models">公開中<br class="pc">一覧<img src="./assets/images/common/map_icon.png" alt=""></a></li>
      </ul>
    </div>
    <div class="l-fixed-banner_right js-fixed-banner">
      <ul class="l-fixed-banner_right_list">
        <li class="l-fixed-banner_right_item l-fixed-banner_right_item-catalog u-mb-20-pc">
          <a class="l-fixed-banner_right_item-catalog_link" href="./catalog/">
            <span class="l-fix-banner_item_pop">
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
            <span class="l-fix-banner_item_pop">
              <picture>
                <source media="(max-width: 750px)" srcset="<?= $cpBannerPopup->getSpUrl(); ?>" />
                <img src="<?= $cpBannerPopup->getUrl(); ?>" class="u-w-100" alt="<?= $cpBannerPopup->getAlt(); ?>">
              </picture>
            </span>
            見学予約
          </a>
        </li>
        <li class="l-fixed-banner_right_item l-fixed-banner_right_item-pagetop">
          <a class="l-fixed-banner_right_link-top" href="#a-main"></a>
        </li>
      </ul>
    </div>

    <!-- mv -->
    <div id="mv" class="p-mv">
      <div class="p-mv-top u-pb-20-pc">
        <div class="">
          <ul class="mv-bg-slider js-mv-bg-slider">
            <li><img class="pc" src="./assets/images/mv/mv_bg01.jpg" width="1920" height="880" alt="" /><img class="sp" src="./assets/images/mv/mv_bg01_sp_short.jpg" width="750" height="800" alt="" /></li>
            <li><img class="pc" src="../cmn_assets/images/mv/mv_bg02.jpg" width="1920" height="880" alt="" /><img class="sp" src="../cmn_assets/images/mv/mv_bg02_sp_short.jpg" width="750" height="800" alt="" /></li>
            <li><img class="pc" src="../cmn_assets/images/mv/mv_bg03.jpg" width="1920" height="880" alt="" /><img class="sp" src="../cmn_assets/images/mv/mv_bg03_sp_short.jpg" width="750" height="800" alt="" /></li>
            <!-- <li><img class="pc" data-lazy="./assets/images/mv/mv_bg02.jpg" width="1920" height="880" alt="" /><img class="sp" data-lazy="./assets/images/mv/mv_bg02_sp.jpg" width="750" height="1080" alt="" /></li>
            <li><img class="pc" data-lazy="./assets/images/mv/mv_bg03.jpg" width="1920" height="880" alt="" /><img class="sp" data-lazy="./assets/images/mv/mv_bg03_sp.jpg" width="750" height="1080" alt="" /></li> -->
          </ul>
        </div>
        <div class="p-mv-top_inner">
          <h1 class="p-mv_main">
            <picture>
              <source media="(max-width: 750px)" srcset="./assets/images/mv/mv_main01_sp_short.png" />
              <img src="./assets/images/mv/mv_main01.png" alt="<?= $page_area_name ?>市の注文住宅">
            </picture>
          </h1>
          <div class="p-mv-no1 pc">
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
          <img class="pc" src="<?= $cpBannerD->getUrl(); ?>" alt="<?= $cpBannerD->getAlt(); ?>">
          <img class="sp" src="<?= $cpBannerC->getUrl(); ?>" alt="<?= $cpBannerC->getAlt(); ?>">
        </div>
      </div>
    </div>
    <!-- /mv -->
    <?php
    $breadcrumbItems = array(
      array(
        'text' => $page_area_name . '市の注文住宅',
      ),
    );
    require_once (INCLUDE_PATH . '/parts/breadcrumb.php');
    ?>




    <!-- banner -->
    <?php require_once (INCLUDE_PATH . '/parts/banner.php'); ?>
    <!-- /banner -->

    <section id="a-popular" class="p-popular">
      <div class="p-popular-inner">
        <div class="p-popular-title">
          <h2 class="c-section-title-text"><?= $page_area_name ?>エリアで人気の<br>モデルハウスTOP3</h2>
          <p class="c-section-subtitle-text">POPULAR MODEL HOUSE</p>
        </div>
        <div class="p-popular_slider" style="background-image: url('./assets/images/models/model_menu_bg.jpg');">
          <ul class="p-popular_slider-inner js-popular-slider">
            <li class="p-popular_card js-fadein-item u-mb-60">
              <!-- <span class="p-popular_card-pop">
                <img src="/cmn_assets/images/models/pop_tochi.png" alt="非公開の土地情報も閲覧可能！" loading="lazy">
              </span> -->
              <a class="p-popular_card-link" href="#a-house51">
                <span class="p-popular_card-icon">
                  <img width="113" height="113" src="/cmn_assets/images/model-icon/icon_no1.png" alt="人気NO.1" loading="lazy">
                </span>
                <div class="p-popular_card-head">
                  <img src="./assets/images/models/house51/top.png" alt="">
                </div>
                <div class="p-popular_card-body">
                  <span class="p-popular_card-event">MODEL HOUSE</span>
                  <h3 class="p-popular_card-title">
                    <span class="p-popular_card-title_outer">
                      <span class="p-popular_card-title_inner">カタヅク・カクセル・カクレル。</span>
                    </span>
                    <span class="p-popular_card-title_outer">
                      <span class="p-popular_card-title_inner">キレイを保てる家</span>
                    </span>
                  </h3>
                  <div class="p-popular_card-data">
                    <table class="p-popular_card-table">
                      <tr class="p-popular_card-table_row">
                        <th class="p-popular_card-table_head"><span>期間</span></th>
                        <td class="p-popular_card-table_body">毎日公開中!<small>(水・木を除く)</small></td>
                      </tr>
                      <tr class="p-popular_card-table_row">
                        <th class="p-popular_card-table_head"><span>住所</span></th>
                        <td class="p-popular_card-table_body">石狩市花川南9条1丁目87番6</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <p class="p-popular_card-more">物件を見てみる</p>
              </a>
            </li>
            <li class="p-popular_card js-fadein-item u-mb-60">
              <!-- <span class="p-popular_card-pop">
                <img src="/cmn_assets/images/models/pop_tochi.png" alt="非公開の土地情報も閲覧可能！" loading="lazy">
              </span> -->
              <a class="p-popular_card-link" href="#a-house40">
                <div class="p-popular_card-head">
                  <img src="./assets/images/models/house40/top.png" alt="">
                </div>
                <div class="p-popular_card-body">
                  <span class="p-popular_card-event">MODEL HOUSE</span>
                  <h3 class="p-popular_card-title">
                    <span class="p-popular_card-title_outer">
                      <span class="p-popular_card-title_inner">好きと暮らす。</span>
                    </span>
                    <span class="p-popular_card-title_outer">
                      <span class="p-popular_card-title_inner">お家サウナもできる自慢のお家。</span>
                    </span>
                  </h3>
                  <div class="p-popular_card-data">
                    <table class="p-popular_card-table">
                      <tr class="p-popular_card-table_row">
                        <th class="p-popular_card-table_head"><span>期間</span></th>
                        <td class="p-popular_card-table_body">毎日公開中!<small>(水・木を除く)</small></td>
                      </tr>
                      <tr class="p-popular_card-table_row">
                        <th class="p-popular_card-table_head"><span>住所</span></th>
                        <td class="p-popular_card-table_body">岩見沢市7条西5丁目5番10</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <p class="p-popular_card-more">物件を見てみる</p>
              </a>
            </li>
            <li class="p-popular_card js-fadein-item u-mb-60">
              <!-- <span class="p-popular_card-pop">
                <img src="/cmn_assets/images/models/pop_tochi.png" alt="非公開の土地情報も閲覧可能！" loading="lazy">
              </span> -->
              <a class="p-popular_card-link" href="#a-house62">
                <div class="p-popular_card-head">
                  <img src="./assets/images/models/house62/top.png" alt="">
                </div>
                <div class="p-popular_card-body">
                  <span class="p-popular_card-event">MODEL HOUSE</span>
                  <h3 class="p-popular_card-title">
                    <span class="p-popular_card-title_outer">
                      <span class="p-popular_card-title_inner">インドア・アウトドア</span>
                    </span>
                    <span class="p-popular_card-title_outer">
                      <span class="p-popular_card-title_inner">どちらも楽しめるおうち</span>
                    </span>
                  </h3>
                  <div class="p-popular_card-data">
                    <table class="p-popular_card-table">
                      <tr class="p-popular_card-table_row">
                        <th class="p-popular_card-table_head"><span>期間</span></th>
                        <td class="p-popular_card-table_body">毎日公開中!<small>(水・木を除く)</small></td>
                      </tr>
                      <tr class="p-popular_card-table_row">
                        <th class="p-popular_card-table_head"><span>住所</span></th>
                        <td class="p-popular_card-table_body">札幌市厚別区上野幌1条4丁目7番20号</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <p class="p-popular_card-more">物件を見てみる</p>
              </a>
            </li>
          </ul>
        </div>
        <div>
          <a class="p-popular_link-btn" href="#a-models">物件をすべて見る</a>
        </div>
      </div>
    </section>
    <!-- /#a-popular -->

    <!-- empathy -->
    <?php require_once (INCLUDE_PATH . '/parts/empathy.php'); ?>
    <!-- /empathy -->

    <section id="a-reserve-merit" class="p-reserve-merit">
      <div class="p-reserve-merit_inner">
        <h2 class="p-reserve-merit_title">
          <small><?= $page_area_name ?>の注文住宅検討にあたっての</small><br>
          ご来場予約のメリット
        </h2>
        <?php require_once (INCLUDE_PATH . '/parts/reserve-merit.php'); ?>
      </div>
    </section>
    <!-- /#a-reserve-merit -->

    <div id="a-toc" class="p-toc">
      <div class="p-toc_container">
        <h2 class="p-toc_title">目次</h2>
        <ul class="p-toc_list">
          <li class="p-toc_list-item">
            <a href="#a-reason" class="p-toc_list-link">ロゴスホームが選ばれる理由</a>
          </li>
          <li class="p-toc_list-item">
            <a href="#a-models" class="p-toc_list-link"><span class="p-toc_list-link_label">NEW</span>新着モデルルーム</a>
          </li>
          <li class="p-toc_list-item">
            <a href="#a-popular" class="p-toc_list-link">人気のモデルハウスTOP3</a>
          </li>
          <li class="p-toc_list-item">
            <a href="#a-works" class="p-toc_list-link">施工事例</a>
          </li>
          <li class="p-toc_list-item">
            <a href="#a-voice" class="p-toc_list-link">お客様の声</a>
          </li>
          <li class="p-toc_list-item">
            <a href="#a-area-info" class="p-toc_list-link">エリア情報</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /#a-toc -->

    <section id="a-omakase" class="p-omakase">
      <div class="p-omakase_inner">
        <div class="c-section-title_md">
          <h2 class="c-section-title_md-main" style="color: #45a33c;"><?= $page_area_name ?>の<br class="sp">注文住宅・新築一戸建ては<br>ロゴスホームにお任せ下さい。</h2>
        </div>
        <p class="p-omakase_text">
          札幌の注文住宅、新築一戸建てはロゴスホームにお任せください。<br>
          北海道の寒い冬でも暖かく過ごせる住宅性能に加え、月々の負担を軽減する省エネ住宅を、北海道で働く誰もが手の届く価格設定にこだわってご提供しています。<br>
          オープンハウスやモデルハウスは、吹き抜け・インナーガレージ・平屋などお客様の趣向に沿った等身大の住宅です。ぜひご覧ください。
        </p>
      </div>
    </section>
    <!-- /#a-omakase -->

    <section id="a-works-count" class="p-works-count">
      <div class="l-inner">
        <div class="p-works-count_container">
          <h2 class="p-works-count_title"><?= $page_area_name ?>の<br class="pc">施工実績</h2>
          <p class="p-works-count_count">
            <small class="p-works-count_count-sub">累計施工件数</small>
            <strong class="p-works-count_count-main">885</strong>
            <span class="p-works-count_count-unit">件</span>
          </p>
        </div>
        <div class="p-works-count_notice">
          <p class="p-works-count_notice-text">（～2023年12月31日）</p>
        </div>
      </div>
    </section>
    <!-- /#a-works-count -->

    <section id="a-reason" class="p-reason u-mb-80-pc">
      <div class="p-reason_inner">
        <div class="c-section-title_md">
          <h2 class="c-section-title_md-main"><?= $page_area_name ?>でロゴスホームが選ばれる理由</h2>
        </div>
        <ol class="p-reason_list">
          <li class="p-reason_item">
            <h3 class="p-reason_item-title">高品質であること</h3>
            <p class="p-reason_item-text">
              私たちはお客様から契約をいただくだけで、実際の現場での施工を下請け業者に丸投げするような仕事はいたしません。<br>
              現場職人さんと直にやりとりをし、責任持ってお客様の声を伝えていますので、どの現場でも私たちと同じ意識をもって工事に取り組んでいます。<br>
              実際に現場で家づくりを行う棟梁や技術者を中心に、品質向上委員会を結成し、厳しい品質検査や技術の改善を行っています。より高品質な家づくりのため、地域No.1の施工チームを目指し、常に真剣に取り組んでいます。
            </p>
          </li>
          <li class="p-reason_item">
            <h3 class="p-reason_item-title">適正価格であること</h3>
            <p class="p-reason_item-text">
              注文住宅の価格は非常にわかりづらいものです。<br>
              たとえば最初に大きめの金額を入れておき、お客様の顔色をみながら「値引き」する。それは安くなったように錯覚するかもしれませんが、不誠実なビジネスだと思います。<br>
              ロゴスホームでは最低限必要な利益は、どのお客様からも公平にいただきますが、それ以上のものは決していただきません。<br>
              すべてのお客様に、少しでも良いものをできるだけ価格を抑えてご提供したいと、常に会社全体の組織やシステムを見直し、改善し、透明性の高い料金システムによる家づくりに取り組んでいます。
            </p>
          </li>
          <li class="p-reason_item">
            <h3 class="p-reason_item-title">パートナーであること</h3>
            <p class="p-reason_item-text">
              私たちは「家づくり」を単に家を建てるだけではなく「幸せな暮らし」をお届けする仕事だと考えています。そのために専門性の高い部門別のスタッフによる「チーム制」を導入。<br>
              設計士やインテリアコーディネーターをはじめ、各分野の専属スタッフが高いプロ意識をもって、より満足いただけるご提案にベストを尽くします。<br>
              お引き渡し後も、定期的なアフターメンテナンスはもちろん、家づくりに関わったスタッフがお伺いする感謝訪問やOB感謝祭など、お客様とのつながりを大切に「幸せな暮らし」を一緒につくるパートナーを目指しています。
            </p>
          </li>
        </ol>
      </div>
    </section>
    <!-- /#a-reason -->

    <article id="a-models" class="p-models">
      <div class="p-models_inner">
        <div class="c-section-title_md">
          <h2 class="c-section-title_md-main"><?= $page_area_name ?>の<br class="sp">モデルハウス・<br class="sp">オーナー様邸</h2>
        </div>

        <div class="p-models_list">

          <section id="a-house1041" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
              <div class="p-models_item-intro">
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon">
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
                  </div>
                  <div class="p-models_item-intro_content">
                    <h3 class="p-models_item-title u-text-align-left-pc">
                      夢を叶える2Fリビングのお家
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/house1041/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    東区本町2条2丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                    毎日公開中！
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">OPEN HOUSE</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">札幌市東区本町2条2丁目1番2号
                  </td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木を除く) 10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/event/sapporo/32003/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=32003" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  夢を叶える<br>
                  2Fリビングのお家
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1041/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        明るくて開放的！<br>
                        こだわりの2Fリビング

                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        限られた土地でも開放感のあるリビングを作りたい方必見！
                        2Fにリビングをもうけることで日当たりをしっかり確保し、26.6帖のゆとりあるリビングダイニングを実現しています。階段吹き抜けやアイランドキッチンによって、より開放的な空間となっています。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1041/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        シューズクロークと<br>
                        冬でも楽ちん♪室内物置
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        玄関脇にはシューズクロークがあり、家族の靴をたっぷり収納できます。
                        また、シューズクロークの奥には物置があります。家の中に物置があることで、厳しい冬のシーズンでも物の出し入れがラクラク！大変使いやすい間取りとなっています。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1041/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        将来は2部屋に。<br>
                        間仕切り可能な子ども部屋
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        1Fには約10帖の部屋があり、子ども部屋として利用できます。将来的に部屋を分けることを想定した設計になっていて、子どもの成長に合わせて間仕切りが可能です。
                        また、収納はあえて扉をつけず、整理整頓が身に付きやすいオープンクローゼットとなっていて、子育て世帯にもオススメのつくりです。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1041/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        生活感を隠す<br>
                        スッキリ収納術
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        ウォークインクローゼット、パントリー、階段下収納、ファミリークローゼットなど各所に収納が充実しています。物が多くても生活感を出さずに大容量の収納が可能です。主寝室のウォークインクローゼットは2つあり、夫婦別に分けることで朝の身支度がスムーズになります。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1041/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        家事がはかどる♪<br>
                        便利な回遊動線
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        2Fはキッチン、トイレ、独立洗面台、ユーティリティ、リビングと回遊してアクセスできる動線になっています。朝の忙しい時間でも同時進行で家事ができるので、おうち時間がより快適になりそうですね♪
                      </p>
                    </div>
                  </div>
                  <p class="p-models_item-annotaition"><small>※設備仕様のイメージ写真です。実際の建物とは異なります。</small></p>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌北</p>
                <a href="tel:011-775-4126" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-775-4126</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d728.5289173228838!2d141.3817952!3d43.0810635!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2947f9c47c5b%3A0x6a91b066989d84eb!2z44CSMDY1LTAwNDIg5YyX5rW36YGT5pyt5bmM5biC5p2x5Yy65pys55S677yS5p2h77yS5LiB55uu77yR4oiS77yS!5e0!3m2!1sja!2sjp!4v1718607446770!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/zZxFfXTXxfhumELT8" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/event/sapporo/32003/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=32003" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house1041 -->




          <section id="a-house1031" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
              <div class="p-models_item-intro">
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon">
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
                  </div>
                  <div class="p-models_item-intro_content">
                    <h3 class="p-models_item-title u-text-align-left-pc">
                      デザイン性と利便性を<br>兼ね備えたガレージ付きハウス
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/house1031/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    南区石山1条2丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">OPEN HOUSE</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">札幌市南区石山1条2丁目5番5号</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/event/sapporo/31725/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=31725" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  デザイン性と利便性を兼ね備えた<br>
                  ガレージ付きハウス
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1031/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        車好きのための<br>
                        ビルトインカーポート
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        車好きの方必見♪2台駐車可能な広々としたビルトインカーポートです。<br>
                        玄関ホールには大きな窓があり、いつでも愛車を室内から眺めて楽しむことができます。また、カーポートと玄関がつながっているため、雨や雪の日でも濡れることなく室内に入ることができて大変便利です。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1031/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        形状も光も。<br>
                        こだわりぬいた家設計
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        土地の形状に合わせて設計し、敷地をめいっぱい活用したお家となっています。<br>
                        南に面したリビングダイニングは、日中の自然光がたっぷりふりそそぎ、明るくて開放的♪大きな庭がさらに心地のよい空間を演出しています。<br>
                        また、各所の天井クロスに木目を使用し、温かみのあるナチュラルな雰囲気となっています。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1031/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        開放的で使いやすい！<br>
                        広々23帖のLDK
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        キッチンと横並びに配置したダイニングは、配膳や片付けにとても便利♪<br>
                        大勢の来客時でも広々と使えるリビングに加え、子どもが遊んでいる様子を見守れるオープンキッチンで安心です。<br>
                        大きなパントリーに冷蔵庫を配置することで、リビングから見るキッチンはまるでバーのようなおしゃれ空間になります。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1031/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        生活感を隠しても<br>
                        暮らしやすい間取り
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        1Fの廊下がガレージの内窓からまっすぐ伸び、玄関・洗面所・ランドリールームと直線状に配置することで、統一感が出るだけでなく使いやすい動線となっています。<br>
                        間玄関横のシューズクロークは、キャンプギアなども収納できる余裕の広さ！独立したランドリールームでは、洗濯から乾燥まで1部屋で完結するなど、暮らしがスムーズになる工夫がたくさん詰まっています。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1031/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        プライベート充実。<br>
                        家族それぞれの空間
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        2Fの約8帖の主寝室と広々3帖のWICの奥には、秘密の部屋があります。書斎としても利用できるおこもり空間です。<br>
                        また、子ども部屋や趣味スペースにもなる約6帖の部屋が2つあり、家族それぞれのプライベートをしっかり考え抜いたつくりとなっています。
                      </p>
                    </div>
                  </div>
                  <p class="p-models_item-annotaition"><small>※設備仕様のイメージ写真です。実際の建物とは異なります。</small></p>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌南</p>
                <a href="tel:011-558-3276" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-558-3276</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d5838.4426701144475!2d141.341861!3d42.973611!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDLCsDU4JzI1LjAiTiAxNDHCsDIwJzMwLjciRQ!5e0!3m2!1sja!2sjp!4v1717986284339!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/wHxvtuSEiUYsrhsMA" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/event/sapporo/31725/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=31725" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house51 -->

          <section id="a-house51" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-icons">
              <div class="p-models_item-icon">
                <img width="113" height="113" src="/cmn_assets/images/model-icon/icon_no1.png" alt="人気NO.1" loading="lazy" />
              </div>
            </div>
            <div class="p-models_item-inner">
              <div class="p-models_item-intro">
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon">
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
                  </div>
                  <div class="p-models_item-intro_content">
                    <h3 class="p-models_item-title u-text-align-left-pc">
                      カタヅク・カクセル・カクレル。キレイを保てる家
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/house51/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    石狩市花川南9条1丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">MODEL HOUSE</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">石狩市花川南9条1丁目87番6</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/sapporo/hanakawa/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/sapporo/hanakawa/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  カタヅク・カクセル・カクレル。<br>
                  キレイを保てる家
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house51/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        クローゼットがサポート！<br>
                        カタヅク生活習慣
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        お出かけ前や帰宅後にサッと準備が出来るよう、ご家族の出入りの動線上にクローゼットを配置しました。<br>
                        定位置を決めて散らかさない工夫をすることで、自然とカタヅク習慣が生まれます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house51/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        背面収納で美しく整う<br>
                        オープンキッチン
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        冷蔵庫も家電もまるっと隠せる背面収納で、急な来客時にも扉を締めればスッキリ隠せます。<br>
                        オープンなアイランドキッチンでも、背面収納と合わせる事で整然とした見た目を維持できますね。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house51/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        スタディカウンターで<br>
                        勉強も家事も快適に
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        ダイニングにはスタディカウンターを造作しました。こじんまりと独立した空間は、落ち着いて勉強に取り組むことができ、ダイニングテーブルを独占することもないため、ママの家事もはかどります。<br>
                        また、リビングから見えない位置に収納棚を設置することで、いつでもすっきり整います。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house51/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        開放感×収納力！<br>
                        リビング続きの小上がり
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        リビング続きの小上がり下と階段下に収納を配置しました。お子様のおもちゃ等、なにかと物が増えがちな共有空間でもさっと片付けることができます。<br>
                        間仕切りの無い、開放感ある小上がりでリラックスタイムを。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house51/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        心ゆくまで読書に没頭！<br>
                        漫画喫茶のような快適空間
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        2階には家族みんなで使えるファミリーライブラリーを設置しました。<br>
                        さらに本棚の奥には、 小上がり＋マットを敷いたカクレル書斎が！漫画喫茶のような快適空間で、読書に没頭できます。
                      </p>
                    </div>
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌北</p>
                <a href="tel:011-775-4126" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-775-4126</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1455.5752535912457!2d141.276704!3d43.1433687!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDA4JzM1LjkiTiAxNDHCsDE2JzM2LjYiRQ!5e0!3m2!1sja!2sjp!4v1716452506654!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/ChBTLGv4tosCywjK7" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/sapporo/hanakawa/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/sapporo/hanakawa/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house51 -->

          <section id="a-house62" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
                 <div class="p-models_item-intro">
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon">
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
                  </div>
                  <div class="p-models_item-intro_content">
                    <h3 class="p-models_item-title u-text-align-left-pc">
                    インドア・アウトドア<br>どちらも楽しめるおうち
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/house62/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    上野幌1条4丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">MODEL HOUSE</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">札幌市厚別区上野幌1条4丁目7番20号</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/sapporo/kaminopporo/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/sapporo/kaminopporo/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  インドア・アウトドア<br>
                  どちらも楽しめるおうち
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house62/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        リビングとつながる<br>
                        開放的な土間空間
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        アウトドア好きにはたまらない、リビングとつながる土間が魅力！22帖の広いLDKに土間がプラスされ、圧倒的な開放感のある空間となります。土間から続くウッドデッキもあり、椅子を置いてくつろいだり、BBQも楽しめます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house62/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        至福のおこもり時間。<br>
                        階段下ヌック
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        階段下には本好きにはたまらないおこもりスペースがあります。ふわふわなクッションに腰掛けながらゆったりくついで、おうち時間をのんびり楽しめますね。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house62/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        おうちのポイントとなるアイランドキッチンは、広さも使いやすさも兼ね備えた豪華なつくりです。おしゃれなキッチンは料理のやる気UP間違いなし！家族時間も来客時も、料理が楽しくなりそうですね。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house62/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        自由にカスタマイズ！<br>
                        キッチン横スペース
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        キッチン横には1坪のフリースペースがあります。パントリーとして使用したり、家事スペースや趣味空間にしたりと、暮らしに合わせてカスタマイズできます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house62/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        シアター空間に早変わり！<br>
                        優雅にくつろぐ2Fホール
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        階段を上がってすぐのホールには、大きなシアタースペースがあります。吹き抜けの壁をスクリーン代わりに投影することでホール全体が映画館に！家族みんなでソファーに座りながら映画鑑賞したり、優雅な時間が楽しめます。
                      </p>
                    </div>
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌南</p>
                <a href="tel:011-558-3276" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-558-3276</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2917.1013435854616!2d141.474356!3d43.018254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2bb41def1923%3A0x36d0532a99ed6160!2z44OU44Ki44OR44O844KvTlk!5e0!3m2!1sja!2sjp!4v1716540627741!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/BHh3bVWvk2dLaMTu6" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/sapporo/kaminopporo/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/sapporo/kaminopporo/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house40 -->

          <section id="a-house40" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
               <div class="p-models_item-intro">
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon">
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
                  </div>
                  <div class="p-models_item-intro_content">
                    <h3 class="p-models_item-title u-text-align-left-pc">
                    好きと暮らす。お家サウナも<br>できる自慢のお家。
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/house40/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    岩見沢市7条西5丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">MODEL HOUSE</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">岩見沢市7条西5丁目5番10</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/sapporo/iwamizawa/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/sapporo/iwamizawa/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  好きと暮らす。<br>
                  お家サウナもできる自慢のお家。
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house40/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        吹き抜け×鉄骨階段<br>
                        お庭も見渡せる開放的なLDK
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        LDKは22.5帖で広々とした空間。お庭も一望できる開放的なリビングは、自然との調和を楽しめる場所です。<br>
                        鉄骨階段が空間を広くおしゃれに演出し、吹き抜けが加わることでさらなる開放感が広がります。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house40/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        二の字型のキッチンで<br>
                        おしゃれに、楽しく！
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        二の字型のキッチンは、配膳がしやすく、一緒に料理も楽しむことができます。<br>
                        その上、おしゃれなデザインが魅力で、来客が多いご家族でも安心しておもてなしできます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house40/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        快適な玄関から始まる暮らし
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        玄関→パントリー→キッチンの動線が便利な理想の間取り。忙しい日常でもスムーズに動ける機能性と使いやすさが光る設計です。<br>
                        さらに、玄関には手洗いも完備。来客の多い方にも嬉しいサービスが詰まった家で、心地よい暮らしを実現します。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house40/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        夢がひろがる、自由な空間
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        2階フリースペースは、趣味に熱中する方にぴったりの空間。道具や装備品が増えても、ここでスッキリ収納できます。<br>
                        将来的には個室にも変更可能な柔軟なレイアウトが魅力。自分らしいライフスタイルを謳歌するためのスペースが、この2階に広がっています。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house40/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        心と体が喜ぶ新しい庭の楽しみ方
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        庭の一角に、流行りのテントサウナを設置できるスペースを設けました。テラスには屋根があるので、サウナチェアを置いて”整いスペース”にすることも♪テラスからはLDKだけではなくUTへも簡単に行き来できるので、水風呂も実現可能！<br>
                        BBQも楽しめるため、自然と一体化した贅沢なひとときが広がります。
                      </p>
                    </div>
                  </div>
                </div>
                <h3 class="p-models_item-details_floor-title">FLOOR PLAN</h3>
                <div class="p-models_item-details_floor-container">
                  <div class="p-models_item-details_floor-item">
                    <img src="./assets/images/models/house40/md01.jpg" alt="">
                  </div>
                  <div class="p-models_item-details_floor-item">
                    <img src="./assets/images/models/house40/md02.jpg" alt="">
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌北</p>
                <a href="tel:011-775-4126" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-775-4126</span>
                </a>
                <!-- <p class="p-models_item-profile">■所在地：滝沢市穴口305番16 ■交通：①いわて銀河鉄道「青山」駅 徒歩26分／②岩手県交通「西青山」停まで徒歩2分／③岩手県交通「境橋」停まで徒歩3分 ■学区：月が丘小学校（徒歩1分／約350m）・滝沢南中学校（徒歩34分／約2700m） ■地目：宅地 ■用途地域：第2種中高層住居専用地域 ■建ぺい率：60% ■容積率：200% ■道路：幅員南東側6.40ｍ公道 ■間取り：3LDK ■建物面積：1F: 46.26㎡（13.99坪） 2F: 47.07㎡（14.23坪）■延床: 93.33㎡（28.00坪） ■完成時期：2023年10月中旬 ■入居予定：応相談 ■建物状況：新築 ■構造：木造 ■工法：2x6工法 ■建築確認番号 第R05-1-0871-0号 ■駐車場：カースペース3台 ■設備：LDK 15帖以上／ウォークインクローゼット／システムキッチン／パントリー／IHクッキングヒーター／浄水器／浴室1坪以上／複層ガラス／オール電化／TVモニタ付きインターホン／省エネ給湯器</p>
                <div class="p-models_item-price">
                  <p class="p-models_item-price_label">- PRICE -</p>
                  <p class="p-models_item-price_title">建物+土地<br>（太陽光パネル、住宅設備、家具、カーテン、外構工事を含む）</p>
                  <p class="p-models_item-price_num">3,590<small>万円(税込)</small></p>
                  <p class="p-models_item-price_text">
                    月々70,798円 （ボーナス払 103,400円）<br>
                    自己資金：10万円/3,580万円お借入れ/岩手銀行/金利0.85％/借入期間40年
                  </p>
                </div> -->
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5816.997579512721!2d141.7645013!3d43.1990265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b4bcdd67b4173%3A0x81cf0c61dc6131ff!2z44CSMDY4LTAwMjcg5YyX5rW36YGT5bKp6KaL5rKi5biC77yX5p2h6KW_77yV5LiB55uu77yV!5e0!3m2!1sja!2sjp!4v1718253903929!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/nGnZd8HXijtE3kNF7" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/sapporo/iwamizawa/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/sapporo/iwamizawa/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house40 -->

          <section id="a-sh-sapporo-kita" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
              <div class="p-models_item-head">
                <h3 class="p-models_item-title">
                  ロゴスホーム札幌北ショールームで <br>
                  「十勝型住宅」「自分だけの居心地」を体感しよう！
                </h3>
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/sh-sapporo-kita/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    札幌北ショールーム
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">SHOW ROOM</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">札幌市北区屯田7条5丁目2−1</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/lp/sapporoshowroom/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/lp/sapporoshowroom/#sec08" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  札幌北ショールーム
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-kita/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        STANDARD MODEL ZONE
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        ロゴスホームの設備や構造がわかります。 床暖房や標準装備に触れることができます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-kita/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        ADVANCE MODEL ZONE
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        ロゴスホームの「快適さ」へのこだわりを体感。 家事動線・収納などの工夫がご覧いただけます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-kita/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        PREMIUM MODEL ZONE
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        趣味やライフスタイルに合わせた家づくり、 フルオーダーや自由設計の空間デザインが体感できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-kita/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        Kids Roomも完備！
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        お打ち合わせや内覧中にお子様が飽きることなくお過ごしいただけます。
                      </p>
                    </div>
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌北</p>
                <a href="tel:011-558-3276" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-775-4126</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2911.482801233805!2d141.334549!3d43.13639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b25eff2707a55%3A0xb8b2c5db8bcf6d0c!2z44Ot44K044K544Ob44O844Og5pyt5bmM5YyXIOOCt-ODp-ODvOODq-ODvOODoA!5e0!3m2!1sja!2sjp!4v1716543377619!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/xwmmhthumd6kY5GG9" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/lp/sapporoshowroom/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/lp/sapporoshowroom/#sec08" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-sh-sapporo-kita -->

          <section id="a-sh-sapporo-minami" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
              <div class="p-models_item-head">
                <h3 class="p-models_item-title">
                  一度に3つのおうちが見れる<br>
                  ロゴスホーム 札幌南ショールームで<br>
                  【十勝型住宅】自分だけの居心地を体感しよう！
                </h3>
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/sh-sapporo-minami/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    札幌南ショールーム
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">SHOW ROOM</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">札幌市清田区平岡3条6丁目2-18</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/event/sapporo/8464/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=8464" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  札幌南ショールーム
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-minami/pick01.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        リビングとつながる<br>
                        開放的な土間空間
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        ロゴスホームの設備や構造がわかります。 床暖房や標準装備に触れることができます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-minami/pick02.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        至福のおこもり時間。<br>
                        階段下ヌック
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        ロゴスホームの「快適さ」へのこだわりを体感。 家事動線・収納などの工夫がご覧いただけます。階段下には本好きにはたまらないおこもりスペースがあります。ふわふわなクッションに腰掛けながらゆったりくついで、おうち時間をのんびり楽しめますね。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-minami/pick03.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        趣味やライフスタイルに合わせた家づくり、 フルオーダーや自由設計の空間デザインが体感できます。
                      </p>
                    </div>
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム 札幌南</p>
                <a href="tel:011-558-3276" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-558-3276</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1459.1277281913995!2d141.4584894!3d42.9939552!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDLCsDU5JzM4LjciTiAxNDHCsDI3JzMwLjUiRQ!5e0!3m2!1sja!2sjp!4v1716542621789!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/v8C1PJnTQeHJQGuB8" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/event/sapporo/8464/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=8464" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-sh-sapporo-minami -->

          <section id="a-classium" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
              <div class="p-models_item-head">
                <h3 class="p-models_item-title">
                  住まいの基本を知るためのセンターハウスと、<br class="pc">
                  一度に6棟見学できるモデルハウスを見て、<br class="pc">
                  今の自分にぴったりな家づくりを体感しよう！
                </h3>
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/models/classium/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    北海道クラシアム
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      毎日公開中!
                    </span>
                    <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span>
                  </p>
                  <p class="p-models_item-lead_label">SHOW ROOM</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">札幌市北区新琴似7条9丁目6-18</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00（※完全予約制）</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">駐車場</th>
                  <td class="p-models_item-data_body">あり(台数に制限有)</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://hokkaidoclassium.jp/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://hokkaidoclassium.resv.jp/reserve/calendar.php" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  北海道クラシアム
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick01.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        リビングとつながる<br>
                        開放的な土間空間
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        北海道で家を建てようと考えているすべての人に、まずご覧になっていただきたい動画を常時OAしています。ロゴスホールディングスが考える家づくりについてのプレゼンテーションはもちろんのこと、今、建てるべき家のヒントがきっと見つかります。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick02.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        至福のおこもり時間。<br>
                        階段下ヌック
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        「耐震等級」とは地震に対する建物の強度を示す指標のひとつで、耐震性能によってランクが3段階に分かれています。「耐震等級3」の家は、どれくらいの揺れに耐えうるのか。実際に体験できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick03.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        「太陽光パネルはどれくらいの電気量を発電できる？」そんなギモンに応えるべく、お客様自らが自転車を漕いで発電体験！電気を作るために必要なパワーを体感できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick04.jpg" alt="">
                      </div>
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4> -->
                      <p class="p-models_item-slider_slide-text">
                        家づくりに登場する「UA値」とは、住宅内部から床や天井、開口部などを通過して外部へ逃げる熱量を数値化したもの。一般的な建売住宅と、ZEH仕様の家を比較&体験してみましょう。
                      </p>
                    </div>
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：北海道クラシアム</p>
                <a href="tel:011-557-8788" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">011-557-8788</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1681.1573550737023!2d141.3218464572613!3d43.117330903245765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2938afac73c3%3A0x498562a47dcb2de8!2z5YyX5rW36YGT44Kv44Op44K344Ki44Og!5e0!3m2!1sja!2sjp!4v1716545070173!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/gS2f9inv5WDnM4mPA" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://hokkaidoclassium.jp/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://hokkaidoclassium.resv.jp/reserve/calendar.php" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-classium -->

        </div>

      </div>

    </article>
    <!-- /#a-models -->



    <!-- pickup -->
    <?php
    $showHCLinks = false;
    require_once (INCLUDE_PATH . '/parts/pickup.php');
    ?>
    <!-- /pickup -->

    <section id="a-works" class="p-works">
      <div class="l-inner p-works_inner">
        <div class="c-section-title_md">
          <h2 class="c-section-title_md-main"><?= $page_area_name ?>の施工事例</h2>
        </div>
        <ul class="p-works_list">
          <li class="p-works_item">
            <a href="https://www.logoshome.jp/works/duo-tres/japanese-modern/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_japanese-modern.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">空間とデザインを楽しむ陽だまりの家</h3>
                <p class="p-works_item-link_subtitle">JAPANESE MODERN</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                  <li class="p-works_item-link_cat-item">#モダン</li>
                  <li class="p-works_item-link_cat-item">#タイル</li>
                  <li class="p-works_item-link_cat-item">#吹き抜け</li>
                </ul>
              </div>
            </a>
          </li>
          <li class="p-works_item">
            <a href="https://www.logoshome.jp/works/duo-tres/bow/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_bow.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">わんこと楽しく暮らす家</h3>
                <p class="p-works_item-link_subtitle">BOW</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                </ul>
              </div>
            </a>
          </li>
          <li class="p-works_item">
            <a href="https://www.logoshome.jp/works/duo-tres/comfortable-house/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_comfortable-house.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">建築士自ら設計した心地良い家</h3>
                <p class="p-works_item-link_subtitle">COMFORTABLE HOUSE</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                </ul>
              </div>
            </a>
          </li>
          <li class="p-works_item">
            <a href="https://www.logoshome.jp/works/duo-tres/book-cafe-style/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_book-cafe-style.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">ブックカフェスタイルの家</h3>
                <p class="p-works_item-link_subtitle">BOOK CAFE STYLE</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                </ul>
              </div>
            </a>
          </li>
          <li class="p-works_item">
            <a href="https://www.logoshome.jp/works/duo-tres/outdoor-style/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_outdoor-style.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">アウトドアスタイルの家</h3>
                <p class="p-works_item-link_subtitle">OUTDOOR STYLE</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                </ul>
              </div>
            </a>
          </li>
        </ul>
        <a href="https://www.logoshome.jp/works/" class="p-works_more-btn">もっと見る</a>
      </div>
    </section>
    <!-- /#a-works -->

    <section id="a-voice" class="p-voice">
      <div class="l-inner p-voice_inner">
        <div class="c-section-title_md">
          <h2 class="c-section-title_md-main"><?= $page_area_name ?>のお客様の声</h2>
        </div>
        <div class="p-voice_list js-voice-slider">
          <div class="p-voice_item">
            <a href="https://www.logoshome.jp/voice/no20/" class="p-voice_card">
              <div class="p-voice_card-head">
                <h2 class="p-voice_card-title">
                  パントリーやシューズクロークはじめ収納たっぷりの住まい
                </h2>
                <div class="p-voice_card-data">
                  <p class="p-voice_card-num">
                    <span class="p-voice_card-num_small">No.</span>
                    <span>20</span>
                  </p>
                  <p class="p-voice_card-name">札幌市 I様</p>
                </div>
              </div>
              <div class="p-voice_card-body">
                <div class="p-voice_card-thumb">
                  <img src="https://www.logoshome.jp/wp/wp-content/uploads/2023/07/ab635a71ce888a69dfb0214ab4c3a3bf-1024x683.jpg" alt="">
                </div>
                <div class="p-voice_card-desc">
                  <div class="p-voice_card-lead u-mb-20">
                    我が家の二階には広くて明るいリビング・ダイニング、<br>
                    手洗いカウンター、書斎、おしゃれなトイレなど<br>
                    こだわりがいっぱいです。
                  </div>
                  <p class="p-voice_card-btn pc u-font-bold">Interview</p>
                </div>
              </div>
              <p class="p-voice_card-btn sp u-font-bold">Interview</p>
            </a>
          </div>
          <div class="p-voice_item">
            <a href="https://www.logoshome.jp/voice/no17/" class="p-voice_card">
              <div class="p-voice_card-head">
                <h2 class="p-voice_card-title">
                  2階にリビング・ダイニング<br>快適性を随所に追求、20代で建てたこだわりの住まい
                </h2>
                <div class="p-voice_card-data">
                  <p class="p-voice_card-num">
                    <span class="p-voice_card-num_small">No.</span>
                    <span>17</span>
                  </p>
                  <p class="p-voice_card-name">札幌市 Y邸</p>
                </div>
              </div>
              <div class="p-voice_card-body">
                <div class="p-voice_card-thumb">
                  <img src="https://www.logoshome.jp/wp/wp-content/uploads/2022/09/b6c2b851c0645b9943fd28cab703a6ff-1024x683.jpg" alt="">
                </div>
                <div class="p-voice_card-desc">
                  <div class="p-voice_card-lead u-mb-20">
                    親身な対応が印象的な担当さんに出会い<br>
                    信頼して任せられました
                  </div>
                  <p class="p-voice_card-btn pc u-font-bold">Interview</p>
                </div>
              </div>
              <p class="p-voice_card-btn sp u-font-bold">Interview</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- p-area-info -->
    <article id="a-area-info" class="p-area-info">
      <div class="p-area-info_inner">
        <div class="p-area-info_head u-mb-10">
          <h2 class="c-article-title-l p-area-info_title"><?= $page_area_name ?>市の土地・不動産情報</h2>
          <!-- <p class="p-area-info_catch">札幌市で注文住宅を建てるならロゴスホームにご相談ください。</p> -->
        </div>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>市の坪単価相場</h3>
          <div class="p-area-info_section_inner">
            <p class="c-article-title-r u-mb-30 u-negmr-4rem-sp"><span>68万5081<small>円/坪 （※2024年［令和6年］ 公示地価）</small></span>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>市の土地・物件探しのポイント</h3>
          <div class="p-area-info_section_inner">
            <p>
              北海道の県庁所在地である札幌市は、人口約196万人の大都市で、10区（厚別区、北区、清田区、白石区、中央区、手稲区、豊平区、西区、東区、南区）から構成され、ビジネスや観光の中心地として発展しています。交通インフラはJR、地下鉄、バスが発達しており、札幌駅や大通駅を中心に市内外へのアクセスが良好です。新千歳空港へも直通バスや快速列車があり、交通の便が非常に良いです。高速道路や幹線道路も整備されており、車移動もスムーズです。<br>
              生活環境も充実しており、大型ショッピングモールやスーパー、コンビニが点在し、生活必需品の調達が容易です。病院も多数あり、安心して生活を送ることができます。豊平川や中島公園、円山公園など、自然を感じられる場所も多く、快適な生活が送れます。<br>
              最後に、不動産の状況もチェックする必要があります。札幌市内の土地価格は上昇傾向にあるため、予算に合わせて柔軟にエリアを選定することが重要です。これらのポイントを押さえて、自分に最適な土地・物件を見つけましょう。
            </p>
          </div>
        </section>
        <section class="p-area-info_section u-mb-40">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>市の新築一戸建てにおすすめのエリア</h3>
          <div class="p-area-info_section_inner">
            <h4 class="p-area-info_green-border-text">円山エリア</h4>
            <p class="u-mb-20">
              円山エリアは、高級住宅街であり、緑豊かな円山公園が近くにあります。学校や病院が揃っており、家族連れにも人気のエリアです。駅直結のショッピングモールがあり、買い物や外食に便利です。また、市営地下鉄東西線が利用できるため、通勤にも便利です。
            </p>
            <h4 class="p-area-info_green-border-text">琴似エリア</h4>
            <p class="u-mb-20">
              琴似エリアは、商業施設が充実しており、生活利便性が高いエリアです。JR琴似駅や地下鉄琴似駅が利用可能です。駅周辺は商業施設の集まる繁華街となっています。札幌西区役所や、西区民センター図書館など、公共施設も多く、子育て世帯にも適しています。
            </p>
            <h4 class="p-area-info_green-border-text">白石エリア</h4>
            <p class="u-mb-20">
              白石エリアは、住宅街として人気のエリアで、教育施設や公園が充実しています。地下鉄東西線やJRの駅があり、交通の便も良好です。大型スーパーやドラッグストアがあり、買い物に便利です。また、白石区民センターや図書館などの公共施設も豊富です。
            </p>
            <!-- <ul class="p-area-info_list">
              <li class="p-area-info_green-border-text"></li>
            </ul> -->
          </div>
        </section>

        <div class="p-area-info_head u-mb-10">
          <h2 class="c-article-title-l p-area-info_title"><?= $page_area_name ?>市の特徴</h2>
          <!-- <p class="p-area-info_catch">札幌市で注文住宅を建てるならロゴスホームにご相談ください。</p> -->
        </div>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>市について</h3>
          <div class="p-area-info_section_inner">
            <p>
              札幌市は北海道の道央地方に位置し道庁所在地になります。政令指定都市であり、10の区が置かれています。<br>
              北海道の政治・経済・文化の中心地であり、人口は約195万人であり、国内有数の大都市圏の一つです。<br>
              四季折々の自然が息づく中、冬季は豪雪地帯として有名であり、多様な冬のスポーツや温泉を楽しむことができます。<br>
              一方、夏季は涼しく爽やかな気候であり、豊かな自然環境に恵まれています。<br>
              観光名所としては、大通公園や円山動物園、さっぽろ羊ヶ丘展望台などが挙げられ、また美味しい海産物やラーメンなどの食文化も楽しむことができます。<br>
              さらに、札幌市は国際交流や文化イベントが盛んであり、北海道開拓の歴史やアート、音楽など多彩な面を持つ都市です。
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>市の教育・医療環境</h3>
          <div class="p-area-info_section_inner">
            <p>
              札幌市では平成21年度から「札幌らしい特色ある学校教育」を推進しています。<br>
              【雪】【環境】【読書】を中核をなす三つのテーマとして、全ての園・学校が共通に取り組むものです。<br>
              札幌の素晴らしい自然環境を生かしながら生涯にわたり学び・向上し続けようとする意欲を培うための<br>
              基盤となる学習活動を教育課程に明確に位置付け、知・徳・体の調和のとれた学びを推進しています。
            </p>
          </div>
        </section>
        <!-- <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">札幌市の歴史</h3>
          <div class="p-area-info_section_inner u-pt-20 u-pb-20">
            <table class="p-area-info_table">
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1876年</th>
                <td class="p-area-info_table-desc">官営の麦酒醸造所（現在のサッポロビールの前身）を設置</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1878年</th>
                <td class="p-area-info_table-desc">札幌農学校演武場（現在の札幌市時計台）完成</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1920年</th>
                <td class="p-area-info_table-desc">第1回国勢調査。札幌区の人口は102,580人であった</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1927年</th>
                <td class="p-area-info_table-desc">路面電車を市営化し、札幌市電発足</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1930年</th>
                <td class="p-area-info_table-desc">札幌市営バス運行開始</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1950年</th>
                <td class="p-area-info_table-desc">さっぽろ雪まつり初開催</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">1972年</th>
                <td class="p-area-info_table-desc">札幌オリンピック開催（2月3日から2月13日）</td>
              </tr>
              <tr class="p-area-info_table-row">
                <th class="p-area-info_table-head">2004年</th>
                <td class="p-area-info_table-desc">日本ハムファイターズが札幌へ移転し、北海道日本ハムファイターズ誕生</td>
              </tr>
            </table>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">札幌市の人口情報</h3>
          <div class="p-area-info_section_inner">
            <h4 class="c-article-title-r u-mb-30 u-negmr-4rem-sp"><span>1,972,202<small>人（令和4年12月1日現在）</small></span>
            </h4>
            <p>
              札幌市の人口は2008年に190万人を突破しており海に面していない市区町村では、日本一人口が多いです。<br>
              毎年人口が増え続けている理由として若い世代の進学先である大学や学校が多いことがあげられます。<br>
              また仕事の種類が多いことで仕事の選択肢が広がるという所で若い方も転入してくるという要素があります。<br>
              <br>
              <a class="p-area-info_green-border-text" href="https://www.city.sapporo.jp/toukei/jinko/jinko.html" target="_blank" rel="noopener noreferrer">※札幌市ホームページより</a>
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">札幌市の教育情報</h3>
          <div class="p-area-info_section_inner">
            <p>
              札幌市では平成21年度から「札幌らしい特色ある学校教育」を推進しています。<br>
              【雪】【環境】【読書】を中核をなす三つのテーマとして、全ての園・学校が共通に取り組むものです。<br>
              札幌の素晴らしい自然環境を生かしながら生涯にわたり学び・向上し続けようとする意欲を培うための<br class="pc">
              基盤となる学習活動を教育課程に明確に位置付け、知・徳・体の調和のとれた学びを推進しています。
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">札幌市の商業施設</h3>
          <div class="p-area-info_section_inner">
            <p>札幌市には多くの百貨店・ショッピングモールや買い物スポットが存在します。</p>
            <ul class="p-area-info_list">
              <li class="p-area-info_green-border-text">・三越伊勢丹(〒060-0061 北海道札幌市中央区南1条西3丁目8)</li>
              <li class="p-area-info_green-border-text">・大丸松坂屋百貨店(〒060-0005 北海道札幌市中央区北5条西4丁目7)</li>
              <li class="p-area-info_green-border-text">・東急百貨店(〒060-8619 北海道札幌市中央区北4条西2丁目)</li>
              <li class="p-area-info_green-border-text">・パルコ(〒060-8502 北海道札幌市中央区南1条西3丁目3)</li>
              <li class="p-area-info_green-border-text">・新さっぽろデュオ(〒004-0052 北海道札幌市厚別区厚別中央2条5丁目)</li>
            </ul>
            <p>ここで紹介した施設はごく一部で、札幌市内にはこの他にも複合施設が存在するため買い物には困りません。<br><br>
              そして普段使いに便利なスーパーも、もちろん揃っています。<br>
              様々な店舗が存在しますので食料品、日用品等の普段のお買い物も困らないので非常に生活はしやすい環境です。
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title">札幌市の自然と公園</h3>
          <div class="p-area-info_section_inner">
            <p class="u-mb-20">札幌市内には四季の移り変わりを実感しながら、のんびりできる公園が沢山存在します。</p>
            <h4><span class="p-area-info_green-border-text">・大通公園</span></h4>
            <p class="u-mb-40">・大通公園は長さ約1.5㎞にわたり、ライラックやケヤキなどの樹木をはじめ<br>
              季節折々の花を楽しむことができる花壇も。ベンチに座ってくつろぐ市民の姿も見られます。<br>
              冬はさっぽろ雪まつりやホワイトイルミネーションなどの様々な催しの会場でもある。
            </p>
            <h4><span class="p-area-info_green-border-text">・中島公園</span></h4>
            <p class="u-mb-40">中島公園は「日本の都市公園１００選」にも認定され、文化財の豊平館や八窓庵、<br>
              札幌コンサートホール「Kitara」、北海道立文学館などの文化施設もあります。<br>
              冬には、クロスカントリースキーを体験できます。
            </p>
          </div>
        </section> -->
      </div>
    </article>
    <!-- /.p-area-info -->

    <article class="about u-mb-10-pc">
      <?php require_once (INCLUDE_PATH . '/parts/about-company.php'); ?>
      <div class="about-store" id="LH_SAPPOROKITA">
        <div class="about-store_img"><img class="lazyload" data-src="./assets/images/about/about_store.jpg" alt="">
        </div>
        <div class="about-store_box js-fadein-item">
          <h3 class="about-store_name u-font-bold u-mb-20">ロゴスホーム 札幌北</h3>
          <div class="about-store_data">
            <dl class="about-store_item u-mb-20">
              <dt>所在地</dt>
              <dd>〒002-0857 北海道札幌市北区屯田7条5丁目2−1</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>TEL</dt>
              <dd>011-775-4126</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>FAX</dt>
              <dd>011-775-4127</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>営業時間</dt>
              <dd>10:00～18:00</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>定休日</dt>
              <dd>毎週水曜・木曜日 (祝日の場合は営業)</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>施工エリア</dt>
              <dd>札幌市(北区・東区・西区・手稲区・白石区・厚別区)、石狩市、江別市<br>
                ＜下記のエリアは遠方のため、別料金が発生します。＞ <br>
                小樽市、赤井川村、仁木町、当別町、余市町</dd>
            </dl>
          </div>
          <!-- <div class="c-sns-box">
            <a href="https://www.instagram.com/logos_home/" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/instagram_icon.png" alt="instagram"></a>
          </div> -->
          <div class="c-sns-box">
            <a href="https://www.logoshome.jp/shop/hokkaido/sapporo/" class="shop-detail-link">店舗詳細</a>
          </div>
        </div>
      </div>

      <div class="about-store" id="LH_SAPPOROMINAMI">
        <div class="about-store_img"><img class="lazyload" data-src="./assets/images/about/about_store02.jpg" alt="">
        </div>
        <div class="about-store_box js-fadein-item">
          <h3 class="about-store_name u-font-bold u-mb-20">ロゴスホーム 札幌南</h3>
          <div class="about-store_data">
            <dl class="about-store_item u-mb-20">
              <dt>所在地</dt>
              <dd>〒004-0873 札幌市清田区平岡3条6丁目2-18</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>TEL</dt>
              <dd>011-558-3276</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>FAX</dt>
              <dd>011-807-5014</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>営業時間</dt>
              <dd>10:00～18:00</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>定休日</dt>
              <dd>毎週水曜・木曜日 (祝日の場合は営業)</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>施工エリア</dt>
              <dd>札幌市(中央区・豊平区・清田区・南区・白石区・厚別区)、北広島市、南幌町、恵庭市<br>
                ＜下記のエリアは遠方のため、別料金が発生します。＞ <br>
                岩見沢市、三笠市・奈井江町、砂川市、美唄市、新篠津村</dd>
            </dl>
          </div>
          <!-- <div class="c-sns-box">
            <a href="https://www.instagram.com/logos_home/" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/instagram_icon.png" alt="instagram"></a>
          </div> -->
          <div class="c-sns-box">
            <a href="https://www.logoshome.jp/shop/hokkaido/sapporominami/" class="shop-detail-link">店舗詳細</a>
          </div>
        </div>
      </div>

      <!-- <div class="about-store" id="HC_SAPPORO">
        <div class="about-store_img pc"><img class="lazyload" data-src="./assets/images/about/about_store05.jpg" alt="">
        </div>
        <div class="about-store_box js-fadein-item">
          <h3 class="about-store_name u-font-bold u-mb-20">ハウジングカフェ札幌</h3>
          <div class="about-store_data">
            <dl class="about-store_item u-mb-20">
              <dt>所在地</dt>
              <dd>〒064-0953 札幌市中央区宮の森3条1丁目4-24</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>TEL</dt>
              <dd>011-555-3700</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>FAX</dt>
              <dd>011-640-4100</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>営業時間</dt>
              <dd>10:00～18:00</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>定休日</dt>
              <dd>毎週水曜・木曜日 (祝日の場合は営業)</dd>
            </dl>
            <dl class="about-store_item u-mb-20">
              <dt>施工エリア</dt>
              <dd>札幌市、江別市、北広島市、小樽市、石狩市、当別町<br>
                ＜下記のエリアは遠方のため、別料金が発生します。＞ <br>
                岩見沢市、南幌町、新篠津村、余市町、仁木町、美唄市、赤井川村、三笠市、砂川市、奈井江町</dd>
            </dl>
          </div>
          /* <div class="c-sns-box">
            <a href="https://www.instagram.com/logos_home/" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/instagram_icon.png" alt="instagram"></a>
          </div>*/
          <div class="c-sns-box">
            <a href="https://housingcafe.jp/shop/sapporo/" class="shop-detail-link" target="_blank" rel="noopener">店舗詳細</a>
          </div>
        </div>
      </div> -->
    </article>
  </main>
  <!-- /main -->
  <!-- footer -->
  <?php require_once (INCLUDE_PATH . '/footer.php'); ?>
  <!-- /footer -->
</body>

</html>