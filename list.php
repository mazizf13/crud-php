<?php 
include("connection.php");

$query = mysqli_query($connect, "SELECT * FROM karyawan");
if ($query) {
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    echo "Query execution failed: " . mysqli_error($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <a href="add.php">Tambah Data</a>
    <br><br>
    <form action="search.php" method="get">
    <input type="text" name="keyword" placeholder="Keyword ..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        <button type="submit">Search</button>
    </form>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>

        <?php foreach($results as $result) :?>
            <tr>
                <td><?php echo $result["nama"] ?></td>
                <td><?php echo $result["alamat"] ?></td>
                <td><?php echo $result["umur"] ?></td>
                <td><?php echo $result["jenis_kelamin"] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
                    <a href="delete.php?id=<?php echo $result['id']?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
