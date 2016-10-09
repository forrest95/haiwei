//文件上传
var opts = {
    // url: "/system/uploadFile",
    url: "/system/uploadFile_keepName",
    // url: "/system/qiniu",
    type: "post",
    beforeSend: function () {
        $("#loading3").attr("class", "am-icon-spinner am-icon-pulse");
    },
    success: function (result, status, xhr) {
        if(result.status == "0") {
            alert(result.info);
            $("#loading3").attr("class", "am-icon-cloud-upload");
            return false;
        }
        alert('上传ok');
        console.log(result);
        $("input[name='install_manual']").val(result.info);
        $("#install_show").text(result.info);
        $("#loading3").attr("class", "am-icon-cloud-upload");
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败');
        console.log(result);
        console.log(status);
        console.log(errorThrown);
    }
}

$('#install_upload').fileUpload(opts);