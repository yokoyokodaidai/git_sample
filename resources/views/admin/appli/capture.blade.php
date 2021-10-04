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
            .option {
                width: 250px;
            }

            .color > a {
                display: inline-block;
                width: 20px;
                height: 20px;
            }

            .black {
                background-color: #000000;
            }

            .red {
                background-color: #ff0000;
            }

            .blue {
                background-color: #0000ff;
            }
        </style>
    </head>

    <body>
        @component('components.templates.front_head')@endcomponent
        <div id="front-wrap">
            @component('components.templates.admin_left_menu_pc')@endcomponent
            <div id="bottomToggle" class="item">
                <button class="ui circular menu icon button">
                    <i class="menu icon"></i>
                </button>
            </div>
            <article class="pl-article-wrap">
                <div class="ui container basic">
                    <div class="ui segment">
                        <canvas
                            id="canvas"
                            width="595"
                            height="842"
                            style="
                                border: solid 1px #000;
                                box-sizing: border-box;
                            "
                        ></canvas>
                        <div class="option">
                            <div class="color">
                                色：
                                <a
                                    href=""
                                    class="black"
                                    data-color="0, 0, 0, 1"
                                ></a>
                                <a
                                    href=""
                                    class="red"
                                    data-color="255, 0, 0, 1"
                                ></a>
                                <a
                                    href=""
                                    class="blue"
                                    data-color="0, 0, 255, 1"
                                ></a>
                            </div>
                            <div class="bold">
                                太さ：
                                <a href="" class="small" data-bold="1">小</a>
                                <a href="" class="middle" data-bold="5">中</a>
                                <a href="" class="large" data-bold="10">大</a>
                            </div>
                        </div>
                        <input type="button" value="clear" id="clear" />
                        <a id="download" href="#" download="canvas.jpg"
                            >ダウンロード</a
                        >
                        <div>
                            <button id="eraser-button">消しゴムモード</button>
                        </div>
                        <div id="result"><img src="" /></div>
                    </div>
                </div>
            </article>
        </div>
        @component('components.templates.pl-edit-bottom-menu')@endcomponent
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>
