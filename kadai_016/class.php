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
                echo $this->price;
            }
        }

        $food = new Food('おにぎり', 300);

        echo "Food Object ( ";
        echo "[name:Food:private] => " . $food->__get('name') . " ";
        echo "[price:Food:private] => " . $food->__get('price') . " )";
        echo "<br>";

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
                echo $this->height;
            }
        }

        $animal = new Animal('うさぎ', '30cm', '2kg');

        echo "Animal Object ( ";
        echo "[name:Animal:private] => " . $animal->__get('name') . " ";
        echo "[height:Animal:private] => " . $animal->__get('height') . " ";
        echo "[weight:Animal:private] => " . $animal->__get('weight') . " )";
        echo "<br>";

        echo $food->show_price();
        echo "<br>";
        echo $animal->show_height();
        ?>
    </p>
</body>

</html>