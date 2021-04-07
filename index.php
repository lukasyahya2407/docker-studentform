<html>
<head>
    <title>Docker Student Form</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="datasave.php" method="POST">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="green" size="2">Engineering Student Data Form</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NIM</td>
            <td><input type="number" name="nim" size="50" maxlength="7" required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="50" maxlength="50" required/></td>
        </tr>
        <tr height="46">
            <td></td>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="L">Laki Laki
            <input type="radio" name="gender" value="P">Perempuan
        </td></tr>
        <tr height="46">
            <td> </td>
            <td>Alamat</td>
            <td><input type="text" name="alamat" size="50" maxlength="30" required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>