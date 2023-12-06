<div>
  <canvas id="myChart"></canvas>
</div>
<?php
function countTop() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(lane_id) AS topCount FROM Champion WHERE lane_id = 'Top'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['topCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
$countTop = countTop();
?>
<?php
function countJg() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(lane_id) AS jgCount FROM Champion WHERE lane_id = 'Jungle'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['jgCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
$countJg = countJg();
?>
<?php
function countMid() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(lane_id) AS midCount FROM Champion WHERE lane_id = 'Mid'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['midCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
$countMid = countMid();
?>
<?php
function countBot() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(lane_id) AS botCount FROM Champion WHERE lane_id = 'Bottom'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['botCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
$countBot = countBot();
?>
<?php
function countSup() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(lane_id) AS supCount FROM Champion WHERE lane_id = 'Support'");
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['supCount'];
        $conn->close();
        return $count;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
$countSup = countSup();
?>

<div id="myChartContainer" style="width: 100%; max-width: 400px; height: 400px; margin: auto;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Top', 'Jungle', 'Mid', 'Bottom', 'Support'],
      datasets: [{
        label: 'Number of Champions Per Lane',
        data: [<?php echo $countTop; ?>, <?php echo $countJg; ?>, <?php echo $countMid; ?>, <?php echo $countBot; ?>, <?php echo $countSup; ?>],
        backgroundColor: [
          'rgba(255, 206, 86, 0.2)',
          'rgba(255, 206, 86, 0.4)',
          'rgba(255, 206, 86, 0.6)',
          'rgba(255, 206, 86, 0.8)',
          'rgba(255, 206, 86, 1)',
        ],
        borderColor: [
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          max: <?php echo max($countTop, $countJg, $countMid, $countBot, $countSup); ?> + 1
        }
      },
      maintainAspectRatio: false,
      aspectRatio: .2
    }
  });
</script>

