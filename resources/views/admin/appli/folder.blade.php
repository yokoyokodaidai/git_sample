<!DOCTYPE html>
<html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
        />

        <!-- Site Properties -->
        <title>photyolize.jp</title>

        <!-- Site CUTOM -->
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
        @yield('js')
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('css/semantic.min.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('css/admin_style.min.css') }}"
        />
        @yield('css')
    </head>

    <body>
        @component('components.templates.front_head')@endcomponent
        <div id="front-wrap">
            @component('components.templates.admin_left_menu_pc')@endcomponent
            <article class="pl-article-wrap">
                <div class="pl-article-head">
                    <h2>フォルダ管理</h2>
                </div>
                <div class="pl-article-inner">
                    <div id="folder-head">
                        <div class="name">HOME</div>
                        <div class="name">
                            <div class="ui header">
                                <div
                                    class="
                                        ui
                                        inline
                                        dropdown
                                        item
                                        folder-action
                                    "
                                >
                                    <i class="folder icon"></i>
                                    マーケティング
                                    <i class="dropdown icon"></i>
                                    <div class="menu">
                                        <div
                                            class="item"
                                            data-value="add"
                                            data-name="新規フォルダ作成"
                                        >
                                            新規フォルダ作成
                                        </div>
                                        <div
                                            class="item"
                                            data-value="rename"
                                            data-name="名前変更"
                                        >
                                            名前変更
                                        </div>
                                        <div
                                            class="item"
                                            data-value="move"
                                            data-name="移動"
                                        >
                                            移動
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="folder-body">
                        <h3>フォルダ</h3>
                        <div id="folder-list">
                            <div class="folder">
                                <a href="#"><span>マーケティング</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"><span>顧客アンケート</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"><span>社内アンケート</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"><span>イベント</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"><span>商品</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"><span>店舗管理</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"><span>オフィス文書</span></a>
                            </div>
                            <div class="folder">
                                <a href="#"
                                    ><span>マーケテマーケティング2000</span></a
                                >
                            </div>
                        </div>
                        <h3>アプリ</h3>
                        <ul class="list-appli">
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="{{ route('admin/appli/index') }}"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum2.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum3.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum4.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum2.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum3.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thum">
                                    <img
                                        src="{{
                                            asset(
                                                'images/wireframe/sample_app_thum4.jpg'
                                            )
                                        }}"
                                    />
                                </div>
                                <div class="text">
                                    <a href="admin_appli_index.php"
                                        >稟議書バージョン1.5</a
                                    >
                                    <div class="description">
                                        最終更新日：2021/8/21<br />作成者：吉田松陰
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
        <div class="ui mini modal" id="modal-folder-action">
            <i class="close icon"></i>
            <form action="" id="folder-action">
                <div id="folder-action-head"></div>
                <div id="folder-action-body">
                    <div class="act-cts add-cts">
                        <input type="text" placeholder="" />
                        <button class="ui icon button">
                            <i class="add icon"></i>追加
                        </button>
                    </div>
                    <div class="act-cts rename-cts">
                        <input type="text" placeholder="" />
                        <button class="ui icon button">名前変更</button>
                    </div>
                    <div class="act-cts move-cts">
                        <select class="ui dropdown">
                            <option value="">Gender</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                        <button class="ui icon button">移動</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="{{ asset('js/cmn.js') }}"></script>
        <script>
            $(".btn-add-folder").on("click", function () {
                $("#modal-add-folder").modal("show");
            });
            $(".folder-action").dropdown({
                onChange: function (value, name) {
                    $("#folder-action-body")
                        .find(".act-cts")
                        .css("display", "none");
                    $("#folder-action").attr("action", value);
                    $("#folder-action-head").text(name);
                    $("#folder-action-body")
                        .find("." + value + "-cts")
                        .css("display", "block");
                    $("#modal-folder-action")
                        .modal("setting", "transition", "scale")
                        .modal("show");
                },
            });
        </script>
    </body>
</html>
