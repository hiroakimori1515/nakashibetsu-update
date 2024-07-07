<?php
require_once (dirname(__FILE__) . '/../cmn_assets/inc/config.php');
require_once (INCLUDE_PATH . '/parts/campaign/base/index.php');
$page_title = "中標津町の注文住宅なら 北海道着工数No1ハウスメーカーの【ロゴスホーム】";
$page_description = "北海道中標津町でローコスト注⽂住宅を建てるならハウスメーカーのロゴスホームにお任せ下さい。おかげさまで北海道住宅着⼯数No.1「創エネ」「省エネ」新築住宅・⾒学会のイベント随時開催中。お気軽にお問い合わせください。";
$pageUrl = 'https://www.logoshome.jp/nakashibetsu/';
$page_area_name = '中標津';
$isNewAreaLp = true;

$localCSS = array(
  './assets/css/style.css?240207',
  './assets/css/add.css?231113',
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
              <img src="./assets/images/mv/mv_main01.png" alt="<?= $page_area_name ?>町の注文住宅">
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
        'text' => $page_area_name . '町の注文住宅',
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
          <!-- <li class="p-toc_list-item">
            <a href="#a-voice" class="p-toc_list-link">お客様の声</a>
          </li> -->
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
          中標津町の注文住宅、新築一戸建てはロゴスホームにお任せください。<br>
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
            <strong class="p-works-count_count-main">115</strong>
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

          <section id="a-house1013" class="p-models_item js-models_item-accordion_parent">
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
                      軽量性・断熱性に優れたガルバリウムのお家
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/model-list/house1013/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    中標津町東10条南9丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      7月20日(土)よりGRAND OPEN！
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
                  <td class="p-models_item-data_body">中標津町東10条南9丁目1番13
                  </td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">7月20日(土)よりGRAND OPEN！(水・木を除く) 10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/event/nakashibetsu/31442/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=31442" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  軽量性・断熱性に優れたガルバリウムのお家
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1013/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        すぐ収納で家事ラク！<br>ランドリールーム
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        2Fには物干しとカウンターを備えたランドリールームがあります。カウンターで乾いた洗濯物を畳んだり、アイロン掛けをしたり自由に活用できます。そのまま隣のウォークインクローゼットに収納できるので、家事が楽にはかどります♪
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1013/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        お出かけ時に便利♪<br>玄関ホールベンチ
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        玄関にはベンチを設置し、外出時や帰宅時の靴の脱ぎ履きが楽に行えます。ゆっくり座れるベンチがあることで、子どもや年配の方にもやさしいつくりとなっています。
                      また、ベンチの下がオープンになっていてよく着用する靴などを置くことができます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1013/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        可動棚付き<br>シューズクローク
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        玄関横には、自由にアレンジして収納できる可動棚付きのシューズクロークをもうけています。洋服掛けもあるので、濡れた雨具を干したりよく使う上着をかけたり、外出・帰宅時に大変便利です♪
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1013/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        スムーズに暮らす。<br>こだわりの回遊動線
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        玄関から洗面化粧台にすぐアクセスできる間取りとなっています。帰宅時にリビングを通らずすぐ手洗い・うがいができる動線なので、感染症予防など衛生面でも安心です。<br>
                        また、2Fのウォークインクローゼットは、ランドリールームや居室からもアクセス可能で、収納や着替えがスムーズに行えます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house1013/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        オール電化でも安心♪<br>太陽光発電
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        太陽光パネルを標準装備しています。太陽光発電があることで、オール電化のお家でも電気代がお得になり安心です！<br>
                        また、売電で収入を得られる場合もあるので家計にやさしくオススメです♪
                      </p>
                    </div>
                  </div>
                  <p class="p-models_item-annotaition"><small>※設備仕様のイメージ写真です。実際の建物とは異なります。</small></p>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム中標津</p>
                <a href="tel:0153-73-1726" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">0153-73-1726</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d722.9542672432171!2d144.989345!3d43.547855!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDMyJzUyLjMiTiAxNDTCsDU5JzIxLjYiRQ!5e0!3m2!1sja!2sus!4v1718245566497!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/3rZcpL2HAyPTeC4W6" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/event/nakashibetsu/31442/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=31442" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house1013 -->




          <section id="a-house01" class="p-models_item js-models_item-accordion_parent">
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
                      オーナー様邸暮らしの見学会
                    </h3>
                  </div>
                </div>
                
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="./assets/images/model-list/house01/top.png" loading="lazy" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    中標津町東13条南3丁目
                  </p>
                  <p class="p-models_item-lead_title">
                    <span class="p-models_item-lead_title-main">
                      完全予約制！
                    </span>
                    <!-- <span class="p-models_item-lead_title-sub">
                      (水・木を除く)
                    </span> -->
                  </p>
                  <p class="p-models_item-lead_label">OPEN HOUSE</p>
                </div>
              </div>
              <table class="p-models_item-data">
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">住所</th>
                  <td class="p-models_item-data_body">標津郡中標津町東13条南3丁目</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">完全予約制！※ご見学希望日時は要相談</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/event/nakashibetsu/10976/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=10976" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  オーナー様邸暮らしの見学会
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house01/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        趣味のバイクやBBQのための夫婦の空間
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        旦那様のご趣味でもあるバイクにいつでも触れることができるように室内からの動線を考えました。また、ガレージではお天気に左右されることなくBBQも楽しむことができます♪
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house01/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        リビング上部に大きな吹き抜け<br>開放感と日当たり
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        日当たりがよく、趣味のものを置くリビングも圧迫感を感じることなく過ごすことが出来ます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house01/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        ストレートのLDKと続き間
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        来客が多いことから、来客時は客間として使用するために設けました。普段は開放して使うことでより快適に過ごすことが出来ます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house01/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        家族で使える収納であり、籠ってテレワークも可能
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        洗濯⇒干す⇒収納という一直線で家事が完結できるように配置しました。また、3帖と広いスペースのため、籠ってテレワークスペースとしても活用できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/house01/pick05.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        夫婦でしっかり分けて使える6帖のWIC
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        アウトドア用品やバンドグッズなど共通の趣味が多いため、6帖程の広さの収納スペースを確保しました。6帖あれば収納に困らず、今後グッズが増えても安心ですね♪
                      </p>
                    </div>
                  </div>
                  <p class="p-models_item-annotaition"><small>※設備仕様のイメージ写真です。実際の建物とは異なります。</small></p>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム中標津</p>
                <a href="tel:0153-73-1726" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">0153-73-1726</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d721.6498307239161!2d145.0207548292534!3d43.65650396897282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa231147652846137!2zNDPCsDM5JzIzLjQiTiAxNDXCsDAxJzE2LjciRQ!5e0!3m2!1sja!2sjp!4v1667874612229!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://goo.gl/maps/z2jwHjJY3oGg1Cis7" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/event/nakashibetsu/10976/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=10976" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /#a-house01 -->

          <!-- <section id="a-house51" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-icons">
              <div class="p-models_item-icon">
                <img width="113" height="113" src="/cmn_assets/images/model-icon/icon_no1.png" alt="人気NO.1" loading="lazy" />
              </div>
            </div>
            <div class="p-models_item-inner">
              <div class="p-models_item-intro"> -->
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <!-- <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon"> -->
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <!-- <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
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
          </section> -->
          <!-- /#a-house51 -->

          <!-- <section id="a-house62" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
                 <div class="p-models_item-intro"> -->
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <!-- <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon"> -->
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <!-- <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
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
          </section> -->
          <!-- /#a-house40 -->

          <!-- <section id="a-house40" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
               <div class="p-models_item-intro"> -->
                <!--<p class="p-models_item-intro_catch">お隣同士<strong>２棟同時見学</strong>可能！</p>-->
                <!-- <div class="p-models_item-intro_inner">
                  <div class="p-models_item-intro_icon"> -->
                    <!-- <img src="/cmn_assets/images/common/icon_kikaku.png" alt="企画住宅"> -->
                    <!-- <img src="/cmn_assets/images/common/icon_order.png" alt="フルオーダー住宅">
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
                </a> -->
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
                <!-- <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5816.997579512721!2d141.7645013!3d43.1990265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b4bcdd67b4173%3A0x81cf0c61dc6131ff!2z44CSMDY4LTAwMjcg5YyX5rW36YGT5bKp6KaL5rKi5biC77yX5p2h6KW_77yV5LiB55uu77yV!5e0!3m2!1sja!2sjp!4v1718253903929!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://maps.app.goo.gl/nGnZd8HXijtE3kNF7" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/sapporo/iwamizawa/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/sapporo/iwamizawa/#a-reservation" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section> -->
          <!-- /#a-house40 -->

          <section id="a-lh" class="p-models_item js-models_item-accordion_parent">
            <div class="p-models_item-inner">
              <div class="p-models_item-head">
                <h3 class="p-models_item-title">
                  SHOW ROOM<br>ロゴスホーム中標津<br>ショールーム
                </h3>
              </div>
              <div class="p-models_item-lead">
                <div class="p-models_item-thumb">
                  <img src="/cmn_assets/images/model-list/model_logo_sr17.png" alt="">
                </div>
                <div class="p-models_item-lead_content">
                  <p class="p-models_item-lead_address">
                    ロゴスホーム中標津ショールーム
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
                  <td class="p-models_item-data_body">標津郡中標津町東1条南10丁目2番地2-2</td>
                </tr>
                <tr class="p-models_item-data_row">
                  <th class="p-models_item-data_head">公開</th>
                  <td class="p-models_item-data_body">毎日公開中！(水・木除く)10:00～17:00</td>
                </tr>
              </table>
              <button type="button" class="p-models_item-open js-models_item-accordion_btn">内観を見る<span class="p-models_item-open_icon"></span></button>
            </div>
            <div class="p-models_item-links">
              <a href="https://www.logoshome.jp/event/nakashibetsu/121/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
              <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=121" class="p-models_item-links_btn-coral" target="_blank" rel="noopener">見学ご予約はこちら</a>
            </div>
            <div class="p-models_item-details js-models_item-accordion_details">
              <p class="p-models_item-details_banner">
                <img src="<?= $cpBannerB->getUrl(); ?>" alt="<?= $cpBannerB->getAlt(); ?>">
              </p>
              <div class="p-models_item-details_inner u-mb-60">
                <p class="p-models_item-details_title">
                  ロゴスホーム中標津ショールーム
                </p>
                <div class="p-models_item-slider">
                  <div class="p-models_item-slider_wrapper js-model-slider">
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/lh/pick01.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        住宅のプロとしてどんな些細なご不安も<br class="pc">しっかりお答えします！
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        ロゴスホームの設備や構造がわかります。 床暖房や標準装備に触れることができます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/lh/pick02.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        ショールームにご来場いただいたその場で<br class="pc">資金計画・土地・間取りのご提案も可能です♪
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        ロゴスホームの「快適さ」へのこだわりを体感。 家事動線・収納などの工夫がご覧いただけます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/lh/pick03.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        お客様と共に考えるための仕掛けがいっぱいです。
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        趣味やライフスタイルに合わせた家づくり、 フルオーダーや自由設計の空間デザインが体感できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/lh/pick04.jpg" alt="">
                      </div>
                      <h4 class="p-models_item-slider_slide-title">
                        スタッフ一同、皆様のお越しを心よりお待ちしております。
                      </h4>
                      <p class="p-models_item-slider_slide-text">
                        お打ち合わせや内覧中にお子様が飽きることなくお過ごしいただけます。
                      </p>
                    </div>
                  </div>
                </div>
                <p class="p-models_item-details_store-name"><strong>担当店舗</strong>：ロゴスホーム中標津</p>
                <a href="tel:0153-73-1726" class="p-models_item-details_tel">
                  <span class="p-models_item-details_tel-icon"><img src="/cmn_assets/images/common/icon_tel_white02.png" alt=""></span>
                  <span class="p-models_item-details_tel-num">0153-73-1726</span>
                </a>
                <div class="p-models_item-details_map js-async-map" data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5784.161560173537!2d144.981974!3d43.542358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f6da44d26add905%3A0x9ced7bf2fb51e010!2z44Ot44K044K544Ob44O844Og5Lit5qiZ5rSlIOOCt-ODp-ODvOODq-ODvOODoA!5e0!3m2!1sja!2sjp!4v1692612306843!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                </div>
                <div class="c-map-link"><a href="https://goo.gl/maps/4dsCej8m5mNrS17H9" target="_blank" rel="noopener">GoogleMAPでみる</a></div>
              </div>
              <div class="p-models_item-links">
                <a href="https://www.logoshome.jp/event/nakashibetsu/121/" class="p-models_item-links_btn-green" target="_blank" rel="noopener">もっと詳細を見る</a>
                <a href="https://www.logoshome.jp/event-reserve/?eventReserveId=121" target="_blank" rel="noopener">見学ご予約はこちら</a>
              </div>
            </div>
          </section>
          <!-- /lh中標津 -->

          <!-- <section id="a-sh-sapporo-minami" class="p-models_item js-models_item-accordion_parent">
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
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        リビングとつながる<br>
                        開放的な土間空間
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
                        ロゴスホームの設備や構造がわかります。 床暖房や標準装備に触れることができます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-minami/pick02.jpg" alt="">
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        至福のおこもり時間。<br>
                        階段下ヌック
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
                        ロゴスホームの「快適さ」へのこだわりを体感。 家事動線・収納などの工夫がご覧いただけます。階段下には本好きにはたまらないおこもりスペースがあります。ふわふわなクッションに腰掛けながらゆったりくついで、おうち時間をのんびり楽しめますね。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/sh-sapporo-minami/pick03.jpg" alt="">
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
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
          </section> -->
          <!-- /#a-sh-sapporo-minami -->

          <!-- <section id="a-classium" class="p-models_item js-models_item-accordion_parent">
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
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        リビングとつながる<br>
                        開放的な土間空間
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
                        北海道で家を建てようと考えているすべての人に、まずご覧になっていただきたい動画を常時OAしています。ロゴスホールディングスが考える家づくりについてのプレゼンテーションはもちろんのこと、今、建てるべき家のヒントがきっと見つかります。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick02.jpg" alt="">
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        至福のおこもり時間。<br>
                        階段下ヌック
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
                        「耐震等級」とは地震に対する建物の強度を示す指標のひとつで、耐震性能によってランクが3段階に分かれています。「耐震等級3」の家は、どれくらいの揺れに耐えうるのか。実際に体験できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick03.jpg" alt="">
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
                        「太陽光パネルはどれくらいの電気量を発電できる？」そんなギモンに応えるべく、お客様自らが自転車を漕いで発電体験！電気を作るために必要なパワーを体感できます。
                      </p>
                    </div>
                    <div class="p-models_item-slider_slide">
                      <div class="p-models_item-slider_slide-img">
                        <img src="./assets/images/models/classium/pick04.jpg" alt="">
                      </div> -->
                      <!-- <h4 class="p-models_item-slider_slide-title">
                        料理が楽しくなる<br>
                        アイランドキッチン
                      </h4> -->
                      <!-- <p class="p-models_item-slider_slide-text">
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
          </section> -->
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
            <a href="https://www.logoshome.jp/works/duo-tres/modern-house/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_japanese-modern.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">木のぬくもりがモダンな家</h3>
                <p class="p-works_item-link_subtitle">MODERN HOUSE</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                </ul>
              </div>
            </a>
          </li>
          <li class="p-works_item">
            <a href="https://www.logoshome.jp/works/duo-tres/new-york-style/" class="p-works_item-link">
              <div class="p-works_item-link_img">
                <img src="/cmn_assets/images/works/duo-tres_bow.webp" alt="">
              </div>
              <div class="p-works_item-link_inner">
                <h3 class="p-works_item-link_title">ニューヨークのアパルトマンをイメージした家</h3>
                <p class="p-works_item-link_subtitle">NEW YORK STYLE</p>
                <ul class="p-works_item-link_cat">
                  <li class="p-works_item-link_cat-item">#FORTAGE DUO・TRES</li>
                </ul>
              </div>
            </a>
          </li>
          <!-- <li class="p-works_item">
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
          </li> -->
        </ul>
        <a href="https://www.logoshome.jp/works/" class="p-works_more-btn">もっと見る</a>
      </div>
    </section>
    <!-- /#a-works -->

    <!-- <section id="a-voice" class="p-voice">
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
    </section> -->

    <!-- p-area-info -->
    <article id="a-area-info" class="p-area-info">
      <div class="p-area-info_inner">
        <div class="p-area-info_head u-mb-10">
          <h2 class="c-article-title-l p-area-info_title"><?= $page_area_name ?>町の土地・不動産情報</h2>
          <!-- <p class="p-area-info_catch">札幌市で注文住宅を建てるならロゴスホームにご相談ください。</p> -->
        </div>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>町の坪単価相場</h3>
          <div class="p-area-info_section_inner">
            <p class="c-article-title-r u-mb-30 u-negmr-4rem-sp"><span>5万9752<small>円/坪 （※2024年［令和6年］ 公示地価）</small></span>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>町の土地・物件探しのポイント</h3>
          <div class="p-area-info_section_inner">
            <p>
              中標津町は北海道東部に位置し、人口は約2.2万人です。酪農が盛んで自然の豊かな土地でありながら、商業施設や温泉も充実しているのが町の魅力のひとつです。中標津空港があり、飛行機でのアクセスが便利。市街地内には循環バスも運行していますが、多くはマイカーを利用しています。<br>
              町の人口の約9割が中心市街地で暮らしています。コンビニや大型スーパー、ドラッグストアやホームセンターなど、買い物に必要な施設は揃っています。「ゆめの森公園」という道立の大きな公園では、アスレチック、バーベキュー、パークゴルフなどを楽しめます。<br>
              中標津町での土地・物件探しは、市街地を初めに検討することをおすすめします。市街地は商業施設や医療機関が充実しており、生活に便利です。これらのポイントを押さえて、最適な物件を見つけましょう。<br>
            </p>
          </div>
        </section>
        <section class="p-area-info_section u-mb-40">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>町の新築一戸建てにおすすめのエリア</h3>
          <div class="p-area-info_section_inner">
            <!-- <h4 class="p-area-info_green-border-text">円山エリア</h4> -->
            <p class="u-mb-20">
              中心市街地が一番おすすめです。町民の約9割が中心市街地で暮らしており、地域社会が活発です。安心して子育てや暮らしを始められる環境が整っています。<br>
              飲食店や大型スーパー、学校や病院など、生活に必要な施設が集中しています。買い物や日常の生活に便利な環境です。近海の海産物も多く、食材豊かな買い物が楽しめます。<br>
              中標津空港まで約10分で行けるのも便利。旅行や出張など気軽に道内外へ行くことができます。
            </p>
            <!-- <h4 class="p-area-info_green-border-text">琴似エリア</h4>
            <p class="u-mb-20">
              琴似エリアは、商業施設が充実しており、生活利便性が高いエリアです。JR琴似駅や地下鉄琴似駅が利用可能です。駅周辺は商業施設の集まる繁華街となっています。札幌西区役所や、西区民センター図書館など、公共施設も多く、子育て世帯にも適しています。
            </p>
            <h4 class="p-area-info_green-border-text">白石エリア</h4>
            <p class="u-mb-20">
              白石エリアは、住宅街として人気のエリアで、教育施設や公園が充実しています。地下鉄東西線やJRの駅があり、交通の便も良好です。大型スーパーやドラッグストアがあり、買い物に便利です。また、白石区民センターや図書館などの公共施設も豊富です。
            </p> -->
            <!-- <ul class="p-area-info_list">
              <li class="p-area-info_green-border-text"></li>
            </ul> -->
          </div>
        </section>

        <div class="p-area-info_head u-mb-10">
          <h2 class="c-article-title-l p-area-info_title"><?= $page_area_name ?>町の特徴</h2>
          <!-- <p class="p-area-info_catch">札幌市で注文住宅を建てるならロゴスホームにご相談ください。</p> -->
        </div>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>町について</h3>
          <div class="p-area-info_section_inner">
            <p>
              中標津町は、北海道の東部、根室管内の中部に位置し、町域は東西約 42㎞、南北約 27㎞に及びます。<br>
              面積は、684.87㎢。北部は千島火山帯につながる丘陵地で、南側に向かって緩やかに傾斜し、平坦な根釧原野が広がっています。<br>
              内陸性の気候で、夏の平均気温は 20℃前後、冬の平均気温はマイナス 10℃前後。<br>
              積雪は、道内でも少ない方です。
            </p>
          </div>
        </section>
        <section class="p-area-info_section">
          <h3 class="c-article-title-m p-area-info_section_title"><?= $page_area_name ?>町の教育・医療環境</h3>
          <div class="p-area-info_section_inner">
            <p>
              教育の情報化の推進については、国のＧＩＧＡスクール構想により整備した「１人１台端末」を活用し、各教科等の特質に応じて適切な学習場面で情報活用能力の育成を図るとともに、<br>
              ＡＩ型学習教材等の導入により、学習の習熟度に合わせた発展的な学習をするなどの「個別最適な学び」や、児童生徒同士で学習内容を共有して学び合う「協働的な学び」を進めるよう、ＩＣＴ教育の一層の充実に努めています。<br>
              また、子どもたちがＩＣＴを適切かつ安全に活用できるよう、情報モラルに関する指導の徹底を図るとともに、ＩＣＴを日常的・効果的に活用した家庭学習を実現するため、端末の家庭への持ち帰りを段階的に拡充しています。
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
      <div class="about-store" id="LH_NAKASHIBETSU">
        <div class="about-store_img"><img src="./assets/images/about/about_store3.jpg" alt=""></div>
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
      <!-- <div class="about-store" id="LH_SAPPOROKITA">
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
          </div> -->
          <!-- <div class="c-sns-box">
            <a href="https://www.instagram.com/logos_home/" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/instagram_icon.png" alt="instagram"></a>
          </div> -->
          <!-- <div class="c-sns-box">
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
          </div> -->
          <!-- <div class="c-sns-box">
            <a href="https://www.instagram.com/logos_home/" rel="nofollow noopener" target="_blank"><img src="./assets/images/common/instagram_icon.png" alt="instagram"></a>
          </div> -->
          <!-- <div class="c-sns-box">
            <a href="https://www.logoshome.jp/shop/hokkaido/sapporominami/" class="shop-detail-link">店舗詳細</a>
          </div>
        </div>
      </div> -->

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