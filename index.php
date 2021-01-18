<?php
$title = "index";
require 'header.php';
?>

<body>
  <section id="menu">
    <div id="getronics"><img src="media/Logo.svg" style="width: 30vw;"></div>
    <div id="arrow">
      <a href="#themes">
        <svg class="icon">
          <use href="media/icons.svg#arrow"></use>
        </svg>
      </a>
    </div>
    <div class="move"><img src="media/b_Product_Sales.svg" style="width: 7rem; height: 7rem;"></img></div>
    <div class="move"><img src="media/b_International.svg" style="width: 10rem; height: 10rem;"></img></div>
    <div class="move"><img src="media/b_Partners&Alliances.svg" style="width: 5rem; height: 5rem;"></img></div>
    <div class="move"><img src="media/b_Retention.svg" style="width: 20rem; height: 20rem; filter: blur(5px);"></img></div>
    <div class="move"><img src="media/b_apps_upsell.svg" style="width: 25rem; height: 25rem; filter: blur(5px);"></img></div>
  </section>

  <div class="transition"></div>

  <section id="themes">
    <h1>2021 Key Priorities – Leverage skills and focus</h1>
    <div id="key_priorities">
      <a class="card" href="./Retention.php">
        <div class="png"><img src="media/Retention.svg"></div>
        <div class="titre">
          <p>Retention</p>
        </div>
        <div class="speedo">
          <svg>
            <circle cx="2rem" cy="2rem" r="2rem"></circle>
            <circle cx="2rem" cy="2rem" r="2rem" style="animation: circle1 1s forwards;"></circle>
          </svg>
          <span>75%</span>
        </div>
      </a>
      <a class="card" href="./Apps_Upsell.php">
        <div class="png"><img src="media/Apps_upsell.svg"></div>
        <div class="titre">
          <p>Apps</br> Upsell</p>
        </div>
        <div class="speedo">
          <svg>
            <circle cx="2rem" cy="2rem" r="2rem"></circle>
            <circle cx="2rem" cy="2rem" r="2rem"style="animation: circle2 1s forwards;"></circle>
          </svg>
          <span>25%</span>
        </div>
      </a>
      <a class="card" href="./International.php">
        <div class="png"><img src="media/International.svg"></div>
        <div class="titre">
          <p>International</p>
        </div>
        <div class="speedo">
          <svg>
            <circle cx="2rem" cy="2rem" r="2rem"></circle>
            <circle cx="2rem" cy="2rem" r="2rem" style="animation: circle3 1s forwards;"></circle>
          </svg>
          <span>50%</span>
        </div>
      </a>
      <a class="card" href="./Partners&Alliances.php">
        <div class="png"><img src="media/Partners&Alliances.svg"></div>
        <div class="titre">
          <p>Partners</br> & Alliances</p>
        </div>
        <div class="speedo">
          <svg>
            <circle cx="2rem" cy="2rem" r="2rem"></circle>
            <circle cx="2rem" cy="2rem" r="2rem" style="animation: circle4 1s forwards;"></circle>
          </svg>
          <span>90%</span>
        </div>
      </a>
      <a class="card" href="./Product_Sales.php">
        <div class="png"><img src="media/Product_Sales.svg"></div>
        <div class="titre">
          <p>Product</br> Sales</p>
        </div>
        <div class="speedo">
          <svg>
            <circle cx="2rem" cy="2rem" r="2rem"></circle>
            <circle cx="2rem" cy="2rem" r="2rem" style="animation: circle5 1s forwards;"></circle>
          </svg>
          <span>35%</span>
        </div>
      </a>

      <!--In a second time I will do a php and sql algorithm to make the speedo turn-->
    </div>
  </section>

  <section id="height">
    <h1 class="under">Underpinned by FastTrack Recruitment</h1>
    <section class="graph">
      <div style="width: 75%;">
        <canvas id="columnchart"></canvas>
      </div>
      <p>
        For more information contact: <br>
        @ Manuela Stark
      </p>
      <script>
        var ctx = document.getElementById('columnchart').getContext('2d');
        var gradientStroke = ctx.createLinearGradient(0, 0, 0, 550);
        gradientStroke.addColorStop(0, "#fff1eb");
        gradientStroke.addColorStop(1, "rgb(179, 209, 200)");
        var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, "rgb(77, 97, 101)");
        gradientStroke2.addColorStop(1, "#13547a");
        var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'bar',

          // The data for our dataset
          data: {
            labels: ['Target', 'Joiners Confirmed', 'Offers', 'In Progress', 'Open'],
            datasets: [{
                label: 'Q1',
                backgroundColor: gradientStroke2,
                borderColor: gradientStroke2,
                data: [40, 8, 2, 10, 17]
              },
              {
                label: 'Q2',
                backgroundColor: gradientStroke,
                borderColor: gradientStroke,
                data: [10, 20, 9, 8, 10]
              }
            ]
          },
          // Configuration options go here
          options: {}
        });
      </script>
      <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill=" rgb(77, 97, 101)" fill-opacity="1" d="M0,160L80,160C160,160,320,160,480,176C640,192,800,224,960,240C1120,
        256,1280,256,1360,256L1440,256L1440,320L1360,320C1280,320,1120,320,960,
        320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
      </svg>
    </section>
  </section>

  <section id="leader">
    <h1>Sales Programs Leatherboard</h1>
    <h2>Leader of the Month</h2>
    <section>
      <table align="center" class="table table-sortable">
        <thead>
          <tr>
            <th colspan=2>Account <br> Manager</th>
            <th>Program</th>
            <th>Country</th>
            <th>Portfolio</th>
            <th>ACV <br> €M</th>
            <th>GM %</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="suit"><img src="./media/man_suit1.jpg"></td>
            <td>Ava Moore</td>
            <td>Retention</td>
            <td>France</td>
            <td>Cloud</td>
            <td>0.9</td>
            <td>30</td>
          </tr>
          <tr>
            <td class="suit"><img src="./media/man_suit2.jpg"></td>
            <td>Beth Petterson</td>
            <td>Apps</td>
            <td>Spain</td>
            <td>Smartspace</td>
            <td>1</td>
            <td>25</td>
          </tr>
          <tr>
            <td class="suit"><img src="./media/man_suit3.jpg"></td>
            <td>David Henderson</td>
            <td>International</td>
            <td>Italy</td>
            <td>Workspace</td>
            <td>6</td>
            <td>25</td>
          </tr>
          <tr>
            <td class="suit"><img src="./media/man_suit4.jpg"></td>
            <td>James Smith</td>
            <td>Product</td>
            <td>United-Kindom</td>
            <td>Product</td>
            <td>3</td>
            <td>15</td>
          </tr>
        </tbody>
      </table>
    </section>

    <h2 class="titre2">Leader of the Year</h2>
    <section class="leader" id="year">
      <table align="center" class="table table-sortable">
        <thead>
          <tr>
            <th colspan=2>Account <br> Manager</th>
            <th>Program</th>
            <th>Country</th>
            <th>Portfolio</th>
            <th>ACV <br> €M</th>
            <th>GM %</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="suit"><img src="./media/man_suit1.jpg"></td>
            <td>Ava Moore</td>
            <td>Retention</td>
            <td>France</td>
            <td>Cloud</td>
            <td>0.9</td>
            <td>30</td>
          </tr>
          <tr>
            <td class="suit"><img src="./media/man_suit2.jpg"></td>
            <td>Beth Petterson</td>
            <td>Apps</td>
            <td>Spain</td>
            <td>Smartspace</td>
            <td>1</td>
            <td>25</td>
          </tr>
          <tr>
            <td class="suit"><img src="./media/man_suit3.jpg"></td>
            <td>David Henderson</td>
            <td>International</td>
            <td>Italy</td>
            <td>Workspace</td>
            <td>6</td>
            <td>25</td>
          </tr>
          <tr>
            <td class="suit"><img src="./media/man_suit4.jpg"></td>
            <td>James Smith</td>
            <td>Product</td>
            <td>United-Kindom</td>
            <td>Product</td>
            <td>3</td>
            <td>15</td>
          </tr>
        </tbody>
      </table>
    </section>
    <p>
      For more information contact: <br>
      @ Cedric Chevalier
    </p>
  </section>
  <script src="./tablesort.js"></script>
</body>


<footer>
  <ul id="social">
    <li><a href="https://www.facebook.com/pages/Getronics/183361051800586/" target="_blank"><svg class="icon facebook">
          <use href="media/icons.svg#facebook"></use>
        </svg></a></li>
    <li><a href="https://www.linkedin.com/company/getronics/" target="_blank"><svg class="icon linkedin">
          <use href="media/icons.svg#linkedin"></use>
        </svg></a></li>
    <li><a href="https://www.youtube.com/channel/UCfEFIFxLdxxhMN-Eaa6pXVA" target="_blank"><svg class="icon youtube">
          <use href="media/icons.svg#youtube"></use>
        </svg></a></li>
    <li><a href="https://twitter.com/Getronics" target="_blank"><svg class="icon twitter">
          <use href="media/icons.svg#twitter"></use>
        </svg></a></li>
  </ul>

  <p>Design and code by William WEILL</p>

  <div id="acceuil">
    <a href="#menu" id="acceuil2">
      <svg class="icon arrow">
        <use href="media/icons.svg#arrow"></use>
      </svg>
    </a>
  </div>
</footer>

</html>