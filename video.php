<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>培训视频</title>
    <link rel="stylesheet" href="css/base.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div class="container">
    <?php include 'side-left.php' ?>
    <div class="right">
        <?php include 'side-right.php' ?>
        <div class="header">
            <div class="item video"><span>培训视频</span></div>
            <div class="menu"><span>菜单</span></div>
        </div>
        <div id="videobox">
            <div class="videos clearfix">
                <div class="vs">
                    <div>
                        <div class="border">
                            <video src="saiban_ch.mp4" poster="images/v.jpg" id="video0"></video>
                        </div>
                    </div>
                    <p>礼仪礼节篇</p>
                </div>
                <div class="vs">
                    <div>
                        <div class="border">
                            <video src="saiban_ch.mp4" poster="images/v.jpg" id="video1"></video>
                        </div>
                    </div>
                    <p>礼仪礼节篇</p>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll_bar">
        <img src="images/up.png" class="up"/><br/>
        <img src="images/down.png" class="down"/>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    var myVideo = document.getElementsByTagName('video')[0];
    $(window).keydown(function (event) {
        var key_code = event.keyCode;
        if (key_code == 27) {
            myVideo.pause();
        }

    });
    //反射調用
    var invokeFieldOrMethod = function (element, method) {
        var usablePrefixMethod;
        ["webkit", "moz", "ms", "o", ""].forEach(function (prefix) {
            if (usablePrefixMethod) return;
            if (prefix === "") {
            // 无前缀，方法首字母小写
                method = method.slice(0, 1).toLowerCase() + method.slice(1);
            }
            var typePrefixMethod = typeof element[prefix + method];
            if (typePrefixMethod + "" !== "undefined") {
                if (typePrefixMethod === "function") {
                    usablePrefixMethod = element[prefix + method]();
                } else {
                    usablePrefixMethod = element[prefix + method];
                }
            }
        });
        return usablePrefixMethod;
    };
    //進入全屏
    function launchFullscreen(element) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if (element.msRequestFullscreen) {
            element.msRequestFullscreen();
        } else if (element.oRequestFullscreen) {
            element.oRequestFullscreen();
        }
        else if (element.webkitRequestFullscreen) {
            element.webkitRequestFullScreen();
        } else {
            var docHtml = document.documentElement;
            var docBody = document.body;
            var videobox = document.getElementById('videobox');
            var cssText = 'width:100%;height:100%;overflow:hidden;';
            docHtml.style.cssText = cssText;
            docBody.style.cssText = cssText;
            videobox.style.cssText = cssText + ';' + 'margin:0px;padding:0px;';
            document.IsFullScreen = true;
        }

        element.play();
    }
    //退出全屏
    function exitFullscreen() {
//        if (document.exitFullscreen) {
//            document.exitFullscreen();
//        } else if (document.msExitFullscreen) {
//            document.msExitFullscreen();
//        } else if (document.mozCancelFullScreen) {
//            document.mozCancelFullScreen();
//        } else if (document.oRequestFullscreen) {
//            document.oCancelFullScreen();
//        } else if (document.webkitExitFullscreen) {
//            document.webkitExitFullscreen();
//        } else {
//            var docHtml = document.documentElement;
//            var docBody = document.body;
//            var videobox = document.getElementById('videobox');
//            docHtml.style.cssText = "";
//            docBody.style.cssText = "";
//            videobox.style.cssText = "";
//            document.IsFullScreen = false;
//        }

        $('video').each(function() {
            this.pause();
        })
    }

    $(".videos .vs").click(function () {
        var i = $(this).index();
        //console.log(i);
        launchFullscreen(document.getElementById("video" + i));
    });

    document.addEventListener("fullscreenchange", function () {
        if(!document.fullscreen) exitFullscreen();
        fullscreenState.innerHTML = (document.fullscreen)? "" : "not ";
    }, false);

    document.addEventListener("webkitfullscreenchange", function () {
        if(!document.webkitIsFullScreen) exitFullscreen();
    }, false);
</script>
</body>
</html>