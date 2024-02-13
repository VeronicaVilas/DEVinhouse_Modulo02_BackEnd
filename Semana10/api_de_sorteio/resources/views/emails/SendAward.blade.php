<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de prêmios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #e44d26;
        }

        p {
            color: #333333;
        }

        .coupon-code {
            display: inline-block;
            padding: 10px;
            background-color: #e44d26;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            border-radius: 4px;
            margin-top: 20px;
        }

        .validity {
            color: #999999;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌟 Sorteio Especial! Você ganhou um prêmio incrível!! 🌟</h1>
        <p>{{$client->name}},</p>
        <p>Você está com sorte! Estamos animados em anunciar que você é o ganhador(a) do nosso sorteio especial de cupons🎁</p>
        <div class="coupon-code">Valor do Cupom: {{$award->value}}</div>
        <div class="coupon-code">Local do Cupom: {{$award->local}}</div>
        <p>Utilize este código no momento do pagamento e aproveite o desconto!</p>

        <p>Aproveite seu desconto e siga-nos nas redes sociais</p>
    </div>
</body>
</html>
