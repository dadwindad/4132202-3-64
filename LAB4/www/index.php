<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php   //open php tag 
    echo "Hello PHP";

    $num = 5;
    $float = 2.301;
    $txt = "BRU";

    $sum = $num + $float;
    echo $sum;
    echo "<br>";
    echo $txt . $float;

    $car = ["toyota", "bmw", "kubota"];
    $fruit = array("apple", "mango", "durean");
    echo "<br>";
    echo $car;
    echo "<br>";
    var_dump($car);
    echo "<br>";
    echo $car[1];

    //associative array
    $row['name'] = "win";
    $cars = ["brand" => "Toyota", "color" => "RED", "Owner" => "Win"];
    echo "<br>";
    echo $cars["Owner"];

    //multi-dimention array
    $rows[1][2] = 15;
    $rows = [
        "address" => ["no" => 15, "mo" => 1, "rd" => "jira"],
        "owner" => "win"
    ];
    echo "<br>";
    echo $rows["address"]["mo"];
    var_dump($rows);
    //close php tag

    //function
    echo "<br>";
    echo add(3, 5);

    function add($a, $b)
    {
        return $a + $b;
    }

    //OOP
    class Car
    {
        //property
        public $color;
        public $brand;

        //method
        function ride()
        {
            echo "car is rided.";
        }

        function set_info($Brand, $Color)
        {
            $this->brand = $Brand;
            $this->color = $Color;
        }

        function get_info()
        {
            echo $this->brand . " : " . $this->color;
        }
    }

    $bmw = new Car();
    $kubota = new Car();

    $bmw->set_info("BWM", "RED");
    $bmw->ride();
    $bmw->get_info();

    //control
    echo "<br>";
    if (3 == 5) {
        echo "True";
    } else {
        echo "False";
    }

    echo 3 == 3 ? "True" : "False";

    for ($i = 0; $i <= 5; $i++) {
        echo $i . "<br>";
    }

    $i = 0;
    while ($i < 3) {
        echo $fruit[$i] . "<br>";
        $i++;
    }
    ?>

    <table border="1">
        <tr>
            <td>#</td>
            <td>car</td>
            <td>fruit</td>
        </tr>
        <?php
        for ($i = 0; $i < 5; $i++) {
        ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $car[$i] ?></td>
                <td><?= $fruit[$i] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>