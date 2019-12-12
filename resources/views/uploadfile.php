<html>
<body>
<?php
echo Form::open(array('url' => '/uploadimg','files'=>'true'));
echo 'Select the file to upload.';
echo Form::file('image');
echo Form::submit('Upload File');
echo Form::text('name');
echo Form::text('id');
echo Form::close();
?>
</body>
</html>
