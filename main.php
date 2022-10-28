<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 8.6</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="img/cat.gif">';
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'Город', ' ', $city; ?>
                    </p>

                    <p> Мне
                    <?php  echo $age;   ?>
                    год </p>
                    <p> Теперь я умею создавать переменные. </p>
                    <p> И выполнять простые операции с ними. </p>
                </div>
            </div>

            <div class="knowledge">

                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

                    <?php
                        $a = 13;
                        $b = 19;
                        $c = $a + $b;
                        echo 'Сумма чисел: ', $c;
                    ?>   <br>
                     <?php
                        echo $d;
                    ?>

            </div>

            <div class="article">
                <p class="text">
                    Есть два способа прожить жизнь: или так, будто чудес не бывает, или так, будто вся жизнь — чудо!
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>