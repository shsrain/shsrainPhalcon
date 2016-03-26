<!--[if lt IE 9]>
<?php echo $this->assets->outputJs('lt IE 9'); ?>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<?php echo $this->assets->outputJs('gte IE 9'); ?>
<!--<![endif]-->
<?php echo $this->assets->outputJs('footer'); ?>
</body>
</html>