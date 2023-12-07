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
<h1><span class="badge text-bg-light">Champions by Class</span></h1>
        <div class="card-group">
                            <?PHP
                            function getAllClasses($conn) {
                            $sql = "SELECT DISTINCT class_id FROM Class";
                            $result = $conn->query($sql);
                            return $result;
                            ?>
                                 <?php
                                    while ($class1 = $classes->fetch_assoc()) {
                                        $classId = $class1['class_id'];
                                        $champions = selectClassByChampion($classId, $conn);
                            
                                        if ($champions->num_rows > 0) {
                                            ?>
                                            <div class="class-section">
                                                <h2 class="class-title">Class: <?php echo $classId; ?></h2>
                                                <ul class="champion-list">
                                                    <?php
                                                    while ($champion = $champions->fetch_assoc()) {
                                                        ?>
                                                        <li class="champion-item">
                                                            <?php echo $champion['champ_name']; ?> - <?php echo $champion['lane_id']; ?>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <?php
            }
        }
        ?>
        </div>
    </div>
</body>
</html>
