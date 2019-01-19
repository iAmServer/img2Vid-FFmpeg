<?php

    //make sure the images are local and rename in sequence ex image-1.jpg,image-2.jpg,etc
    //its advice the image should be of the same size for better result
    //important they should be in the format
    
    //NB if the there's a case that the some pictures are not showing, that's because the picture is not supported

    function convertImg2Vid($output){
        $new = "ffmpeg -y -i image-%d.jpg -vf zoompan=z='(zoom+0.001)':s=1280x720 ".$output.".mp4";
        exec($new);
    }

    $output = "jess";

    convertImg2Vid($output);

    //thanks for your trust
?>