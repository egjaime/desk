<?php
    if (is_array($_FILES) && count($_FILES) > 0) {
        if ($_FILES["file"]["type"] === "image/png") {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/dist/img/".$_FILES['file']['name'])) {
                //more code here...
                echo "assets/dist/img/".$_FILES['file']['name'];
            } else {
                echo 3;
            }
        } else {
            echo 2;
        }
    } else {
        echo 1;
    }
   mysqli_close($enlace);
?>