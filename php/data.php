<?php
session_start();
//---------------------------------------ESTOQUE-------------------------------------------- 

$categorias = [
    'bruto'       => 'Bruto',
    'ferramentas' => 'Ferramentas',
    'acabamento'  => 'Acabamento'
];//filtro de produto

$produtos = [
[
    'id'        => 1,
    'nome'      => 'Cimento CP II (50kg)',
    'categoria' => 'Bruto',
    'imagem'    => 'https://static.vecteezy.com/system/resources/thumbnails/053/814/416/small/versatile-bag-of-powdered-cement-for-construction-projects-on-transparent-background-png.png',
    'descricao' => 'Essencial para fundações, contrapisos e rebocos. Oferece alta durabilidade e resistência para a estrutura da sua obra. Vendido por saco.',
    'preco'     => 32.90,
    'quantidade' => 0
],
[
    'id'        => 2,
    'nome'      => 'Areia Média',
    'categoria' => 'Bruto',
    'imagem'    => 'https://cdn.awsli.com.br/2500x2500/2674/2674061/produto/343205423/23cddc63643264a219aa251e10b1a191-7l9s2ngs5t.jpg',
    'descricao' => 'Usada na mistura de argamassa e concreto. Possui granulometria ideal para um acabamento perfeito e estruturado. Vendida por metro cúbico (m³) ou saco.',
    'preco'     => 120.00,
    'quantidade' => 0
],
[
    'id'        => 3,
    'nome'      => 'Tijolo Baiano (8 furos)',
    'categoria' => 'Bruto',
    'imagem'    => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQU0R9pIa8OMjW-HeM6noDiw5NXsFxbj6yoQ&s',
    'descricao' => 'Utilizado para o levantamento de paredes. Garante leveza à estrutura e proporciona ótimo isolamento térmico e acústico. Vendido por unidade ou milheiro.',
    'preco'     => 0.95,
    'quantidade' => 0
],
[
    'id'        => 4,
    'nome'      => 'Pedra Brita 1',
    'categoria' => 'Bruto',
    'imagem'    => 'https://images.tcdn.com.br/img/img_prod/890200/pedra_britada_1_saco_d_4533_1_0b09d73490d2d3181ecd22787d2fdb13.png',
    'descricao' => 'Utilizada para fazer concreto para vigas e colunas. Componente fundamental para a sustentação e força da construção. Vendida por metro cúbico (m³).',
    'preco'     => 110.00,
    'quantidade' => 0
],
[
    'id'        => 5,
    'nome'      => 'Argamassa ACIII (20kg)',
    'categoria' => 'Bruto',
    'imagem'    => 'https://argamassasgrantex.com.br/imagens/produtos/aciii.webp',
    'descricao' => 'Usada para assentamento de porcelanatos e pisos em áreas externas. Oferece altíssima aderência e flexibilidade, ideal para locais com variações de temperatura.',
    'preco'     => 45.50,
    'quantidade' => 0
],
[
    'id'        => 6,
    'nome'      => 'Martelo de Unha 27mm',
    'categoria' => 'Ferramentas',
    'imagem'    => 'data:image/jpeg;base64,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',
    'descricao' => 'Ferramenta manual básica para carpintaria e uso geral. Possui cabo ergonômico e cabeça em aço forjado para maior precisão e durabilidade.',
    'preco'     => 39.90,
    'quantidade' => 0
],
[
    'id'        => 7,
    'nome'      => 'Furadeira de Impacto 700W',
    'categoria' => 'Ferramentas',
    'imagem'    => 'https://images.tcdn.com.br/img/img_prod/1029092/furadeira_de_impacto_1_2_700w_127_v_goodyear_4654641_1_7a019f812c6a838b26ed3c4c86f5c032.png',
    'descricao' => 'Ferramenta elétrica potente para perfurar alvenaria, madeira e metal. Acompanha empunhadura lateral e limitador de profundidade.',
    'preco'     => 249.90,
    'quantidade' => 0
],
[
    'id'        => 8,
    'nome'      => 'Trena de 5 metros',
    'categoria' => 'Ferramentas',
    'imagem'    => 'https://comach.cdn.magazord.com.br/img/2026/02/produto/7338/prancheta-3.png?ims=fit-in/290x290/filters:fill(fff)',
    'descricao' => 'Instrumento de medição essencial para qualquer obra. Conta com trava de segurança, presilha para cinto e fita em aço com marcações nítidas.',
    'preco'     => 22.00,
    'quantidade' => 0
],
[
    'id'        => 9,
    'nome'      => 'Alicate Universal 8"',
    'categoria' => 'Ferramentas',
    'imagem'    => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTWCufOZvA6FkZNv1N6q7rir8I7gZqaNt-uuDEB4U1vsexR5-hyR0_abHUoRCDYHceWWAVGyyBlJ3x4_xVAkXrWt5YfeuDVkefRhUqGvaPNNJjsjQR135lg-tk',
    'descricao' => 'Utilizado para cortar, apertar e dobrar cabos e arames. Fabricado em aço carbono com cabo isolado, garantindo segurança durante o manuseio elétrico.',
    'preco'     => 28.50,
    'quantidade' => 0
],
[
    'id'        => 10,
    'nome'      => 'Carrinho de Mão (65L)',
    'categoria' => 'Ferramentas',
    'imagem'    => 'https://cdn.ferramentaskennedy.com.br/storage/kennedy/1000/carrinho-de-mao-cinza-cacamba-metalica-65l-tramontina17727366130449381.png',
    'descricao' => 'Usado para transportar entulho, areia, cimento e ferramentas na obra. Caçamba metálica reforçada com pintura anticorrosiva e pneu de alta resistência.',
    'preco'     => 180.00,
    'quantidade' => 0
],
[
    'id'        => 11,
    'nome'      => 'Porcelanato Polido 60x60cm',
    'categoria' => 'Acabamento',
    'imagem'    => 'https://images.tcdn.com.br/img/img_prod/1111274/porcelanato_polido_60x60_carrara_dream_polido_gaudi_5031_1_32f548fbd16ae385040a18e9c0586528.png',
    'descricao' => 'Revestimento de alto padrão para pisos internos. Acabamento brilhante e bordas retificadas que trazem elegância e amplitude ao ambiente. Vendido por metro quadrado (m²).',
    'preco'     => 65.90,
    'quantidade' => 0
],
[
    'id'        => 12,
    'nome'      => 'Torneira de Bancada (Cozinha)',
    'categoria' => 'Acabamento',
    'imagem'    => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSN4RxlAB_IVOoOKw-p2j0wAardTfrMB1n8b0pAbqmWbhoiNwzk-ZCT-rhVeD9igIA0BABEKL_HP5LkXctnk4nbzeAJDJsd7x_6z8OVAm6uF6p6zYmTJC83',
    'descricao' => 'Metal sanitário para pias. Design moderno com bica móvel e mecanismo de vedação cerâmico, proporcionando maior praticidade e economia de água.',
    'preco'     => 85.00,
    'quantidade' => 0
],
[
    'id'        => 13,
    'nome'      => 'Tinta Acrílica Branca (18L)',
    'categoria' => 'Acabamento',
    'imagem'    => 'https://png.pngtree.com/png-clipart/20240921/original/pngtree-empty-paint-can-isolated-on-transparent-background-png-image_16057036.png',
    'descricao' => 'Tinta acrílica branca de alto rendimento para pintura de superfícies internas e externas. Proporciona excelente cobertura, acabamento impecável e alta resistência à ação do tempo e proliferação de mofo. Conta com fórmula de secagem rápida, baixo odor e fácil aplicação, sendo ideal para renovar, proteger e iluminar os ambientes com máxima durabilidade.',
    'preco'     => 180.00,
    'quantidade' => 0
],
[
    'id'        => 14,
    'nome'      => 'Vaso Sanitário com Caixa',
    'categoria' => 'Acabamento',
    'imagem'    => 'https://images.tcdn.com.br/img/img_prod/1131611/vaso_sanitario_com_caixa_acoplada_sabara_icasa_265_1_61a7566a92bfa8afb8d12c4a35e560ea.png',
    'descricao' => 'Vaso sanitário de porcelana para banheiros. Acompanha caixa acoplada com sistema de acionamento duplo, unindo design clean e eficiência no consumo de água.',
    'preco'     => 349.00,
    'quantidade' => 0
],
[
    'id'        => 15,
    'nome'      => 'Lâmpada LED 9W',
    'categoria' => 'Acabamento',
    'imagem'    => 'https://cdn.awsli.com.br/800x800/1224/1224098/produto/241013933/image-removebg-preview--60--avv1o7puww.png',
    'descricao' => 'Item de iluminação final para os ambientes. Garante alta eficiência energética, longa vida útil e excelente fluxo luminoso, substituindo perfeitamente as lâmpadas convencionais.',
    'preco'     => 9.50,
    'quantidade' => 0
],
];

//adicionar produtos


//remover produtos
/*unset()*/

//cria a sessão de produtos caso ela ainda não exista
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = $produtos;
}

//session_destroy();