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
    </head>

    <body>
        <!-- アップロードフォームの作成 -->
        <input type="file" id="fileUpload" name="file" />
        {{ csrf_field() }}
        <script>
            $(function () {
                // ファイルアップロードサンプル
                $("#fileUpload").change(function () {
                    const file = $(this).prop("files")[0];
                    const fileName = file.name;

                    $.ajax({
                        url: "http://localhost:8000/api/test/getS3Url",
                        type: "get",
                        cache: false,
                        dataType: "json",
                        data: { file_name: fileName },
                        error: function (error) {},
                        success: function (data) {
                            console.log(data);
                            const awsUrl = data.data;
                            var filetype = file["type"];
                            $.ajax({
                                url: awsUrl,
                                type: "put",
                                cache: false,
                                data: file,
                                headers: {
                                    "Content-Type": filetype,
                                },
                                processData: false,
                                contentType: false,
                                error: function (error) {},
                                success: function (data) {
                                    console.log(data);
                                },
                            });
                        },
                    });
                });
            });
        </script>
    </body>
</html>
