console.log(GetQueryString());
console.log(GetBrowserName());

window.onload = function () {
  // ここに読み込み完了時に実行してほしい内容を書く。
  jQuery(document).ready(function () {
    $(".shopslides").slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      infinite: false,
    });
  });

  jQuery(document).ready(function () {
    function beforeSlick() {
      $(".memories").slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        responsive: [
          {
            breakpoint: 540,
            settings: {
              centerMode: true,
              slidesToShow: 3,
              variableWidth: false,
              centerPadding: '24px',
              slidesToShow: 1
            }
          }
        ]
      });
    };

    function afterSlick() {
      var test = $('.slick-center img').data('index');
      var e = $(".memory-letter ul li");
      addListClass(test, e);
      console.log(test);
    };

    $.when(

      // 先に実行したい処理をここ
      beforeSlick()

    ).done(function () {

      // その後実行したい処理をここ
      afterSlick()

    });

    $('.memories').on('afterChange', function (slick, currentSlide) {
      var test = $('.slick-center img').data('index');
      var e = $(".memory-letter ul li");
      addListClass(test, e);
      console.log(test);
    });

    function addListClass(number, e) {
      $(e).removeClass('active');
      $(e).eq(number).addClass('active');
    };


    // $('.memories').on('init', function(event, slick){
    //   var test = $('.slick-center').index('.slick-slide');
    //   console.log(test);
    //
    // });

  });
  console.log(myValues.site_url); //get_site_url()の値
  console.dir(myValues);
};
/* ----------------------------------------------------------
** functions
** GetQueryString()
** GetPostValue(lavel)
** RemoveHtml(str)
---------------------------------------------------------- */

// urlパラメーターを連想配列に格納
function GetQueryString() {
  var result = {};
  if (1 < window.location.search.length) {
    // 最初の1文字 (?記号) を除いた文字列を取得する
    var query = window.location.search.substring(1);

    // クエリの区切り記号 (&) で文字列を配列に分割する
    var parameters = query.split('&');

    for (var i = 0; i < parameters.length; i++) {
      // パラメータ名とパラメータ値に分割する
      var element = parameters[i].split('=');

      var paramName = decodeURIComponent(element[0]);
      var paramValue = decodeURIComponent(element[1]);

      // パラメータ名をキーとして連想配列に追加する
      result[paramName] = paramValue;
    }
  }
  return result;
}



// $_POSTの中身を取得
// ※使用するとソースコードからPOSTの内容が見えてしまいます。
// フォーム送信等のPOSTデータには使用することは控えてください。
function GetPostValue(lavel) {
  // 許可するページを選択
  var permit_page = {
    index: true,
    date: true,
    archive: true,
    category: true,
    taxonomy: true,
    tag: true,
    single: true,
    admin: true,
    allPage: false  //前項設定関係なく全てのページでの許可
  };

  // 許可するページ且つ、allPageで許可がある場合
  if (permit_page[myValues.page_type] && permit_page['allPage']) {
    // localize_script でコメントアウトしていたらnullを返す
    if (myValues.post_value) {
      // 引数が指定されている場合は指定のデータ名の値を返す
      if (lavel) {
        var postedData = myValues.post_value[lavel];
        return postedData;
      } else {  // 引数が指定されていない場合$_POSTをそのまま返す
        var postedData = myValues.post_value;
        return postedData;
      }
    } else {
      return null;
    }
  } else {
    console.log("error: This page is not permitted.");
    return null;
  }
}



// HTMLタグをが含まれいてる文字列を渡すとHTMLタグを削除したものを返します。
function RemoveHtml(str) {
  return String(str).replace(/<("[^"]*"|'[^']*'|[^'">])*>/g, '');
}



// 使用中のブラウザを返します。
function GetBrowserName() {
  const ua = window.navigator.userAgent.toLowerCase();
  let name = "unknown";
  if (ua.indexOf("msie") !== -1) {
    const ver = window.navigator.appVersion.toLowerCase();
    if (ver.indexOf("msie 6.") !== -1) {
      name = 'ie6';
    } else if (ver.indexOf("msie 7.") !== -1) {
      name = 'ie7';
    } else if (ver.indexOf("msie 8.") !== -1) {
      name = 'ie8';
    } else if (ver.indexOf("msie 9.") !== -1) {
      name = 'ie9';
    } else if (ver.indexOf("msie 10.") !== -1) {
      name = 'ie10';
    } else {
      name = 'ie';
    }
  } else if (ua.indexOf('trident/7') !== -1) {
    name = 'ie11';
  } else if (ua.indexOf('edge') !== -1) {
    name = 'edge';
  } else if (ua.indexOf('chrome') !== -1 && ua.indexOf('edge') === -1) {
    name = 'chrome';
  } else if (ua.indexOf('safari') !== -1 && ua.indexOf('chrome') === -1) {
    name = 'safari';
  } else if (ua.indexOf('opera') !== -1) {
    name = 'opera';
  } else if (ua.indexOf('firefox') !== -1) {
    name = 'firefox';
  }
  return name;
}


