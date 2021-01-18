<?php
$title = "Retention";
require 'header.php';
?>

<body>
  <div>
    <img src="media/b_Retention.svg" style="width: 5rem; height: 5rem;"></img>
    <h1>2021 Key Priorities – Retention</h1>
  </div>
  <div class="grid">
    <div class="cell">
      <p>
        Target: Aim for 100% renewal rate. Win-back of clients who started (partial) migrations. <br>
        The program will involve cross functional Workgroups consisting Sales, Pre-Sales, Portfolio & Operations teams​​ and will deliver the following;
      </p>
      <ul>
        <li>12-month work program in advance of RFP / renewals schedule.​</li>
        <li>Salesforce automation to trigger program activity.​</li>
        <li>Completed white space templates & analysis.​</li>
        <li>Verification of Customers P&L.</li>
        <li>Customer engagement each quarter with respect to service improvement plus portfolio roadmap. Wider engagement with non-IT stakeholders to improve end-user experience.​</li>
      </ul>
    </div>
    <div class="cell">
      <h2>Documents & Links</h2>
      <ul>
        <li><a href="">2021 Global Renewals List</a></li>
        <li><a href="">Renewals Governance & Process documentation</a></li>
        <li><a href="">Renewals Checklist & Templates</a></li>
        <li><a href="">BI Dashboard</a></li>
      </ul>
    </div>
    <div class="cell">
      <h2>News Board</h2>
      <ul>
        <li><a href="">Renewals to focus on by quarter</a></li>
        <li><a href="">List of won renewals YTD</a></li>
      </ul>
    </div>
    <div class="cell" id="under">
      <h2>KPI - Renewals</h2>
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
              labels: ['Q1', 'Q2', 'Q3', 'Q4'],
              datasets: [{
                  label: 'Target TCV',
                  backgroundColor: gradientStroke2,
                  borderColor: gradientStroke2,
                  data: [40, 8, 2, 10]
                },
                {
                  label: 'Qdt Won',
                  backgroundColor: gradientStroke,
                  borderColor: gradientStroke,
                  data: [10, 20, 9, 8]
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
    <a href="./Product_Sales.php">Prev</a>
    <a href="./index.php#themes">Home</a>
    <a href="./Apps_Upsell.php">Next</a>
  </div>
  <p style="font-size: 0.8rem;" >
    For more information contact: <br>
    @ Steve Murtagh <br>
    @ Wesley Bowen
  </p>
</body>

</html>