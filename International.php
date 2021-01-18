<?php
$title = "International";
require 'header.php';
?>

<body>
  <div>
    <img src="media/b_International.svg" style="width: 5rem; height: 5rem;"></img>
    <h1>2021 Key Priorities – International Collaboration</h1>
  </div>
  <div class="grid">
    <div class="cell">
      <p>
        Target: Accelerate growth through International collaboration.​ <br>
        The program establishes the International Collaboration operating model with clear working definitions and promotes the sharing and segmentation of top regional customers with regional transparency. ​​<br>
        It is supported by a cross functional team consisting of the Regional MDs, Pre-Sales, Partner & Alliances, Marketing and Ops support.
      </p>
    </div>
    <div class="cell">
      <h2>Documents & Links</h2>
      <ul>
        <li><a href="">International Collaboration SIP</a></li>
        <li><a href="">International Collaboration Process</a></li>
        <li><a href="">Strategy overview IT Consultancy business</a></li>
        <li><a href="">BI Dashboard</a></li>
      </ul>
    </div>
    <div class="cell">
      <h2>Target Customer Landscape</h2>
      <ul>
        <li>Relationships in regions</li>
        <li>Current services</li>
        <li>Potential in regions</li>
        <li>Contacts</li>
      </ul>
    </div>
    <div class="cell">
      <h2>News Board</h2>
      <ul>
        <li><a href="">Opportunities in progress</a></li>
        <li><a href="">Win rate YTD</a></li>
      </ul>
    </div>
    <div id="under" class="cell">
      <h2>KPI – International Collaboration Pipeline Growth</h2>
      <section class="graph">
        <div>
          <canvas id="columnchart"></canvas>
        </div>
        <script>
          var ctx = document.getElementById('columnchart').getContext('2d');
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
    <div class="cell">
      <h2>International Collaboration <br> Leadership Board</h2>
    </div>
  </div>
  <div id="end">
    <a href="./Apps_Upsell.php">Prev</a>
    <a href="./index.php#themes">Home</a>
    <a href="./Partners&Alliances.php">Next</a>
  </div>
  <p style="font-size: 0.8rem;" >
    For more information contact: <br>
    @ Mukul Jain <br>
    @ Gerald Eid
  </p>
</body>

</html>