<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .nav-link {
            color: #ffbb33;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="arr1.php">Temperature control</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="arr2.php">Months</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container w-50 text-center">
        <p class="mb-5 fs-1">Months</p>
        <div class="card mt-3 mb-5">
            <h4 class="card-header text-center">Days in months</h4>
            <div class="card-body">
                <div class="text-center mt-3">
                    <?php
                    $names = array(1 => 'Sausis', 2 => 'Vasaris', 3 => 'Kovas', 4 => 'Balandis', 5 => 'Gegužė', 6 => 'Birželis', 7 => 'Liepa', 8 => 'Rugpjūtis', 9 => 'Rugsėjis', 10 => 'Spalis', 11 => 'Lapkritis', 12 => 'Gruodis');
                    $days = array(1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31);

                    $days31 = 31;
                    $months31 = [];
                    $numOfMonths = 0;

                    foreach ($days as $id => $number) {
                        if ($number == $days31) {
                            $numOfMonths++;
                            array_push($months31, $names[$id]);
                        }
                    }

                    echo "The <b>$numOfMonths</b> month(s) having <b>$days31</b> days in a year are: <b>" . implode(", ", $months31) . "</b>. <hr>";

                    $days30 = 30;
                    $months30 = [];
                    $numOfMonths = 0;

                    foreach ($days as $id => $number) {
                        if ($number == $days30) {
                            $numOfMonths++;
                            array_push($months30, $names[$id]);
                        }
                    }

                    echo "The <b>$numOfMonths</b> month(s) having <b>$days30</b> days in a year are: <b>" . implode(", ", $months30) . "</b>. <hr>";

                    $days28 = 28;
                    $months28 = [];
                    $numOfMonths = 0;


                    foreach ($days as $id => $number) {
                        if ($number == $days28) {
                            $numOfMonths++;
                            array_push($months28, $names[$id]);
                        }
                    }

                    echo "The <b>$numOfMonths</b> month(s) having <b>$days28</b> days in a year are: <b>" . implode(", ", $months28) . "</b>. <hr>";

                    echo "A common year has: <b>" . array_sum($days) . "</b> days. <hr>";

                    foreach ($names as $id => $monthName) {
                        if ($id <= 3) {
                            echo "<b>$monthName</b> is $id month and it has: $days[$id] days. <br>";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>