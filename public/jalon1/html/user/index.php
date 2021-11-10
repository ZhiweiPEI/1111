<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/user/index.css">
    <link rel="stylesheet" href="../../myAdmin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../js/user/index.js"></script>
    <script src="../../myAdmin/lib/layui/layui.js"></script>
    <title id="user info"></title>
</head>
<body>

<div class="all">
    <div class="header">
        <div class="header_center">
            <div class="header01">
                <div class="header01_4">
                    <div class="name" id="name">
                        <p>Zhiwei PEI</p>
                    </div>

                    <div class="contact">
                        <div class="email" id="email">
                            <p>email:</p>
                            <p>zhiwei.pei@outlook.com</p>
                        </div>

                        <div class="tele">
                            <p>tel:</p>
                            <em id="tele">0699944987</em>
                        </div>
                    </div>
                </div>
                <div class="profile">
                    <img src="../../img/WechatIMG90.jpeg" width="100px" height="100px"/>
                </div>
                <div class="upload">
                    <input type="file" name="image" id="uploadFile" style="display:none;">
                    <input type="hidden" name="img">
                    <button type="button" class="beatiful" id="uploadBtn">上传图片</button>
                </div>  
                <div>
                    <img src="" class="img-show">
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="content_center">
            <div class="content_top">
                <div class="top_left" onmouseover="select_news_type(this)">公司新闻</div>

                <div class="top_mid"  onmouseover="select_news_type(this)">行业资讯</div>

                <div class="top_right" onmouseover="select_news_type(this)">媒体报道</div>
            </div>

            <div class="content_mid" id="news_titles">

            </div>

            <div class="page" id="page">

            </div>
        </div>
    </div>

    <hr/>
    <div class="footer">
        <div class="footer_center">
            <div class="footer_top" id="footNav">

            </div>
        </div>
    </div>
</div>
</body>
</html>