<!doctype html>
<html lang="en">
<head>
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><strong>Asunto: {{ $msg['subject'] }}</strong></p>
    <p><strong>Contenido: </strong>{{ $msg['content'] }}</p>
</body>
</html>
