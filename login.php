<?php

require "db_connect.php";

$erorr_message = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if ($result) {
        // cek username
        if (mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if ($password === $row["password"]) {
                header("Location: data_diri.php");
                exit;
            } else {
                $erorr_message = "password salah";
            }
        } else {
            $erorr_message = "Username tidak ditemukam";
        }
    } else {
        $erorr_message = "Query gagal: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Halaman login</title>
</head>
<body>
    <h1>Halaman login</h1>

    <form action ="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">            
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">submit</button>
            </li>
        </ul>
    </form>

    <script>
      //mengambil pesan kesalahan dari php
      var errorMessage = "<?php echo $error_message; ?>";
      
      
      if (erorrMessage) {
        //menampilkan pesan kesalahan menggunakan javascript
        document.getElementbyId('errorMessage').innerText = errorMessage;
      }




    </script>

</body>
</html>