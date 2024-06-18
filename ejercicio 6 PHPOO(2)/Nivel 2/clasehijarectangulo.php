<html>
    <head>
        <?php
        require_once("Sprint1ejer6nivel2clasepadre.php");
        class Rectangulo extends Shape{
            
                public function area(){
                    return ($this->ancho * $this->alto);
                }
        }
        $rec= new Rectangulo(20,23);
        echo $rec-> area();
        ?>
    </head>
</html>