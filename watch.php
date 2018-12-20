<html>
  <head>
    <title></title>
    <meta content="">
    <style>
    body {
        background-color: #83ADDD;
    }
    
    h2 {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
  </head>
  <body>
  <h2>Calculus BC Video</h2>
    <center>
    <video width="400" controls>
    <source id="videosource" src="temp.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
    </video>

    </center>
</video>
  <script> 
  var video = getQueryVariable("video");

function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
  alert('Query Variable ' + variable + ' not found');
}
     var vs = document.getElementById("videosource");
     vs.setAttribute("src", "/uploads/" + video);
  </script>
  </body>
</html>
