//文件上传
var opts = {
    url: "/system/uploadFile",
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
        console.log(result);
        $("input[name='file']").val(result.info);
        $("#file_show").text(result.info);
        $("#loading").attr("class", "am-icon-cloud-upload");
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败');
        console.log(result);
        console.log(status);
        console.log(errorThrown);
    }
}

$('#file_upload').fileUpload(opts);



//前端客户文件上传
var opts = {
    url: "/system/uploadFile",
    // url: "/system/qiniu",
    type: "post",
    success: function (result, status, xhr) {
        if(result.status == "0") {
            alert(result.info);
            return false;
        }
        if(result.status == "1") {
            alert('上传ok');
        }else{
            alert('文件大小超出限制！');
        }

        console.log(result);
        $("input[name='file']").val(result.info);
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败');
        console.log(result);
        console.log(status);
        console.log(errorThrown);
    }
}

$('#user_uploadFile').fileUpload(opts);