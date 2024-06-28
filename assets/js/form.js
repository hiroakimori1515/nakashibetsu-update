$(function () {
  /*--------------------------------------
  *
  * フォームバリデーション
  * https://github.com/posabsolute/jQuery-Validation-Engine
  * https://qiita.com/january108/items/a917dfd78d65b81fba55
  * 
  * -------------------------------------*/
  $('.js-form').validationEngine();

  // カレンダー用設定
  // 全店舗共通の休業日
  const disableDate = [
    "2024-04-23", "2024-06-18", "2024-08-11", "2024-08-12", "2024-08-13", "2024-09-03", "2024-09-17", "2024-11-19", "2024-12-28", "2024-12-29", "2024-12-30", "2024-12-31", "2025-01-01", "2025-01-03", "2025-03-11", "2025-03-18", "2025-05-20",
  ]

  // 全店舗共通の例外の営業日
  const allPlaceAddBusinessDays = {
    "2024-05-02": "営業0502",
    "2024-08-07": "営業0807",
    "2024-10-03": "営業1003",
    "2024-12-05": "営業1205",
    "2025-03-20": "営業0320",
  }



  /**
   * ロード後初期設定
   * ------------------------------------*/
  savePlaceChecked();
  initActiveCalendar($('#nitiji'), tomorrow(), null, disableDate, allPlaceAddBusinessDays);

  /**
   * 送信ボタン押した時
   * HubSpot用に
   * 資料請求とお問合せ内容を一つの項目に合わせる
   * ------------------------------------*/

  $('.js-form').submit(function () {
    setFormRemarks_reactionVal();
  });

  function getShiryoVal() {
    let shiryoDate = [];
    const $slectedShiryo = $('[name="shiryo[]"]');

    if ($slectedShiryo.is(':checkbox')) {
      const $e = $('[name="shiryo[]"]:checked');
      $e.each(function () {
        const val = $(this).val();
        shiryoDate.push(val);
      });
    } else {
      const val = $slectedShiryo.val();
      shiryoDate.push(val);
    }

    return shiryoDate;
  }

  function setFormRemarks_reactionVal() {
    const freemessageData = $('[name="freemessage"]').val();
    const shiryoData = getShiryoVal();
    const remarksReactionElement = document.getElementById("remarks_reaction");
    const remarksReactionData = "【希望資料】 " + shiryoData + " ： 【備考欄】 " + freemessageData;

    if (remarksReactionElement === null) return false;

    remarksReactionElement.value = remarksReactionData
  }

  /**
   * ご来場場所選択時
   * ------------------------------------*/

  // 選択したご来場場所の管轄エリアを取得しareaのvalueに設定
  var $place = $('input[name="place"]');
  var $area = $('input[name="area"]');
  $place.change(function () {
    var thisArea = $(this).data('area');
    $area.val(thisArea);
  });

  /**
   * setStoreVal
   * 
   * 選択したご来場場所の管轄エリアを取得しjs-form-storeのvalueに設定
   * 
   * HubSpotでフォームを取り込んでいる場合、
   * checkboxのvalueを正確に取得できないため
   * input[type="text"]に置き換える
   */
  setStoreVal();
  function setStoreVal() {
    const $place = $('input[name="place"]');
    const $hsPlace = $('input[name="first_visit_reservation_place"]');
    const $store = $('.js-form-store');
    $place.change(function () {
      const areaData = $(this).data('store');
      const placeData = $(this).val();
      $store.val(areaData);
      $hsPlace.val(placeData);
      limitedActiveCalendar($(this), $('#nitiji'), disableDate, allPlaceAddBusinessDays);
    });
  }

  function savePlaceChecked() {
    placeId = '#' + getParam('place_id');
    $card = $(placeId);
    if ($card.length) {
      $card.prop("checked", true);
    }
  }

  /**
   * Get the URL parameter value
   *
   * @param  name {string} パラメータのキー文字列
   * @return  url {url} 対象のURL文字列（任意）
   */
  function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // 明日
  function tomorrow() {
    var d = new Date();
    d.setDate(d.getDate() + 1);
    return YMD(d);
  }

  // yyyy-mm-dd
  function YMD(d) {
    var Y = d.getFullYear();
    var M = d.getMonth() + 1;
    var D = d.getDate();
    return [Y, ('0' + M).slice(-2), ('0' + D).slice(-2)].join('-');
  }

  /**
   * limitedActiveCalendar
   * 
   * 
   * カレンダーの選択可能日を変更
   * 
   * data-start        が設定されていればカレンダーの最小選択可能日を変更
   * data-end          が設定されていればカレンダーの最大選択可能日を変更
   * data-add-business が設定されていればカレンダーの店舗特有の営業日を追加
   * 
   * それぞれは targetに YYYY-MM-DD形式で設定
   * 
   * @param {object} target
   * @param {object} calendar カレンダー
   * @param {object} disableDate 全店舗共通の休業日
   * @param {object} allPlaceAddBusinessDays 全店舗共通の例外の営業日
   * @returns 
   */
  function limitedActiveCalendar(target, calendar, disableDate, allPlaceAddBusinessDays) {
    const startDate = (target.data('start') !== undefined) ? target.data('start') : null;
    const endDate = (target.data('end') !== undefined) ? target.data('end') : null;
    const addBusinessDays = (target.data('add-business') !== undefined) ? target.data('add-business') : null;

    /* if((startDate === null) && (endDate === null) && (addBusinessDays === null)) return false; */


    const min = getMinActiveDate(startDate);
    const max = getMaxActiveDate(endDate);
    const thisPlaceAddBusinessDays = getAddBusinessDays(addBusinessDays);

    calendar.val('');
    initActiveCalendar(calendar, min, max, disableDate, allPlaceAddBusinessDays, thisPlaceAddBusinessDays);
  }

  function initActiveCalendar(calendar, min, max, disableDate, addBusinessDays, thisPlaceAddBusinessDays = {}) {
    if (calendar.length === 0) return false;

    let thisHolidays = {};
    Object.assign(thisHolidays, addBusinessDays);
    Object.assign(thisHolidays, thisPlaceAddBusinessDays);

    $.get('https://holidays-jp.github.io/api/v1/date.json', function (holidays) {
      // 
      Object.assign(holidays, thisHolidays);
      // 日本語ピッカー(日曜はじまり)
      flatpickr.l10ns.ja.firstDayOfWeek = 0;
      calendar.flatpickr({
        locale: 'ja',
        disableMobile: true,
        allowInput: true,
        // 日付毎カスタム処理
        onDayCreate: onDayCreate,
        // 選択できる最小の日付
        minDate: min,
        // 選択できる最大の日付
        maxDate: max,
        // 不定期の休業日
        "disable": disableDate,
      });
      // 日付毎に
      function onDayCreate(dObj, dStr, fp, dayElem) {

        // 水・木選択不可（祝日のぞく）
        var ymd = YMD(dayElem.dateObj);
        if (!(ymd in holidays)) { // 祝日ではない時
          // 水木無効・クラス付与
          var dayOfWeek = dayElem.dateObj.getDay();
          switch (dayOfWeek) {
            case 3: $(dayElem).addClass('flatpickr-disabled wednesday'); break;
            case 4: $(dayElem).addClass('flatpickr-disabled thursday'); break;
          }
        }
      }
    });
  }

  function getMinActiveDate(startDate, min = tomorrow()) {
    if (startDate === null) return min;
    if (checkDate(startDate) === false) return min;

    const minActiveDate = (new Date(startDate) > new Date(min)) ? startDate : min;

    return minActiveDate;
  }

  function getMaxActiveDate(endDate, max = null) {
    if (endDate === null) return max;
    if (checkDate(endDate) === false) return max;

    const maxActiveDate = endDate;

    return maxActiveDate;
  }

  function getAddBusinessDays(addBusinessDays) {
    if (addBusinessDays === null) return {};
    const splitBusinessDays = addBusinessDays.split(',');
    let businessDaysArray = {};

    for (let i = 0; i < splitBusinessDays.length; i++) {
      const currentDay = splitBusinessDays[i];
      if (checkDate(currentDay) === false) return {};

      const y = currentDay.split("-")[0];
      const m = currentDay.split("-")[1];
      const d = currentDay.split("-")[2];
      const name = "営業日" + y + m + d;

      const array = {};
      array[currentDay] = name;

      Object.assign(businessDaysArray, array);
    }

    return businessDaysArray;
  }


  function checkDate(strDate) {
    if (!strDate.match(/^\d{4}\-\d{2}\-\d{2}$/)) {
      return false;
    }
    var y = strDate.split("-")[0];
    var m = strDate.split("-")[1] - 1;
    var d = strDate.split("-")[2];
    var date = new Date(y, m, d);
    if (date.getFullYear() != y || date.getMonth() != m || date.getDate() != d) {
      return false;
    }
    return true;
  }
});

