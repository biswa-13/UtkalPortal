<html>
<head>
<!-- For browse button-->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  background: red;
  cursor: inherit;
  display: block;
}
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}
	</style>
	

</head>
<body>
<form action="" enctype="multipart/form-data" method="post">
   Last Name:<br /> <input type="text" name="name" value="" /> <br />
   Class Notes:<br /> <input type="file" name="classnotes" value="" /> <br />
   <p><input type="submit" name="submit" value="Submit Notes" /></p>
</form>

<?php
   define ("FILEREPOSITORY","./usr_cv");

   if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

      if ($_FILES['classnotes']['type'] != "application/pdf") {
         echo "<p>Class notes must be uploaded in PDF format.</p>";
      } else {
         $name = $_POST['name'];
         $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], FILEREPOSITORY."/$name.pdf");
         //if ($result == 1) echo "<p>File successfully uploaded.</p>";
        // else echo "<p>There was a problem uploading the file.</p>";
      } #endIF
   } #endIF
?>

<div class="container" style="margin-top: 20px;">
    <div class="row">

        <div class="col-lg-6 col-sm-6 col-12">
            <h4>Select your cv </h4>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse&hellip; <input type="file" multiple>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Try selecting one or more files and watch the feedback
            </span>
        </div>
        
    </div>
</div>

	<script>
	$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});
	</script>
</body>
</html>