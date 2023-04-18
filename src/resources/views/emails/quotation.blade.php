<head>
    <title>Pedido</title>
</head>
<body>
    <h1>Pedido de cotação realizado</h1>
    <p>O cliente <strong>{{ $details->email }}</strong> realizou um pedido.</p>
    <p>O pedido é o seguinte:</p>
    <ul>
        @foreach ($details->products as $product)
            <li>{{ $product['nome'] }} - {{ $product['quantity'] }}</li>
        @endforeach
    </ul>
    <p>O endereço do cliente é <strong>{{ $details->endereco }}, {{ $details->cidade }}, {{ $details->estado }}, {{ $details->cep }}</strong></p>
    <p> Telefone {{ $details->telefone }}</p>
</body>