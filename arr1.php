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
        <p class="mb-5 fs-1">Temperature control</p>
        <div class="card mt-3">
            <h4 class="card-header text-center">How's the weather!🌞</h4>
            <div class="card-body">
                <p class="text-center"> Let's get temperature readings:</p>
                <form action="" method="POST">
                    <div class="mb-3 mt-3 row">
                        <label class="col-sm-4 col-form-label">Temperature readings:</label>
                        <div class="col-sm-8">
                            <input type="text" name="temperatures" class="form-control">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-warning btn-md">Let's see!</button>
                        </div>
                    </div>
                </form>
                <div class="text-center mt-3 fw-bold">
                    <?php
                    $temperatures = [];
                    if (isset($_POST['temperatures'])) {
                        $temperatures = explode(',', $_POST['temperatures']);
                        sort($temperatures);

                        $average = '';
                        $average = array_sum($temperatures) / count($temperatures);
                        echo "Average temperature: $average <br>";
                        echo "Total inputs: " . count($temperatures) . "<br>";
                        echo "Two lowest temperatures: " . $temperatures[0] . ", " . $temperatures[1] . "<br>";

                        rsort($temperatures);
                        echo "Two highest temperatures: " . $temperatures[0] . ", " . $temperatures[1] . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>