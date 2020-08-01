
<?php


$data=file_get_contents('https://api.covid19api.com/summary ');

$worldData=json_decode($data,true);
$totalCountry= count($worldData['Countries']);

	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title > WORLDWIDE COVID 19</title>
	<link rel="shortcut icon" type="image/png" href="images.jpg">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <style>
  	
  	*{
  		font-family: 'Roboto', sans-serif;
  		/*background-color: #fff;*/
   	}


  </style>
</head>
<body >
	
	<div class="main " style="background:orange;">
		

 			<div  style="height:83px;  ">
			
			<h3 class=" p-3 pd-3 text-center text-uppercase "  style="background-color:#2c3e50; color:white; padding-bottom: 7px;"  >covid-19 live update </h3>
			
		


			</div>

    
  </div>
  				<h3 class="text-uppercase m-0 p-3 text-center" style="background-color: #FFE53B;
background-image: -webkit-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: -moz-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: -o-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
">total covid-19 cases  Globally</h3>

<div class="table-responsive">
			<table class="table text-center table-striped table-hover" >
				<thead>
				<tr>
					<!-- <th class="text-capitalize "  style="background-color:white;color:#17A2B8; ">LastUpdateTime</th> -->		
							
					<th class="text-capitalize " style="background-color:white;color:red; ">TotalConfirmed</th>		
				
					<th class="text-capitalize " style="background-color:white;color:#007bff; ">TotalActive</th>
				

					<th class="text-capitalize " style="background-color:white;color:#28a745; ">TotalRecovered</th>
					<th class="text-capitalize "style="background-color:white;color:6C757D; ">TotalDeaths</th>



				<tr>
					<!-- <td class="bg-info " style="color:white;"><?php echo $worldData['Global'][0]['lastupdatedtime'] ?></td> -->
					
					<td class="bg-danger" style="color:white;"><?php echo $worldData['Global']['TotalConfirmed'] ?></td>

					 <td class="bg-primary" style="color:white;"><?php  $active=$worldData['Global']['TotalConfirmed']-$worldData['Global']['TotalRecovered']-$worldData['Global']['TotalDeaths'];
					 		echo $active;
					  ?></td> 

					<td class="bg-success" style="color:white;"><?php echo $worldData['Global']['TotalRecovered'] ?></td>

					<td class="bg-secondary" style="color:white;"><?php echo $worldData['Global']['TotalDeaths'] ?></td>

			    </tr>
				</thead>
			</table>	
</div>

	<h3 class="text-uppercase p-3 text-center" style="background-color: #21D4FD;
background-image: -webkit-linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
background-image: -moz-linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
background-image: -o-linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
background-image: linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);

"> Country-wise covid-19 cases </h3>

<input class="p-3  text-center w-100" type="text"  placeholder="Enter Country Name To Search.."id="Usearch" style="border:3px solid red; border-radius: 4px; font-weight: bold; color: green; font-size: 1.2rem; "  onkeyup="search()" >

		<div class="table-responsive">
			
			<table class="table table-striped text-center table-hover" id="WTable" >
				<thead >
				<tr>
					 <th class="text-capitalize "  style="background-color:white;color:#17A2B8; ">LastUpdateTime</th> 		
					<th class="text-capitalize"  style="background-color:white;color:#f39c12; ">Country</th>		
					<th class="text-capitalize " style="background-color:white;color:red; ">TotalConfirmed</th>		
					<!-- <th class="text-capitalize " style="background-color:white;color:#007bff; ">Active</th> -->		
					<th class="text-capitalize " style="background-color:white;color:#28a745; ">TotalRecovered</th>
					<th class="text-capitalize "style="background-color:white;color:6C757D; ">TotalDeaths</th>		
			

				</tr>	



				
				<?php

					

				$i=0;	
				while ($i<$totalCountry) 
				{

						
					?>
			
			<tr>
					<td class="bg-info " style="color:white;"><?php echo $worldData['Countries'][$i]['Date'] ?></td> 


					<td  style="color:white; background-color: #f39c12"><?php echo $worldData['Countries'][$i]['Country'] ?></td>

					<td class="bg-danger" style="color:white;"><?php echo $worldData['Countries'][$i]['TotalConfirmed'] ?></td>

				<!-- 	<td class="bg-primary" style="color:white;"><?php echo $worldData['Countries'][$i]['active'] ?></td> -->

					<td class="bg-success" style="color:white;"><?php echo $worldData['Countries'][$i]['TotalRecovered'] ?></td>

					<td class="bg-secondary" style="color:white;"><?php echo $worldData['Countries'][$i]['TotalDeaths'] ?></td>

			</tr>




			<?php
				

					$i++;
				}
				

				?>
			</thead>
			</table>
		</div>
			

					<!-- Footer -->
			<footer class="page-footer font-small blue">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">
			    <a href="https://github.com/akm0786"target="_blank"> Developed By Abhishek Mishra </a>
			  </div>
			  <!-- Copyright -->

			</footer>
			<!-- Footer -->
	</div>


 <script>
 	
	const  search =() => {


	 	let USearch= document.getElementById('Usearch').value.toUpperCase(); 
	 	// console.log(USearch);

	 	let WTable=document.getElementById('WTable');
		
		let  RTable=WTable.getElementsByTagName('tr');


		for(var i=1;i<RTable.length;i++)
		{

		let tabledata=RTable[i].getElementsByTagName('td');
		// console.log(tabledata);

		if(tabledata)
			{

				let country=tabledata[1].textContent ||tabledata.innerHTML;

				if(country.toUpperCase().indexOf(USearch) >-1)
				{
					RTable[i].style.display="";
				}else{
					RTable[i].style.display="none";
				}
			}
		}


	}
 </script>
</body>
</html>
