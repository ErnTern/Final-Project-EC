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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Top', 'Jungle', 'Mid', 'Bottom', 'Support'],
      datasets: [{
        label: 'Number of Champions Per Lane',
        data: [<?php echo $countTop; ?>, <?php echo $countJg; ?>, 3, 5, 2],
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
