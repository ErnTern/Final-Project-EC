<div>
  <canvas id="myChart1"></canvas>
</div>


<?php
function countA() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(class_id) AS ACount FROM Champion WHERE class_id = 'Assassin'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['ACount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

$countA = countA();
?>
<?php
function countF() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(class_id) AS FCount FROM Champion WHERE class_id = 'Fighter'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['FCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

$countF = countF();
?>
<?php
function countM() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(class_id) AS MCount FROM Champion WHERE class_id = 'Mage'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['MCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

$countM = countM();
?>
<?php
function countMK() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(class_id) AS MKCount FROM Champion WHERE class_id = 'Marksman'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['MKCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

$countMK = countMK();
?>
<?php
function countT() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(class_id) AS TCount FROM Champion WHERE class_id = 'Tank'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['TCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

$countT = countT();
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart1');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Assassin', 'Fighter', 'Mage', 'Marksman', 'Tank'],
      datasets: [{
        label: 'Number of Champions Per Lane',
        data: [<?php echo $countA; ?>, <?php echo $countF; ?>, <?php echo $countM; ?>, <?php echo $countMK; ?>, <?php echo $countT; ?>],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
