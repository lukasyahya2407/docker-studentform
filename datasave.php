<?php
//db_config
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
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
    if(!alert('Welcome to the jungle kid!'))
        {
            window.location.reload(true);
        }
    document.location='index.html';
</script>
<?php
}
//insert ke db
else{
$sql = "INSERT INTO mahasiswa (nim, nama, gender, alamat) values ('$nim','$nama','$gender','$alamat')";
if ($conn->query($sql)){
    echo '<script>alert("Welcome to the jungle kid!")</script>';
}
//upami aya nu error
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>