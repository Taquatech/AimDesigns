<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APMS</title>
    <script src="js/process.js"></script>
    <script src="js/chart.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bellota+Text|Quicksand|Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/w3.css">
    <link href="css/mobiriseicons/24 px/mobirise/style.css" rel="stylesheet" />
    <link href="css/FA5/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!-- Main Body -->
    <div class="aprs-mainbody w3-row w3-card-4">
    <!-- Nav Container -->
       <div class="w3-col m2 aprs-indcont w3-card">
           <h1 class="aprs-title">AKSU Payroll</h1>
        <ul class="aprs-mainnav">
           <li><a href="#" class="aprs-active"><i class="mbri-home w3-text-white"></i><span>Dashboard</span></a></li>
           <li><a href="#" class=""><i class="mbri-plus w3-text-indigo"></i><span>New</span></a></li>
           <li><a href="#" class=""><i class="mbri-clock w3-text-pink"></i><span>Recent</span></a></li>
        </ul>
        <ul class="aprs-mainnav">
           <li><a href="#" class=""><i class="mbri-logout w3-text-cyan"></i><span>Logout</span></a></li>
           <li><a href="#" class=""><i class="mbri-setting w3-text-orange"></i><span>Settings</span></a></li>
        </ul>
       </div>
       <!-- Nav Container -->
       <!-- Content Container -->
       <div class="w3-col m10 aprs-indcont w3-card w3-light-grey">
       <!-- Title Box -->
       <div class="aprs-content-title w3-card">
          <div class="aprs-content-title-left"><i class="mbri-home aprs-text-color"></i><span>Dashboard</span></div>
          <div class="aprs-content-title-right"><i class="mbri-alert aprs-message"></i><img src="images/user.jpg" alt="User" class="w3-card" /></div>
          <div class="aprs-clearFloat"></div>
       </div>

       <!-- Content Body -->
       <div class="aprs-content-body">
           <div class="aprs-largebox w3-example">
              <div class="w3-row">
                  <div class="w3-col m5">
                     <!-- Content Title -->
                     <div class="aprs-box-title">
                        <i class="fas fa-caret-right"></i><span>Totals</span><span>(for this year)</span>
                  <!-- Custom Drop Down -->
                     <div class="custom-select aprs-select">
                        <select name="totals-month" onchange="" id="totals-month">
                        <?php  foreach(["Month","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"] as $ind=>$mt)echo '<option value="'.$ind.'" '.($ind==date('m')?"selected":"").'>'.$mt.'</option>';  ?>
                        </select>
                     </div>
                  </div>

                  <!-- Content Body Inner-->
                  <div class="aprs-content-body-inner">
                  <div>
                     <div class="aprs-inline-block w3-margin-right">
                     <div class="aprs-simple-header">deductions</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel">300,000,000</div>
                     </div>
                     </div>
                     <div class="aprs-inline-block">
                     <div class="aprs-simple-header">allowances</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel down">400,000,000</div>
                     </div>
                     </div>
                  </div>
                  <div class="w3-margin-top">
                     <div class="aprs-inline-block w3-margin-right">
                     <div class="aprs-simple-header">Basic</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel down">300,000,000</div>
                     </div>
                     </div>
                     <div class="aprs-inline-block">
                     <div class="aprs-simple-header">Net</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel">400,000,000</div>
                     </div>
                     </div>
                  </div>

                  </div>
                  </div>
                  <div class="w3-col m7">
                  <div class="aprs-box-title"><i class="fas fa-caret-right"></i><span>Statistics</span><span>(in Naira)</span>
                  <div class="custom-select aprs-select">
                        <select name="chart-year" onchange="" id="chart-year">
                        <?php  echo '<option value="0" >Year</option>';for($ind=date('Y');$ind > date('Y')-10; $ind--)echo '<option value="'.$ind.'" '.($ind==date('Y')?"selected":"").'>'.$ind.'</option>';  ?>
                        </select>
                     </div>
               </div>

               <div class="aprs-content-body">
               <canvas id="myChart" width="400" height="220">Chart Not Available, Not Supported on your Browser</canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');

