<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post" name="form">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="teks" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                    <select name="level" id="level" required>
                    <option disabled selected> Pilih </option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="button" name="Submit" value="Register"></td>
                </tr>            
            </table>
        </form>
</div>

</body>
</html>