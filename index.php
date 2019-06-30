<?php
/**
 * Created by PhpStorm.
 * User: nuotian
 * Date: 2019/2/21
 * Time: 11:12
 */
if (empty($_GET['ContextInfo'])) {
    $ContextInfo = "main";
} else if ($_GET['ContextInfo'] == null) {
    $ContextInfo = "main";
} else {
    $ContextInfo = $_GET['ContextInfo'];
}
switch ($ContextInfo) {
    case 'main':
        $Title = "汉化版";
        break;
    case 'about':
        $Title = "关于";
        break;
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>远吠书签 - <?php echo $Title; ?></title>
    <meta charset="utf-8">
    <meta name="Keywords" content="漫画,远吠书签,兽人,汉化,Furry,Comic,Cotton"/>
    <meta name="description" content=""/>
    <meta name="theme-color" content="#5E35B1">
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://res.furrys.cn/materialize/0.97.8/css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://res.furrys.cn/jquery/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://res.furrys.cn/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript">
	(function(w, d, s, a, m) {
	a = d.createElement(s);
	a.async = 1;
	a.src = "//us2.centcount.com/ca.php?sid=1903120000001001&ct=" + (new Date).getTime();
	m = d.getElementsByTagName(s)[0];
	m.parentNode.insertBefore(a, m)
	})(window, document, "script");
    </script>
</head>
<body>
<nav>
    <div class="nav-wrapper deep-purple darken-1">
        <a class="brand-logo hide-on-large-only ">Furry Cafe</a>
        <a class="brand-logo hide-on-med-and-down" style="margin-left: 320px">Furry Cafe</a>
        <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav fixed" id="mobile-nav" style="padding-top: 8px">
            <li id="main-li" <?php if ($ContextInfo == 'main') echo 'class="active"'; ?>>
                <a style="padding: 0 32px" class="waves-effect" href="javascript:void(0);" requester="main" onclick="RequestXMLContext(this)">主页</a>
            </li>
            <li id="about-li" <?php if ($ContextInfo == 'about') echo 'class="active"'; ?>>
                <a style="padding: 0 32px" class="waves-effect" href="javascript:void(0);" requester="about" onclick="RequestXMLContext(this)">关于</a>
            </li>
            <li><a style="padding: 0 32px" class="waves-effect" href="http://cotton.inukubou.com/">日文版</a></li>
            <li><a style="padding: 0 32px" class="waves-effect" href="http://tohboebookmarkinenglish.blogspot.jp/">英文版</a></li>
            <li><div class="divider" style="margin-bottom: 8px"></div></li>
            <li>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal" style="padding-left: 32px; padding-right: 32px">目录</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=1">第一话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=2">第二话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=3">第三话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=4">第四话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=5">第五话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=6">第六话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=7">第七话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=8">第八话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=9">第九话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=10">第十话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=11">第十一话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=12">第十二话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=13">第十三话</a></li>
                                <li><a style="padding-left: 47px;" href="chapter/?ChapterInfo=14">第十四话</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<main id="main">
    <div class="container" id="main-container">
        <?php include_once($ContextInfo . '.html'); ?>
    </div>
    <br>
</main>
<?php include_once('footer.html'); ?>
<script>
    $(function()
    {
        function setLeftPadding() {
            if ( document.body.clientWidth >= 993)
            {
                $("#main").css("padding-left","300px");
                $("#footer-info").css("padding-left","300px");
                $("#footer-copyright").css("padding-left","300px");
            } else
            {
                $("#main").css("padding-left","0");
                $("#footer-info").css("padding-left","0");
                $("#footer-copyright").css("padding-left","0");
            }
        }
        setLeftPadding();
        $(window).resize(function ()
        {
            setLeftPadding();
        });
        $(".button-collapse").sideNav();
        $('.collapsible').collapsible();
    });

    function RequestXMLContext(param) {
        window.location.href = "?ContextInfo=" + param.getAttribute("requester");
    }
</script>
</body>
</html>
