<?php
if (isset($_POST['submit'])) {
    $j = 0;  
    
	$target_path = "uploads/"; 
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        //image extensions allowed
        $validextensions = array("jpeg", "jpg", "png");  
        $ext = explode('.', basename($_FILES['file']['name'][$i]));
       
        $file_extension = end($ext);

        //setting the target path with a new name of image
		$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];
        $j = $j + 1;
              
      
	  if (($_FILES["file"]["size"][$i] < 100000) 
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
                echo $j. ').<span id="noerror">Image uploaded successfully!.
                    </span><br/><br/>';
            } 
            else {
                //if upload fails
                echo $j. ').<span id="error">Try again!.</span><br/><br/>';
            }
        } 
        else {
        //if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span>
                <br/><br/>';
        }
    }
}
?>