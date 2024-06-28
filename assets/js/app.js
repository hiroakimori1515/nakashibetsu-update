$(function() {
  const $window = $(window);
  const $body = $('body');
  $window.on('load scroll resize',function () {
    
    // 要素の位置までスクロースしたらクラスをつける
    const windowScrollTop = $window.scrollTop();
    const wh = $window.height();
    let fadeInOffsetTop;

    function scrollAnima(item, animaClass) {
      item.each(function(){
        fadeInOffsetTop = $(this).offset().top;
        if(windowScrollTop > fadeInOffsetTop - wh + 100 ){
            if (!$(this).hasClass(animaClass)) {
                $(this).addClass(animaClass)
            }
        } 
      });
    }

    // スクロールフェードイン
    const $fadeinItem = $('.js-fadein-item');
    const fadeinClass = 'is-fadein';
    scrollAnima($fadeinItem, fadeinClass);

    const $orderinItem = $('.js-orderin-item');
    const orderinClass = 'is-orderin';
    scrollAnima($orderinItem, orderinClass);

    const $clickableItem = $('.js-clickable-item');
    const clickableClass = 'is-clickable';
    scrollAnima($clickableItem, clickableClass);

    const $slideinItem = $('.js-slidein-item');
    const slideClass = 'is-slidein';
    scrollAnima($slideinItem, slideClass);
  });

  // アンカーリンクスムーススクロール
  $('a[href^="#"]').on('click',function() {
    // 移動先を取得
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, 300, 'swing');
      return false;
  });

  // brand popup on off
  const $brandPopupBtn = $('.js-brand-popup-btn');
  $brandPopupBtn.click(function() {
    let $brandParentBox = $(this).parents('.js-brand-parent');
    let $brandPopup = $brandParentBox.children('.js-brand-popup');
    let $brandSlider =  $brandParentBox.find('.js-brand-slider');
    let $brandPopupDisplay = $brandPopup.css('display');
    if($brandPopupDisplay == 'none') {
      $brandPopup.fadeIn();
      $body.css('overflow-y', 'hidden');
    } else{
      $brandPopup.fadeOut();
      $body.css('overflow-y', 'scroll');
    }

    // brand popup slider
    if (!($brandParentBox.hasClass('is-slicked'))) {

      $brandParentBox.addClass('is-slicked');

      $brandSlider.slick({
        arrows: true,
        fade: true,
        autoplay: false,
        dots: true,
        lazyLoad: 'progressive'
      });
    }
  });

  let $modelSliderSp;

  if(window.matchMedia('(max-width: 750px)').matches) {
    $modelSliderSp = $('.js-model-slider-sp');

    

    if($modelSliderSp.length) {
      // $modelSliderSp がある時
      $modelSliderSp.slick({
        arrows: true,
        fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    } 
  };

  function houseSlider(main, thumb, thumbSlideNumber, responsiveThumbSlideNumber) {

    main.slick({
      lazyLoad: 'progressive', 
      arrows: true, 
      asNavFor: thumb,
    });

    thumb.slick({
      lazyLoad: 'progressive',
      asNavFor: main,
      arrows: false,
      focusOnSelect: true,
      slidesToShow: thumbSlideNumber,
      slidesToScroll: 1,
      
      responsive:[
        {
          breakpoint: 960,
          settings: {
            slidesToShow: responsiveThumbSlideNumber,
            infinite: true,
          }
        },
      ]
    });
  };

  const mainSlider = '.slider-01_main';
  const thumbSlider = '.slider-01_thumb';
  $(mainSlider).each(function() {
    let $this = $(this);
    let $thisThumbSlider = $this.parent().children(thumbSlider);
    let $thisThumbLi = $thisThumbSlider.children('li');
    let thisThumbSize = $thisThumbLi.length;
    let responsiveSlidesToShow = 5 ;
    if(thisThumbSize < 6) {
      responsiveSlidesToShow = 6;
      $thisThumbSlider.addClass('sp-fixed')
    }

    houseSlider($this, $thisThumbSlider, thisThumbSize, responsiveSlidesToShow);
  })

  // housing drop box

  const $dropBtn = $('.js_drop_btn');
  const dropParent = '.js_drop_parent';
  const dropBox = '.js_drop_box';
  const dropReturn = '.js_drop_return';
  const jsDropReturnParent = '.js_drop_return_parent';
  const jsHousing = 'js_estate'

  $dropBtn.click(function() {
    let $this = $(this);
    let $thisParent = $this.parents(dropParent);
    let $dropBox = $thisParent.children(dropBox);
    let $returnArea = $thisParent.children(jsDropReturnParent).children(dropReturn);
    let returnPoint = $returnArea.offset().top - 100;
    let $housingTopDropBox ;

    if($this.hasClass('is_clicked')) {
      $('body, html').animate({ scrollTop: returnPoint}, 400);
    }

    $this.toggleClass('is_clicked');
    $thisParent.toggleClass('is_dropped')
    $dropBox.fadeToggle();

    // housing
    if ($thisParent.hasClass(jsHousing)) {
      $housingTopDropBox = $thisParent.children(jsDropReturnParent).children(dropBox);
      $housingTopDropBox.fadeToggle();
    } else {
      return false;
    }
  });

  const $headerNavBtn = $('.js-header_nav-btn');
  const $header = $('.js-header');
  const $headerNav = $('.js-header_nav');
  const $headerNavBg = $('.js-header_nav-bg');
  $headerNavBtn.click(function() {
    $header.toggleClass('is-active');
    $headerNav.fadeToggle();
    $headerNavBg.fadeToggle();
  });

});