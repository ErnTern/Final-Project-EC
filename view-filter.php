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
            border-radius: 10px;
            overflow: hidden; 
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
            width: 200px;
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Assassin</h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            function getAllAssassinChampions() {
                                try {
                                    $conn = get_db_connection();
                                    $stmt = $conn->prepare("SELECT champ_name, lane_id FROM Champion WHERE class_id = 'Assassin' ORDER BY champ_name");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $conn->close();
                                    return $result;
                                } catch (Exception $e) {
                                    $conn->close();
                                    throw $e;
                                }
                            }

                            $assassinChampions = getAllAssassinChampions();

                            while ($champion = $assassinChampions->fetch_assoc()) {
                                ?>
                                <li class="list-group-item">
                                    <?php echo $champion['champ_name']; ?> - <?php echo $champion['lane_id']; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fighter</h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            function getAllFighterChampions() {
                                try {
                                    $conn = get_db_connection();
                                    $stmt = $conn->prepare("SELECT champ_name, lane_id FROM Champion WHERE class_id = 'Fighter' ORDER BY champ_name");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $conn->close();
                                    return $result;
                                } catch (Exception $e) {
                                    $conn->close();
                                    throw $e;
                                }
                            }

                            $fighterChampions = getAllFighterChampions();

                            while ($champion = $fighterChampions->fetch_assoc()) {
                                ?>
                                <li class="list-group-item">
                                    <?php echo $champion['champ_name']; ?> - <?php echo $champion['lane_id']; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </p>
                </div>
            </div>
             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mage</h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            function getAllMageChampions() {
                                try {
                                    $conn = get_db_connection();
                                    $stmt = $conn->prepare("SELECT champ_name, lane_id FROM Champion WHERE class_id = 'Mage' ORDER BY champ_name");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $conn->close();
                                    return $result;
                                } catch (Exception $e) {
                                    $conn->close();
                                    throw $e;
                                }
                            }

                            $mageChampions = getAllMageChampions();

                            while ($champion = $mageChampions->fetch_assoc()) {
                                ?>
                                <li class="list-group-item">
                                    <?php echo $champion['champ_name']; ?> - <?php echo $champion['lane_id']; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Marksman</h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            function getAllMarksmanChampions() {
                                try {
                                    $conn = get_db_connection();
                                    $stmt = $conn->prepare("SELECT champ_name, lane_id FROM Champion WHERE class_id = 'Marksman' ORDER BY champ_name");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $conn->close();
                                    return $result;
                                } catch (Exception $e) {
                                    $conn->close();
                                    throw $e;
                                }
                            }

                            $marksmanChampions = getAllMarksmanChampions();

                            while ($champion = $marksmanChampions->fetch_assoc()) {
                                ?>
                                <li class="list-group-item">
                                    <?php echo $champion['champ_name']; ?> - <?php echo $champion['lane_id']; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tank</h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            function getAllTankChampions() {
                                try {
                                    $conn = get_db_connection();
                                    $stmt = $conn->prepare("SELECT champ_name, lane_id FROM Champion WHERE class_id = 'Tank' ORDER BY champ_name");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $conn->close();
                                    return $result;
                                } catch (Exception $e) {
                                    $conn->close();
                                    throw $e;
                                }
                            }

                            $tankChampions = getAllTankChampions();

                            while ($champion = $tankChampions->fetch_assoc()) {
                                ?>
                                <li class="list-group-item">
                                    <?php echo $champion['champ_name']; ?> - <?php echo $champion['lane_id']; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
