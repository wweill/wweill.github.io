<?php
$title = "Product_Sales";
require 'header.php';
?>

<body>
  <div>
    <img src="media/b_Product_Sales.svg" style="width: 5rem; height: 5rem;"></img>
    <h1>2021 Key Priorities – Product Sales</h1>
  </div>
  <div class="grid">
    <div class="cell">
      <p>
        Target: Achieve €45m revenues of Product Sales in 2021 to assist in growing the top line.​
        Sell more sophisticated products in certain areas with services on top.​
        Define product partner strategy & selection criteria.​
      </p>
      <ul>
        <li>Manage our financials facilities, lockbox and Bank or shareholder guaranties in Q4 2020 to cover all of our footprint and secure our 2021 budget.​​</li>
        <li>Build E2E product plan (leverage ‘Overlap’ / Procurement & logistics). Build inside Sales organization. ​</li>
        <li>Factor in additional Services revenue (e.g. DaaS). Product will become an enabler for Xselling.​​</li>
      </ul>
    </div>
    <div class="cell">
      <h2>Documents & Links</h2>
      <ul>
        <li><a href="">Product Capability Matrix</a></li>
        <li><a href="">Link to BI Dashboard</a></li>
      </ul>
    </div>
    <div class="cell">
      <h2>News Board</h2>
      <ul>
        <li><a href="">Global Credit line with Arrow</a></li>
        <li><a href=""> Increase from 1 to €2m the French Credit line with Arrow</a></li>
        <li><a href="">Global or local Credit line with TechData - Increase the pressure at EAME Level</a></li>
        <li><a href="">Improve the SAP user interface/Gui, for our Sales Admi users to improve their productivity.</a></li>
        <li><a href="">Factoring in France with Smart Treso if it's still helps our WC.</a></li>
        <li><a href="">Provide Financial statement and audited numbers from GT to EULER-HERMES in order to secure vendors relationships</a></li>
        <li><a href="">Credit line with HPE France</a></li>
      </ul>
    </div>
    <div class="cell" id="under">
      <h2>KPI - Product</h2>
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
    <a href="./Partners&Alliances.php">Prev</a>
    <a href="./index.php#themes">Home</a>
    <a href="./Retention.php">Next</a>
  </div>
  <p style="font-size: 0.8rem;">
    For more information contact: <br>
    @ Francis Weill
  </p>
</body>

</html>