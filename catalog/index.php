<?php
require_once(dirname(__FILE__) . '/../../cmn_assets/inc/config.php');
require_once(INCLUDE_PATH . '/parts/campaign/base/index.php');
$noindex = true;
$page_title = "資料請求|北海道の注文住宅【ロゴスホーム~北海道着工数No1ハウスメーカー~】";
$page_description = "北海道中標津町でローコスト注⽂住宅を建てるならハウスメーカーのロゴスホームにお任せ下さい。おかげさまで北海道住宅着⼯数No.1「創エネ」「省エネ」新築住宅・⾒学会のイベント随時開催中。お気軽にお問い合わせください。";
$pageUrl = 'https://www.logoshome.jp/nakashibetsu/catalog/';

$localCSS = array(
  '/cmn_assets/libs/jquery.validationEngine/validationEngine.jquery.css',
  '/cmn_assets/css/catalog.css?ver=230126',
  '/cmn_assets/css/catalog.overwrite.css',
  '../assets/css/add.css',
);
$localJS = array(
  '/cmn_assets/libs/yubinbango-gh-pages/yubinbango.js',
  '/cmn_assets/libs/jquery.validationEngine/jquery.validationEngine-ja.js',
  '/cmn_assets/libs/jquery.validationEngine/jquery.validationEngine.min.js',
  '../assets/js/form.js?1.1.4',
);

?>
<?php require_once(INCLUDE_PATH . '/header.php'); ?>

