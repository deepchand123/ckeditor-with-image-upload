<h1>CKEDITOR with Image Upload</h1>
<div class="form-group col-sm-12">
	<label for="input-task-details">Description</label>
	<textarea name="description" class="form-control input-task-details" rows="3" name="description" class="description"
	id="description"></textarea>
</div>

<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script> 
	var baseurl = 'http://localhost/ck';
	var editor = CKEDITOR.replace('description');
	CKFinder.setupCKEditor(editor, baseurl+'/ckfinder/'); 
</script> 	