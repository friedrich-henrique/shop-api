<head>
    <title>Ajuda</title>
</head>
<body>
    <h1>Solicitação de assistência</h1>
    <p>O cliente <strong>{{ $details->email }}</strong> precisa de ajudas.</p>
    <p>O problema é o seguinte:</p>
    <h2>
        {{ $details->subject }}
    </h2>
    <p>
        {{ $details->message }}
    </p>
</body>