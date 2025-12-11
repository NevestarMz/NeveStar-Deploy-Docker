<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Pedido de Serviço</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 2rem;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .header h1 {
            color: #1e40af;
            font-size: 2rem;
        }
        .section {
            margin-bottom: 1.5rem;
        }
        .section-title {
            font-size: 1.5rem;
            color: #4a5568;
            margin-bottom: 1rem;
            border-bottom: 2px solid #e228f0;
            padding-bottom: 0.5rem;
        }
        .item-list p {
            margin: 0.5rem;
            font-size: 1.5rem;
        }
        .item-list strong {
            color: #2d3748;
        }
        .total-price {
            font-size: 1.8rem;
            font-weight: bold;
            color: #007bff;
            margin-top: 1.5rem;
        }
        .footer{
            text-align: center;
            margin-top: 3rem;
            font-size: 0.9rem;
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="section">
        <h2 class="secton-title">Informações do Cliente</h2>
        <div class="item-list">
            <p><strong>Nome:</strong> {{ $requestData['clientName'] }}</p>
            <p><strong>E-mail:</strong> {{ $requestData['clientEmail'] }}</p>
            <p><strong>Telefone:</strong> {{ $requestData['clientPhone'] }}</p>
            @if(isset($requestData['comment']))
                <p><strong>Comentário:</strong> {{ $requestData['comment'] }}</p>
            @endif
        </div>
    </div>
    <div class="section">
        <h2 class="secton-title">Inventário do Serviço</h2>
        <div class="item-list">
            <p><strong>Serviço:</strong> {{ $requestData['serviceName'] }}</p>
            <p><strong>Preço Base:</strong> {{number_format($requestData['price'], 2, ',', '.') }} MZN</p>
            <p><strong>IVA(16%):</strong> {{number_format($requestData['iva'], 2, ',', '.') }} MZN</p>
            @if(isset($requestData['couponCode']))
                <p><strong>Código de cupom:</strong> {{ $requestData['couponCode'] }}</p>
            @endif
            <p><strong>Preço Total:</strong> {{number_format($requestData['totalPrice'], 2, ',', '.') }} MZN</p>

        </div>
    </div>
</body>
</html>