<div id="myChartContainer1" style="width: 100%; height: 300px; margin: auto;">
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
  const ctx1 = document.getElementById('myChart1');

  new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ['Assassin', 'Fighter', 'Mage', 'Marksman', 'Tank'],
      datasets: [{
       label: 'Number of Champions per Class',
        data: [<?php echo $countA; ?>, <?php echo $countF; ?>, <?php echo $countM; ?>, <?php echo $countMK; ?>, <?php echo $countT; ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.5)', 
          'rgba(54, 162, 235, 0.5)', 
          'rgba(255, 206, 86, 0.5)', 
          'rgba(75, 192, 192, 0.5)', 
          'rgba(153, 102, 255, 0.5)' 
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      maintainAspectRatio: false,
      aspectRatio: 0.5
    }
  });
</script>
