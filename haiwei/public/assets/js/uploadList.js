//文件上传 上传小图
var opts = {
    url: "/system/upload",
    // url: "/system/qiniu",
    type: "post",
    beforeSend: function () {
        $("#loading_small").attr("class", "am-icon-spinner am-icon-pulse");
    },
    success: function (result, status, xhr) {
        if(result.status == "0") {
            alert(result.info);
            $("#loading_small").attr("class", "am-icon-cloud-upload");
            return false;
        }
        // alert('上传ok');
        // console.log(result);
        $("input[name='small_thumb']").val(result.info);
        $("#small_img_show").attr('src', result.info);
        $("#loading_small").attr("class", "am-icon-cloud-upload");
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败1');
        console.log(result);
        console.log(status);
        console.log(errorThrown);
    }
}

$('#small_thumb_upload').fileUpload(opts);