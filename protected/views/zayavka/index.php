<div class="span-19"><?php
$this->pageTitle = $model->title;
//$this->pageTitle = $model->discription;
Yii::app()->clientScript->registerMetaTag($model->description, 'description');

//Yii::app()->clientScript->registerMetaTag($model->keywords, 'keywords');
$this->breadcrumbs=array(
	'Категория: '.$model->category->title =>array('index','id'=>$model->category_id),
    $model->title,
);
?>
 <h1 class="widget-title">	 <?php echo $model->title; ?> </h1>

  <div class="col-md-4"><!-- second column -->
                        <div id="table" class="widget-item">





<?php echo $discription; ?>

                           <?php echo $model->content; ?>

	<?php echo $long_discription; ?>
							<p> 	<?php echo $short_discriptio; ?> </p>
							<p>	<?php echo $status; ?> </p>


                        </div> <!-- /.widget-item -->
                    </div>
										<br>
										<div class="rowwww6">
											<a href="/zayavka">подать заявку</a>
											<!-- <input type="submit" name="" value="подать заявку"> -->
										</div>
