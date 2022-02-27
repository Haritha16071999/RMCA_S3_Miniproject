<php
include('connection.php');
?>
<php
$id= $GET['scheme_id'];
$del = mysqli_query($conn, "delete from scheme where scheme_id ='$id' ");
if($del)
{
mysqli_close($conn);
header("location:listscheme.php");
echo "alert";
}
else
{
header("location:listscheme.php)
}
?>