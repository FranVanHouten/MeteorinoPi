<?php
require('conexion.php');
$columns = array('fecha', 'humedad', 'temperatura', 'presion', 'vientodir','vientovel', 'lluvia', 'luz');

$query = "SELECT * FROM weather WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'fecha BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (humedad LIKE "%'.$_POST["search"]["value"].'%" 
  OR temperatura LIKE "%'.$_POST["search"]["value"].'%" 
  OR presion LIKE "%'.$_POST["search"]["value"].'%" 
  OR vientodir LIKE "%'.$_POST["search"]["value"].'%"
  OR vientovel LIKE "%'.$_POST["search"]["value"].'%"
  OR lluvia LIKE "%'.$_POST["search"]["value"].'%"
  OR luz LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

/*if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY fecha DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query.$query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $fecha=date("d/m/Y", strtotime($row["fecha"]));			
 $sub_array = array();
 $sub_array[] = $fecha;
 $sub_array[] = $row["humedad"];
 $sub_array[] = $row["temperatura"];
 $sub_array[] = $row["presion"];
 $sub_array[] = $row["vientodir"];
 $sub_array[] = $row["vientovel"];
 $sub_array[] = $row["lluvia"];
 $sub_array[] = $row["luz"];
 
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM weather";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);
*/
echo json_encode($output);

?>