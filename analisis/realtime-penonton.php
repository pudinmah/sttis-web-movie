<?php
    include "koneksi.php";
    $data_penonton = select("SELECT * FROM video ORDER BY id_video DESC");

?>

<?php $no =1;?>
<?php foreach($data_penonton as $penonton);?>
    <tr>
        <td><?= $penonton['judul_video']?></td>
        <td><?= $penonton['jumlah_viewer']?></td>
    </tr>
