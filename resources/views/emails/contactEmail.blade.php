<!DOCTYPE html>
<html>
<head>
    <title>marekgacekdev.pl</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>

    <p>Od: {{ $details['name'] }}</p>

    <p>Email: <a href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a></p>

    <p>Telefon: <a href="tel:{{ $details['phone'] }}">{{ $details['phone'] }}</a></p>

    <p>Wiadomość: {{ $details['message'] }}</p>
   
    
</body>
</html>