//ドロップメニュー//
$(function () {
  $("#global-menu a").hover(function () {
    $('.meun-inner').removeClass("active");
    $('#toggle-menu .subbox').removeClass('active');
    $('#toggle-menu').css('display', 'none');
    $('#toggle-menu').removeClass("drop");
    $('#toggle-menu').fadeOut(500);
    var menu_index = $(this).index("#global-menu a");
    console.log(menu_index);
    $('#toggle-menu').fadeIn(50);
    $('#toggle-menu').css('display', 'block');
    $('#toggle-menu').addClass("drop");
    $('#toggle-menu .subbox').eq(menu_index).addClass('active');
  },
    function () {
      // マウスが外れた時の処理
      // $('#toggle-menu ul,.meun-inner').removeClass('active');
      // $('#toggle-menu').removeClass("drop");
      $(".meun").hover(function () {
      },
        function () {
          // マウスが外れた時の処理
          $('#toggle-menu .subbox,.meun-inner').removeClass('active');
          $('#toggle-menu').removeClass("drop");
          $('#toggle-menu').css('display', 'none');
          $('#toggle-menu').fadeOut(500);
        });
    });
  $(".meun-btn,.meun-inner__logo,.remove-menu").hover(function () {
    $('#toggle-menu .subbox,.meun-inner').removeClass('active');
    $('#toggle-menu').removeClass("drop");
    $('#toggle-menu').css('display', 'none');
    $('#toggle-menu').fadeOut(500);
  },
    function () {
      // マウスが外れた時の処理
    });
});


//ハンバーガーメニュー//
$(function () {
  $('.meun-btn').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.meun-inner').addClass('active');
    } else {
      $('.meun-inner').removeClass('active');
    }
  });
});

//タブ切り替え//
$(function () {
  $(".tab-list__btn").click(function () {
    $(".tab-list__btn").removeClass('active');
    $(this).addClass('active');
    var tabBtnIndex = $(this).index('.tab-list__btn');
    $(".tab-inner__contents").removeClass('open');
    $(".tab-inner__contents").eq(tabBtnIndex).addClass('open');
    $('.tab-inner__contents.open .accordion .accordion-inner').not('.stay').hide();
  });
});

//アコーディオン//
// .s_04 .accordion_one
$(function () {
  //開いたときに.stayがついていないaccordion-innerは高さがゼロになる。
  $('.accordion .accordion-inner').not('.stay').hide();
  //.accordionの中の.accordion_headerがクリックされたら
  $('.point .number,.accordion-title').click(function () {
    //変数で数えるために空箱の変数を用意する。
    var accordionIndex = 0;
    //if文でついているクラスで分岐させる。
    if ($(this).hasClass('number')) {
      //ますは画像の方のボタンの数を数える
      accordionIndex = $(this).index('.point .number');
    } else if ($(this).hasClass('accordion-title')) {
      //アコーディオンのかすを数える
      accordionIndex = $(this).index('.accordion-title');
    }
    //accordionの中身の数を数える
    var innerIndex = $('.accordion-inner.stay').index('.accordion-inner');
    //if文でaccordionとaccordionの中身が異なる場合のみ機能させる
    //これがないと開いてる時にボタンを押すと一瞬開いて閉じる動作が入る。
    if (innerIndex != accordionIndex) {
      //accordion-titleのクラス名を取る。
      $('.accordion .accordion-title').removeClass('stay');
      //numberのクラス名を取る。
      $('.point .number').removeClass('start');
      //accordion-titleのクラス名を与える。
      $('.accordion .accordion-title').eq(accordionIndex).addClass('stay');
      //accordion-titleのクラス名を与える。
      $('.point .number').eq(accordionIndex).addClass('start');
      //accordion-innerを開かせる。
      $('.accordion .accordion-inner').slideUp();
      //accordion-innerを閉じる。
      $('.accordion .accordion-inner').eq(accordionIndex).slideDown();
      //accordion-innerをクラス名を取る。

      $('.accordion-inner').removeClass('stay');
      //accordion-innerをクラス名を与える。
      $('.accordion-inner').eq(accordionIndex).addClass('stay');
    }
  });
});

$(function () {
  //.accordionの中の.accordion_headerがクリックされたら
  $('.tab-inner__contents.open .accordion .accordion-inner').not('.stay').hide();
  $('.tab-inner__contents.open .point .number,.accordion-title').click(function () {
    var accordionIndex = 0;
    if ($(this).hasClass('number')) {
      accordionIndex = $(this).index('tab-inner__contents.open .point .number');
    } else if ($(this).hasClass('accordion-title')) {
      accordionIndex = $(this).index('tab-inner__contents.open .accordion-title');
    }
    var innerIndex = $('.tab-inner__contents.open .accordion-inner.stay').index('tab-inner__contents.open .accordion-inner');
    console.log("accordionIndex" + accordionIndex);
    console.log("innerIndex" + innerIndex);
    if (innerIndex != accordionIndex) {
      $('.tab-inner__contents.open .accordion .accordion-title').removeClass('stay');
      $('.tab-inner__contents.open .point .number').removeClass('start');
      $('.tab-inner__contents.open .accordion .accordion-title').eq(accordionIndex).addClass('stay');
      $('.tab-inner__contents.open .point .number').eq(accordionIndex).addClass('start');
      $('.tab-inner__contents.open .accordion .accordion-inner').slideUp();
      $('.tab-inner__contents.open .accordion .accordion-inner').eq(accordionIndex).slideDown();
      $('.tab-inner__contents.open .accordion-inner').removeClass('stay');
      $('.tab-inner__contents.open .accordion-inner').eq(accordionIndex).addClass('stay');
    }
  });
});


//モーダルウィンドウ
$(function () {
  $('.sharebtn').on('click', function () {
    $('.modal__back, .modal__inner').fadeIn();
  });
  $('.modal__back, .close-btn').on('click', function () {
    $('.modal__back, .modal__inner').fadeOut();
  });
});

//コピー
$(function () {
  new ClipboardJS('.copy-value');
});
// $(function () {
//   $('.copy-value').on('click', function () {
//     new ClipboardJS('.copy-value');

//   });
// });

//アラート
$(function () {
  $('.shop-link__pdf').on('click', function () {
    alert('Coming Soon');
  });
});

$(function () {
  $('a.alert－btn').on('click', function () {
    alert('準備中');
  });
});
