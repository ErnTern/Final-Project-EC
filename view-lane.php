<div>
  <canvas id="myChart"></canvas>
</div>

<?php
// Example initialization of $countTop
$countTop = 10;
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
        data: [<?php echo $countTop ?>, 19, 3, 5, 2],
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
