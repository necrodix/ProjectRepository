<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="es-es">
<title>Leer archivo de imagen, con capacidades drag & drop</title>

<style>
div {
margin-top: 30px;
border: solid 1px black;
padding: 5px;
width: 300px;
height: 300px;
background: lightyellow;
background-size: 100%;
background-repeat: no-repeat;
text-align: center;
}
</style>

<script>

function processFiles(files) {
var file = files[0];
;
var reader = new FileReader();

reader.onload = function (e) {
// Cuando éste evento se dispara, los datos están ya disponibles.
// Se trata de copiarlos a una área <div> en la página.
var output = document.getElementById("fileOutput");
fileOutput.style.backgroundImage = "url('" + e.target.result + "')";
alert(e.target.result)
};
reader.readAsDataURL(file);
}

// ---------------------------------------
var dropBox;

window.onload = function() {
dropBox = document.getElementById("fileOutput");
dropBox.ondragenter = ignoreDrag;
dropBox.ondragover = ignoreDrag;
dropBox.ondrop = drop;
}

function ignoreDrag(e) {
e.stopPropagation();
e.preventDefault();
}

function drop(e) {
e.stopPropagation();
e.preventDefault();

var data = e.dataTransfer;
var files = data.files;
   
processFiles(files);
}
// ----------------------------------------

</script>
</head>

<body>
<input id="fileInput" type="file" size="50" onchange="processFiles(this.files)">
<div id="fileOutput" style="border:4px solid rgba(0,204,51,1);"></div>
</body>
</html>