<?php

require ('conn.php');


if($_POST['type'] == "uploadSliderImage"){


$fileName = $_POST['file'];

$now = DateTime::createFromFormat('U.u',microtime(true));


$name1 = $now->format('YmdHisu');


$uploadfolder = "images/slider";


$name = $name1.$fileName;

$imagename = $name;

$basePath="http://www.softedgesol.com/markot/";

$upload_path = "$uploadfolder/$imagename.jpeg";

// $today = date("d/m/Y");

$sql = "INSERT INTO slider (s_image) VALUES ('$upload_path')";

$result = mysqli_query($con,$sql);

if (!$result) {

echo "File Not Uploaded";

}

if ($result) {

  
    if(file_put_contents($upload_path, base64_decode($image))){

    echo "File Uploaded";
}

else{
	
echo "File Not Uploaded";
}


}


else {

echo "File Not Uploaded";

}



}


if($_POST['type'] == "getTable" ){

$output = '';
$sql = "SELECT * FROM slider";
$result = mysqli_query($con, $sql);

$output .= '<table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>ID</th>
              <th>Name</th>
              <th>Action</th>
                        </tr>
                      </thead>';

if(mysqli_num_rows($result) > 0){

while ($row = mysqli_fetch_array($result)) {
  $output .= '<tr>
  <td id="sid">'.$row[0].'</td>
 <td> <img style="height: 200px; width: 200px;" id="imageTag" src="'. $row['s_image'] .'" alt="Slider Image"> </td>
  <td><button type="button" name="editBtn" id="editBtn" class="fa fa-check btn btn-success">Edit</button>
  <button type="button" name="deleteBtn" id="deleteBtn" class="btn btn-danger">Delete</button></td>
  </tr>';
}

}

$output .= '</table>';

echo $output;

}


if($_POST['type'] == "deleteSlider"){
  

  $id = $_POST['id'];

  $delete = "DELETE FROM slider WHERE id='$id'";
  $result = mysqli_query($con,$delete);

if($result){

echo "Data Deleted";
  
}
elseif(!$result){

echo "Data Not Deleted";
  
}


}


if($_POST['type'] == "editImage"){

  $id       = $_POST['id'];
  $filepath = $_POST['image'];

  $sql = "UPDATE slider SET s_image='$filepath' WHERE id='$id'";
  $result = mysqli_query($con, $sql);

  if($result){
    move_uploaded_file($filetmp, $filepath);
      header("Location: slider.php");

  }
  elseif(!$result){
  }

}




?>









