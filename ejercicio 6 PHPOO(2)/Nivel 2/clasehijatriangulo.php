<html>
    <head>
        <?php
        require_once("Sprint1ejer6nivel2clasepadre.php");
        class Triangulo extends Shape{
            public function area(){
                $resultado = (($this->ancho * $this->alto)/2);
                return $resultado;
            }
         
        }
        $tri = new Triangulo(23,22);
        echo $tri-> area();
        ?>
    </head>
</html>