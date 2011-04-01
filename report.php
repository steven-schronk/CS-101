<?php

echo '
<html>
<title>Problem Report Form</title>
<body>
<center><h2>Problem Report Form</h2></center>
<p>If you find a problem with content on this site, please fill out the form and we will have a look ASAP.</p>
<p>Your Name and E-mail address are optional and will only be used to notify you of the status of the request.</p>
<p>There is also no account signup needed to use this service.</p>

<center>
<table>
	<tr><td>Name (optional):</td><td><input name="name" type="text"></td></tr>
	<tr><td>E-mail (optional):</td><td><input name="email" type="text"></td></tr>
	<tr><td>Type of Problem:</td><td><select><option></option><option>Bad Link</option><option>Factual</option><option>Grammar</option><option>Spelling</option></select></td></tr>
</table>

<textarea name=comment  rows="15" cols="60" </textarea><br><br>

<button name="submit"><img src="http://opentextbook.info/icons/16x16/tick.png"> Submit</button>
<button name="reset" type="reset"><img src="http://opentextbook.info/icons/16x16/cross.png"> Reset</button>
</center>
</body>
</html>
';

?>
