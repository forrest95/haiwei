//文件上传
var opts = {
    url: "/system/uploadHtml",
    // url: "/system/qiniu",
    type: "post",
    beforeSend: function () {
        $("#loading2").attr("class", "am-icon-spinner am-icon-pulse");
    },
    success: function (result, status, xhr) {
        if(result.status == "0") {
            alert(result.info);
            $("#loading2").attr("class", "am-icon-cloud-upload");
            return false;
        }
        // alert('上传ok');
        console.log(result);
        $("input[name='product_html']").val(result.info);
        $("#html_show").text(result.info);
        $("#loading2").attr("class", "am-icon-cloud-upload");
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败1');
        console.log(result);
        console.log(status);
        console.log(errorThrown);
    }
}

$('#html_upload').fileUpload(opts);