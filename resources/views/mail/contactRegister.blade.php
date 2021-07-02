<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>New Contact</title>
	<link rel="stylesheet" href="">
	<style>
		.card{
			position:relative;
			display: block;
			box-shadow: 0px 0px 5px 2px black;
			padding: 15px 20px;
			border-radius: 25px;
			width: 100%;
			max-width: 500px;
			margin:auto;
		}

		.card #logo_dacapri{
			max-width: 200px;
			display: block;
			margin:auto;
		}

		.card .lista{
			display: flex;
			flex-wrap: wrap;
			list-style: none;
		}

		.card .lista li{
			width:50%;
			margin:auto;
		}

		.card button{
			display:block;
			width:50px;
			height:50px;
			background-color: red;
		}

	</style>
</head>
<body>
	<div class="card">
		<img src="http://dacaprifactory.net/dist/img/logo.png" alt="Logo Dacapri" id="logo_dacapri">
		<h2 style="display:block; text-align: center">You have a new Client</h2>
		<hr>
		<p style="display:block; text-align: center;">A new prospect has subscribed to your Landing Landing</p>

		<p>{{ $contact['name'] }}</p>
		<strong>{{ $contact['email'] }}</strong>
		<p>{{ $contact['message'] }}</p>

	<a style="display:block; color:red; text-align: center; font-weight: bold;" href="http://dacaprifactory.net/">Da capri Plataform</a>

</body>
</html>
