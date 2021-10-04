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
                <div id="top-cmn-wrap" class="pl-article-inner">
                    <div id="top-cmn-main">
                        <div class="pl-article-inner" id="pl-top-admin">
                            <h3 class="ui header">
                                ご利用状況(管理者権限のみ表示）
                            </h3>
                            <div class="ui four cards">
                                <div class="card">
                                    <div class="content">
                                        <div class="header">
                                            契約アカウント数
                                        </div>
                                        <div class="meta">無料プラン</div>
                                        <div class="description">
                                            契約アカウントをご確認ください
                                        </div>
                                    </div>
                                    <div class="extra item">
                                        <div class="meta">
                                            <span>使用数：24/26</span>
                                            <span> 停止数:2/26</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="content">
                                        <div class="header">アプリ数</div>
                                        <div class="meta">無料プラン</div>
                                        <div class="description">
                                            月に5件まで無料で作成。それ以上は有料
                                        </div>
                                    </div>
                                    <div class="extra item">
                                        <div class="meta">
                                            <span>使用数：24/26</span>
                                            <span> 停止数:2/26</span>
                                        </div>
                                        <div class="meta">
                                            <span>グループ数：8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="content">
                                        <div class="header">データ使用量</div>
                                        <div class="meta">
                                            <a>Coworker</a>
                                        </div>
                                        <div class="description">
                                            Elyse is a copywriter working in New
                                            York.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            Joined in 2014
                                        </span>
                                        <span>
                                            <i class="user icon"></i>
                                            151 Friends
                                        </span>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="content">
                                        <div class="header">API連携</div>
                                        <div class="meta">
                                            <a>Coworker</a>
                                        </div>
                                        <div class="description">
                                            Elyse is a copywriter working in New
                                            York.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            Joined in 2014
                                        </span>
                                        <span>
                                            <i class="user icon"></i>
                                            151 Friends
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="ui header">お知らせ</h4>
                        <div id="top-info" class="pl-top-cts">
                            <ul class="list-info">
                                <li>
                                    <div class="text">
                                        <p class="date">2021/8/26</p>
                                        運営事務局からのメンテナンス情報右側の一覧に運営事務局からのメンテナンス情報とサービス等に関するお知らせを通知するページリンクがあるといいと思います。
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <p class="date">2021/8/26</p>
                                        運営事務局からのメンテナンス情報右側の一覧に運営事務局からのメンテナンス情報とサービス等に関するお知らせを通知するページリンクがあるといいと思います。
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <p class="date">2021/8/26</p>
                                        運営事務局からのメンテナンス情報右側の一覧に運営事務局からのメンテナンス情報とサービス等に関するお知らせを通知するページリンクがあるといいと思います。
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ui header">
                            <i class="bell icon primary"></i>通知
                        </h3>
                        <div class="pl-top-cts" id="top-message">
                            <ul class="list-info">
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
                                        <p class="date">2021/8/26</p>
                                        <a
                                            href="{{
                                                route('admin/appli/setting')
                                            }}"
                                            >広報部顧客アンケート</a
                                        >の原稿が作成されました。動作確認をお願いいたします。
                                    </div>
                                </li>
                                <li>
                                    <div class="thum">
                                        adm
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p class="date">2021/8/20</p>
                                        <a
                                            href="{{
                                                route('admin/appli/setting')
                                            }}"
                                            >広報部顧客アンケートのレコードが追加されました。</a
                                        >
                                    </div>
                                </li>
                                <li>
                                    <div class="thum">
                                        adm
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p class="date">2021/8/20</p>
                                        <a
                                            href="{{
                                                route('admin/appli/setting')
                                            }}"
                                            >広報部顧客アンケートのレコードが編集されました。</a
                                        >
                                    </div>
                                </li>
                                <li>
                                    <div class="thum">
                                        adm
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p class="date">2021/8/20</p>
                                        <a
                                            href="{{
                                                route('admin/appli/setting')
                                            }}"
                                            >広報部顧客アンケートのレコードが削除されました。</a
                                        >
                                    </div>
                                </li>
                                <li>
                                    <div class="thum">
                                        <img
                                            src="{{ asset('images/logo.png') }}"
                                            class="ui avatar image"
                                        />
                                    </div>
                                    <div class="text">
                                        <p class="date">2021/8/26</p>
                                        <a
                                            href="{{
                                                route('admin/appli/setting')
                                            }}"
                                            >広報部顧客アンケートのレコードが追加されました。</a
                                        >
                                    </div>
                                </li>
                            </ul>
                            <button>もっと見る</button>
                        </div>
                    </div>
                    <div id="top-cmn-right">
                        <div class="right-inner">
                            <h4 class="ui header">フォルダ</h4>
                            <div id="top-folder" class="rim-cts">
                                <div
                                    class="
                                        ui
                                        vertical
                                        following
                                        fluid
                                        accordion
                                        text
                                        menu
                                        folder-list
                                    "
                                >
                                    <div class="item">
                                        <div class="title">
                                            <i class="dropdown icon"></i
                                            >マーケティング
                                            <span class="num">11</span>
                                        </div>
                                        <div class="content menu">
                                            <div class="item">
                                                <div class="title">
                                                    <i class="dropdown icon"></i
                                                    >会計関連
                                                    <span class="num">6</span>
                                                </div>
                                                <div class="content menu">
                                                    <ul>
                                                        <li class="item">
                                                            <a
                                                                href="{{
                                                                    route(
                                                                        'admin/appli/index'
                                                                    )
                                                                }}"
                                                                >美味美味しいわかめのユーザー調査美味しいわかめのユーザー調査美味しいわかめのユーザー調査しいわかめのユーザー調査</a
                                                            >
                                                        </li>
                                                        <li class="item">
                                                            <a
                                                                href="{{
                                                                    route(
                                                                        'admin/appli/index'
                                                                    )
                                                                }}"
                                                                >請求書881</a
                                                            >
                                                        </li>
                                                        <li class="item">
                                                            <a
                                                                href="{{
                                                                    route(
                                                                        'admin/appli/index'
                                                                    )
                                                                }}"
                                                                >請求書431</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="title">
                                                    <i class="dropdown icon"></i
                                                    >マスタ関連
                                                    <span class="num">3</span>
                                                </div>
                                                <div class="content menu">
                                                    <ul>
                                                        <li class="item">
                                                            <a
                                                                href="{{
                                                                    route(
                                                                        'admin/appli/index'
                                                                    )
                                                                }}"
                                                                >請求書512</a
                                                            >
                                                        </li>
                                                        <li class="item">
                                                            <a
                                                                href="{{
                                                                    route(
                                                                        'admin/appli/index'
                                                                    )
                                                                }}"
                                                                >請求書143</a
                                                            >
                                                        </li>
                                                        <li class="item">
                                                            <a
                                                                href="{{
                                                                    route(
                                                                        'admin/appli/index'
                                                                    )
                                                                }}"
                                                                >請求書431</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >出席表</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >納品書</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="title">
                                            <i class="dropdown icon"></i
                                            >社内文書 <span class="num">6</span>
                                        </div>
                                        <div class="content menu">
                                            <ul>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >請求書512</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >請求書143</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >請求書431</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >請求書512</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >請求書143</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >請求書431</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="title">
                                            <i class="dropdown icon"></i>
                                            広報部2021<span class="num">2</span>
                                        </div>
                                        <div class="content menu">
                                            <ul>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >社員出席簿</a
                                                    >
                                                </li>
                                                <li class="item">
                                                    <a
                                                        href="{{
                                                            route(
                                                                'admin/appli/index'
                                                            )
                                                        }}"
                                                        >イベント会場予約表</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <script src="{{ asset('js/cmn.js') }}"></script>

        <script>
            $(function () {
                $(".appli-list.cards .image").dimmer({
                    on: "hover",
                });
            });
        </script>
    </body>
</html>
