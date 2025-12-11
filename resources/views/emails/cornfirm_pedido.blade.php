<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmição de Pedido</title>

</head>
<body style="font-family: Arial, Helvetica, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2 style="color: #007bff; text-align: center;">Olá, {{ $serviceRequest->clientName }}</h2>
        <p>Agradecemos o seu pedido dos nossos serviços. A sua solicitação foi recebida e processada com sucesso.</p>
        <p>Em anexo, voçê encontrará um relatório detalhado do seu pedido em formato PDF.</p>

        <h3 style="color: #555;">Detalhes do Pedido</h3>
        <ul style="list-style-type: none; padding: 0;">
            <li><strong>Serviço:</strong> {{ $serviceRequest->serviceName }}</li>
            <li><strong>Preço Base:</strong> {{ number_format($serviceRequest->price, 2, ',','.') }} MZN</li>
            <li><strong>IVA (16%):</strong> {{ number_format($serviceRequest->iva, 2, ',','.') }} MZN</li>
            @if($serviceRequest->couponCode) 
                <li><strong>Cupom:</strong> {{ $serviceRequest->couponCode }}</li>
            @endif
            <li><strong>Preço Total:</strong> {{ number_format($serviceRequest->totalPrice, 2, ',','.') }} MZN</li>
        </ul>

        <p>Entraremos em contacto em breve para discutir os próximos passos.</p>
        <p>Atenciosamente, <br>A Equipa NeveStar</p>
    </div> 
    
</body>
</html>