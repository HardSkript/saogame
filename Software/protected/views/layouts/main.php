<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?php echo CHtml::encode(Yii::app()->name); ?></title>
		<meta charset="utf-8" />
		<meta name="description"	content=""/>
		<meta name="keywords"	 	content=""/>
		<meta name="author"			content=""/>
		<meta name="author"			content=""/>
		<meta name="generator" 		content="HTML-Kit 292"/>
		<meta name="robots" 		content="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	</head>
	<body>
		<div class="container">
			<?php echo $content; ?>
			
		</div>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</html>
