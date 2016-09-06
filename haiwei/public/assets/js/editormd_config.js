$(function () {
    var editor = editormd("markdown", {
        path: "/assets/vendor/markdown/lib/",
        imageUpload: true,
        imageFormats: ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
        imageUploadURL: "/assets/vendor/markdown/php/upload.php",
        saveHTMLToTextarea: true,//获得html
        emoji: true,//表情
        htmlDecode: "style,script,iframe|on*",
        width: "100%",
        height: "740",
    });
});