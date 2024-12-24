<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name;
            private $price;

            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            public function __get($property)
            {
                return $this->$property;
            }

            public function show_price()
            {
                return $this->price;
            }

            public function __toString()
            {
                return "Food Object ( [name:Food:private] => {$this->name} [price:Food:private] => {$this->price} )";
            }
        }

        class Animal
        {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, string $height, string $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function __get($property)
            {
                return $this->$property;
            }

            public function show_height()
            {
                return $this->height;
            }
            public function __toString()
            {
                return "Animal Object ( [name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight} )";
            }
        }

        $food = new Food('おにぎり', 300);
        $animal = new Animal('うさぎ', '30cm', '2kg');

        print_r($food->__toString());
        echo "<br>";
        print_r($animal->__toString());

        echo $food->show_price();
        echo "<br>";
        echo $animal->show_height();

        ?>
    </p>
</body>

</html>