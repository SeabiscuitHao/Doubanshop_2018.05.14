<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>豆瓣市集</title>
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<!-- <script type="text/javascript" src="/Public/Home/js/jquery.js"></script> -->
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
</head>
<body>
	<div class="div-scroll">
		<ul>
			<li><a href=""><img src="/Public/Home/image/1.jpg"></a></li>
		</ul>
		<!-- <script type="text/javascript">
			$(function () {
				function scroll(){
					$(".div-scroll ul").animate({
						left:'-=102.4rem'
					},2000,function(){
						$(".div-scroll ul").css({"left":"-102.4rem"});
						$(".div-scroll ul li").first().insertAfter($(".div-scroll ul li").last())
					});
				}
				var timer = setInterval(function(){
					scroll()
				},5000);
			})
		</script> -->
	</div><!-- img-scroll -->
	<div class="user-bar">
		<ul class="clearfix">
			<li><img src="/Public/Home/image/gouwuche.png"><a href="">购物车</a></li>
			<li><img src="/Public/Home/image/shiji.png"><a href="#">我的市集</a></li>
		</ul>
	</div><!-- user-bar -->
	<div class="new-product">
		<div class="title">新品首发</div>
		<div class="new-product-list">

			<div class="new-product-list-a clearfix">
				<div class="new-product-list-a-img">
					<img src="/Public/Home/image/file-1523413316-0.jpg">
				</div>
				<div class="new-product-list-a-content">
					 <h4><?php echo ($res['goods_name']); ?></h4>
					 <p><?php echo ($res['goods_info']); ?></p>
					 <strong><?php echo ($res['price']); ?></strong>
					 <div><a><?php echo ($res['type']); ?></a></div>
				</div>
			</div>




		</div><!-- new-product-list
	</div><!-- new-product -->
	<!-- <script type="text/javascript">
		$.ajax({
			"url" : "http://xx.com/api/index/index",
			"type" : "get",
			"dataType" : "json",
			"data" : {
				"usr_id" : 36 ,
			},
			success : function(res){
				if(error_code == 0){
					console.log(res.)
				}else{
					alert(res.message)
				}
			},
			error : function(){
				alert("网页错误")
			}
		})
	</script> -->
	<div class="group">
		<div class="title">市集小组</div>
		<div class="group-list-a clearfix">
			<div class="group-list-a-left clearfix">
				<img src="/Public/Home/image/a.png">
				<br>
				<a href="#">1069</a>
			</div><!-- group-list-a-left -->
			<div class="group-list-a-center clearfix">
				<div class="group-list-a-center-a clearfix">
					<h4>【投票】纯色手机壳上，你喜欢什么样的豆瓣logo？</h4>
					<img src="/Public/Home/image/p111219547.jpg">
				</div>
				<div class="group-list-a-center-b clearfix">
					<img src="/Public/Home/image/u119347429-13.jpg">
					<a href="#">豆瓣市集</a>
					<span>04-17</span>
				</div>
			</div><!-- group-list-a-center -->
		</div><!-- group-list-a -->


		<div class="group-list-a clearfix">
			<div class="group-list-a-left">
				<img src="/Public/Home/image/a.png">
				<br>
				<a href="#">14</a>
			</div><!-- group-list-a-left -->
			<div class="group-list-a-center">
				<div class="group-list-a-center-a">
					<h4>【补货消息】豆瓣·电影畅想系列手机壳补货啦~</h4>
					<img src="/Public/Home/image/p113331233.jpg">
				</div>
				<div class="group-list-a-center-b clearfix">
					<img src="/Public/Home/image/u119347429-13.jpg">
					<a href="#">豆瓣市集</a>
					<span>04-17</span>
				</div>
			</div><!-- group-list-a-center -->
		</div><!-- group-list-a -->
		<div class="group-list-a clearfix">
			<div class="group-list-a-left">
				<img src="/Public/Home/image/a.png">
				<br>
				<a href="#">19</a>
			</div><!-- group-list-a-left -->
			<div class="group-list-a-center">
				<div class="group-list-a-center-a">
					<h4>【组规】emmmm...这是豆瓣市集官方小组组规</h4>
				</div>
				<div class="group-list-a-center-b clearfix">
					<img src="/Public/Home/image/u119347429-13.jpg">
					<a href="#">豆瓣市集</a>
					<span>04-17</span>
				</div>
			</div><!-- group-list-a-center -->
		</div><!-- group-list-a -->
		<div class="more">
			<a href="#">查看更多讨论></a>
		</div><!-- more -->
	</div><!-- group -->
	<div class="hot-act">
		<div class="title">热门活动</div>
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1520332486-1.jpg">
			<h4>#你是茶派还是酒派#</h4>
			<P>送出50份壕礼：茶和酒你更青睐哪个呢？</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1517992833-0.jpg">
			<h4>#生成你的2018专属电影#</h4>
			<P>点击输入对你有意义的日子，看看那天属于你的电影是哪一部吧！</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1515387415-1.jpg">
			<h4>#晒出你的2018豆瓣日历#</h4>
			<P>它是否已和你共同开启新年的电影旅程了呢？</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1513591841-1.jpg">
			<h4>#光阴带走的，电影留给你#</h4>
			<P>年末将至，豆瓣为你捎来一封手写信。</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1499743637-0.jpg">
			<h4>#我的豆瓣收藏夹里有什么#</h4>
			<P>晒出你的豆瓣收藏夹，让我们看看你走过的世界吧。</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1498460800-1.jpg">
			<h4>#停不下的收藏癖#</h4>
			<P>留存的东西不只是回忆，更是时代变迁的痕迹。</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1498551470-1.jpg">
			<h4>#如果豆瓣出新周边#</h4>
			<P>一起来分享关于豆瓣周边的脑洞和创意吧！</P>
		</div><!-- hot-act-a -->
		<div class="hot-act-a">
			<img src="/Public/Home/image/file-1498551470-0.jpg">
			<h4>#晒晒你的2017豆瓣日历#</h4>
			<P>有没有那么一部电影，打动你的心~</P>
		</div><!-- hot-act-a -->
	</div><!-- hot-act -->
	<div class="footer-bar">
		<ul class="clearfix">
			<li><img src="/Public/Home/image/shuoming.png"><a href="">购物说明</a><div></div></li>
			<li><img src="/Public/Home/image/fankui.png"><a href="">意见反馈</a><div></div></li>
			<li class="li-aX"><img src="/Public/Home/image/hezuo.png"><a href="">商务合作</a></li>
		</ul>
	</div><!-- footer-bar -->
	<script type="text/javascript" src="/Public/Home/js/product.js"></script>
</body>
</html>