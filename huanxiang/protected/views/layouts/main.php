<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<!--	<meta name="language" content="en" />-->
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/docs.min.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body style="background-color: #eee;">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:#357ebd;font-size: 21px;"><b><?php echo CHtml::encode(Yii::app()->name); ?></b></a>
        </div>
        <div class="collapse navbar-collapse">
	        <?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav navbar-nav"),
	        	'linkLabelWrapper'=>'span',
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/site/index'),'LabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home')),
					array('label'=>'Shop', 'url'=>array('/site/page', 'view'=>'about'),'LabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-shopping-cart')),
					array('label'=>'Support', 'url'=>array('/site/contact'),'LabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-headphones')),
				),
			)); ?>
          	<form class="navbar-form navbar-right" role="search">
	          	<div class="input-group">
	               <span class="input-group-btn">
	                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-list"></span></button>
	               </span>
	               <input type="text" class="form-control" placeholder="Search">
	            </div>
	          	<button type="button" class="btn btn-primary">
	  				<span class="glyphicon glyphicon-list"></span>
				</button>
	            <div class="input-group">
	            	<span class="input-group-addon glyphicon glyphicon-list"></a></span>
	              	<input type="text" class="form-control" placeholder="Search">
	            </div>
	            <button type="submit" class="btn btn-success">登录</button>
	            <button type="submit" class="btn btn-success">注册</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
<?php echo $content; ?>

<footer class="bs-docs-footer" role="contentinfo" style="background:#909090">
  <div class="container">
    <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
    <p>Maintained by the <a href="https://github.com/twbs?tab=members">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>本项目源码受 <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a> 开源协议保护，文档受 <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a> 开源协议保护。</p>
    <ul class="bs-docs-footer-links muted">
      <li>当前版本： v3.2.0</li>
      <li>&middot;</li>
      <li><a href="https://github.com/twbs/bootstrap">GitHub 仓库</a></li>
      <li>&middot;</li>
      <li><a href="../getting-started/#examples">实例精选</a></li>
      <li>&middot;</li>
      <li><a href="http://v2.bootcss.com/">v2.3.2 中文文档</a></li>
      <li>&middot;</li>
      <li><a href="../about/">关于</a></li>
      <li>&middot;</li>
      <li><a href="http://expo.bootcss.com">优站精选</a></li>
      <li>&middot;</li>
      <li><a href="http://blog.getbootstrap.com">官方博客</a></li>
      <li>&middot;</li>
      <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
      <li>&middot;</li>
      <li><a href="https://github.com/twbs/bootstrap/releases">历史版本</a></li>
    </ul>
  </div>
</footer>
</body>
</html>