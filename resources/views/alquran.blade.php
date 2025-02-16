<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al Quran acak</title>
</head>
<body align="center">
    <h3>{{ $ayat ['info']['surat']['nama']['ar'] }}</h3>
    <h5>{{ $ayat ['info']['surat']['nama']['id'] }}</h5>

    <p>{{ $ayat ['ayat']['arab'] }}</p>

    <p>{{ $ayat ['ayat']['latin'] }}</p>
    
    <p>{{ $ayat ['ayat']['text'] }}</p>
</body>
</html>