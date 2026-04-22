<?php
session_start();
//---------------------------------------FINANCEIRO--------------------------------------------

$tipos = [
    'compra' => 'Compra',
    'venda'  => 'Venda'
];

$_SESSION['extrato'] = $extrato = [
    [
        'id'         => 1,
        'valor'      => 329.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-18',
        'produto'    => 'Cimento CP II (50kg)',
        'quantidade' => 10
    ],
    [
        'id'         => 2,
        'valor'      => 39.90,
        'tipo'       => 'venda',
        'data'       => '2026-04-19',
        'produto'    => 'Martelo de Unha 27mm',
        'quantidade' => 1
    ],
    [
        'id'         => 3,
        'valor'      => 1318.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-20',
        'produto'    => 'Porcelanato Polido 60x60cm',
        'quantidade' => 20
    ],
    [
        'id'         => 4,
        'valor'      => 85.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-21',
        'produto'    => 'Torneira de Bancada (Cozinha)',
        'quantidade' => 1
    ],
    [
        'id'         => 5,
        'valor'      => 120.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-22',
        'produto'    => 'Areia Média',
        'quantidade' => 1
    ],
    [
        'id'         => 6,
        'valor'      => 698.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-06',
        'produto'    => 'Vaso Sanitário com Caixa',
        'quantidade' => 2
    ],
    [
        'id'         => 7,
        'valor'      => 1645.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-06',
        'produto'    => 'Cimento CP II (50kg)',
        'quantidade' => 50
    ],
    [
        'id'         => 8,
        'valor'      => 95.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-07',
        'produto'    => 'Lâmpada LED 9W',
        'quantidade' => 10
    ],
    [
        'id'         => 9,
        'valor'      => 66.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-08',
        'produto'    => 'Trena de 5 metros',
        'quantidade' => 3
    ],
    [
        'id'         => 10,
        'valor'      => 950.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-09',
        'produto'    => 'Tijolo Baiano (8 furos)',
        'quantidade' => 1000
    ],
    [
        'id'         => 11,
        'valor'      => 550.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-10',
        'produto'    => 'Pedra Brita 1',
        'quantidade' => 5
    ],
    [
        'id'         => 12,
        'valor'      => 910.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-10',
        'produto'    => 'Argamassa ACIII (20kg)',
        'quantidade' => 20
    ],
    [
        'id'         => 13,
        'valor'      => 249.90,
        'tipo'       => 'venda',
        'data'       => '2026-04-11',
        'produto'    => 'Furadeira de Impacto 700W',
        'quantidade' => 1
    ],
    [
        'id'         => 14,
        'valor'      => 57.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-12',
        'produto'    => 'Alicate Universal 8"',
        'quantidade' => 2
    ],
    [
        'id'         => 15,
        'valor'      => 900.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-13',
        'produto'    => 'Carrinho de Mão (65L)',
        'quantidade' => 5
    ],
    [
        'id'         => 16,
        'valor'      => 540.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-14',
        'produto'    => 'Tinta Acrílica Branca (18L)',
        'quantidade' => 3
    ],
    [
        'id'         => 17,
        'valor'      => 1200.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-15',
        'produto'    => 'Areia Média',
        'quantidade' => 10
    ],
    [
        'id'         => 18,
        'valor'      => 988.50,
        'tipo'       => 'venda',
        'data'       => '2026-04-16',
        'produto'    => 'Porcelanato Polido 60x60cm',
        'quantidade' => 15
    ],
    [
        'id'         => 19,
        'valor'      => 170.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-17',
        'produto'    => 'Torneira de Bancada (Cozinha)',
        'quantidade' => 2
    ],
    [
        'id'         => 20,
        'valor'      => 199.50,
        'tipo'       => 'compra',
        'data'       => '2026-04-18',
        'produto'    => 'Martelo de Unha 27mm',
        'quantidade' => 5
    ],
    [
        'id'         => 21,
        'valor'      => 493.50,
        'tipo'       => 'venda',
        'data'       => '2026-04-19',
        'produto'    => 'Cimento CP II (50kg)',
        'quantidade' => 15
    ],
    [
        'id'         => 22,
        'valor'      => 475.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-20',
        'produto'    => 'Tijolo Baiano (8 furos)',
        'quantidade' => 500
    ],
    [
        'id'         => 23,
        'valor'      => 749.70,
        'tipo'       => 'compra',
        'data'       => '2026-04-20',
        'produto'    => 'Furadeira de Impacto 700W',
        'quantidade' => 3
    ],
    [
        'id'         => 24,
        'valor'      => 285.00,
        'tipo'       => 'compra',
        'data'       => '2026-04-21',
        'produto'    => 'Lâmpada LED 9W',
        'quantidade' => 30
    ],
    [
        'id'         => 25,
        'valor'      => 349.00,
        'tipo'       => 'venda',
        'data'       => '2026-04-22',
        'produto'    => 'Vaso Sanitário com Caixa',
        'quantidade' => 1
    ]
];

$subtotal = 0;

foreach($extrato as $transacao){
    $tipo = isset($transacao['tipo']) && in_array($transacao['tipo'], array_keys($tipos)) ? $transacao['tipo'] : 'venda';

    if ($tipo === 'compra') {
        $subtotal -= $transacao['valor'];
    } else {
        $subtotal += $transacao['valor'];
    }
}
?>