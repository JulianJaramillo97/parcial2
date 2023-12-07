<?php 

    if ($_POST) {
        
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $operacion = $_POST["operaciones"];

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;

        switch ($operacion) {
            case 'suma':
                echo $numero1." + ".$numero2." = ".$suma;
                break;
            case 'resta':
                echo $numero1." - ".$numero2." = ".$resta;
                break;
            case 'multiplicacion':
                echo $numero1." x ".$numero2." = ".$multiplicacion;
                break;
            case 'division':
                 echo $numero1." / ".$numero2." = ".$division;
                break;
            
            default:
                echo "No selecionaste tu operación";
                break;
        }

    }

?>