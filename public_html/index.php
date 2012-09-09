<?php

$images = scandir("images");
array_shift($images);
array_shift($images);

$json = json_encode($images);

?>
<html>
  <head>
    <title>Pit cam video</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      var image = <?=$json?>;
      var length = image.length;
      var speed = 33;
      console.log(length);
      var i = 0;
      var done_caching = false;

      for(key in image){
        var tmp = new Image();
        tmp.src = "images/"+image[key];
        done_caching = true;
      }

      function start(){
        var interval = "";
        if(done_caching){
          interval = setInterval(function(){
          if( i >= length) i = 0;
          $("#video").attr('src', 'images/'+image[i]);
          i++;
          }, speed);
        } 
        return interval;
      }

      var interval = start();
      
      // Alter delay
      $(document).keydown(function(e){
        if(e.keyCode == 107) speed++;
        else if(e.keyCode == 109 && speed > 1) speed--;
        $("b").text(parseInt((1000/parseInt(speed)))+" fps");
      });

      // Start up the interval
      $(document).keyup(function(e){
        clearInterval(interval);
        // Start (32 is space)
        if(e.keyCode != 32) interval = start();
        // Pause
        else if(interval > 0) interval = -1;
        // Continue
        else interval = start();
      });
    });
    </script>
  </head>
  <body>
    <p>Speed: <b>30 fps</b></p>
    <img src="images/pacman.gif" alt="video" id="video">
    <p>Use + and - to adjust speed. Hit space to pause.</p>
  </body>
</html>
