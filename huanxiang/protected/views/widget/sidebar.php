        <div class="col-sm-3 col-md-2 sidebar" style="position: absolute;background-color: #fff;">
        	 <?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'��������','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'������Ϣ', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'����ͷ��', 'url'=>array('/site/contact')),
				),
			)); ?>
			<?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'�ҵĲ�Ʒ','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'�����б�', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'װ���б�', 'url'=>array('/site/contact')),
					array('label'=>'��ҩ�б�', 'url'=>array('/site/contact')),
					array('label'=>'��ʯ�б�', 'url'=>array('/site/contact')),
				),
			)); ?>
			<?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'��ɫ���','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'�ղؼ�', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'�ҵĹ�ע', 'url'=>array('/site/contact')),
				),
			)); ?>
			<?php $this->widget('CMenu',array(
	        	'htmlOptions'=>array("class"=>"nav nav-sidebar"),
	        	'linkLabelWrapperHtmlOptions'=>array('class'=>'glyphicon glyphicon-home'),
				'items'=>array(
					array('label'=>'�˵�','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'��ǩ', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'����', 'url'=>array('/site/contact')),
					array('label'=>'����', 'url'=>array('/site/contact')),
					array('label'=>'����', 'url'=>array('/site/contact')),
					array('label'=>'RSS����', 'url'=>array('/site/contact')),
				),
			)); ?>
        </div>