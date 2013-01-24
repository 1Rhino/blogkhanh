<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="article">
    <div class="title">
        <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
    </div>
    <div class="author">
		Posted by <?php echo $data->author->username . ' on ' . date('F j, Y',$data->create_time); ?>
	</div>
    <div class="image">
        <?php echo CHtml::image($data->image); ?>
    </div>
    <div class="intro">
        <?php echo CHtml::encode($data->intro); ?>
    </div>	
	<div class="tags">
        <b>Tags:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
    </div>
</div>
<br />
<hr />