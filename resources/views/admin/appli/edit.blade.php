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
                        <div class="text">
                            <h3>レコード:20210419-00020-445</h3>
                            作成者：大久保利通2021/2/8<br />最終更新：大久保利通2021/4/8
                        </div>
                    </div>
                    <div class="action-area">
                        <a class="item">
                            <i class="copy icon"></i>
                            レコードをコピー
                        </a>
                        <a class="item">
                            <i class="trash alternate outline icon"></i>
                            レコードを削除
                        </a>
                    </div>
                </div>
                <div id="appli-page-wrap">
                    <div id="main-wrap">
                        <div class="appli-input-wrap">
                            <div class="sample1 pl-form-box">
                                <textarea></textarea>
                            </div>
                            <div class="sample2 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="sample3 pl-form-box">
                                <div class="ui calendar">
                                    <div class="ui transparent input">
                                        <input
                                            type="text"
                                            placeholder="日付選択"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="sample4 pl-form-box">
                                <div class="ui transparent input">
                                    \<input
                                        type="number"
                                        name="sample"
                                        id="sample1"
                                    />
                                </div>
                            </div>
                            <div class="sample5 pl-form-box">
                                <select>
                                    <option value="">選択</option>
                                    <option value="1">LED交換作業</option>
                                    <option value="0">積み替え作業</option>
                                    <option value="1">
                                        全身もみほぐしコース
                                    </option>
                                    <option value="0">
                                        クイック足裏コース
                                    </option>
                                </select>
                            </div>
                            <div class="sample6 pl-form-box">
                                <select>
                                    <option value="">選択</option>
                                    <option value="0">2021/8/31</option>
                                    <option value="0">2021/9/30</option>
                                    <option value="0">2021/10/31</option>
                                </select>
                            </div>
                            <div class="modal_v1 pl-form-box">
                                <div class="ui transparent">
                                    <input
                                        type="text"
                                        value=""
                                        class="btn-modal-masta"
                                        id="mv1-1"
                                    />
                                </div>
                            </div>
                            <div class="modal_v1_2 pl-form-box">
                                <div class="ui transparent">
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="modal_v1_3 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" id="mv1-2" />
                                </div>
                            </div>
                            <div class="modal_v1_4 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" id="mv1-3" />
                                </div>
                            </div>
                            <div class="modal_v1_5 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="modal_v1_6 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="sample_v1 pl-form-box">
                                <div class="ui input transparent">
                                    <select id="look1-select">
                                        <option value="" selected>
                                            ルックアップサンプル
                                        </option>
                                        <option value="6800" data-tani="個">
                                            あいみょん
                                        </option>
                                        <option value="9850" data-tani="冊">
                                            カブール
                                        </option>
                                        <option value="3650" data-tani="巻">
                                            ＡＰ通信
                                        </option>
                                        <option value="884512" data-tani="段">
                                            スラム過激派組織
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="sample_v1_2 pl-form-box">
                                <div class="ui transparent">
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="sample_v1_3 pl-form-box">
                                <div class="ui transparent input">
                                    <input
                                        type="text"
                                        value=""
                                        readonly
                                        disabled
                                        id="look1-text"
                                    />
                                </div>
                            </div>
                            <div class="sample_v1_4 pl-form-box">
                                <div class="ui transparent input">
                                    <input
                                        type="text"
                                        value=""
                                        readonly
                                        disabled
                                        id="look2-text"
                                    />
                                </div>
                            </div>
                            <div class="sample_v1_5 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="sample_v1_6 pl-form-box">
                                <div class="ui transparent input">
                                    <input type="text" value="" />
                                </div>
                            </div>

                            <div class="sampleform8 pl-form-box">
                                <div class="ui input transparent">
                                    <textarea></textarea>
                                </div>
                            </div>
                            <div class="sampleform9 pl-form-box">
                                <div class="ui action input transparent">
                                    <input
                                        type="text"
                                        placeholder="File 1"
                                        readonly
                                    />
                                    <input type="file" />
                                </div>
                            </div>
                            <div id="appli-input-bg">
                                <img
                                    src="{{
                                        asset(
                                            'images/wireframe/sample_ringi2.jpg'
                                        )
                                    }}"
                                />
                            </div>
                        </div>
                    </div>
                    <div id="action-wrap">
                        <div class="ui tabular menu" id="appli-info-body-tab">
                            <a class="item" data-tab="comment">コメント</a>
                            <a class="item" data-tab="history">更新履歴</a>
                        </div>
                        <div class="ui tab" data-tab="comment">
                            <form class="ui reply form">
                                <div class="field">
                                    <textarea></textarea>
                                </div>
                                <div
                                    class="
                                        ui
                                        primary
                                        submit
                                        labeled
                                        icon
                                        button
                                    "
                                >
                                    <i class="icon edit"></i> コメント入力
                                </div>
                            </form>
                            <div class="ui comments">
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">山崎健太郎</div>
                                        <div class="metadata">
                                            <div class="date">2021/8/19</div>
                                        </div>
                                        <div class="text">
                                            株式会社QQ English
                                            (本社：東京都新宿区、代表取締役：藤岡
                                            頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ
                                            2,174人によるまとめ白書」としてホームページ上に公開しております。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            Christian Rocha
                                        </div>
                                        <div class="metadata">
                                            <div class="date">2021/8/13</div>
                                        </div>
                                        <div class="text">
                                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">山崎健太郎</div>
                                        <div class="metadata">
                                            <div class="date">2021/8/19</div>
                                        </div>
                                        <div class="text">
                                            株式会社QQ English
                                            (本社：東京都新宿区、代表取締役：藤岡
                                            頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ
                                            2,174人によるまとめ白書」としてホームページ上に公開しております。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            Christian Rocha
                                        </div>
                                        <div class="metadata">
                                            <div class="date">2021/8/13</div>
                                        </div>
                                        <div class="text">
                                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">山崎健太郎</div>
                                        <div class="metadata">
                                            <div class="date">2021/8/19</div>
                                        </div>
                                        <div class="text">
                                            株式会社QQ English
                                            (本社：東京都新宿区、代表取締役：藤岡
                                            頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ
                                            2,174人によるまとめ白書」としてホームページ上に公開しております。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            Christian Rocha
                                        </div>
                                        <div class="metadata">
                                            <div class="date">2021/8/13</div>
                                        </div>
                                        <div class="text">
                                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">山崎健太郎</div>
                                        <div class="metadata">
                                            <div class="date">2021/8/19</div>
                                        </div>
                                        <div class="text">
                                            株式会社QQ English
                                            (本社：東京都新宿区、代表取締役：藤岡
                                            頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ
                                            2,174人によるまとめ白書」としてホームページ上に公開しております。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            Christian Rocha
                                        </div>
                                        <div class="metadata">
                                            <div class="date">2021/8/13</div>
                                        </div>
                                        <div class="text">
                                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">山崎健太郎</div>
                                        <div class="metadata">
                                            <div class="date">2021/8/19</div>
                                        </div>
                                        <div class="text">
                                            株式会社QQ English
                                            (本社：東京都新宿区、代表取締役：藤岡
                                            頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ
                                            2,174人によるまとめ白書」としてホームページ上に公開しております。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            Christian Rocha
                                        </div>
                                        <div class="metadata">
                                            <div class="date">2021/8/13</div>
                                        </div>
                                        <div class="text">
                                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">山崎健太郎</div>
                                        <div class="metadata">
                                            <div class="date">2021/8/19</div>
                                        </div>
                                        <div class="text">
                                            株式会社QQ English
                                            (本社：東京都新宿区、代表取締役：藤岡
                                            頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ
                                            2,174人によるまとめ白書」としてホームページ上に公開しております。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="avatar">
                                        <img
                                            src="{{
                                                asset(
                                                    'images/wireframe/square-image.png'
                                                )
                                            }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            Christian Rocha
                                        </div>
                                        <div class="metadata">
                                            <div class="date">2021/8/13</div>
                                        </div>
                                        <div class="text">
                                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui tab" data-tab="history">
                            <table
                                class="ui very basic collapsing celled table"
                            >
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4 class="ui image header">
                                                <img
                                                    src="{{
                                                        asset(
                                                            'images/wireframe/square-image.png'
                                                        )
                                                    }}"
                                                    class="
                                                        ui
                                                        mini
                                                        rounded
                                                        image
                                                    "
                                                />
                                                <div class="content">
                                                    山崎健太郎
                                                </div>
                                            </h4>
                                        </td>
                                        <td>2021/8/19</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="ui image header">
                                                <img
                                                    src="{{
                                                        asset(
                                                            'images/wireframe/square-image.png'
                                                        )
                                                    }}"
                                                    class="
                                                        ui
                                                        mini
                                                        rounded
                                                        image
                                                    "
                                                />
                                                <div class="content">
                                                    山崎健太郎
                                                </div>
                                            </h4>
                                        </td>
                                        <td>2021/8/19</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="ui image header">
                                                <img
                                                    src="{{
                                                        asset(
                                                            'images/wireframe/square-image.png'
                                                        )
                                                    }}"
                                                    class="
                                                        ui
                                                        mini
                                                        rounded
                                                        image
                                                    "
                                                />
                                                <div class="content">
                                                    山崎健太郎
                                                </div>
                                            </h4>
                                        </td>
                                        <td>2021/8/19</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="ui image header">
                                                <img
                                                    src="{{
                                                        asset(
                                                            'images/wireframe/square-image.png'
                                                        )
                                                    }}"
                                                    class="
                                                        ui
                                                        mini
                                                        rounded
                                                        image
                                                    "
                                                />
                                                <div class="content">
                                                    山崎健太郎
                                                </div>
                                            </h4>
                                        </td>
                                        <td>2021/8/19</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="ui image header">
                                                <img
                                                    src="{{
                                                        asset(
                                                            'images/wireframe/square-image.png'
                                                        )
                                                    }}"
                                                    class="
                                                        ui
                                                        mini
                                                        rounded
                                                        image
                                                    "
                                                />
                                                <div class="content">
                                                    山崎健太郎
                                                </div>
                                            </h4>
                                        </td>
                                        <td>2021/8/19</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <script src="{{ asset('js/cmn.js') }}"></script>
        <script>
            $(".menu .item").tab();
            $(".sampleform4").calendar({
                type: "date",
                formatter: {
                    date: function (date) {
                        var day = ("0" + date.getDate()).slice(-2);
                        var month = ("0" + (date.getMonth() + 1)).slice(-2);
                        var year = date.getFullYear();
                        return year + "/" + month + "/" + day;
                    },
                },
            });
            //LOOKUP
            $("#look1-select").on("change", function () {
                $("#look1-text").val(this.value);
            });
            //添付資料
            $("input:text").click(function () {
                $(this).parent().find("input:file").click();
            });

            $("input:file", ".ui.action.input").on("change", function (e) {
                var name = e.target.files[0].name;
                $("input:text", $(e.target).parent()).val(name);
            });
        </script>
    </body>
</html>
