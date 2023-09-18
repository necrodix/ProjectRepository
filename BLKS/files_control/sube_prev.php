<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script type="text/javascript" src="../../JS/jquery-3.7.0.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#frmUpload').on('submit', function() {
			if($('.file').prop('files').length>20){
				alert("Solo 20 archivos Maximo");
			}else{
			for(i=0; i<$('.file').prop('files').length; i++){
			//alert($('.file').prop('files').length);
            var file_data = $('.file').prop('files')[i];
            if(file_data != undefined) {
                var form_data = new FormData();                  
                form_data.append('file', file_data);
                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success:function(response) {
                       // if(response == 'success') {
						    if(response) {
								$("#logg").append("Ha subido "+response+"<br>");
                            //alert(response);
						   // alert('File uploaded successfully.');
                        } else {
                            alert('Something went wrong. Please try again.');
                        }

                       // $("#frmUpload")[0].reset();
                    }
                });
            }
            //return false;
			}//cierra el for
			alert('File uploaded successfully.');
			}//cierra if max files
			});
    });
</script>

</head>

<body>

<form id="frmUpload">
    <p><input type="file" name="file" multiple class="file" required /></p>
    <input type="submit" name="submit" value="Submit" />
</form>
<div id="logg"></div>
<!--<form method="post" enctype="multipart/form-data">
<input id="sortpicture" type="file" name="sortpic" />
<button id="upload" onClick="subir()">Upload</button>
</form>-->
</body>
</html>