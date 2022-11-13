<?php

?>

<a href="category_add.php">Tambah Category</a>
<table class="border table table-bordered" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Gendre</th>
            <th>Date</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../../config.php";
        $no = 1;
        $query = mysqli_query($conn,"SELECT * FROM category_name");
        while ($q = mysqli_fetch_assoc($query)) {

        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $q['name']; ?></td>
            <td><?= $q['create_date']; ?></td>
            <td>
                <a href="category_edit.php?id=<?= $q['id']; ?>">Edit</a>
                <a href="category_delete.php?id=<?= $q['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>