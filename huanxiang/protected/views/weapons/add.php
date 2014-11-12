<link href="/css/dashboard.css" rel="stylesheet">
<div class="container">
      <div class="row" style="padding:15px">
    	<?php $this->widget('SidebarWidget'); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header" style="padding-bottom: 9px;">个人信息</h2>
            <ol class="breadcrumb" style="background-color: #fff;">
			  <li><a href="#">个人中心</a></li>
			  <li><a href="#">个人中心</a></li>
			  <li class="active">武器列表-新增</li>
			</ol>
		     <div class="col-sm-12 col-md-12" style="background: none repeat scroll 0 0 #fff;border-radius: 4px;padding:40px">
		    <div class="form-horizontal">   
			<?php 
				$form=$this->beginWidget('CActiveForm', 
				array(	'id'=>'inquiry-form',
							  	'enableAjaxValidation'=>true,
								'enableClientValidation'=>true,
							    'action'=>array(Yii::app()->createUrl('weapons/add')),
								'clientOptions'=>array(
										'validateOnSubmit'=>true,
								),
						));
				?>
				<div class="form-group">
			      <label class="col-sm-2 control-label">名称</label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'title',$htmlOptions=array('class'=>'form-control','id'=>'disabledInput','value'=>'风暴之锤'));?>
			      </div>
			   </div>
			    <div class="form-group">
			      <label class="col-sm-2 control-label">来源</label>
			      <div class="col-sm-6">
			      <?php echo $form->dropDownList($weapons,'belong',array('1'=>'游戏','2'=>'小说','3'=>'自创','0'=>'其他'),array('class'=>'form-control','multiple'=>'multiple'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">来源游戏</label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'belongs',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'魔兽世界'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label for="inputPassword" class="col-sm-2 control-label">
			         外形
			      </label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'shape',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'锤形'));?>
			      </div>
			   </div>
			    <div class="form-group">
			      <label class="col-sm-2 control-label">
			         使用方式
			      </label>
			      <div class="col-sm-6">
			       <?php echo $form->textField($weapons,'usage',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'双手'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">
			         攻击方式
			      </label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'attack',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'砍，削，劈'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">
			         制作材料
			      </label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'material',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'精金，铁'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">
			         参数
			      </label>
			      <div class="col-sm-6">
			         <table class="table table-bordered">
						<thead>
							<tr>
							<th>#</th>
							<th>参数名</th>
							<th>参数值</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>1</td>
							<td><?php echo $form->textField($weapons,'parameter["key1"]',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'伤害'));?></td>
							<td><?php echo $form->textField($weapons,'parameter["value1"]',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'200'));?></td>
							</tr>
							<tr>
							<td>2</td>
							<td><?php echo $form->textField($weapons,'parameter["key2"]',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'伤害'));?></td>
							<td><?php echo $form->textField($weapons,'parameter["value2"]',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'200'));?></td>
							</tr>
							<tr>
							<td>3</td>
							<td><?php echo $form->textField($weapons,'parameter["key3"]',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'伤害'));?></td>
							<td><?php echo $form->textField($weapons,'parameter["value3"]',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'200'));?></td>
							</tr>
						</tbody>
					</table>
			      </div>
			   </div>
			    <div class="form-group">
			      <label class="col-sm-2 control-label">
			         图片
			      </label>
			      <div class="col-sm-6">
			         <span class="btn btn-success fileinput-button">
				        <i class="glyphicon glyphicon-plus"></i>
				        <span>Add files...</span>
				        <!-- The file input field used as target for the file upload widget -->
				        <input id="fileupload" type="file" name="files[]" multiple>
					    </span>
					    <br>
					    <br>
					    <!-- The global progress bar -->
					    <div id="progress" class="progress">
					        <div class="progress-bar progress-bar-success"></div>
					    </div>
					    <!-- The container for the uploaded files -->
					    <div id="files" class="files"></div>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">适用人</label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'people',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'战士'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">消耗</label>
			      <div class="col-sm-6">
			      <?php echo $form->textField($weapons,'consume',$htmlOptions=array('class'=>'form-control','id'=>'','value'=>'怒气'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label">
			         详细描述
			      </label>
			      <div class="col-sm-6">
			      <?php echo $form->textArea($weapons,'describe',array('rows'=>3,'class'=>'form-control'));?>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-sm-2 control-label" for="inputError">
			      </label>
			      <div class="col-sm-6">
			      <?php echo CHtml::submitButton(('Submit'),array('class'=>"btn btn-primary"));?>
			      </div>
			   </div>
			   
			<?php $this->endWidget(); ?>
</div>
				</div>
          </div>
       </div>
      </div>