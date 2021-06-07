<?php
    require_once('include/connect.php');
    if (isset($_GET['id'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


        $id = validate($_GET['id']);
        $sql = "DELETE FROM vente WHERE numero = $id ";
        $result = $connect->query($sql);
        if ($result) {
            header('Location:admin.php');
        }else{
            header('Location:index.php');
        }

    }
?>