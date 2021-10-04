$(function () {
  //初期化
  //TABLETの場合は左メニューを表示;
  var windowWidth = $(window).width();

  if (windowWidth < 769) {
    $("#left-menu-wrap").addClass("off");
    $("#left-menu-wrap").animate({ marginLeft: "-210px" }, 0);
    $("body").animate({ marginLeft: "30px" }, 0);
  } else {
    if ($("#left-menu-wrap").length) {
      $("body").animate({ marginLeft: "240px" }, 0);
    }
  }

  //左のコンテンツ用にウィンドウの高さを取得
  fit();
  $(window).resize(function () {
    fit();
  });
  function fit() {
    var h = $(window).height();
    $("#left-menu-wrap div.sidemenu").css("height", h);
  }

  $(".table-search").on("keydown keyup", function () {
    var cols = $(this)
      .parents(".pl-sort-table-header")
      .next(".pl-table-wrap")
      .find("table.pl-sort-table")
      .find("tbody>tr"); //全てのtrを取得
    var searchWord = $(this).val(); //検索したいワードを取得
    reg = new RegExp(searchWord, "g"); //正規表現で変数を扱うための準備
    cols.each(function (i, val) {
      var col_name = $(val).children("td").text();
      if (col_name.match(reg)) {
        $(val).show(); //該当項目を表示
      } else {
        $(val).hide(); //該当しない項目を非表示
      }
    });
  });

  $(".pl-sort").on("change", function () {
    var cols = $(this)
      .parents(".pl-sort-table-header")
      .next(".pl-table-wrap")
      .find("table.pl-sort-table")
      .find("tbody>tr"); //全てのtrを取得
    var searchWord = $(this).val(); //検索したいワードを取得
    reg = new RegExp(searchWord, "g"); //正規表現で変数を扱うための準備
    cols.each(function (i, val) {
      var col_name = $(val).children("td").text();
      if (col_name.match(reg)) {
        $(val).show(); //該当項目を表示
      } else {
        $(val).hide(); //該当しない項目を非表示
      }
    });
  });
  //layout
  //クリックで表示
  $("#slide-left-nav-icon").on("click", function () {
    if ($("#left-menu-wrap").hasClass("off")) {
      $("#left-menu-wrap").removeClass("off");
      $("#left-menu-wrap").animate({ marginLeft: "0px" }, 300).addClass("on");
      $("body").animate({ marginLeft: "240px" }, 300);
      $("body").addClass("slide");
    } else {
      $("#left-menu-wrap").removeClass("on");
      $("#left-menu-wrap").addClass("off");
      $("#left-menu-wrap").animate({ marginLeft: "-210px" }, 300);
      $("body").animate({ marginLeft: "30px" }, 300);
      $("body").removeClass("slide");
    }
  });

  //TABLE SORT
  $(".pl-sort-table").tablesorter({
    textExtraction: function (node) {
      var attr = $(node).attr("data-value");
      if (typeof attr !== "undefined" && attr !== false) {
        return attr;
      }
      return $(node).text();
    },
    headers: {
      // disable sorting of the first & second column - before we would have to had made two entries
      // note that "first-name" is a class on the span INSIDE the first column th cell
      ".not-sort": {
        // disable it by setting the property sorter to false
        sorter: false,
      },
    },
  });
  // 共通MODAL
  $(".btn-make-appli").on("click", function () {
    $("#modal-make-appli").modal("show");
  });
});
// semantic

$(".ui.dropdown").dropdown();
$(".ui.checkbox").checkbox();
$(".ui.accordion").accordion({ exclusive: false });
