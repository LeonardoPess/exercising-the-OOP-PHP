<?php
    //declare(strict_types = 1);
    include 'includes/class-autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--// title //-->
    <title>POO</title>

    <!--// meta tags //-->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--// link //-->

    
</head>
<body>
    
    <?php
        $usersObj = new UsersView();
        $usersObj->showUser("admin");

        //$usersObj2 = new UsersContr();
        //$usersObj2->createUser("Marcio","senha");
    ?>

    <!--
        <form action="includes/calc.inc.php" method="post">
            <p>My own calculator!</p>
            <input type="number" name="num1" placeholder="First Number">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="submit">Calculate</button>
        </form>

        $person1 = new Person();
        
        try {
            $person1->setName(2);
            echo $person1->getName();
        } catch (TypeError $e) {
            echo "Error: " . $e->getMessage();
        }

        $person1 = new Person("Daniel","Blue",28);
        echo $person1->getDA();

        echo Person::$drinkingAge;
        Person::setDrinkingAge(18);
        echo Person::$drinkingAge;

        $person1 = new Person("Daniel","Blue",28);
        echo $person1->getName(); 

        $person1 = new Person("Daniel","Blue",28);
        echo $person1->name;
        echo $person1->eyeColor;
        echo $person1->age;

        $person1 = new Person();
        $person1->setName("Leonardo");
        echo $person1->name;

        $person2 = new Person();
        $person2->setName("Timmy");
        echo $person2->name;
    -->

</body>
</html>