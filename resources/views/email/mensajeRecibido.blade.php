<!DOCTYPE html>
<html>
<head>
	<title>Dabliu.inc | Mensaje Recibido </title>
</head>
<body>
	<p><strong>Remitente:</strong></p>
	{{ $msg['name'] }}<br>
	{{ $msg['email'] }}
	<p> <strong>Asunto:</strong></p>
	{{ $msg['subject'] }}
	<p> <strong>Contenido:</strong></p>
	{{ $msg['content'] }}
</body>
</html>

