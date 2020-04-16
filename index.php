<html>


<body>

<?php
$title = $_POST["title"];

?>

<form action="../cgi-bin/story.py" method="post" id="usrform">
<input type="text" name="title" value="<?php echo $title;?>" placeholder="title"/>
<br>
<input type="text" name="filename" placeholder="filename"/>
<br>
<textarea rows="4" cols="50" name="caption" placeholder="caption"></textarea>
<br>
<input type="text" name="book" placeholder="book"/>
<br>
<input type="text" name="chapter" placeholder="chapter"/>
<br>
<input type="text" name="verse" placeholder="verse"/>
<br>
<input type="submit" value="submit"/>
</body>

</html>
