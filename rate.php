<?php

include 'coneccion.php';

$Nombre = $_POST['nombre'];
$post_rating = $_POST['vot'];


$query = "SELECT * FROM catalogo WHERE nombre='$Nombre'";
$result = $link->query($query);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		$id = $row['Id'];
		$rating_actual = $row['vot'];
		$hits_actual = $row['hits'];
	}
	$new_hits = $hits_actual + 1;
	$update_hits = "UPDATE catalogo SET hits = '$new_hits' WHERE id='$id'";
	if ($link->query($update_hits) === TRUE) {
		echo "Record updated successfully";
	}else {
		echo "Error updating record: " . $conn->error;
	}
	$pre_rating = $rating_actual + $post_rating;
	$new_rating =$pre_rating / $new_hits;
	echo $pre_rating;
	$update_rating = "UPDATE catalogo SET vot = '$new_rating' WHERE id='$id'";
	header("location: catalogo.php");
}else{
	echo "0 resultados";
}
$link->close();
?>