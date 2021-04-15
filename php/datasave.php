<?php
//db_config
$host = "db";
$dbusername = "root";
$dbpassword = "root";
$dbname = "student_sample";
// Create connection
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);  
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }

//inputan
$nim = filter_input(INPUT_POST, 'nim');
$nama = filter_input(INPUT_POST, 'nama');
$gender = filter_input(INPUT_POST, 'gender');
$alamat = filter_input(INPUT_POST, 'alamat');

//cek data duplikat
$duplicate=mysqli_query($conn,"select * from mahasiswa where nim='$nim'");
if (mysqli_num_rows($duplicate)>0)
{   
?>
<script language="JavaScript">
    if(!alert('Another Data Located!'))
        {
            window.location.reload(true);
        }
    document.location='index.php';
</script>
<?php
}
//insert ke db
else{
$sql = "INSERT INTO mahasiswa (nim, nama, gender, alamat) values ('$nim','$nama','$gender','$alamat')";
$result = mysqli_query($conn, $sql);
if ($result){
    ?>
<script language="JavaScript">
    (!alert('Welcome to the Jungle Kid!'))
    document.location='index.php';
</script>
<?php
 }
//upami aya nu error
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>