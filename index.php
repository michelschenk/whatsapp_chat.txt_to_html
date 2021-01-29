<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whatsapp _chat.txt export convert to html</title>
    <link rel="stylesheet" href="style.css">
<script>
function getFileName()
{
    var x = document.getElementById('entry_value');
    document.getElementById('fileName').innerHTML = x.value.split('\\').pop();
    document.getElementById("sendform").submit();
    //window.location.href = 'http://www.google.com';
}
</script>
</head>
<body>
    <form id="sendform" action="convert.php" method="POST" enctype="multipart/form-data">
             <br><br>
             <label>Gebruikersnaam:</label>
             <input type="text" id="fname" name="fname" size=50>
             <br><br>
        <div class="form">
        <input name="whatsapp" id="entry_value" ref="fileInput" type="file"  onchange="getFileName()">
        <div>     
            </form>   
            <img src="upload.png" alt="upload" width="7%" class="mx-2">
            Upload your files here or 
            <button class="btn bg-color-dblue btn-primary px-4 py-3">Browse</button></div>
        <span id="fileName" class="text-primary ">
        </span>
     </div>
</body>
</html>


<?php

?>
