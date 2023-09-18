<?php
/*
move_uploaded_file(

    // this is where the file is temporarily stored on the server when uploaded
    // do not change this
    $_FILES['file']['tmp_name'],

    // this is where you want to put the file and what you want to name it
    // in this case we are putting in a directory called "uploads"
    // and giving it the original filename
    'uploads/' . $_FILES['file']['name']
);

/*
move_uploaded_file(
    $_FILES['file']['tmp_name'],
    'uploads/my_new_filename.whatever'
);
*/
/*

    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
		echo 'realizado';
    }
*/

//echo $_FILES['file']['name'];


if (!file_exists('uploadsX')) {
    mkdir('uploadsX', 0777);
}

move_uploaded_file($_FILES['file']['tmp_name'], 'uploadsX/' . $_FILES['file']['name']);
 
//echo "success";
echo  $_FILES['file']['name'];
die();

?>