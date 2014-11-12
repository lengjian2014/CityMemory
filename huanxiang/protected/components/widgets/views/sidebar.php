        <div class="col-sm-3 col-md-2 sidebar" style="position: absolute;background-color: #fff;">
        	 <?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'个人中心','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'个人信息', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'设置头像', 'url'=>array('/site/contact')),
				),
			)); ?>
			<?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'我的产品','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'武器列表', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'装备列表', 'url'=>array('/site/contact')),
					array('label'=>'草药列表', 'url'=>array('/site/contact')),
					array('label'=>'矿石列表', 'url'=>array('/site/contact')),
				),
			)); ?>
			<?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'特色浏览','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'收藏夹', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'我的关注', 'url'=>array('/site/contact')),
				),
			)); ?>
			<?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'菜单','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'标签', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'评论', 'url'=>array('/site/contact')),
					array('label'=>'搜索', 'url'=>array('/site/contact')),
					array('label'=>'关于', 'url'=>array('/site/contact')),
					array('label'=>'RSS订阅', 'url'=>array('/site/contact')),
				),
			)); ?>
        </div>