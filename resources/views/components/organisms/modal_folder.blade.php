<div class="ui modal nest-modal" id="modal-folder">
    <i class=" close icon"></i>
    <div class="header">
        <i class="folder icon"></i>フォルダ管理
    </div>
    <div class="content">
        <div class="floder-list boxed">
            <div class="ui fluid accordion">
                <div class="title">
                    <i class="folder icon"></i> 社内文書<div class="ui horizontal label">32</div>
                </div>
                <div class="content">
                    <div class="accordion">
                        <div class="title">
                            <i class="folder icon"></i>オフィス<div class="ui horizontal label">12</div>
                        </div>
                        <div class="content">
                            <div class="accordion">
                                <div class="folder">
                                    <i class="folder icon"></i> 会場リスト<div class="ui horizontal label">2</div>
                                </div>
                                <div class="folder">
                                    <i class="folder icon"></i> 交通費精算<div class="ui horizontal label">1</div>
                                </div>
                                <div class="folder">
                                    <a class="ui icon btn-add-folder">
                                        <i class="add icon"></i>追加
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <i class="folder icon"></i> 新卒向け<div class="ui horizontal label">20</div>
                        </div>
                        <div class="content">
                            <a class="ui icon btn-add-folder">
                                <i class="add icon"></i>追加
                            </a>
                        </div>
                        <div class="title">
                            <i class="folder icon"></i> 人事部<div class="ui horizontal label">15</div>
                        </div>
                        <div class="content">
                            <a class="ui icon btn-add-folder">
                                <i class="add icon"></i>追加
                            </a>
                        </div>
                        <div class="folder">
                            <a class="ui icon btn-add-folder">
                                <i class="add icon"></i>追加
                            </a>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <i class="folder icon"></i> マーケティング
                </div>
                <div class="content">
                    <a class="ui icon btn-add-folder">
                        <i class="add icon"></i>追加
                    </a>
                </div>
                <div class="title">
                    <a class="ui icon btn-add-folder">
                        <i class="add icon"></i>追加
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui mini modal nest-modal" id="modal-add-folder">
    <i class=" close icon"></i>
    <div class="header">
        <i class="folder icon"></i>フォルダ追加
    </div>
    <div class="content">
        <div class="ui mini icon input">
            <input type="text" placeholder="フォルダ名">
            <button class="ui icon button">
                <i class="add icon"></i>追加
            </button>
        </div>
    </div>
    <div class="actions">
        <div class="ui approve button">
            <i class="close icon"></i>閉じる
        </div>
    </div>
</div>
<script>
    $(".nest-modal").modal({
        allowMultiple: true,
    });
    $(".btn-edit-folder").on("click", function() {
        $("#modal-folder").modal("show");
    });
    $(".btn-add-folder").on("click", function() {
        $("#modal-add-folder").modal("show");
    });
</script>