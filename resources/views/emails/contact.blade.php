<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d&rsquo;une prise de contact avec les éléments suivants :</p>
    <ul>
        <li><strong>Nom</strong>:{{ $contact['nom'] }}</li>{{-- variable contact dans la classe  emails/contact--}}
        <li><strong>Email</strong>:{{ $contact['email'] }}</li>
        <li><strong>Message</strong>:{{ $contact['texte'] }}</li>
    </ul>
</body>
</html>