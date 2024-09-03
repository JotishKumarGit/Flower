<?php
include("../database.php");
$id = $_GET['pro_id'];
$delete = "DELETE FROM product WHERE pro_id='$id' ";
$data = mysqli_query($con, $delete);

if ($data) {
?>
    <script type="text/javascript">
        alert("Data is deleted successfully");
        window.open("http://localhost/vizhiinter/admin/product.php", "_self");
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Please try again");
    </script>

<?php
}
?>