<body>
  <?php require_once(INCLUDE_PATH . '/body-first.php'); ?>

  <!-- header -->
  <?php require_once(INCLUDE_PATH . '/header-nav.php'); ?>
  <!-- /header -->

  <!-- main -->
  <main class="l-main u-bg-gray02">

    <div class="p-webcatalog_container">
      <section class="p-webcatalog_mv">
        <img src="/cmn_assets/images/form/webcatalog_mv.png" class="pc" alt="">
        <img src="/cmn_assets/images/form/webcatalog_mv_sp.png" class="sp" alt="">
      </section>

      <section class="p-webcatalog_intro">
        <div class="p-webcatalog_intro-inner">
          <div class="p-webcatalog_intro-head">
            <p class="p-webcatalog_intro-head_title">
              <img src="/cmn_assets/images/form/intro_title_bg.png" class="pc" alt="">
              <img src="/cmn_assets/images/form/intro_title_bg_sp.png" class="sp" alt="">
              <span class="p-webcatalog_intro-head_title_text u-fc-green">
                <span class="u-font-bold">スマホで見る</span><span class="u-font-bold">WEBカタログの</span><span class="u-font-bold">メリット</span>
              </span>
            </p>
            <ul class="p-webcatalog_intro-head_lists">
              <li class="p-webcatalog_intro-head_list">情報を送信したら<span class="u-fc-green u-font-bold">1秒</span>で内容が見られる</li>
              <li class="p-webcatalog_intro-head_list"><span class="u-fc-green u-font-bold">いつでもどこでも</span>見られる</li>
              <li class="p-webcatalog_intro-head_list"><span class="u-fc-green u-font-bold">何度でも</span>見られる</li>
            </ul>
          </div>
          <div class="p-webcatalog_intro-body">
            <img src="/cmn_assets/images/form/content.png" class="pc" alt="ロゴスホームの全てが見られるWEBカタログ">
            <img src="/cmn_assets/images/form/content_sp.png" class="sp" alt="ロゴスホームの全てが見られるWEBカタログ">
          </div>
        </div>
      </section>
    </div>

    <h1 class="p-page-title p-form-page_title u-font-bold">
      資料請求<br>
      <span class="u-font-size-45 u-display-inlineblock u-line-height-1">（北海道仕様）</span><br>
      <span class="p-page-subtitle">CATALOG</span><br>
      <span class="p-form-page_title_icon"><img class="u-w100" src="/cmn_assets/images/form/icon_catalog.png" alt=""></span>
    </h1>
    <div class="p-form-page_banner" style="padding: 4rem 2rem;max-width: 1240px;margin: 0 auto;">
      <img src="../../../cmn_assets/images/common/form_warn.jpg" class="pc">
      <img src="../../../cmn_assets/images/common/form_warn_sp.jpg" class="sp">
    </div>
    <section class="p-form u-border-b03-black01-pc u-border-b02-black01-sp u-pb-160">
      <!-- form -->
      <div id="form" class="p-form_inner">
        <div class="p-form-container u-bg-white u-pt-20 u-pb-20">
          <form id="form_nakashibetsu_shiryo" class="p-form-body js-form h-adr" action="https://www.logoshome.jp/catalog/thanks.html" method="post">
            <div style="display:none;"><input type="text" name="first_action_ip" id="first_action_ip" value="資料請求"></div>
            <div style="display:none;"><input type="text" name="information_details_ip" id="information_details_ip" value="LP"></div>
            <div style="display:none;"><input type="text" name="remarks_reaction" id="remarks_reaction" value=""></div>
            <div style="display:none;"><input type="text" name="shiryo[]" value="WEBカタログ"></div>
            <!-- ▼ 郵便番号プラグインの必要項目  -->
            <span class="p-country-name" style="display:none;">Japan</span>
            <!-- ▲ 郵便番号プラグインの必要項目  -->
            <?php /*
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">ご希望のカタログをお選び下さい（複数選択可）<span class="c-required-plate u-ml-10">必須</span></p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item">
                  <div class="p-form_catalog">
                    <div class="p-form_catalog-card-l">
                      <label class="p-form_catalog-card_label js-form-label is-active">
                        <p class="p-form_catalog-card_title u-minheight-auto u-flex-justify-center">
                          <input type="checkbox" class="p-form_catalog-card_checkbox js-form-checkbox" name="shiryo[]" value="WEBカタログ" checked="checked">
                          <span class="p-form_catalog-card_title_text">WEBカタログ<br>〜フルオーダー住宅、セミオーダー住宅<br class="sp">それぞれの特徴と違いがわかる〜</span>
                        </p>
                        <div style="display: flex;">
                          <div class="p-form_catalog-card_thumb"><img src="/cmn_assets/images/form/catalog/01.png" class="u-w100" alt=""></div>
                          <div class="p-form_catalog-card_thumb"><img src="https://www.logoshome.jp/wp/wp-content/themes/logos_original/assets/images/form/catalog/01_2.png" class="u-w100" alt=""></div>
                        </div>
                        <p class="p-form_catalog-card_desc u-w85 u-text-align-center">必須項目を入力するだけで、スマホはもちろん、PC、タブレットから<br class="pc">人気のカタログを無料でご覧いただけます。</p>
                        <!-- <div class="p-form_catalog-card_bottom">
                          <a class="p-form_catalog-card_link" href="https://www.logoshome.jp/present-sample/technical/" target="_blank" rel="noopener noreferrer">試し読み<span class="p-form_catalog-card_link_icon"></span></a>
                        </div> -->
                      </label>
                    </div>
                    <div class="p-form_catalog-card-l">
                      <p class="p-form-group_head_text u-pt-10 u-pb-10 u-pl-20 u-pr-20">紙のカタログをご希望の方は以下からお選びください。</p>
                    </div>

                    <!-- 全て選択する -->
                    <!-- <div class="p-form_catalog-card-l">
                      <label class="p-form_catalog-card_label js-form-label">
                        <p class="p-form_catalog-card_title u-minheight-auto u-flex-justify-center">
                          <input type="checkbox" class="p-form_catalog-card_checkbox js-form-checkbox js-catalog-checkbox-all">
                          <span class="p-form_catalog-card_title_text">全て選択する</span>
                        </p>
                      </label>
                    </div> -->
                    <!-- FORTAGE DUO・TRES カタログ -->
                    <div class="p-form_catalog-card">
                      <label class="p-form_catalog-card_label js-form-label">
                        <p class="p-form_catalog-card_title">
                          <input type="checkbox" class="p-form_catalog-card_checkbox js-form-checkbox js-catalog-checkbox validate[required]" name="shiryo[]" value="FORTAGE DUO・TRES カタログ">
                          <span class="p-form_catalog-card_title_text">FORTAGE DUO・TRES カタログ</span>
                        </p>
                        <div class="p-form_catalog-card_thumb"><img src="/cmn_assets/images/form/form_catalog_duo.png" class="u-w100" alt=""></div>
                        <p class="p-form_catalog-card_desc">ロゴスホームの「らしさ」が<br>詰まったスタンダード。<br>様々なライフスタイルを<br>実現する、自由設計の注文住宅。</p>
                        <!-- <div class="p-form_catalog-card_bottom">
                          <a class="p-form_catalog-card_link" href="https://www.logoshome.jp/present-sample/technical/" target="_blank" rel="noopener noreferrer">試し読み<span class="p-form_catalog-card_link_icon"></span></a>
                        </div> -->
                      </label>
                    </div>
                    <!-- エコシア -->
                    <div class="p-form_catalog-card">
                      <label class="p-form_catalog-card_label js-form-label">
                        <p class="p-form_catalog-card_title">
                          <input type="checkbox" class="p-form_catalog-card_checkbox js-form-checkbox js-catalog-checkbox validate[required]" name="shiryo[]" value="エコシア">
                          <span class="p-form_catalog-card_title_text">エコシア</span>
                        </p>
                        <div class="p-form_catalog-card_thumb"><img src="/cmn_assets/images/form/catalog/04.png" class="u-w100" alt=""></div>
                        <p class="p-form_catalog-card_desc">・省エネ住宅・ゼロエネルギー住宅V・セミオーダープラン・価格</p>
                        <div class="p-form_catalog-card_bottom">
                        </div>
                      </label>
                    </div>
                    <!-- ゼロキューブ -->
                    <!-- <div class="p-form_catalog-card">
                      <label class="p-form_catalog-card_label js-form-label">
                        <p class="p-form_catalog-card_title">
                          <input type="checkbox" class="p-form_catalog-card_checkbox js-form-checkbox js-catalog-checkbox validate[required]" name="shiryo[]" value="ゼロキューブ">
                          <span class="p-form_catalog-card_title_text">ゼロキューブ</span>
                        </p>
                        <div class="p-form_catalog-card_thumb"><img src="/cmn_assets/images/form/catalog/07.png" class="u-w100" alt=""></div>
                        <p class="p-form_catalog-card_desc">・企画住宅・スタイリッシュな家・1000万円の家</p>
                        <div class="p-form_catalog-card_bottom">
                          <p class="p-form_catalog-card_notice">※札幌・旭川・函館は施工エリア外になります。</p>
                        </div>
                      </label>
                    </div> -->
                    <!-- e-Hikaria カタログ -->
                    <!--   <div class="p-form_catalog-card">
                      <label class="p-form_catalog-card_label js-form-label">
                        <p class="p-form_catalog-card_title">
                          <input type="checkbox" class="p-form_catalog-card_checkbox js-form-checkbox js-catalog-checkbox validate[required]" name="shiryo[]" value="e-Hikaria カタログ">
                          <span class="p-form_catalog-card_title_text">e-Hikaria カタログ</span>
                        </p>
                        <div class="p-form_catalog-card_thumb"><img src="/cmn_assets/images/form/catalog/11.png" class="u-w100" alt=""></div>
                        <p class="p-form_catalog-card_desc">ヒカリが暮らしと<br>家族を明るくする。<br>「価格」と「光熱費」を<br>抑えたセミオーダー住宅。</p>
                        </p>
                        <div class="p-form_catalog-card_bottom">
                        </div>
                      </label>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
            */ ?>
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">お名前<span class="c-required-plate u-ml-10">必須</span></p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item">
                  <dl>
                    <dt>お名前</dt>
                    <dd>
                      <div class="p-form-item_half-box">
                        <input type="text" name="lastname" id="lastname" placeholder="姓" class="p-form_input-text validate[required]">
                      </div>
                      <div class="p-form-item_half-box">
                        <input type="text" name="firstname" id="firstname" placeholder="名" class="p-form_input-text validate[required]">
                      </div>
                    </dd>
                  </dl>
                  <dl>
                    <dt>フリガナ</dt>
                    <dd>
                      <input type="text" name="sei_furigana" id="sei_furigana" placeholder="フリガナ" class="p-form_input-text validate[required]">
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">ご住所<span class="c-required-plate u-ml-10">必須</span><br class="sp"><span class="p-form-group_head_text-small">しつこい押し売り営業はいたしません。安心してご入力ください。</span></p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item">
                  <dl>
                    <dt>郵便番号</dt>
                    <dd>
                      <div class="p-form-item_half-box">
                        <input type="text" name="zip" id="zip" placeholder="〒 郵便番号" class="p-form_input-text p-postal-code validate[required]">
                      </div>
                      <div class="p-form-item_half-box"></div>
                    </dd>
                  </dl>
                  <dl>
                    <dt>都道府県</dt>
                    <dd>
                      <input type="text" name="state" id="state" placeholder="例：北海道" class="p-form_input-text p-region u-readonly" readonly>
                    </dd>
                  </dl>
                  <dl>
                    <dt>市区町村</dt>
                    <dd>
                      <input type="text" name="city" id="city" placeholder="例：札幌市中央区" class="p-form_input-text p-locality u-readonly" readonly>
                    </dd>
                  </dl>
                  <dl>
                    <dt>丁目<br>番地など</dt>
                    <dd>
                      <input type="text" name="address" id="address" placeholder="例：北5条西11丁目15番地4" class="p-form_input-text p-street-address p-extended-address validate[required]">
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">お電話番号<span class="c-required-plate u-ml-10">必須</span></p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item">
                  <dl>
                    <dt></dt>
                    <dd>
                      <input type="tel" name="phone" id="phone" placeholder="012345677989" class="p-form_input-text validate[required] validate[custom[phone]]">
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">メールアドレス<span class="c-required-plate u-ml-10">必須</span></p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item">
                  <dl>
                    <dt></dt>
                    <dd>
                      <input type="email" name="email" id="email" placeholder="例：sample@mail.jp" class="p-form_input-text validate[required]" autocomplete="email">
                    </dd>
                  </dl>
                  <p class="u-text-align-left u-font-size-80 u-font-size-120-sp">携帯電話のメールアドレスは、返信メールが届かない場合がございます。迷惑メールフィルター設定の解除、または「@logoshome.jp」からのメールを受信できるように設定してください。</p>
                </div>
              </div>
            </div>
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">自由記入欄</p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item">
                  <textarea name="freemessage" rows="10" placeholder="ご不明点や、ご相談などございましたらお知らせください。" class="p-form_textarea"></textarea>
                </div>
              </div>
            </div>
            <div class="p-form-group">
              <div class="p-form-group_head">
                <p class="p-form-group_head_text">個人情報<span class="c-required-plate u-ml-10">必須</span></p>
              </div>
              <div class="p-form-group_inner">
                <div class="p-form-item u-text-align-left">
                  <label class="p-form-label">
                    <input type="checkbox" name="modelhouse_privacy" value="はい" class="p-form_input-checkbox validate[required]" />個人情報利用に同意します
                  </label>
                </div>
              </div>
            </div>
            <div class="p-form-bottom">
              <p class="p-form-bottom_text"><a class="u-display-inlineblock" href="https://www.logoshome.jp/privacy/">プライバシーポリシー</a>の内容をご確認いただきご送信下さい。</p>
              <p class="p-form-bottom_text">ご入力いただいたお客様の個人情報は、当社の個人情報保護指針にて記載させていただいている利用目的以外では利用致しません。</p>
              <div class="p-submit-box">
                <input id="submit" class="p-submit" name="btn" type="submit" value="送信する" />
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /form -->
    </section>
  </main>
  <!-- /main -->

  <!-- footer -->
  <?php require_once(INCLUDE_PATH . '/footer.php'); ?>
  <!-- /footer -->
</body>

</html>