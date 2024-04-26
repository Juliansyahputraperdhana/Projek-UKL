<?php
include("../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index1.php');
}
$id =  $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $level = $user_data['level'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <header>
        <h3>Fomulir Edit User</h3>
    </header>
    <form method="POST" action="Edit Data.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="teks" name="username" value="<?php echo $username ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $password ?>"></td>
            </tr>
            <tr>
            <td>Level</td>
            <td>
            <select name="level" id="level" required>
            <option disabled selected> <?php echo $level ?></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            </td>
            </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>