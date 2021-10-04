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
                    <h2>稟議書バージョン1.5</h2>
                    <div class="action">
                        <a href="{{ route('admin/appli/index') }}">
                            <i class="database icon"></i>
                            レコード一覧
                        </a>
                        <a href="{{ route('admin/appli/analytics') }}">
                            <i class="chart line icon"></i>
                            利用状況
                        </a>
                        <a href="{{ route('admin/appli/setting') }}"
                            ><i class="cog icon"></i>アプリ設定</a
                        >
                        <a class="item">
                            <i class="cloud download icon"></i>
                            API連携
                        </a>
                    </div>
                </div>
                <div id="appli-info-head" class="pl-article-inner">
                    <div class="info-area">
                        <div class="thum">
                            <img
                                src="{{
                                    asset(
                                        'images/wireframe/sample_app_thum.jpg'
                                    )
                                }}"
                                class="ui rounded image"
                            />
                        </div>
                        <div class="text">
                            <div class="content">
                                <div class="description">アプリ:ID:4566</div>
                                <div class="description">
                                    最終更新日:2021/8/5
                                </div>
                                <div class="description">作成者：山田太郎</div>
                            </div>
                        </div>
                    </div>
                    <div class="action-area">
                        <button class="ui inverted primary button">
                            公開中
                        </button>
                    </div>
                </div>
                <div id="appli-info-body">
                    <div class="pl-sort-table-header">
                        <div class="sort">
                            <div class="ui transparent left icon input">
                                <input
                                    type="text"
                                    placeholder="Search..."
                                    class="table-search"
                                />
                                <i class="search icon"></i>
                            </div>
                            <button class="ui button search-disp-order">
                                <i class="filter icon"></i>表示項目
                            </button>
                        </div>
                        <div class="pl-sort-table-action">
                            <a
                                class="ui primary button"
                                href="{{ route('admin/appli/add') }}"
                                ><i class="plus icon"></i>レコード追加</a
                            >
                            <button class="ui primary button">
                                <i class="file icon"></i>CSV
                            </button>
                        </div>
                    </div>
                    <div class="pl-table-wrap">
                        <table class="pl-sort-table">
                            <thead>
                                <tr>
                                    <th class="collapsing">コメント</th>
                                    <th>ID</th>
                                    <th>日付</th>
                                    <th>見積番号</th>
                                    <th>質問項目1</th>
                                    <th>質問項目2</th>
                                    <th>質問項目3</th>
                                    <th>質問項目4</th>
                                    <th>作成者</th>
                                    <th>プロセス</th>
                                    <th class="not-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="action">
                                        <a
                                            class="ui compact"
                                            href="{{
                                                route('admin/appli/edit')
                                            }}"
                                        >
                                            <i
                                                class="comment alternate icon"
                                            ></i
                                            >12
                                        </a>
                                    </td>
                                    <td>000001</td>
                                    <td>2021/8/6</td>
                                    <td>0AF456FF</td>
                                    <td>
                                        <p>相当数の量が確保できました。</p>
                                    </td>
                                    <td>
                                        <p>
                                            内閣支持率は「危険水域」に沈んでおり、このまま低空飛行が続けば「菅降ろし」も現実味を帯びてくる
                                        </p>
                                    </td>
                                    <td>
                                        <p>相当数の量が確保できました。</p>
                                    </td>
                                    <td>
                                        <p>
                                            京都では感染拡大が急拡大し、自宅療養者が２万人を超えるなど深刻な医療逼迫（ひっぱく）となっている
                                        </p>
                                    </td>
                                    <td class="spb">大久保利通</td>
                                    <td>入力</td>
                                    <td class="action">
                                        <a
                                            class="
                                                ui
                                                compact
                                                icon
                                                btn-recorde-del
                                            "
                                            href="#"
                                        >
                                            <i
                                                class="
                                                    trash
                                                    alternate
                                                    outline
                                                    icon
                                                "
                                            ></i>
                                        </a>
                                        <a
                                            class="ui compact"
                                            href="{{
                                                route('admin/appli/edit')
                                            }}"
                                        >
                                            <i class="edit icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="action">
                                        <a
                                            class="ui compact"
                                            href="{{
                                                route('admin/appli/edit')
                                            }}"
                                        >
                                            <i
                                                class="comment alternate icon"
                                            ></i
                                            >12
                                        </a>
                                    </td>
                                    <td>000001</td>
                                    <td>2021/8/6</td>
                                    <td>0AF456FF</td>
                                    <td>
                                        <p>相当数の量が確保できました。</p>
                                    </td>
                                    <td>
                                        <p>
                                            内閣支持率は「危険水域」に沈んでおり、このまま低空飛行が続けば「菅降ろし」も現実味を帯びてくる
                                        </p>
                                    </td>
                                    <td>
                                        <p>相当数の量が確保できました。</p>
                                    </td>
                                    <td>
                                        <p>
                                            京都では感染拡大が急拡大し、自宅療養者が２万人を超えるなど深刻な医療逼迫（ひっぱく）となっている
                                        </p>
                                    </td>
                                    <td class="spb">大久保利通</td>
                                    <td>入力</td>
                                    <td class="action">
                                        <a
                                            class="
                                                ui
                                                compact
                                                icon
                                                btn-recorde-del
                                            "
                                            href="#"
                                        >
                                            <i
                                                class="
                                                    trash
                                                    alternate
                                                    outline
                                                    icon
                                                "
                                            ></i>
                                        </a>
                                        <a
                                            class="ui compact"
                                            href="{{
                                                route('admin/appli/edit')
                                            }}"
                                        >
                                            <i class="edit icon"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
        <div class="ui modal" id="modal-search-order">
            <i class="close icon"></i>
            <div class="header">表示設定</div>
            <div class="content">
                <div class="ui relaxed list">
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>ID</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>日付</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>見積番号</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>質問項目1</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>質問項目2</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>質問項目3</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example" />
                            <label>質問項目4</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="actions">
                <div class="ui primary right labeled icon button">
                    設定する
                    <i class="checkmark icon"></i>
                </div>
            </div>
        </div>
        <script>
            $(".search-disp-order").on("click", function () {
                $("#modal-search-order").modal("show");
            });
        </script>
    </body>
</html>
