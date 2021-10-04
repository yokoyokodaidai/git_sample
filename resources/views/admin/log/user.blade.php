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
                    <h2>ユーザーの稼働状況</h2>
                </div>
                <div class="pl-article-inner">
                    <h3 class="ui header">全体平均</h3>
                    <div class="pl-table-wrap">
                        <table class="pl-rlt-table">
                            <thead>
                                <tr>
                                    <th>平均アクセス回数</th>
                                    <th>平均合計滞在時間</th>
                                    <th>平均滞在時間</th>
                                    <th>平均アクセス頻度</th>
                                    <th>平均レコード作成数</th>
                                    <th>平均レコード削除数</th>
                                    <th>平均レコード更新数</th>
                                    <th>平均アプリ作成数</th>
                                    <th>平均アプリ変更依頼数</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="all">
                                    <td>58425</td>
                                    <td>165時間12分15秒</td>
                                    <td>22分12秒</td>
                                    <td>54.3</td>
                                    <td>65654</td>
                                    <td>23455</td>
                                    <td>2222</td>
                                    <td>645</td>
                                    <td>24</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3 class="ui header">個別平均</h3>
                <div class="pl-sort-table-header">
                    <div class="sort">
                        <div class="ui form">
                            <select class="pl-sort">
                                <option value="">グループ選択</option>
                                <option value="人事部">人事部</option>
                                <option value="広報部">広報部</option>
                                <option value="新入社員">新入社員</option>
                                <option value="イベントチーム">
                                    イベントチーム
                                </option>
                            </select>
                        </div>
                        <div class="ui transparent left icon input">
                            <input
                                type="text"
                                placeholder="Search..."
                                class="table-search"
                            />
                            <i class="search icon"></i>
                        </div>
                    </div>
                    <div class="pl-sort-table-action">
                        <p class="term">集計期間：2020/7/1-2021/8/4</p>
                        <button class="ui button search-disp-order">
                            <i class="calendar alternate outline icon"></i
                            >期間設定
                        </button>
                        <button class="ui primary button">
                            <i class="file icon"></i>CSV
                        </button>
                    </div>
                </div>
                <div class="pl-table-wrap">
                    <table class="pl-sort-table">
                        <thead>
                            <tr>
                                <th>利用ユーザー</th>
                                <th>アクセス回数</th>
                                <th>合計滞在時間</th>
                                <th>平均滞在時間</th>
                                <th>初回アクセス日時</th>
                                <th>最終アクセス日時</th>
                                <th>アクセス頻度</th>
                                <th>レコード作成数</th>
                                <th>レコード削除数</th>
                                <th>レコード更新数</th>
                                <th>アプリ作成数</th>
                                <th>アプリ変更依頼数</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >山之内すず</a
                                                >
                                            </h3>
                                            <span>広報部</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people2.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >藤田ニコル</a
                                                >
                                            </h3>
                                            <span>人事部</span>
                                        </div>
                                    </div>
                                </td>
                                <td>528</td>
                                <td>24353時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/12/4</td>
                                <td>2020/11/28</td>
                                <td>55.3</td>
                                <td>65454</td>
                                <td>2435</td>
                                <td>232</td>
                                <td>324</td>
                                <td>255</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people4.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >渡部篤郎</a
                                                >
                                            </h3>
                                            <span>新入社員</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people5.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >川田健太郎</a
                                                >
                                            </h3>
                                            <span>イベントチーム</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people2.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >まりお</a
                                                >
                                            </h3>
                                            <span>人事部</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people3.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >山之内すず</a
                                                >
                                            </h3>
                                            <span>広報部</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people5.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >Jamie Harington</a
                                                >
                                            </h3>
                                            <span>人事部</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >リオネルメッシ</a
                                                >
                                            </h3>
                                            <span>人事部</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>
