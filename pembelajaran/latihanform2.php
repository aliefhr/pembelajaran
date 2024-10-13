<html>
    <title>latihan form2</title>
    <body>
        <h1>form input indentitas mahasiswa</h1><br>
        <form method="POST" action="tampildata.php">
            NPM: <br> 
            <input type="text" name="txtnpm"><br>
            Nama: <br>
            <input type="text" name="txtnama"><br>
            Jenis Kelamin: <br>
            <input type="radio" name="txtjeniskelamin" value="Laki-laki">Laki-laki
            <input type="radio" name="txtjeniskelamin" value="Perempuan">Perempuan<br>
            
            Hobi: <br>
            <input type="checkbox" name="txthobi[]" value="Bengkel"> Bengkel<br>
            <input type="checkbox" name="txthobi[]" value="Traveling"> Traveling<br>
            <input type="checkbox" name="txthobi[]" value="Musik"> Musik<br>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>