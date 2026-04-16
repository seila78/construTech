<?php
//---------------------------------------FINANCEIRO--------------------------------------------

$tipos = [
    'compra' => 'Compra',
    'venda'  => 'venda'
];//fazer filtro dps

//$_POST[''];


$_SESSION['extrato'] = 
    $extrato = [
        [
        /*  'id'        =>,
            'valor'     =>,
            'tipo'      =>,
            'data'      =>
            'produto'   =>
            'quantidade =>'*/
        ]
    ];

if (empty($extrato['tipo'] < 0)){
    $extrato['tipo'] = 'compra'
;}
elseif(empty($extrato['tipo'] )){
    $extrato['tipo'] = 'venda'
;}


$subtotal = 0;

foreach($extrato as $transacao){
 $subtotal += $transacao['valor'];
}

//solicitar produtos ao fornecedor
/*$comprar = $_POST['produto'];*/

?>