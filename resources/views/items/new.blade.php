<!DOCTYPE html>
<html lang=hr>
    <head>
		<meta charset="utf-8">
		<title>Algebra blog</title>
    </head>
    <body>
		
			<form method="post" action="">
				{{ csrf_field() }}
				Naslov: <br />
				<input type="text" name="title" />
				<br /><br />
				
				Sadržaj: <br />
				<textarea name="content"> </textarea>				
				<br /><br />
				
				<input type="submit" value="Spremi" />
		
	</body>
</html>