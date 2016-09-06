//文件上传
var opts = {
    url: "/system/upload",
    // url: "/system/qiniu",
    type: "post",
    beforeSend: function () {
        $("#loading").attr("class", "am-icon-spinner am-icon-pulse");
    },
    success: function (result, status, xhr) {
        if(result.status == "0") {
            alert(result.info);
            $("#loading").attr("class", "am-icon-cloud-upload");
            return false;
        }
        // alert('上传ok');
        // console.log(result);
        $("input[name='thumb']").val(result.info);
        $("#img_show").attr('src', result.info);
        $("#loading").attr("class", "am-icon-cloud-upload");
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败1');
        console.log(result);
        console.log(status);
        console.log(errorThrown);
    }
}

$('#thumb_upload').fileUpload(opts);