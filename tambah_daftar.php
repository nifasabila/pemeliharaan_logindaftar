<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMERIKSAAN HEWAN</title>
</head>
<fieldset>
<center>
<body>
    <h1>FORM Daftar</h1>
    <form action="proses_daftar.php" method="POST">
        <form>
            <a href="daftar.php"><input type="button" name="keluar" value="keluar"/></a>
            <p>
                <label for="username"> username: </label>
                <input type="text" name="username"/>
</p>
<p>
<label for="password"> password : </label>
<input type="text" name="password"/>
</p>
<p>
<label for="umur"> umur : </label>
<input type="number" name="umur"/>
</p>
<p>
<label for="gmail"> gmail : </label>
<input type="text" name="gmail"/>
</p>
<p>
    <input type="submit" name="kirim" value="kirim"/>
</p>
</fieldset>
</form>
</body>
</center>
</html>