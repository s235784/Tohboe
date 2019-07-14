<?php
/**
 * Created by PhpStorm.
 * User: nuotian
 * Date: 2019/2/21
 * Time: 11:57
 */

if (empty($_GET['ChapterInfo'])) {
    $ChapterInfo = "1";
} else if ($_GET['ChapterInfo'] == null) {
    $ChapterInfo = "1";
} else {
    $ChapterInfo = $_GET['ChapterInfo'];
}
if ($ChapterInfo != "postscript") {
    switch ($ChapterInfo) {
        case '1':
            $Title = '一';
            $ForCounter = 29;
            break;
        case '2':
            $Title = '二';
            $ForCounter = 40;
            break;
        case '3':
            $Title = '三';
            $ForCounter = 34;
            break;
        case '4':
            $Title = '四';
            $ForCounter = 44;
            break;
        case '5':
            $Title = '五';
            $ForCounter = 53;
            break;
        case '6':
            $Title = '六';
            $ForCounter = 21;
            break;
        case '7':
            $Title = '七';
            $ForCounter = 21;
            break;
        case '8':
            $Title = '八';
            $ForCounter = 22;
            break;
        case '9':
            $Title = '九';
            $ForCounter = 29;
            break;
        case '10':
            $Title = '十';
            $ForCounter = 38;
            break;
        case '11':
            $Title = '十一';
            $ForCounter = 37;
            break;
        case '12':
            $Title = '十二';
            $ForCounter = 26;
            break;
        case '13':
            $Title = '十三';
            $ForCounter = 38;
            break;
        case '14':
            $Title = '十四';
            $ForCounter = 28;
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php
    if ($ChapterInfo == 'postscript') echo '<title>远吠书签 - 后记</title>';
    else echo "<title>远吠书签 - 第 $Title 话</title>";
    ?>
    <meta charset="utf-8">
    <meta name="Keywords" content="漫画,远吠书签,兽人,汉化,Furry,Comic,Cotton"/>
    <meta name="description" content=""/>
    <meta name="theme-color" content="#5E35B1">
    <link rel="shortcut icon" href="https://cafe.furrys.cn/favicon_32.ico">
    <link href="../styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://res.furrys.cn/iconicfont/1.3.0/css/iconmonstr-iconic-font.min.css" rel="stylesheet"/>
    <link href="https://res.furrys.cn/materialize/0.97.8/css/materialize.css" media="screen,projection" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://res.furrys.cn/jquery/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://res.furrys.cn/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://res.furrys.cn/jquery/lazyload/1.9.5/lazyload.min.js"></script>
    <script type="text/javascript" src="https://res.furrys.cn/holder/2.9.3/holder.min.js"></script>
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
            <li><a style="padding: 0 32px" class="waves-effect" href="../?ContextInfo=main">主页</a></li>
            <li><a style="padding: 0 32px" class="waves-effect" href="../?ContextInfo=about">关于</a></li>
            <li><a style="padding: 0 32px" class="waves-effect" href="http://cotton.inukubou.com/">日文版</a></li>
            <li><a style="padding: 0 32px" class="waves-effect" href="http://tohboebookmarkinenglish.blogspot.jp/">英文版</a></li>
            <li><div class="divider" style="margin-bottom: 8px"></div></li>
            <li>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal active" style="padding-left: 32px; padding-right: 32px">目录</a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="1-li" <?php if ($ChapterInfo == "1") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="1" onclick="RequestXMLContext(this)">第一话</a>
                                </li>
                                <li id="2-li" <?php if ($ChapterInfo == "2") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="2" onclick="RequestXMLContext(this)">第二话</a>
                                </li>
                                <li id="3-li" <?php if ($ChapterInfo == "3") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="3" onclick="RequestXMLContext(this)">第三话</a>
                                </li>
                                <li id="4-li" <?php if ($ChapterInfo == "4") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="4" onclick="RequestXMLContext(this)">第四话</a>
                                </li>
                                <li id="5-li" <?php if ($ChapterInfo == "5") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="5" onclick="RequestXMLContext(this)">第五话</a>
                                </li>
                                <li id="6-li" <?php if ($ChapterInfo == "6") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="6" onclick="RequestXMLContext(this)">第六话</a>
                                </li>
                                <li id="7-li" <?php if ($ChapterInfo == "7") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="7" onclick="RequestXMLContext(this)">第七话</a>
                                </li>
                                <li id="8-li" <?php if ($ChapterInfo == "8") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="8" onclick="RequestXMLContext(this)">第八话</a>
                                </li>
                                <li id="9-li" <?php if ($ChapterInfo == "9") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="9" onclick="RequestXMLContext(this)">第九话</a>
                                </li>
                                <li id="10-li" <?php if ($ChapterInfo == "10") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="10" onclick="RequestXMLContext(this)">第十话</a>
                                </li>
                                <li id="11-li" <?php if ($ChapterInfo == "11") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="11" onclick="RequestXMLContext(this)">第十一话</a>
                                </li>
                                <li id="12-li" <?php if ($ChapterInfo == "12") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="12" onclick="RequestXMLContext(this)">第十二话</a>
                                </li>
                                <li id="13-li" <?php if ($ChapterInfo == "13") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="13" onclick="RequestXMLContext(this)">第十三话</a>
                                </li>
                                <li id="14-li" <?php if ($ChapterInfo == "14") echo 'class="active"' ?>>
                                    <a style="padding-left: 47px;" href="javascript:void(0);" requester="14" onclick="RequestXMLContext(this)">第十四话</a>
                                </li>
                                <?php if ($ChapterInfo == 'postscript') : ?>
                                    <li id="postscript-li" class="active">
                                        <a style="padding-left: 47px;" href="javascript:void(0);" requester="postscript" onclick="RequestXMLContext(this)">后记</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<main id="main" <?php if ($ChapterInfo != 'postscript') echo 'style="background-color: #f5f5f5"'; ?>>
    <?php if ($ChapterInfo != 'postscript') : //显示漫画界面 ?>
        <div class="container" id="main-container">
            <br>
            <div class="hide-on-small-only">
                <?php
                for ($x = 1; $x <= $ForCounter; $x++) {
                    if ($x % 2 == 0) {
                        $y = $x - 1;
                        echo "<div class=\"row\" style=\"margin-bottom: 20px\">";
                        echo "<img data-original=\"https://cafe.furrys.cn/Tohboe/chapter-images/{$ChapterInfo}/{$x}.jpg\" class=\"lazy responsive-img col s12 m6\" alt=\"{$ChapterInfo}-{$x}\" data-src=\"https://res.furrys.cn/holder/2.9.3/holder.min.js/500x720?text=加载中\"/>";
                        echo "<img data-original=\"https://cafe.furrys.cn/Tohboe/chapter-images/{$ChapterInfo}/{$y}.jpg\" class=\"lazy responsive-img col s12 m6\" alt=\"{$ChapterInfo}-{$y}\" data-src=\"https://res.furrys.cn/holder/2.9.3/holder.min.js/500x720?text=加载中\"/>";
                        echo "</div>";
                    }
                }
                if ($ForCounter % 2 != 0) {
                    echo "<div class=\"center\">";
                    echo "<img data-original=\"https://cafe.furrys.cn/Tohboe/chapter-images/{$ChapterInfo}/{$ForCounter}.jpg\" class=\"lazy responsive-img\" alt=\"{$ChapterInfo}-{$ForCounter}\" data-src=\"https://res.furrys.cn/holder/2.9.3/holder.min.js/500x720?text=加载中\"/>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="hide-on-med-and-up row">
                <?php
                for ($x = 1; $x <= $ForCounter; $x++)
                    echo "<img data-original=\"https://cafe.furrys.cn/Tohboe/chapter-images/{$ChapterInfo}/{$x}.jpg\" class=\"lazy responsive-img col s12 m6\" alt=\"{$ChapterInfo}-{$x}\" data-src=\"https://res.furrys.cn/holder/2.9.3/holder.min.js/500x720?text=加载中\" style='margin-bottom: 10px'/>";
                ?>
            </div>
        </div>
        <?php if ($ChapterInfo == 14): ?>
            <div class="center">
                <a requester="postscript" onclick="RequestXMLContext(this)" class="waves-effect waves-light btn" style="background-color:#5e35b1 !important">后记</a>
            </div>
        <?php endif ?>
        <div class="center">
            <br>
            <ul class="pagination" style="margin-bottom: 0">
                <li class="<?php if ($ChapterInfo == 1): echo 'disabled'; endif ?>"><a href="#!" requester="<?php if ($ChapterInfo != 1): echo $ChapterInfo - 1; else: echo 1; endif ?>" onclick="RequestXMLContext(this)"><i class="material-icons">chevron_left</i></a></li>
                <?php
                if ($ChapterInfo <= 2 ):
                    ?>
                    <li class="<?php if ($ChapterInfo == 1): echo 'active'; else: echo 'waves-effect'; endif; ?>"><a href="#!" requester="1" onclick="RequestXMLContext(this)">1</a></li>
                    <li class="<?php if ($ChapterInfo == 2): echo 'active'; else: echo 'waves-effect'; endif; ?>"><a href="#!" requester="2" onclick="RequestXMLContext(this)">2</a></li>
                    <li class="waves-effect"><a href="#!" requester="3" onclick="RequestXMLContext(this)">3</a></li>
                    <li class="waves-effect"><a href="#!" requester="4" onclick="RequestXMLContext(this)">4</a></li>
                    <li class="waves-effect"><a href="#!" requester="5" onclick="RequestXMLContext(this)">5</a></li>
                <?php
                elseif ($ChapterInfo <= 12 ):
                    ?>
                    <li class="waves-effect"><a href="#!" requester="<?php echo $ChapterInfo - 2 ?>" onclick="RequestXMLContext(this)"><?php echo $ChapterInfo - 2 ?></a></li>
                    <li class="waves-effect"><a href="#!" requester="<?php echo $ChapterInfo - 1 ?>" onclick="RequestXMLContext(this)"><?php echo $ChapterInfo - 1 ?></a></li>
                    <li class="active"><a href="#!" requester="<?php echo $ChapterInfo ?>" onclick="RequestXMLContext(this)"><?php echo $ChapterInfo ?></a></li>
                    <li class="waves-effect"><a href="#!" requester="<?php echo $ChapterInfo + 1 ?>" onclick="RequestXMLContext(this)"><?php echo $ChapterInfo + 1 ?></a></li>
                    <li class="waves-effect"><a href="#!" requester="<?php echo $ChapterInfo + 2 ?>" onclick="RequestXMLContext(this)"><?php echo $ChapterInfo + 2 ?></a></li>
                <?php
                elseif ($ChapterInfo <= 14 ):
                    ?>
                    <li class="waves-effect"><a href="#!" requester="10" onclick="RequestXMLContext(this)">10</a></li>
                    <li class="waves-effect"><a href="#!" requester="11" onclick="RequestXMLContext(this)">11</a></li>
                    <li class="waves-effect"><a href="#!" requester="12" onclick="RequestXMLContext(this)">12</a></li>
                    <li class="<?php if ($ChapterInfo == 13): echo 'active'; else: echo 'waves-effect'; endif; ?>"><a href="#!" requester="13" onclick="RequestXMLContext(this)">13</a></li>
                    <li class="<?php if ($ChapterInfo == 14): echo 'active'; else: echo 'waves-effect'; endif; ?>"><a href="#!" requester="14" onclick="RequestXMLContext(this)">14</a></li>
                <?php
                endif;
                ?>
                <li class="<?php if ($ChapterInfo == 14): echo 'disabled'; endif ?>"><a href="#!" requester="<?php if ($ChapterInfo != 14): echo $ChapterInfo + 1; else: echo 14; endif ?>" onclick="RequestXMLContext(this)"><i class="material-icons">chevron_right</i></a></li>
            </ul>
            <br>
        </div>
    <?php else : //显示后记界面?>
        <?php include_once('postscript.html'); ?>
    <?php endif; ?>
</main>
<?php include_once('../footer.html'); ?>
<script>

    function RequestXMLContext(param) {
        window.location.href = "?ChapterInfo=" + param.getAttribute("requester");
    }

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

        $("img.lazy").lazyload();
        $(".button-collapse").sideNav();
        $(".collapsible").collapsible();
    });
</script>
</body>
</html>

