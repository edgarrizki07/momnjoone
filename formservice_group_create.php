<?php
include("api/db_config.php");
?>

<?php
if (isset($_POST['btn_simpan'])){

$id_productgroup = $_POST['product_group'];
$productgroup_name = $_POST['productgroup_name'];
$productgroup_info = $_POST['productgroup_info'];
$active = $_POST = ['productgroup_active'];
$date_add       = "$datetime_set";

$sql_productgroup = "INSERT INTO m_product_group (id_productgroup, productgroup_name, productgroup_info, active, date_add) 
values('$id_productgroup', '$productgroup_name', '$productgroup_info','$active','$date_add')";
$create_productgroup = mysqli_query($con,$sql_productgroup);

} else {

}
?>
