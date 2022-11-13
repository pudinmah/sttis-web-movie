

<form action="category_update.php" method="post">
    <?php
    include "../../config.php";
    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM category_name WHERE id='$id'");
    while ($q = mysqli_fetch_assoc($query)) {

    ?>
    <tr>
        <th>Name :</th>
    </tr>
    <tr>
        <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
        <td><input type="text" name="name" value="<?= $q['name'] ?>"></td>
    </tr>
    <tr>
        <td><button type="submit" name="submit">Simpan</button></td>
    </tr>
    <?php } ?>
</form>
<?php
