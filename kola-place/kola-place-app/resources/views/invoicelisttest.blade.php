<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoices List (test)</title>
</head>
<body>
    <div style="border; 3px solid black;">
    <h2>All Invoices</h2>
    @foreach($invoices as $invoice)
        <div style="background-color: gray; padding: 10px; margin: 10px;">
            <h3>{{ $invoice['id'] }}</h3>
        </div>
    @endforeach
    </div>
</body>
</html>