<?php
    include "koneksi.php";
    $functionName = htmlspecialchars($_GET['functionName']);

    switch ($functionName){
        case 'getDataPenonton':
            getDataPenonton();
            break;
        case 'getDataLainnya':
               getDataLainnya();
               break;
        default:
            break;
    }
     function getDataPenonton()
    {
        global $conn;
        $data = [];
        $query = mysqli_query($conn, " SELECT * FROM video");
        
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
        echo json_encode($data);
    }
?>