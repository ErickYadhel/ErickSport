<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calcular'])) {
            // Validar que se recibieron los números y la operación correctamente
            if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])) {
                $num1 = (float) $_POST['num1'];
                $num2 = (float) $_POST['num2'];
                $operacion = $_POST['operacion'];
                $resultado = "";

                // Realizar la operación seleccionada
                switch ($operacion) {
                    case "sumar":
                        $resultado = $num1 + $num2;
                        break;
                    case "restar":
                        $resultado = $num1 - $num2;
                        break;
                    case "multiplicar":
                        $resultado = $num1 * $num2;
                        break;
                    case "dividir":
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                        } else {
                            $resultado = "Error: División por cero";
                        }
                        break;
                    default:
                        $resultado = "Operación no válida.";
                        break;
                }
                
                // Muestra el resultado
                echo "<div class='resultado'><h3>Resultado: " . htmlspecialchars($resultado) . "</h3></div>";
            } else {
                echo "<div class='resultado'><h3>Error: Datos incompletos.</h3></div>";
            }
        }
        ?>