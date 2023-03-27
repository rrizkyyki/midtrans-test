<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Params</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
        }
        .title {
            display: flex;
            justify-content: center;
            margin-top: 10vh;
        }
    </style>
</head>
<body>
    <div class="title">
        <h4>Customer Details</h4>
    </div>
    <div class="center">
        <form action="/callback-js" method="get">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name">
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <br>
            <label for="phone_number">Nomor</label>
            <input type="number" name="phone_number" id="phone_number">
            <br>
            <br>
            <button type="submit" style="width: 100%;">Kirim</button>
        </form>
    </div>
</body>
</html>