Chart.defaults.global.defaultFontFamily = "Quicksand, sans-serif";
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN','JUL','AUG','SEP','OCT','NOV','DEC'],
        datasets: [{
            label: 'Allowances',
            data: [300000, 230000, 810003, 100000,765000, 300999,700000, 530000, 70003, 200000,665000, 800999],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },
        {
            label: 'Deductions',
            data: [700000, 530000, 70003, 200000,665000, 800999,300000, 230000, 810003, 100000,765000, 300999],
            backgroundColor: [
               'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
               </div>
                  </div>
               </div>
              
           </div>
           <!-- Second Row -->
           
       <div class="w3-row w3-margin-top w3-margin-bottom">
        <div class="w3-col m7">
            <div class="aprs-round-box w3-white w3-card">
               <!-- Content Title -->
               <div class="aprs-box-title">
                        <i class="fas fa-caret-right"></i><span>Employee</span><span>(Current)</span>
                  </div>
               <div class="w3-row-padding w3-margin-top">
               <div class="w3-col m8">
               <canvas id="chart-area" width="300">AAAA</canvas>
                   <script>
                      var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						2305,
						1426
					],
					backgroundColor: [
						'rgb(40, 148, 13)',
						'rgb(255, 140, 0)'
					],
					label: ''
				}],
				labels: [
					'Male',
					'Female'
				]
			},
			options: {
            cutoutPercentage:70,
				responsive: true,
				legend: {
               display: false,
					position: 'top'
				},
				title: {
					display: false,
					text: 'Chart.js Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
      };
      var ctx = document.getElementById('chart-area').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);
                   </script>
                </div>
                <div class="w3-col m4">
                <div>
                     <div class="aprs-block w3-margin-right">
                     <div class="aprs-simple-header"><span class="aprs-color aprs-width-20px aprs-height-10px aprs-inline-block w3-margin-right aprs-vertical-align-middle w3-card"></span><span class="aprs-inline-block aprs-vertical-align-middle">male</span></div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel">2305</div>
                     </div>
                     </div>
                     <div class="aprs-block">
                     <div class="aprs-simple-header"><span class="aprs-color2 aprs-width-20px aprs-height-10px aprs-inline-block w3-margin-right aprs-vertical-align-middle w3-card"></span><span class="aprs-inline-block aprs-vertical-align-middle">female</span></div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel down">1426</div>
                     </div>
                     </div>
                  </div>
                </div>

                
</div>
 <!-- Content Body Inner-->
 <div class="aprs-content-body-inner">
                 
                     <div class="aprs-inline-block w3-margin-right">
                     <div class="aprs-simple-header">ICT</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel">123</div>
                     </div>
                     </div>
                     <div class="aprs-inline-block">
                     <div class="aprs-simple-header">VC Office</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel down">432</div>
                     </div>
                     </div>
                  
                  
                     <div class="aprs-inline-block w3-margin-right">
                     <div class="aprs-simple-header">Bursary</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel down">214</div>
                     </div>
                     </div>
                     <div class="aprs-inline-block">
                     <div class="aprs-simple-header">Lecturer</div>
                     <div class="aprs-select-plain">
                        <div class="aprs-display-sel">340</div>
                     </div>
                     </div>
                  </div>

                 
                 
            </div> 
        </div>
<!-- Mini Recent -->
        <div class="w3-col m5">
        <div class="aprs-round-box w3-white w3-card">
          <!-- Content Title -->
          <div class="aprs-box-title">
                        <i class="fas fa-caret-right"></i><span>Recent</span><span></span>
                  </div>
                  <ul class="w3-ul w3-margin-top aprs-recent-bx w3-hoverable">
<li class="payroll pointer"><i class="fas fa-caret-right"></i><span>June 2020 - Payrow</span></li>
<li class="worksheet pointer"><i class="fas fa-caret-right"></i><span>June Pre Work</span></li>
<li class="worksheet pointer"><i class="fas fa-caret-right"></i><span>June Pre Work</span></li>
<li class="worksheet pointer"><i class="fas fa-caret-right"></i><span>June Pre WorkJune Pre Work</span></li>
<li class="worksheet pointer"><i class="fas fa-caret-right"></i><span>hjdjf fhjfjh</span></li>
   </ul>
        </div>
        </div>

       </div>
       <!-- Second Row -->
       </div>

       
       </div>
       <!-- Content Container -->
    </div>
<!-- Main Body -->
</body>
</html>