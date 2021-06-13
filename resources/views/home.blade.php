<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prenotazioni</h1>

    <ul>
        @foreach($travels as $travel)
            <li>
                <div>Destination: {{$travel->destination}}</div>
                <div>Country: {{$travel->country}}</div>
                <div>Reservation Name: {{$travel->reservation_name}}</div>
                <div>Price: {{$travel->price}}</div>
                <div>Guests: {{$travel->number_person}}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>