<?php
    $output = "output";
    $input = $output.".mp4";

    //make sure the images are local and rename in sequence ex image-1.jpg,image-2.jpg,etc
    //its advice the image should be of the same size for better result
    //important they should be in the format
    
    //NB if the there's a case that the some pictures are not showing, that's because the picture is not supported

    function convertImg2Vid($output){
        $new = "ffmpeg -y -i image-%d.jpg -i audio.mp3 -c:a copy -vf zoompan=z='(zoom+0.0009)':s=1280x720 ".$output.".mp4";
        exec($new);
    }

    function waterVid($input){
        $cmd = "ffmpeg -y -i ".$input." -i logo.png -filter_complex 'overlay=W-w-5:H-h-5' new_".$input;
        exec($cmd);
        //unlink($input);
    }

    convertImg2Vid($output);
    waterVid($input);
    

    //execute using php index.php locally
    //thanks for your trust
?>