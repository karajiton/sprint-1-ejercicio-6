<html>
    <head>
        <?php
         abstract class Shape{
            protected $ancho;
            protected $alto;
            
            public function __construct($an,$al){
                $this->ancho=$an;
                $this->alto=$al;
            }
            public abstract function area(); 

        }
        ?>
    </head>
</html>