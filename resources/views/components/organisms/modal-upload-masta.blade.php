<div class="ui large modal" id="modal-upload-masta">
    <div class="header">
        CSVからアップロード
    </div>

    <div class="ui segment basic center aligned">
        <div class="item">
            <p>※CSVでアップロードする際には、必ずマスタをダウンロードして、フォーマットを併せた上でお使いください。</p>
            ※システム申し送り<br>
            アプリの入力レコードはリレーションを行わずにテキストとして保持させること<br>
            マスタはクライアントが上書きすることを許す想定。<br>
            編集時の入力は選択式ができなくなるということを周知する必要あり
        </div>
    </div>
    <div class="ui segment basic center aligned">

        <div class="item">
            <button class="ui button primary">CSVをアップしてマスタに追加</button>
        </div>
    </div>

    <div class="actions">
        <div class="ui ok button">
            閉じる
        </div>
    </div>
</div>
<script>
    $(function() {
        $(".btn-upload-mastar").on("click", function() {
            $("#modal-upload-masta")
                .modal({
                    closable: false,
                    onDeny: function() {
                        window.alert('まだ保存されていません');
                        return false;
                    },
                    onApprove: function() {
                        var result = confirm('マスタに追加を押さずにウインドウを閉じると保存はされませんがよろしいいでしょうか。');

                        if (result) {
                            //はいを選んだときの処理
                        } else {
                            //いいえを選んだときの処理
                            return false;
                        }

                    }
                })
                .modal('show')
        });
    });
</script>