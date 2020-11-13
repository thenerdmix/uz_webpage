<html>

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Link utili </title>

<style>
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

</head>

<body>

<div class="menu">
<?php include 'sidebar.php';?>
</div>

<h1>Qualche link utile</h1>
<p>In realtà questa lista di link utili mi è comoda come enorme bookmark. </p>

<div class="row">

	<div class="column">
		<p><b>cp</b>: 
			<a href="https://www.geeksforgeeks.org/">gg</a>,
			<a href="https://github.com/rossanoventurini/CompetitiveProgramming">venturini</a>,
			<a href="https://cp-algorithms.com/">cp algorithms</a>
		</p>
		<p><b>google</b>: 
			<a href="https://mail.google.com/">gmail</a>,
			<a href="https://drive.google.com/">drive</a>
		</p>
	</div>

	<div class="column">
		<p><b>fisica</b>: 
			<a href="http://kirkmcd.princeton.edu/examples/">McDonald</a>,
			<a href="https://www.ioc.ee/~kalda/ipho/rec-list.html">Kalda</a>,
			<a href="https://stagefisica.sns.it/">Stage Pisa</a>
		</p>
	</div>

	<div class="column">
		<p><b>sns</b>: 
			<a href="https://spazi.sns.it/schedule.php?&sid=31">pranzo</a>,
			<a href="https://spazi.sns.it/schedule.php?&sid=32">cena</a>,
			<a href="https://lavatrici.zion.sns.it/">lavatrici fermi</a>
		</p>
	</div>


</div>

</body>
</html>


