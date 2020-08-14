<!DOCTYPE html>
<html>
<head>
	<title>Sri Varun PHP</title>
</head>
<body>
<h1>Sri Varun PHP</h1>
<h2>ASCII ART :</h2>
<h2>
<pre>
         ********
        *        *
       *
      *********
             *
    *       *
     *******       


</pre>
</h2>
</body>
</html>
<?php

	echo "<h2>the sha256 hash of  \"Sri Varun\"  is :</h2> \n<br><br>";
	print hash('sha256', 'Sri Varun');

 ?>