<script  type="text/javascript">

        var ctx = document.getElementById("demobar").getContext("2d");
        var data = {
                  labels: ["Quartal1","Quartal2","Quartal3"],
                  datasets: [
                  {
                    label: "Samsung",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(59, 100, 222, 1)",
                    borderColor: "rgba(59, 100, 222, 1)",
                    pointHoverBackgroundColor: "rgba(59, 100, 222, 1)",
                    pointHoverBorderColor: "rgba(59, 100, 222, 1)",
                    data: [<?php while ($p = mysqli_fetch_array($samsung)) { echo '"' . $p['Quartal1'] . '","' . $p['Quartal2'] . '","' . $p['Quartal3'] . '",';}?>]
                  },
                  {
                    label: "Apple",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(203, 222, 225, 0.9)",
                    borderColor: "rgba(203, 222, 225, 0.9)",
                    pointHoverBackgroundColor: "rgba(203, 222, 225, 0.9)",
                    pointHoverBorderColor: "rgba(203, 222, 225, 0.9)",
                    data: [<?php while ($p = mysqli_fetch_array($apple)) { echo '"' . $p['Quartal1'] . '","' . $p['Quartal2'] . '","' . $p['Quartal3'] . '",';}?>]
                  },
                  {
                    label: "Motorola",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(201, 29, 29, 1)",
                    borderColor: "rgba(201, 29, 29, 1)",
                    pointHoverBackgroundColor: "rgba(201, 29, 29, 1)",
                    pointHoverBorderColor: "rgba(201, 29, 29, 1)",
                    data: [<?php while ($p = mysqli_fetch_array($motorola)) { echo '"' . $p['Quartal1'] . '","' . $p['Quartal2'] . '","' . $p['Quartal3'] . '",';}?>]
                  }
                  ]
                  };

        var myBarChart = new Chart(ctx, {
                  type: 'line',
                  data: data,
                  options: {
                  barValueSpacing: 20,
                  scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    xAxes: [{
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }]
                    }
                }
              });
      </script>