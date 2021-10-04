<div class="ui step1 basic modal-make-appli modal">
    <div class="header">格納するフォルダを指定してください</div>
    <div class="content">
        <div class="step-cts">
            <div class="select-folder-cts">
                <button class="massive ui button button-large">
                    <i class="folder icon"></i> フォルダを選ぶ
                </button>
                <button class="massive ui button button-large">
                    <i class="plus icon"></i> フォルダ作成
                </button>
            </div>
        </div>
    </div>
    <div class="actions">
        <button class="ui large inverted button next-button">次へ</button>
    </div>
</div>
<div class="ui step2 basic modal-make-appli modal">
    <div class="header">フォーム画像をアップロードしてください</div>
    <div class="content">
        <form class="ui form">
            <div class="step-cts">
                <div class="upload-area">
                    <h4 class="ui dividing header">ファイル選択</h4>
                    <div class="ui segment basic">
                        <input
                            type="file"
                            (change)="fileEvent($event)"
                            class="inputfile"
                            id="embedpollfileinput"
                        />
                        <label
                            for="embedpollfileinput"
                            class="primary ui button basic"
                            ><i class="ui file icon"></i>画像アップロード</label
                        >
                    </div>
                    <div class="notice">
                        <p class="meta">
                            以下の形式が対応可能です。登録頂いた画像に不備がある場合は弊社よりご連絡させていただきます。
                        </p>
                        <ul>
                            <li>JPEG、PDF、WWord、powerpoint形式</li>
                            <li>最低でも横幅960px以上の画像ファイル</li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <button class="ui large inverted button next-button">次へ</button>
    </div>
</div>
<div class="ui step3 basic modal-make-appli modal">
    <div class="header">
        マスタを登録しますか？マスタは後で登録することも可能です。
    </div>
    <div class="content">
        <form class="ui form">
            <div class="step-cts">
                <div class="upload-area">
                    <div class="input-area-harf">
                        <h4 class="ui dividing header">ファイル選択</h4>
                        <div class="ui segment basic">
                            <input
                                type="file"
                                (change)="fileEvent($event)"
                                class="inputfile"
                                id="embedpollfileinput"
                            />
                            <label
                                for="embedpollfileinput"
                                class="primary ui button basic"
                                ><i class="ui file icon"></i
                                >マスタアップロード</label
                            >
                        </div>
                        <div class="notice">
                            <p class="meta">以下の形式が対応可能です。</p>
                            <ul>
                                <li>Excel形式</li>
                                <li>スプレッドシート</li>
                            </ul>
                        </div>
                    </div>
                    <div class="input-preview">
                        <h4 class="ui dividing header">
                            アップロード予定ファイル
                        </h4>
                        <ul>
                            <li>商品マスタ.xls</li>
                            <li>顧客マスタ.xls</li>
                            <li>社員マスタ.xls</li>
                        </ul>

                        <h4 class="ui dividing header">備考</h4>
                        <div class="field">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <button class="ui large inverted button next-button">次へ</button>
        <button
            class="ui large inverted button ok primary approved next-button"
        >
            <i class="checkmark icon"></i>作成終了
        </button>
    </div>
</div>

<script>
    $(function () {
        $(".btn-make-appli-origin").on("click", function () {
            $(".modal-make-appli").modal({
                closable: false,
                allowMultiple: false,
                onApprove: function () {
                    window.alert("アプリの登録申請を行いました");
                    window.location.href = "{{route('admin/appli/list')}}";
                },
            });
            // attach events to buttons
            $(".step2.modal").modal(
                "attach events",
                ".step1.modal .next-button"
            );
            // attach events to buttons
            $(".step3.modal").modal(
                "attach events",
                ".step2.modal .next-button"
            );
            // show first now
            $(".step1.modal").modal("show");
        });
    });
</script>
