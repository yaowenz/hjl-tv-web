<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>紧急业务</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="css/base.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<style>
    html, body {height:100%}
</style>
<body>
<div class="container urgent">
    <div class="header clearfix">
        <?php include 'side-right.php' ?>
        <div class="title"><span>紧急业务</span></div>
        <div class="menu"><span>菜单</span></div>
        <div class="btn"><img src="images/next.png" class="js-next"/></div>
        <div class="btn"><img src="images/prev.png" class="js-prev"/></div>
    </div>
    <div class="txt">
        <table border="0" class="jobs">
            <tr>
                <td class="no">
                    <p class="outer-id">W2019102K1292</p>
                    <p class="loc">长宁区 - 啦啦花园</p>
                </td>
                <td class="title">古北店/长宁区3个月又胞胎女宝(带)烧饭卫生 4口人 130平4口人 1</td>
                <td class="salary">
                    5000元/月
                </td>
            </tr>
            <tr class="odd">
                <td class="no">
                    <p class="outer-id">W2019102K1292</p>
                    <p class="loc">长宁区 - 啦啦花园</p>
                </td>
                <td class="title">古北店/长宁区3个月又胞胎女宝(带)烧饭卫生 4口人 130平4口人 1</td>
                <td class="salary">
                    5000元/月
                </td>
            </tr>
            <tr>
                <td class="no">
                    <p class="outer-id">W2019102K1292</p>
                    <p class="loc">长宁区 - 啦啦花园</p>
                </td>
                <td class="title">古北店/长宁区3个月又胞胎女宝(带)烧饭卫生 4口人 130平4口人 130平4口人 130平4口人 130平4口人</td>
                <td class="salary">
                    5000元/月
                </td>
            </tr>
            <tr class="odd">
                <td class="no">
                    <p class="outer-id">W2019102K1292</p>
                    <p class="loc">长宁区 - 啦啦花园</p>
                </td>
                <td class="title">古北店/长宁区3个月又胞胎女宝(带)烧饭卫生 4口人 130平4口人 1</td>
                <td class="salary">
                    5000元/月
                </td>
            </tr>
            <tr>
                <td class="no">
                    <p class="outer-id"></p>
                    <p class="loc">长宁区 - 啦啦花园</p>
                </td>
                <td class="title">古北店/长宁区3个月又胞胎女宝(带)烧饭卫生 4口人 130平4口人 1</td>
                <td class="salary">
                    5000元/月
                </td>
            </tr>
        </table>
    </div>
    <div id="demo" class="qimo8">
        <div class="qimo">
            <div id="demo1">
                <ul>
                    <li style="width:500px">&nbsp;</li>
                    <li>家政员，您好，请您在确认接活前将您的身份证和健康证交到家政老师手中。</li>
                    <li>请您在面试前清楚了解需要面试的工种、主做业务、工作的内容（包括家里的人口、面积、服务对象的类型）、工作的要求（包括休息时间、工资待遇、服务的要求）。</li>
                    <li>当家政老师和客户联系好后，保证准时前去面试或试工，承诺具备相应的技能和细心服务雇主，因自身问题造成雇主损失的自行承担赔偿损失或法律法规责任、公司不承担任何责任。</li>
                    <li>不得将雇主信息泄露给他人，未与雇主签约之前，不得与雇主互留联系方式。</li>
                    <li>不得以任何理由向雇主提出不做，如需下单必须提前10天预先告知公司，且能遵循公司老师的指导安排，完成平稳交接工作，如因回家理由辞工的必须按照公司要求分别在三天不同时间段用老家座机与公司通话，由此证明情况属实，如有违规，愿意接受服务费或信誉保证金作为违约金，不予退还。</li>
                    <li>家政员因未按指定时间，迟到半小时或早到雇主家而被雇主拒绝的自行承担责任。</li>
                    <li>不得在公司宣传其他公司或培训机构，不得带公司其他家政员到别的公司或培训机构。</li>
                    <li>下单后不得私自安排阿姨上单，如果被公司的其他阿姨安排上单的，服务费概不退还。不得和雇主私下要求加工资，家政员如需调休，应得到雇主允许，但休息时间上不可拖延。</li>
                    <li>以上内容请确认并在收据上签字。</li>
                </ul>
            </div>
            <div id="demo2"></div>
        </div>
    </div>
    <div class="scroll_bar">
        <img src="images/up.png" class="up"/><br/>
        <img src="images/down.png" class="down"/>
    </div>
</div>
<!--
<audio src="http://tv.haojialian123.com/files/promise.mp3" autoplay="true" loop="true"></audio>
-->
<script type="text/javascript">
    return;
    var demo = document.getElementById("demo");
    var demo1 = document.getElementById("demo1");
    var demo2 = document.getElementById("demo2");
    demo2.innerHTML = document.getElementById("demo1").innerHTML;
    function Marquee() {
        if (demo.scrollLeft - demo2.offsetWidth >= 0) {
            demo.scrollLeft -= demo1.offsetWidth;
        }
        else {
            demo.scrollLeft++;
        }
    }
    var myvar = setInterval(Marquee, 10);
    demo.onmouseout = function () {
        myvar = setInterval(Marquee, 10);
    }
    demo.onmouseover = function () {
        clearInterval(myvar);
    }
</script>
</body>
</html>





















