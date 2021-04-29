var ctx = document.getElementById("piechart").getContext("2d");
var data = {
  labels: [<?php while ($p = mysqli_fetch_array($produk)) { echo '"' . $p['nama'] . '",';}?>],
  datasets: [
  {
    label: "kategori",
    data: [
    <?php 
    while ($p = mysqli_fetch_array($jumlah_p)) { echo '"' . $p['jumlah'] . '",';}
    while ($p = mysqli_fetch_array($jumlah_w)) { echo '"' . $p['jumlah'] . '",';}
    ?>
    ],
    backgroundColor: [
    '#66c2ff',
    '#FF66FF',
    '#F07124',
    '#CBE0E3',
    '#979193'
    ]
  }
  ]
};

var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true
  }
});