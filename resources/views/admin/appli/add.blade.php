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
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            /* Button used to open the contact form - fixed at the bottom of the page */
            .open-button {
                background-color: #555;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                opacity: 0.8;
                position: fixed;
                bottom: 23px;
                right: 28px;
                width: 280px;
            }

            /* The popup form - hidden by default */
            .form-popup {
                display: none;
                position: fixed;
                bottom: 0;
                right: 15px;
                border: 3px solid #f1f1f1;
                z-index: 9;
            }

            /* Add styles to the form container */
            .form-container {
                max-width: 300px;
                padding: 10px;
                background-color: white;
            }

            /* Full-width input fields */
            .form-container input[type="text"],
            .form-container input[type="password"] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
            }

            /* When the inputs get focus, do something */
            .form-container input[type="text"]:focus,
            .form-container input[type="password"]:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Set a style for the submit/login button */
            .form-container .btn {
                background-color: #04aa6d;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                margin-bottom: 10px;
                opacity: 0.8;
            }

            /* Add a red background color to the cancel button */
            .form-container .cancel {
                background-color: red;
            }

            /* Add some hover effects to buttons */
            .form-container .btn:hover,
            .open-button:hover {
                opacity: 1;
            }
        </style>
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
                            <h3>レコード:新規追加</h3>
                        </div>
                    </div>
                    <div class="action-area"></div>
                </div>
                <div id="appli-page-wrap">
                    <div id="main-wrap">
                        <div class="appli-input-wrap">
                            <button class="open-button" onclick="openForm()">
                                Open Form
                            </button>

                            <div class="form-popup" id="myForm">
                                <form
                                    action="/action_page.php"
                                    class="form-container"
                                >
                                    <h1>Login</h1>

                                    <label for="email"><b>Email</b></label>
                                    <input
                                        type="text"
                                        placeholder="Enter Email"
                                        name="email"
                                        required
                                    />

                                    <label for="psw"><b>Password</b></label>
                                    <input
                                        type="password"
                                        placeholder="Enter Password"
                                        name="psw"
                                        required
                                    />

                                    <button type="submit" class="btn">
                                        Login
                                    </button>
                                    <button
                                        type="button"
                                        class="btn cancel"
                                        onclick="closeForm()"
                                    >
                                        Close
                                    </button>
                                </form>
                            </div>

                            <script>
                                function openForm() {
                                    document.getElementById(
                                        "myForm"
                                    ).style.display = "block";
                                }

                                function closeForm() {
                                    document.getElementById(
                                        "myForm"
                                    ).style.display = "none";
                                }
                            </script>
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
                </div>
            </article>
        </div>
        @component('components.organisms.modal-record-mastar')@endcomponent
        <script src="{{ asset('js/cmn.js') }}"></script>
        <script>
            $(".ui.calendar").calendar({
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
                $("#look2-text").val(this.value);
                $("#look1-text").val(
                    $("#look1-select option:selected").data("tani")
                );
            });
            $("input:text").click(function () {
                $(this).parent().find("input:file").click();
            });
            //MASTA用モーダル
            $("input:file", ".ui.action.input").on("change", function (e) {
                var name = e.target.files[0].name;
                $("input:text", $(e.target).parent()).val(name);
            });
        </script>
    </body>
</html>
