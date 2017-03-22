<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap的基本模板</title>
    <!-- Bootstrap -->
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入下面两个库让 IE8 支持 HTML5 元素 -->
    <!-- 警告: Respond.js 通过 file:// 浏览的时候不能正常工作！-->
    <!--[if lt IE 9]>
 <!—导入jQuery版本库，因为Bootstrap的JavaScript插件依赖于jQuery -->
    <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
    <!—- 一次性导入所有Bootstrap的JavaScript插件（压缩版本） -->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <![endif]-->
</head>
<body>

<div class="container">


    <div style="padding: 100px 100px 10px;">
        <form class="bs-example bs-example-form" role="form">
            <div class="input-group">
                <span class="input-group-addon" style="background-color: rgba(244, 67, 69, 0.86);color: white">名称</span>
                <input type="text" class="form-control" id="flower_name" placeholder="满天星">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">花语</span>
                <input type="text" class="form-control" id="flower_moral" placeholder="纯洁、无私、忠贞的爱">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">季节</span>
                <input type="text" class="form-control" id="flower_season" placeholder="四季">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">国家</span>
                <input type="text" class="form-control" id="flower_country" placeholder="希腊">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">价格</span>
                <input type="text" class="form-control" id="flower_price" placeholder="3.99">
            </div>
            <br>

            <div>
                <p class="font-size:12px">各位老师好，我叫汤瑶，导师是王晓龙教授，我的论文题目是基于异构信息处理的股票投资策略研究，
                      下面我将从以下六个方面阐述以下我目前的研究进度。
                      首先是我的课题研究内容，核心的想法就是通过监测涨停股票来发掘和涨停股票相关的股票集，为投资者提供参考，研究对象深市所有股票。具体流程如图所示
                      我们首先通过金融文本信息构建股票关系网络，股票关系网络用来找到和涨停股票相关联的候选集，然后利用DTW算法和SVR预测模型对候选集进行筛选
                      找到和涨停股票相关度高的，趋势较好的股票推荐给投资者。
                </p>
                <p class="font-size:12px">
                      首先说一下股票关系网络构建，这里用到了来自搜狐证券的股票十大控股股东信息和新浪财经的129个股票概念板块分类信息，经过网页解析数据整理之后将文本
                    信息存储为股票-控股股东格式。股票-所属概念板块格式。用股票-控股股东文件可以反向构建股东-控股股票字典，以同一股东所控的两只股票之间有边相连可以构建
                    基于控股股东的股票关系网络。如图是与兴业矿业相关联的股票，其中兴业矿业与金贵银业有同一个股东中国工商银行某基金控股。
                    利用这个构建好的股票关系网络我们就可以找到和涨停股票相关联的股票候选集供后续处理，举例来说当输入2016-11-09湖南黄金这只涨停股时，股票关系网络会
                    给出和湖南黄金相关联的股票。这个我们就得到了候选集。
                </p>
                <p>
                    接下来就是对候选集的筛选，我们要从候选集中找出与涨停股票关联度高的，趋势较好的股票。我们使用一段时间内股票收盘价
                    走势的曲线相似性来刻画股票之间的关联度。收盘价走势曲线的相似性计算这里用到了一个信号与处理方向用于语音识别的一个算法
                    动态时间归整，不同于传统的欧式距离，余弦夹角等计算方法，动态时间归整最大的优点就是它可以消除X轴上的滞后效应，举例来说
                    这是两条很相似的曲线，但他们的长度不同，存在滞后效应，但DTW可以通过扭曲曲线来消除这种滞后效应，这就可以消除金融时间序列的
                    时滞效应。以16-11-09湖南黄金涨停为例，通过DTW对走势相似度的计算，
                </p>
                <p class="font-size:12px">
                </p>
                <p class="font-size:12px">
                </p>
            </div>
            <button type="button" class="btn btn-info" id="btn_ajax_get">按钮-AJAX-GET</button>
            <br/>
            <br/>
            <button type="button" class="btn btn-info" id="btn_ajax_post">按钮-AJAX-POST</button>
        </form>
    </div>



</div>



<div class="container">
    <a href="<?php  echo base_url('/store/flower_buy');?>" target="_blank" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span>进入购买页面</a>
</div>

<div class="container">
    <div class="col-md-12">
        <?php foreach ($flowers as $flower_item): ?>

            <h3><?php echo $flower_item['name']; ?></h3>
            <div class="main">
                <?php echo $flower_item['moral']; ?>
            </div>
            <hr/>

        <?php endforeach; ?>
    </div>
</div>


</body>
</html>

<script type="text/javascript">

    $(document).ready(function(){




        //ajax的get请求测试
        $("#btn_ajax_get").click(function(){


            $.ajax({
                url: '<?php echo base_url("/store/flower_buy/test_ajax_get/4"); ?>',
                method: 'get',
                dataType: 'json',
                success: function (response) {


                }
            });

        });


        //ajax的post请求测试
        $("#btn_ajax_post").click(function(){


            var data = {'id':'110410301','name':'tangyao','passwd':'123456','hobby':'dancing','tel':'13168783329'};

            $.ajax({
                url: '<?php echo base_url("/store/flower_buy/test_ajax_post"); ?>',
                method: 'post',
                dataType: 'json',
                data:data,
                success: function (response) {
                    alert("l love this game~~~");
                }

            });



        });










    });
</script>



<!—导入jQuery版本库，因为Bootstrap的JavaScript插件依赖于jQuery -->
<script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
<!—- 一次性导入所有Bootstrap的JavaScript插件（压缩版本） -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
