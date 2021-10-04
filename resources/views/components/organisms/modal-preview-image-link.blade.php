<div class="ui basic modal" id="modal-preview-image-link">
    <i class="close large icon"></i>
    <div class="image content">
        <img src="{{ asset('images/wireframe/sample_ringi2.jpg') }}" />
    </div>
</div>
<script>
    $(".preview-image-link").on("click", function () {
        $("#modal-preview-image-link")
            .modal({
                blurring: true,
            })
            .modal("show");
    });
</script>
