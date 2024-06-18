<html>
    <head>
        <?php
        interface Animal {
            public function makeSound();
        }
        class Perro implements Animal{
            public function makeSound(){
                echo "guao , guao";
            }
        } 
        class Gato implements Animal{
            public function makeSound(){
                echo "miau , miau";
            }
        } 
        class Pato implements Animal{
            public function makeSound(){
                echo "quack , quack";
            }
        } 
        class Pollito implements Animal{
            public function makeSound(){
                echo "pio , pio";
            }
        } 

        $perro = new Perro;
        $perro -> makeSound();
        echo "<br/>";
        $gato = new Gato;
        $gato -> makeSound();
        echo "<br/>";
        $pato = new Pato;
        $pato -> makeSound();
        echo "<br/>";
        $pollito = new Pollito;
        $pollito -> makeSound();
        echo "<br/>";
        ?>
    </head>
</html>