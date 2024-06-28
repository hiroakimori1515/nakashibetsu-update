<?php
require_once(dirname(__FILE__) . '/../../cmn_assets/inc/config.php');
require_once(INCLUDE_PATH . '/parts/campaign/base/index.php');
$noindex = true;
$page_title = "見学予約|北海道の注文住宅【ロゴスホーム~北海道着工数No1ハウスメーカー~】";
$page_description = "北海道中標津町でローコスト注⽂住宅を建てるならハウスメーカーのロゴスホームにお任せ下さい。おかげさまで北海道住宅着⼯数No.1「創エネ」「省エネ」新築住宅・⾒学会のイベント随時開催中。お気軽にお問い合わせください。";
$pageUrl = 'https://www.logoshome.jp/nakashibetsu/reserve/';

$localCSS = array(
  '/cmn_assets/libs/jquery.validationEngine/validationEngine.jquery.css',
  '../assets/css/form-page.css?20230316',
  '../assets/css/add.css?230316',
);
$localJS = array(
  '/cmn_assets/libs/yubinbango-gh-pages/yubinbango.js',
  '/cmn_assets/libs/jquery.validationEngine/jquery.validationEngine-ja.js',
  '/cmn_assets/libs/jquery.validationEngine/jquery.validationEngine.min.js',
  '../assets/js/form.js?1.1.5',
);
?>
<?php require_once(INCLUDE_PATH . '/header.php'); ?>

