<?php
    $write =$con->prepare("INSERT INTO posts(heading,category,content,writer,name)VALUES(?,?,?,?,?)");
    $write->bind_param("sssss",$h,$cat,$c,$w,$n);

    $h = $heading;
    $cat = $category;
    $c = $content;
    $w = $writer;
    $n = $username;
    $write->execute();

    if($write == True){
        echo'
        <script>
          $(document).ready(function(){
            $("#warning").addClass("w3-text-green");
            $("#warning").text("Post Published Successfully");
            $("#warning").fadeIn(3000);
          });
        </script>';
    }else{
        echo'
        <script>
          $(document).ready(function(){
            $("#warning").addClass("w3-text-red");
            $("#warning").text("Failed to Publish Post")
            $("#warning").fadeIn(3000);
          });
        </script>';
    }

?>