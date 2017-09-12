<?php
require ('conn.php');


if($_POST['type'] == "getCategory"){

$output = '';

	$categorySql = "SELECT * FROM category";
$categoryResult = mysqli_query($con, $categorySql);

while($row = mysqli_fetch_array($categoryResult)){

$output .= '<div class="col-sm-4">
        	<a href="#" class="category" data-toggle="modal" data-target="#flip1" >
            	<span class="category-img"> <img style="height: 350px; width:400px;" id="image" name="'.$row[0].'" src="'.$row[2] .'"></span>
                 '.$row[1].'
            </a>
        </div>';

}

echo $output;


}


if($_POST['type'] == 'getMagazineImages' ){

$outputCat = '';

$id  = $_POST['id'];

// $outputCat .= '<div class="book_wrapper">
//                     <a id="next_page_button"></a>
//                     <a id="prev_page_button"></a>
//                     <div id="loading" class="loading">Loading Images...</div>
//                     <div id="mybook" style="display:none;">
//                         <div class="b-load">';

// $outputCat .= '<div class="b-load" >';

$sql12 = "SELECT * FROM category_image WHERE c_id='$id' ";
$result12 = mysqli_query($con, $sql12);

while($row12 = mysqli_fetch_array($result12)){

	// $outputCat .= '<div>
 //                                 <img style="height: 500px;width: 390px" alt="" src="images/cat_cover/confirm_shipment.jpg" />
 //                            </div>';

echo $row12['c_image'];

}

// $outputCat .= '</div>
//                     </div>
//                 </div>
                         
//                         </div>';

// $outputCat .= '
// </div></div></div></div></div></div>';

// echo $outputCat;


}


?>