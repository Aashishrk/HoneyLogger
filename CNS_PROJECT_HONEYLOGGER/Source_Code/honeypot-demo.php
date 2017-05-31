<!DOCTYPE html><html><head><meta charset="UTF-8">
<title>Simple PHP HoneyPot | Demo | { visibility: inherit; }</title>
<style type="text/css">
#honeypot {
visibility:hidden;
}
input:checked ~ br + #honeypot {
visibility:visible;
}
</style>
</head>
<body>
<h1>Simple PHP HoneyPot</h1>
<p><a href="honeypot.php">&laquo; Back To Tutorial</a></p>

<form method="post" action="honeypot-formmail.php">
	<label for="name">Name</label>
	<input type="text" id="name" name="name" placeholder="Name">
	<br>
	<label for="email">Email</label>
	<input type="text" maxlength="50" id="email" name="email" placeholder="Email">
	<br>
	<label for="toggle">Toggle HoneyPot On/Off</label>
	<input type="checkbox" id="toggle">
	<br>
	<input type="text" id="honeypot" name="honeypot" placeholder="Leave Blank If Human" autocomplete="off">
	<br>
	<input type="submit" name="submit" value="Submit" id="submit">
</form>

</body></html>
