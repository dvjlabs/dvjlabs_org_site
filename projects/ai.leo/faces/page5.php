<!DOCTYPE html>
<head>
<title>AI.Leo Photo snap</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bungee+Inline'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h2,h4,h5 {font-family: "Open Sans", sans-serif}
h1 {font-family: "Bungee Inline", sans-serif; font-size: 40pt}
h3 {font-family: "Bungee Inline", sans-serif; font-size: 14pt}
</style>

</head>

<body>
<h2 class="w3-panel w3-center w3-opacity">Upload your image #5 to dvjlabs server...</h2>

<div class="w3-row">

<div class="w3-half w3-center">
<video id="video" width="300" height="200" autoplay></video>
<br>
<button id="snap">Scatta la foto #5</button>
</div>

<div class="w3-half w3-center">
<canvas id="canvas" width="300" height="200"></canvas>
<br>
<input type="button" onclick="uploadEx()" value="Carica la foto #5 e basta!" />
</div>

</div> <!-- end row -->

<form method="post" accept-charset="utf-8" name="form1">
<input name="hidden_data" id='hidden_data' type="hidden"/>
<input type="hidden" name="user" value="<?php echo $_GET['codice']; ?>" />
</form>

</body>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<script type="text/javascript">
window.onload = function() {
    // Grab elements, create settings, etc.
    var video = document.getElementById('video');

    // Get access to the camera!
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            //video.src = window.URL.createObjectURL(stream);
            video.srcObject = stream;
            video.play();
        });
}

// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
    context.drawImage(video, 0, 0, 300, 200);
});
}

function uploadEx() {
    var canvas = document.getElementById("canvas");
    var dataURL = canvas.toDataURL("image/png");
    document.getElementById('hidden_data').value = dataURL;
    var fd = new FormData(document.forms["form1"]);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload5.php', true);

    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            var percentComplete = (e.loaded / e.total) * 100;
            console.log(percentComplete + '% uploaded');
            alert('Premi OK per terminare');
            window.location.href = "https://dkru86weszx9t.cloudfront.net/blog/wp-content/uploads/2017/10/thank-you.jpg";  
        }
    };

    xhr.onload = function() {

    };
    xhr.send(fd);                
};

</script>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
</html>
