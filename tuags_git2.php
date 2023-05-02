<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Greetings and Introduction</title>
	<style>
		body {
			background-color: #1a1a1a;
			color: #fff;
			font-family: Arial, sans-serif;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 20px;
			text-align: center;
			opacity: 0;
			animation: fade-in 1s ease-out forwards;
		}

		img {
			width: 200px;
			height: 200px;
			border-radius: 50%;
			object-fit: cover;
			margin-bottom: 20px;
			opacity: 0;
			animation: fade-in 1s ease-out forwards;
		}

		button {
			background-color: #0077c2;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			opacity: 0;
			animation: fade-in 1s ease-out forwards;
		}

		button:hover {
			background-color: #005ea6;
		}

        .hidden {
            display: none;
        }

		p {
			font-size: 20px;
			margin-top: 20px;
			text-align: center;
			opacity: 0;
			animation: fade-in .5s ease-out forwards;
		}

		@keyframes fade-in {
			from {
				opacity: 0;
				transform: translateY(-20px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}
	</style>
</head>
<body>
	<div class="container">
        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Profile picture">
        <h1>Hello!</h1>
        <button onclick="showIntroduction()">Click me</button>
        <p class="hidden">My name is Jogi Dhimas Anditya and, I'm currently studying programming from Regarsport Bootcamp</p>
	</div>

	<script>
		function showIntroduction() {
            document.querySelector('h1').classList.add('hidden');
            document.querySelector('button').classList.add('hidden');
            document.querySelector('p').classList.remove('hidden');
        }
	</script>
</body>
</html>
