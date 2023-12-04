<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/007/169/379/original/japanese-sayagata-asian-traditional-geometric-seamless-pattern-with-light-yellow-gold-color-background-use-for-fabric-textile-cover-interior-decoration-elements-wrapping-vector.jpg');
            background-size: cover;
            background-position: center;
        }

        .table {
            border-radius: 10px; /* Adjust the radius as needed */
            overflow: hidden; /* Ensure rounded corners are visible */
        }

        th {
            border-radius: 10px 10px 0 0; /* Top rounded corners */
        }

        td {
            border-radius: 0 0 10px 10px; /* Bottom rounded corners */
        }

        .container {
            padding: 20px;
        }

        .card-group {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            width: 200px; /* Adjust the card width as needed */
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
        }

        .card-body {
            padding: 10px;
        }

        .list-group {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-group-item {
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 10px 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Champions by Class</h1>
        <div class="card-group">
            <?php
            while ($champions = $class->fetch_assoc()) {
            ?>
           <<div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $champions['class_id']; ?></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $class = selectClassByChampion($champions['champ_id']);
                            while ($classes = $class->fetch_assoc()) {
                            ?>
                                <li class="list-group-item"><?php echo $classes['champ_name']; ?> - <?php echo $classes['lane_id']; ?></li>
                            
                            <?php
                            }
                            ?>
                        </ul>
                    </p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
