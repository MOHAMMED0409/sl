<?php
include "../config.php";

    if(isset($_POST['submit']))
    {
        $class = $_POST['class'];
        $subject = $_POST['subject'];
        $chapter = $_POST['chapter'];

        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
 $folder="../upload/";
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO upload(class, subject, chapter, file_name,type,size) VALUES('$class','$subject', '$chapter', '$final_file','','')";
  mysqli_query($conn,$sql);
  // echo "File sucessfully upload";
  header("Location: ./upload.html");
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}

?>