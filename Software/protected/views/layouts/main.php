<html>
<head>
<title><?php echo CHtml::encode(Yii::app()->name); ?>
</title>

<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.min.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

</head>

<body>
	<div class="container">
		<?php echo $content; ?>
	</div>
</body>
</html>
