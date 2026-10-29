
<?php

$produtos = [
    [
        "nome" => "Okinawa",
        "preco" => 1,99,
        "estoque" => 1
    ],
    [
        "nome" => "Hokusai",
        "preco" => 3,90,
        "estoque" => 80
    ],
    [
        "nome" => "Ayako",
        "preco" => 2,50,
        "estoque" => 0
    ],
    [
        "nome" => "Relógio Sharingan — Naruto",
        "preco" => 9,99,
        "estoque" => 11
    ]
];

function formatarPreco(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}

$total = 0;

foreach ($produtos as $item) {
    $total += $item["preco"] * $item["estoque"];
}

$quantidade = count($produtos);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <p>listinha básica e simples</p>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Situação</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produtos as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item["nome"]) ?></td>

                    <td><?= formatarPreco($item["preco"]) ?></td>

                    <td><?= $item["estoque"] ?></td>

                    <td>
                        <?php if ($item["estoque"] > 0): ?>
                            Disponível
                        <?php else: ?>
                            Esgotado
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Resumo</h3>

    <p>Produtos cadastrados: <?= $quantidade ?></p>

    <p>Valor total em estoque: <?= formatarPreco($total) ?></p>

</body>
</html>
