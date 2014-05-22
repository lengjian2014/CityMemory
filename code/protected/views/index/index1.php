<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
	<title>瀑布流-windswaterflow v1.2</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
	    img{ border:0px; }
		.container {position:relative;font-size:12px;border:0px solid green;padding:0;margin:0;text-align:center;}
		#loading {margin-top:2px;font-size:12px;border-radius:3px;border:1px solid #ccc;text-align:center;line-height:30px;background: #eee;}
		#noshow {margin-top:2px;font-size:12px;border-radius:3px;border:1px solid #ccc;text-align:center;line-height:30px;background: #eee;}
		.pin {width:238px;border:1px solid #ccc;border-radius:3px;list-style:none;position:absolute;text-align:center; }
		.pin div{ margin:5px;display:block;}
		.pin .img{ border:0px solid #eee;}
		.pin .btn {position:absolute;border-radius:3px;background: #eee;line-height:20px;width:60px;border:1px solid #ccc;cursor:pointer; display:none;}
		.pin .title{ background: #eee;line-height:24px;border:1px solid #ccc;}
		.pin .like{ top:8px;left:6px;}
		.pin .comments{ top:8px;right:6px;}
		 .hide {display:none;}
	</style>
	<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>-->
	<script type="text/javascript" src="/js/jquery.windswaterflow.js"></script>
</head> 
<body>
<div class="container">
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (1).jpg" style="height:300px;" alt=""></div></a><div class="title">锄禾日当午1</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (2).jpg" style="height:125px;" alt=""></div></a><div class="title">锄禾日当午2</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (3).jpg" style="height:200px;" alt=""></div></a><div class="title">锄禾日当午3</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (4).jpg" style="height:300px;" alt=""></div></a><div class="title">锄禾日当午4</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (5).jpg" style="height:300px;" alt=""></div></a><div class="title">锄禾日当午5</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (6).jpg" style="height:127px;" alt=""></div></a><div class="title">锄禾日当午6</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (7).jpg" style="height:300px;" alt=""></div></a><div class="title">锄禾日当午7</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (8).jpg" style="height:133px;" alt=""></div></a><div class="title">锄禾日当午8</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (9).jpg" style="height:134px;" alt=""></div></a><div class="title">锄禾日当午9</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (10).jpg" style="height:134px;" alt=""></div></a><div class="title">锄禾日当午10</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (11).jpg" style="height:267px;" alt=""></div></a><div class="title">锄禾日当午11</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (12).jpg" style="height:200px;" alt=""></div></a><div class="title">锄禾日当午12</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (13).jpg" style="height:300px;" alt=""></div></a><div class="title">锄禾日当午13</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (14).jpg" style="height:250px;" alt=""></div></a><div class="title">锄禾日当午14</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (15).jpg" style="height:250px;" alt=""></div></a><div class="title">锄禾日当午15</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (16).jpg" style="height:200px;" alt=""></div></a><div class="title">锄禾日当午16</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (17).jpg" style="height:336px;" alt=""></div></a><div class="title">锄禾日当午17</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (18).jpg" style="height:200px;" alt=""></div></a><div class="title">锄禾日当午18</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (19).jpg" style="height:323px;" alt=""></div></a><div class="title">锄禾日当午19</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
    <div class="pin"><a href="#"><div class="img"><img src="/images/1 (20).jpg" style="height:127px;" alt=""></div></a><div class="title">锄禾日当午20</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>
</div>
<div id="loading">正在加载中……</div>
<div id="noshow">亲，已经没有了！</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $(".container").windswaterflow({
            itemSelector: '.pin',
            loadSelector: '#loading',
            noSelector: '#noshow',
            boxTemplate: '<div class="pin hide"><a href="#"><div class="img"><img src="{img}" style="height:{height}px;" alt="" /></div></a><div class="title">{title}</div><div class="like btn">喜欢</div><div class="comments btn">评论</div></div>',
            columnWidth: 238,
            marginWidth: 14,
            marginHeight: 16,
            ajaxServer: '/index/page',
            boxParam: 'num',
            pageParam: 'page',
            maxPage: 0,
            init: true,
            initBoxNumber: 20,
            scroll: true,
            scrollBoxNumber: 10,
            callback: function() {
                $(".pin").mouseover(function() {
                    $(this).find(".btn").show();
                }).mouseout(function() {
                    $(this).find('.btn').hide();
                });
            }
        });
    });
</script>