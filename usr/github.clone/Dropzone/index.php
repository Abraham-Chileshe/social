<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="dropzone/dropzone.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" type="text/css">
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

	<div class="container">
    	     
		<div id="msg"><?php echo isset($msg)?$msg:''; ?></div>
        <div>
            <div>
			<form action="#" method="post">
                <div class="form-group " style="margin-top:1em">
                	<label><strong>Album Name</strong></label>
					<input type="text" placeholder="Name of album" name="newalbumname" id="newalbumname" class="form-control">
                    <input type="number" name="newWidth" id="newWidth" style="display:none" class="form-control">
                </div>
                <div class="form-group">
                    <div class="dropzone dz-clickable" id="myDrop">
                        <div class="dz-default dz-message" data-dz-message="">
                            <span>Drop files here to upload</span>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" id="add_file" class="btn btn-primary" name="submit"><i class="fa fa-upload"></i> Upload File(s)</button>        
                </div>
			</form>
            </div>
        </div>
    </div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!--Only these JS files are necessary--> 
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
    <script src="dropzone/dropzone.js"></script>
    

	<script>
	//Dropzone script

	

	Dropzone.autoDiscover = false;
	var myDropzone = new Dropzone("div#myDrop", 
	 { 
		 method: "post",
		 paramName: "files", // The name that will be used to transfer the file
		 addRemoveLinks: true,
		 uploadMultiple: true,
		 autoProcessQueue: false,
		 parallelUploads: 1,
		 maxFilesize: 5, // MB
		 acceptedFiles: ".png, .jpeg, .jpg",
		 url: "ajax/actions.ajax.php",
	 });

	 myDropzone.on('sendingmultiple', function(data, xhr, formData) {
		formData.append("param_1",$('#newalbumname').val());
	});

	 /* Add Files Script*/
	 myDropzone.on("success", function(file, message){
		$("#msg").html(message);
	 });
	 
	 myDropzone.on("error", function (data) {
		 $("#msg").html('<div class="alert alert-danger">There is some thing wrong, Please try again!</div>');
	 });
	 
	 myDropzone.on("complete", function(file) {
		myDropzone.removeFile(file);
	});
	 
	 $("#add_file").on("click",function (){
		myDropzone.processQueue();

	 });
	 


	 
	</script>   

