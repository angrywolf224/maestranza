<?php  

      function listar_vehiculos(){
        $mysqli = new mysqli("localhost", "root", "", "maestranza");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        else{
            $query = "
            SELECT *
            FROM vehiculo
                ";
            $resultado = mysqli_query($mysqli,$query);

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = mysqli_fetch_array($resultado)) {
                    $view[] = array_map('utf8_encode', $row);
                }
                return($view);
            }else{
                return(false);
            }
        }
        $mysqli->close();
    }



        function listar_materiales(){
        $mysqli = new mysqli("localhost", "root", "", "maestranza");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        else{
            $query = "
            SELECT *
            FROM material
                ";
            $resultado = mysqli_query($mysqli,$query);

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = mysqli_fetch_array($resultado)) {
                    $view[] = array_map('utf8_encode', $row);
                }
                return($view);
            }else{
                return(false);
            }
        }
        $mysqli->close();
    }




?>