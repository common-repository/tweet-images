<!DOCTYPE html>
<html>
<head>
<title>Test Form for Tweet Images</title>
</head>
<body>

<p>N.B: Add your api endpoint to the form action attribute.</p>

<form action="<!-- ADD YOUR API ENDPOINT HERE -->" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	
	<p><label for="file">File</label><input type="file" name="media" value=""></p>
	
	<p><label for="message">Message</label><input type="text" name="message" value=""></p>
	
	<p><input type="submit" value="Continue &rarr;"></p>
</form>

</body>
</html>
