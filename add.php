<html>
    <form action="insert.php" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" >
        <br><br>

        <label for="alamat">Alamat</label><br>
        <textarea name="alamat"></textarea>
        <br><br>

        <label for="umur">Umur</label><br>
        <input type="text" name="umur">
        <br><br>

        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <select name="jenis_kelamin" id="">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br><br>
        
        <button type="submit">Tambah</button>
    </form>
</html>