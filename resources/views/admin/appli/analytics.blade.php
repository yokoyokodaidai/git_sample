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
                    <div class="pl-table-wrap">
                        <table class="pl-rlt-table">
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
                                <tr class="all">
                                    <td>
                                        <h4 class="ui image header">
                                            アプリ合計
                                        </h4>
                                    </td>
                                    <td>58425</td>
                                    <td>165時間12分15秒</td>
                                    <td>22分12秒</td>
                                    <td>2019/8/4</td>
                                    <td>2021/6/28</td>
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
                    <div class="pl-sort-table-header">
                        <div class="sort">
                            <div
                                class="
                                    ui
                                    floating
                                    dropdown
                                    labeled
                                    search
                                    icon
                                    button
                                "
                            >
                                <i class="users icon"></i>
                                <span class="text">グループ</span>
                                <div class="menu">
                                    <div class="item">人事部</div>
                                    <div class="item">広報部</div>
                                    <div class="item">新入社員</div>
                                    <div class="item">イベントチーム</div>
                                </div>
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
                                                <h3>山之内すず</h3>
                                                <span>広報部</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>124358</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                <h3>藤田ニコル</h3>
                                                <span>人事部</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>528</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                            'images/wireframe/sample_people3.jpg'
                                                        )
                                                    }}"
                                                    class="ui avatar image"
                                                />
                                            </div>
                                            <div class="text">
                                                <h3>渡部篤郎</h3>
                                                <span>新入社員</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                            'images/wireframe/sample_people4.jpg'
                                                        )
                                                    }}"
                                                    class="ui avatar image"
                                                />
                                            </div>
                                            <div class="text">
                                                <h3>川田健太郎</h3>
                                                <span>イベントチーム</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                <h3>まりお</h3>
                                                <span>人事部</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                <h3>山之内すず</h3>
                                                <span>広報部</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                <h3>Jamie Harington</h3>
                                                <span>人事部</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                                                <h3>リオネルメッシ</h3>
                                                <span>人事部</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td class="nowrap">23時間12分15秒</td>
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
                </div>
            </article>
        </div>

        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>