<body>
  <?php require_once(INCLUDE_PATH . '/body-first.php'); ?>

  <!-- header -->
  <?php require_once(INCLUDE_PATH . '/header-nav.php'); ?>
  <!-- /header -->

  <!-- main -->
  <main class="l-main backdrop">
    <!-- <div class="p-form-page_top"><a class="c-logoshome-logo u-mlr-20" href="./" target="_blank">
        <img src="../assets/images/common/logoshome_logo.png" alt="">
      </a></div> -->

    <!-- form -->
    <div id="form" class="p-form">
      <div class="p-form-top">
        <h2 class="p-form-page_title u-mb-60">見学予約</h2>
        <div class="p-form-page_banner" style="padding: 0 0 4rem;">
          <img src="../../../cmn_assets/images/common/form_warn.jpg" class="pc">
          <img src="../../../cmn_assets/images/common/form_warn_sp.jpg" class="sp">
        </div>
        <div class="p-form-page_notice">
          <p class="p-form-page_notice_text">当日のご予約、および19時以降の翌日ご予約はお電話にてお願いいたします。<br>
            ※お電話がない場合はご案内できない場合がございます。</p>
        </div>
      </div>


      <!-- <div class="p-form-banner">
        <div class="p-form-banner_inner">
          <img src="<?//= $cpBannerD->getUrl(); ?>" alt="">
          <a href="#a-dcampaign" class="p-form-banner_link">⇒電子マネープレゼントの注意事項はこちらをご覧ください</a>
        </div>
      </div> -->

      <div class="p-form-container">
        <form id="form_nakashibetsu_raijyo" class="p-form-body js-form" action="https://www.logoshome.jp/reserve/thanks.html" method="post">
          <div class="p-form-group">
            <div class="p-form-group_head">
              <p class="p-form-group_head_text">ご来場希望場所<span class="c-required-plate u-ml-10">必須</span></p>
              <p class="u-font-red-01 u-font-size-80per">（複数ご希望の場合は自由記入欄に記入お願いします）</p>
            </div>
            <div class="p-form-group_inner u-form-between u-form-flexwrap">
				
			     <!-- card1013 -->
              <div class="p-form-card p-form-card-thumbnail-l">
                <input id="type-card1013" class="p-form_input-checkbox p-form-card_checkbox p-form-card-thumbnail_checkbox validate[required]" type="radio" name="place" value="中標津町東10条南9丁目モデルハウス" data-store="LH中標津" data-gmap="https://maps.app.goo.gl/z2BiGyAhtprGf72G9" data-start="2024-07-20" data-end="2024-10-27">
                <label for="type-card1013" class="p-form-card_label p-form-card-thumbnail_label">
                  <p class="p-form-card-thumbnail-l_name">中標津町東10条南9丁目モデルハウス</p>
                  <div class="p-form-card_content p-form-card-thumbnail-l_content">
                    <div class="p-form-card-thumbnail-l_img"><img src="../assets/images/model-list/house1013/top.png" width="182" height="170" alt=""></div>
                    <div class="p-form-card_content_inner p-form-card-thumbnail-l_inner">
                      <p class="p-form-card_content_text p-form-card-thumbnail_content_text pc">公開期間</p>
                      <p class="p-form-card_content_date">7/20(土)OPEN！<span style="font-size: 1.6rem;">(水・木除く)</span></p>
                    </div>
                  </div>
                </label>
              </div>	
				
				
				
              <!-- card01 -->
              <div class="p-form-card p-form-card-thumbnail-l">
                <input id="type-card01" class="p-form_input-checkbox p-form-card_checkbox p-form-card-thumbnail_checkbox validate[required]" type="radio" name="place" value="中標津町東13条南3丁目オーナー様邸暮らしの見学会" data-store="LH中標津">
                <label for="type-card01" class="p-form-card_label p-form-card-thumbnail_label">
                  <p class="p-form-card-thumbnail-l_name">中標津町東13条南3丁目<br>オーナー様邸暮らしの見学会</p>
                  <div class="p-form-card_content p-form-card-thumbnail-l_content">
                    <div class="p-form-card-thumbnail-l_img"><img src="../assets/images/model-list/house01/top.png" width="182" height="170" alt=""></div>
                    <div class="p-form-card_content_inner p-form-card-thumbnail-l_inner">
                      <p class="p-form-card_content_text p-form-card-thumbnail_content_text pc">公開期間</p>
                      <p class="p-form-card_content_date">
                        ※ご見学希望日時は要相談</p>
                    </div>
                  </div>
                </label>
              </div>

              <!-- card002lh -->
              <div class="p-form-card p-form-card-thumbnail-l">
                <!-- <span class="icon icon_form"><img src="../assets/images/banner/bn_stamp/icon.png" alt="スタンプラリー対象"></span> -->
                <input id="type-card002lh" class="p-form_input-checkbox p-form-card_checkbox p-form-card-thumbnail_checkbox validate[required]" type="radio" name="place" value="ロゴスホームショールーム" data-store="LH中標津" data-gmap="https://goo.gl/maps/rqScm8nkRwQPyDxF9">
                <label for="type-card002lh" class="p-form-card_label p-form-card-thumbnail_label">
                  <p class="p-form-card-thumbnail-l_name">ロゴスホーム中標津ショールーム</p>
                  <div class="p-form-card_content p-form-card-thumbnail-l_content">
                    <div class="p-form-card-thumbnail-l_img"><img src="../assets/images/model-list/lh02/top.png" width="150" height="150" alt=""></div>
                    <div class="p-form-card_content_inner p-form-card-thumbnail-l_inner">
                      <p class="p-form-card_content_text p-form-card-thumbnail_content_text pc">公開期間</p>
                      <p class="p-form-card_content_date">常時（水・木定休）<br>
                        <span style="font-size: 1.6rem;">中標津町東1条南10丁目</span>
                      </p>
                    </div>
                  </div>
                </label>
              </div>
            </div>
          </div>
          <div class="p-form-group">
            <div class="p-form-group_head">
              <p class="p-form-group_head_text">ご希望日時<span class="c-required-plate u-ml-10">必須</span></p>
            </div>
            <div class="p-form-group_inner">
              <div class="p-form-item">
                <dl class="u-mb-20">
                  <dt></dt>
                  <dd>
                    <div class="p-form-item_half-box">
                      <input type="text" name="visitor_reservation" id="nitiji" placeholder="日付を選択" class="p-form_input-text validate[required]" readonly>
                    </div>
                    <div class="p-form-item_half-box p-form-item_half-box_arrow">
                      <select name="visit_reservation_time" id="jikan" class="p-form_select validate[required]">
                        <option value="">時間を選択</option>
                        <option value="10:00:00">10:00</option>
                        <option value="10:30:00">10:30</option>
                        <option value="11:00:00">11:00</option>
                        <option value="11:30:00">11:30</option>
                        <option value="12:00:00">12:00</option>
                        <option value="12:30:00">12:30</option>
                        <option value="13:00:00">13:00</option>
                        <option value="13:30:00">13:30</option>
                        <option value="14:00:00">14:00</option>
                        <option value="14:30:00">14:30</option>
                        <option value="15:00:00">15:00</option>
                        <option value="15:30:00">15:30</option>
                        <option value="16:00:00">16:00</option>
                        <option value="16:30:00">16:30</option>
                        <option value="17:00:00">17:00</option>
                      </select>
                    </div>
                  </dd>
                </dl>
                <p class="p-form-group_head_text u-text-align-left">
                  <span class="u-font-size-80">
                    ※毎週水・木曜日は定休日とさせていただきます。<br>
                    ※当社からの予約確認、確定のご連絡を以って受付完了とさせて頂きます。
                  </span>
                </p>
              </div>
            </div>
          </div>
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
              </div>
            </div>
          </div>
          <div class="p-form-group">
            <div class="p-form-group_head">
              <p class="p-form-group_head_text">自由記入欄<span class="u-font-red-01 u-font-size-80per">（他のモデルハウスも見学ご希望の場合はこちらに記入お願いします）</span></p>
            </div>
            <div class="p-form-group_inner">
              <div class="p-form-item">
                <textarea name="remarks_reaction" rows="10" placeholder="ご不明点や、ご相談などございましたらお知らせください。" class="p-form_textarea"></textarea>
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
                  <input type="checkbox" name="modelhouse_privacy" value="はい" class="p-form_input-checkbox validate[required]" />
                  個人情報利用に同意します </label>
              </div>
            </div>
          </div>
          <div class="p-form-bottom">
            <p class="p-form-bottom_text"><a href="https://www.logoshome.jp/privacy/">プライバシーポリシー</a>の内容をご確認いただきご送信下さい。
            </p>
            <p class="p-form-bottom_text">ご入力いただいたお客様の個人情報は、当社の個人情報保護指針にて記載させていただいている利用目的以外では利用致しません。</p>
            <div class="p-submit-box">
              <input id="submit" class="p-submit" name="btn" type="submit" value="送信する" />
            </div>
          </div>
          <div style="display:none;"><input type="text" name="first_visit_reservation_place" id="first_visit_reservation_place" value=""></div>
          <div style="display:none;"><input type="text" class="js-form-store" name="logoshome_store_ip" id="logoshome_store_ip" value=""></div>
          <div style="display:none;"><input type="text" name="information_details" id="information_details" value="LP"></div>
          <div style="display:none;"><input type="text" class="js-map-link-input" name="visitor_reservation_destination_map_link" id="visitor_reservation_destination_map_link" value=""></div>
      </div>
      </form>
    </div>
    </div>
    <!-- /form -->

    <!-- dcampaign -->
    <!-- <div id="a-dcampaign">
      <?//= $cp->getBaseHtml() ?>
    </div> -->
    <!-- /dcampaign -->
  </main>
  <!-- /main -->
  <!-- footer -->
  <?php require_once(INCLUDE_PATH . '/footer.php'); ?>
  <!-- /footer -->
</body>

</html>