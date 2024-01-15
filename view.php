<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
	<!-- TODO: add a form for the user to play the game -->
    <form action="/LanguageGame.php" method="get">
    <label for="input">Word To Translate:</label>
    <input type="text" id="word" name="word"><br><br>
    <label for="input">Your Translation:</label>
    <input type="text" id="user-answer" name="aser-answer"><br><br>
    <input type="submit" value="Submit"><br><br>
    <output> </output>
    </form>
</body>
</html>