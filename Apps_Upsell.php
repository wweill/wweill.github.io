<?php
$title = "Apps_Upsell";
require 'header.php';
?>

<body>
  <div>
    <img src="media/b_Apps_Upsell.svg" style="width: 5rem; height: 5rem;"></img>
    <h1>2021 Key Priorities – Apps_Upsell</h1>
  </div>
  <div class="grid1">
    <div class="cell">
      <p>
        Target: Upsell Applications Services outside Iberia with initial focus on Smart Spaces.​
        Build the foundation for broader consultancy services and other selected applications.​
      </p>
      <ul>
        <li>Build global strategy to leverage economies of scale (Define Solutions & Partners)​​</li>
        <li>Name a head for each solution (CTO team), with the vision/mission to sell globally across geographies.​</li>
        <li>Name Local champions with the objective to push locally some of the offers (or identify the GAP)​</li>
        <li>Market Analysis, Geography Segmentation/Target clients (Make Regional Business Plans)​ </li>
        <li>Define Specific consulting topics​</li>
      </ul>
    </div>
    <div class="cell">
      <h2>Documents & Links</h2>
      <ul>
        <li><a href="">Main players in IT Services Landscape</a></li>
        <li><a href="">Strategy overview to expand IT Apps</a></li>
        <li><a href="">Strategy overview IT Consultancy business</a></li>
        <li><a href="">Smartspaces Roadmap</a></li>
        <li><a href="">BI Dashboard</a></li>
      </ul>
    </div>
    <div class="cell">
      <h2>Collateral</h2>
      <ul>
        <li><a href="">Smartspaces Brochure</a></li>
        <li><a href="">Manufacturing Brochure</a></li>
        <li><a href="">Service Now catalogue</a></li>
      </ul>
    </div>
    <div class="cell">
      <h2>News Board</h2>
      <ul>
        <li><a href="">Opportunities in progress</a></li>
        <li><a href="">Win rate YTD</a></li>
      </ul>
    </div>
  </div>
  <div class="grid2">
    <div class="under cell iberia">
      <h2>KPI – Applications Pipeline Growth</h2>
      <p>(outside Iberia)</p>
      <section class="graph">
        <div>
          <canvas id="columnchart1" style="height: 40vh;"></canvas>
        </div>
        <script>
          var ctx = document.getElementById('columnchart1').getContext('2d');
          var gradientStroke = ctx.createLinearGradient(0, 0, 0, 550);
          gradientStroke.addColorStop(0, "#fff1eb");
          gradientStroke.addColorStop(1, "#B9B6A0");
          var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStroke2.addColorStop(0, "rgb(77, 97, 101)");
          gradientStroke2.addColorStop(1, "#13547a");
          var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
              labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
              datasets: [{
                  label: 'Target Pipeline ACV',
                  backgroundColor: gradientStroke2,
                  borderColor: gradientStroke2,
                  data: [40, 40, 40, 40]
                },
                {
                  label: '',
                  backgroundColor: gradientStroke,
                  borderColor: gradientStroke,
                  data: [10, 20, 27, 35]
                }
              ]
            },
            // Configuration options go here
            options: {}
          });
        </script>
      </section>
    </div>
    <div class="under cell">
      <h2>KPI – Orders</h2>
      <section class="graph">
        <div>
          <canvas id="columnchart2" style="height: 40vh;"></canvas>
        </div>
        <script>
          var ctx = document.getElementById('columnchart2').getContext('2d');
          var gradientStroke = ctx.createLinearGradient(0, 0, 0, 550);
          gradientStroke.addColorStop(0, "#fff1eb");
          gradientStroke.addColorStop(1, "#B9B6A0");
          var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStroke2.addColorStop(0, "rgb(77, 97, 101)");
          gradientStroke2.addColorStop(1, "#13547a");
          var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
              labels: ['Q1', 'Q2', 'Q3', 'Q4'],
              datasets: [{
                  label: 'Target',
                  backgroundColor: gradientStroke2,
                  borderColor: gradientStroke2,
                  data: [40, 8, 2, 10]
                },
                {
                  label: 'Orders Won',
                  backgroundColor: gradientStroke,
                  borderColor: gradientStroke,
                  data: [10, 20, 27, 35]
                }
              ]
            },
            // Configuration options go here
            options: {}
          });
        </script>
      </section>
    </div>
  </div>
  <div id="end">
    <a href="./Retention.php">Prev</a>
    <a href="./index.php#themes">Home</a>
    <a href="./International.php">Next</a>
  </div>
  <p style="font-size: 0.8rem;" >
    For more information contact: <br>
    @ Oriol Ruiz
  </p>
</body>

</html>