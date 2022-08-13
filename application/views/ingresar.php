<?php
foreach($css_files as $file):?>
<link type="text/css" rel="stylesheet" href="<?php echo $file;?>">
<?php endforeach;?>
<?php foreach($js_files as $file):?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach;?>
<br>
<h1 align="center">CRUD VENTAS</h1>
<br>
<?php echo $output;?>