<?php
$cidades = array(
    'sorocaba' => 'Sorocaba',
    'osasco' => 'Osasco',
    'riberao_preto' => 'Riberão Preto',
    'sao_paulo' => 'São Paulo',
    'sao_carlos' => 'São Carlos',
    'jundiai' => 'Jundiaí',
    'campinas' => 'Campinas',
    'guaira' => 'Guaíra',
    'amparo' => 'Amparo',
);
$cidade_index = isset($_GET['cidade']) ? $_GET['cidade'] : Yii::app()->session['cidade_index'];
$label_cidade = isset($cidades[$_GET['cidade']]) ? $cidades[$_GET['cidade']] : Yii::app()->session['cidade'];

$empresas['sorocaba'][] = array(
    'nome' => "Neri Lanches",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/9c9da3324/img/restaurante/104_mini.jpg",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 00:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/109_mini.jpg" title="Ticket Restaurante">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/94_mini.jpg" title="Visa Vale - Refeição">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Achei muito bom o serviço, nota dez!', 'Fernando Villas Boas' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas'),
    'concorrentes' => array('1', '5'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Vitamina',
            'casa_preco' => 'R$7,00',
            'concorrente' => 'R$7,20',
        ),
    )
);

$empresas['sorocaba'][] = array(
    'nome' => "Nigth Dog",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/a49e97b8a/img/restaurante/244_mini.jpg",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['sorocaba'][] = array(
    'nome' => "Vivitália Pizza Delivery",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/c53092137/img/restaurante/220_mini.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['sorocaba'][] = array(
    'nome' => "Pizzeria La Taverna",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/fac19986a/img/restaurante/9_mini.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

$empresas['sorocaba'][] = array(
    'nome' => "Bonga Delivery",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/cb7a29fb0/img/restaurante/195_mini.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Fellipe Leão' => 'Peço sempre nesse lugar, muito boa a marmita!', 'Marcel Popolim' => 'A marmita de sexta é sucesso! Recomendo!!!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos'),
    'concorrentes' => array('5'),
);

$empresas['sorocaba'][] = array(
    'nome' => "Cozinha Brasileira 2 Irmãos",
    'img' => "http://www.osascofacil.com.br/guia/fotos/1_75201321010logo.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Jacinto Pereira' => 'A marmita chega quentinha e na hora que a gente pede!', 'Clodoaldo de Souza' => 'Melhor dia é de sexta, pode pedir que boa!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'sobremesa' => 'Sobremesas'),
    'concorrentes' => array('4'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
    )
);

//SP
$empresas['sao_paulo'][] = array(
    'nome' => "Frango com Tudo",
    'img' => "http://www.biroska.com.br/frango/img/dummies/03.jpg?1386545762384",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['sao_paulo'][] = array(
    'nome' => "Siga La Vaca",
    'img' => "http://www.biroska.com.br/sigalavaca/img/dummies/03.jpg?1386546263608",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['sao_paulo'][] = array(
    'nome' => "Sweet Tomatoes",
    'img' => "http://pic.kekanto.com/pics/282/221282mg.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['sao_paulo'][] = array(
    'nome' => "Carlitos Pizzeria",
    'img' => "http://pizzariacarlitos.com.br/img_carlitos/logo.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

$empresas['sao_paulo'][] = array(
    'nome' => "Toca do Coelho",
    'img' => "http://cacheimg.guiamais.com.br/14591232/5.gif",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Fellipe Leão' => 'Peço sempre nesse lugar, muito boa a marmita!', 'Marcel Popolim' => 'A marmita de sexta é sucesso! Recomendo!!!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos'),
    'concorrentes' => array('5'),
);

$empresas['sao_paulo'][] = array(
    'nome' => "Grill 2000",
    'img' => "http://cacheimg.guiamais.com.br/14547341/68.gif",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Jacinto Pereira' => 'A marmita chega quentinha e na hora que a gente pede!', 'Clodoaldo de Souza' => 'Melhor dia é de sexta, pode pedir que boa!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'sobremesa' => 'Sobremesas'),
    'concorrentes' => array('4'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
    )
);

//OSASCO
$empresas['osasco'][] = array(
    'nome' => "Rincão Gaúcho Grill",
    'img' => "http://www.rincaogauchogrill.com.br/wp-content/uploads/2013/07/LOGO.10-1.jpg",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['osasco'][] = array(
    'nome' => "Embaixada Nordestina",
    'img' => "http://www.embaixadanordestina.com.br/img/embaixada_nordestina.png",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['osasco'][] = array(
    'nome' => "São Martinho Padaria e Pizzaria",
    'img' => "http://www.saomartinhopizzas.com.br/imagens/arte.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['osasco'][] = array(
    'nome' => "Pizzaria Paladares",
    'img' => "http://paladarespizzaria.com.br/images/logo.gif",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

$empresas['osasco'][] = array(
    'nome' => "China da Serra",
    'img' => "http://www.chinadaserra.com.br/images/header_china.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Fellipe Leão' => 'Peço sempre nesse lugar, muito boa a marmita!', 'Marcel Popolim' => 'A marmita de sexta é sucesso! Recomendo!!!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos'),
    'concorrentes' => array('5'),
);

$empresas['osasco'][] = array(
    'nome' => "Estância Churrascaria",
    'img' => "http://www.estanciachurrascaria.com.br/images/logo_estancia.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Jacinto Pereira' => 'A marmita chega quentinha e na hora que a gente pede!', 'Clodoaldo de Souza' => 'Melhor dia é de sexta, pode pedir que boa!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'sobremesa' => 'Sobremesas'),
    'concorrentes' => array('4'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
    )
);

//RIBEIRÃO PRETO
$empresas['riberao_preto'][] = array(
    'nome' => "Pizzaria Zio Totó",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/ziototomarechal.jpg&altura=250&largura=200",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['riberao_preto'][] = array(
    'nome' => "Rancho Grill Chopperia",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/rachogrillchoperia.JPG&altura=250&largura=200",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['riberao_preto'][] = array(
    'nome' => "Churrascaria Rodízio Gaúcho",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/rodiziogaucho.jpg&altura=250&largura=200",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['riberao_preto'][] = array(
    'nome' => "Cascata Pizza",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/Cascata___Vila_Virginia.JPG&altura=250&largura=200",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

//SÃO CARLOS
$empresas['sao_carlos'][] = array(
    'nome' => "Trem Bão Burger & Grill",
    'img' => "http://www.trembao.com.br/web-imgs/logo-top.png",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['sao_carlos'][] = array(
    'nome' => "Só Pasta Delivery",
    'img' => "http://www.sopastadelivery.com.br/Imagens/MenuTop/MenuTop_r3_c1.png",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['sao_carlos'][] = array(
    'nome' => "Fast Pizza Delivery",
    'img' => "http://fastpizza-delivery.com/imagens/fastpizza_logo.png",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['sao_carlos'][] = array(
    'nome' => "Pizza Express Delivery",
    'img' => "http://deliverymuch.com.br/media/pizza.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

//JUNDIAÍ
$empresas['jundiai'][] = array(
    'nome' => "Sal da Terra Restaurante",
    'img' => "http://saldaterrarestaurante.com.br/media/imagens/topo/topo-1.jpg?1294925047",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['jundiai'][] = array(
    'nome' => "Restaurante Brunholi",
    'img' => "https://s3-sa-east-1.amazonaws.com/carvajal-r2-dms/dms/83/55/4/45583.gif",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['jundiai'][] = array(
    'nome' => "Marmitaria du Cheff",
    'img' => "https://s3-sa-east-1.amazonaws.com/carvajal-r2-dms/dms/83/20/6/62083.JPG",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['jundiai'][] = array(
    'nome' => "Yakissoba Brasil",
    'img' => "https://s3-sa-east-1.amazonaws.com/carvajal-r2-dms/dms/29/17/6/61729.png",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

//CAMPINAS
$empresas['campinas'][] = array(
    'nome' => "Rincão Gaúcho Grill",
    'img' => "http://www.rincaogauchogrill.com.br/wp-content/uploads/2013/07/LOGO.10-1.jpg",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['campinas'][] = array(
    'nome' => "Pizzaria Paladares",
    'img' => "http://paladarespizzaria.com.br/images/logo.gif",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

$empresas['campinas'][] = array(
    'nome' => "Pizzaria Zio Totó",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/ziototomarechal.jpg&altura=250&largura=200",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['campinas'][] = array(
    'nome' => "Cascata Pizza",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/Cascata___Vila_Virginia.JPG&altura=250&largura=200",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

$empresas['campinas'][] = array(
    'nome' => "Fast Pizza Delivery",
    'img' => "http://fastpizza-delivery.com/imagens/fastpizza_logo.png",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['campinas'][] = array(
    'nome' => "Restaurante Brunholi",
    'img' => "https://s3-sa-east-1.amazonaws.com/carvajal-r2-dms/dms/83/55/4/45583.gif",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

//GUAÍRA
$empresas['guaira'][] = array(
    'nome' => "Embaixada Nordestina",
    'img' => "http://www.embaixadanordestina.com.br/img/embaixada_nordestina.png",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['guaira'][] = array(
    'nome' => "China da Serra",
    'img' => "http://www.chinadaserra.com.br/images/header_china.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Fellipe Leão' => 'Peço sempre nesse lugar, muito boa a marmita!', 'Marcel Popolim' => 'A marmita de sexta é sucesso! Recomendo!!!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos'),
    'concorrentes' => array('5'),
);

$empresas['guaira'][] = array(
    'nome' => "Rancho Grill Chopperia",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/rachogrillchoperia.JPG&altura=250&largura=200",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['guaira'][] = array(
    'nome' => "Trem Bão Burger & Grill",
    'img' => "http://www.trembao.com.br/web-imgs/logo-top.png",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['guaira'][] = array(
    'nome' => "Pizza Express Delivery",
    'img' => "http://deliverymuch.com.br/media/pizza.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);

$empresas['guaira'][] = array(
    'nome' => "Marmitaria du Cheff",
    'img' => "https://s3-sa-east-1.amazonaws.com/carvajal-r2-dms/dms/83/20/6/62083.JPG",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

//AMPARO
$empresas['amparo'][] = array(
    'nome' => "São Martinho Padaria e Pizzaria",
    'img' => "http://www.saomartinhopizzas.com.br/imagens/arte.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);


$empresas['amparo'][] = array(
    'nome' => "Estância Churrascaria",
    'img' => "http://www.estanciachurrascaria.com.br/images/logo_estancia.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Jacinto Pereira' => 'A marmita chega quentinha e na hora que a gente pede!', 'Clodoaldo de Souza' => 'Melhor dia é de sexta, pode pedir que boa!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'sobremesa' => 'Sobremesas'),
    'concorrentes' => array('4'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
    )
);

$empresas['amparo'][] = array(
    'nome' => "Churrascaria Rodízio Gaúcho",
    'img' => "http://www.ribeiraopretoonline.com.br/thumb.php?caminho=/listao/fotos/rodiziogaucho.jpg&altura=250&largura=200",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'plano' => false,
    'comentarios' => array('Arthur Mazer' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza da Silva' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'cerveja' => 'Cervejas', 'vinho' => 'Vinhos'),
    'concorrentes' => array('3'),
);

$empresas['amparo'][] = array(
    'nome' => "Só Pasta Delivery",
    'img' => "http://www.sopastadelivery.com.br/Imagens/MenuTop/MenuTop_r3_c1.png",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'plano' => false,
    'comentarios' => array('Felipe Brina' => 'Como la direto, melhor que tem!', 'Vinícius Campos' => 'Sempre como com meu brother lá, é top!'),
    'produtos' => array('lanche' => 'Lanches', 'beirute' => 'Beirutes', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'porcao' => 'Porções'),
    'concorrentes' => array('0', '5'),
);

$empresas['amparo'][] = array(
    'nome' => "Sal da Terra Restaurante",
    'img' => "http://saldaterrarestaurante.com.br/media/imagens/topo/topo-1.jpg?1294925047",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 01:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Excelente, vale a pena!', 'Paulo Ricardo' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas', 'bebidas' => 'Bebidas'),
    'concorrentes' => array('1', '2'),
    'comparacao' => array(
        'prato' => array(
            'produto' => 'Parmegiana de Frango com Fritas',
            'casa_preco' => 'R$30,00',
            'concorrente' => 'R$22,50',
        ),
        'prato' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Suco',
            'casa_preco' => 'R$7,50',
            'concorrente' => 'R$8,00',
        ),
    )
);

$empresas['amparo'][] = array(
    'nome' => "Yakissoba Brasil",
    'img' => "https://s3-sa-east-1.amazonaws.com/carvajal-r2-dms/dms/29/17/6/61729.png",
    'horario_funcionamento' => "Terça a Domingo das 18h as 23h Sexta e Sábado das 18h as 23h",
    'feedback_nota' => 5,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 90,
    'plano' => false,
    'comentarios' => array('Bruno Gianelli' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Daniel Castilho' => 'A pizza de gorgonzola é show! Recomendo!!!'),
    'produtos' => array('pizza' => 'Pizzas', 'pizza doce' => 'Pizzas doces', 'refrigerante' => 'Refrigerantes', 'massa' => 'Massas', 'batata' => 'Batatas'),
    'concorrentes' => array('2'),
);


Yii::app()->session['empresas'] = $empresas;

$tipo_produto = array('' => 'Todos');
foreach ($empresas[$cidade_index] as $empresa) {
    $tipo_produto = array_merge($tipo_produto, $empresa['produtos']);
}
?>

<div class="shout-box">
    <div class="shout-text">
        <h1>Veja os restaurantes em <?php echo $label_cidade; ?>!</h1>
    </div>
</div> 

<div style='height: 10px;'></div>
<div id="container_busca" style='text-align:center;'>
    <?php echo CHtml::textField('buscar_nome', '', array('id' => 'buscar_nome', 'style' => 'width:50%')); ?>
    <?php echo CHtml::dropDownList('produto_busca', '', $tipo_produto); ?>
    <?php echo CHtml::button("Buscar", array('title' => "Buscar", 'style' => 'margin-left:10px;margin-top:-8px;', 'onclick' => 'js:buscarNome();', 'class' => 'btn')); ?>
</div>

<?php foreach ($empresas[$cidade_index] as $key => $empresa) { ?>
    <?php if ($key % 2 == 0) { ?>
        <div class="row-fluid">
        <?php } ?>
        <div class="span6">
            <input type='hidden' class='nome_hidden' value="<?php echo limpar_nome($empresa['nome']); ?>" />
            <h2 class="header"> <?php echo $empresa['nome']; ?>
                <img src="<?php echo $empresa['img']; ?>" alt="<?php echo $empresa['nome']; ?>" style='float:right' width="100" height="67"/> 
                <span class="header-line"></span> 
            </h2>
            <table class="table table-striped table-bordered table-hover" style='height: 320px;'>
                <thead>
                    <tr>
                        <th>Informações</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src='http://www.gourmex.com/images/icons/horarioatendimento.png' />Horário de funcionamento</td>
                        <td><?php echo $empresa['horario_funcionamento']; ?></td>
                    </tr>
                    <tr id="produto_tr<?php echo $key; ?>">
                        <td>Produtos</td>
                        <td>
                            <?php foreach ($empresa['produtos'] as $key_p => $produto) { ?>
                                <strong class='produto' onclick="exibir_concorrente('<?php echo $key_p; ?>',<?php echo $key; ?>);" title='Clique para comparar com a concorrência' style='cursor: pointer'><?php echo ucfirst(strtolower($produto)); ?></strong>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr class="concorrencia_tr<?php echo $key; ?>" style='display:none;'>
                        <td colspan="2" style='width:100%;'>
                            <label style='float:left;' id='produto_title<?php echo $key; ?>'></label>
                            <div style='float: right'><a href="javascript:fechar_concorrencia(<?php echo $key; ?>)">fechar</a></div>
                            <div style='clear:both'></div>
                            <?php if (isset($empresa['comparacao'])) { ?>
                                <div>
                                    <h5 class="header"><?php echo $empresas[$cidade_index][$empresa['concorrentes'][0]]['nome']; ?>
                                        <img height="30" src="<?php echo $empresas[$cidade_index][$empresa['concorrentes'][0]]['img']; ?>" alt="<?php echo $empresas[$cidade_index][$empresa['concorrentes'][0]]['nome']; ?>" style='float:right' width="100" height="67"/> 
                                        <span class="header-line"></span> 
                                    </h5>
                                </div>
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th style='background-color: #0088CC'>Produto</th>
                                            <th style='background-color: #0088CC'>Casa</th>
                                            <th style='background-color: #0088CC'>Concorrente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($empresa['comparacao'] as $key_p => $produto) { ?>
                                            <tr class='<?php echo $key_p; ?> lista' style='display:none;'>
                                                <td><?php echo $produto['produto']; ?></td>
                                                <td><?php echo $produto['casa_preco']; ?></td>
                                                <td><?php echo $produto['concorrente']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <div>
                                    <h5 class="header">Este restaurante não possui concorrente neste produto.
                                        <span class="header-line"></span> 
                                    </h5>
                                </div>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Possui plano de entrega?</td>
                        <td>
                            <?php
                            if ($empresa['plano']) {
                                echo 'Sim <a href="">clique aqui para visualizar</a>';
                            } else {
                                echo 'Não';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Formas de pagamento</td>
                        <td><?php echo $empresa['forma_pagamento']; ?></td>
                    </tr>
                    <tr>
                        <td>Nota dos usuários</td>
                        <td>
                            <?php for ($i = 0; $i < $empresa['feedback_nota']; $i++) { ?>
                                <img src='http://www.gourmex.com/images/icons/estrela.png' />
                            <?php } ?>
                            <?php for ($i = 0; $i < (5 - $empresa['feedback_nota']); $i++) { ?>
                                <img src='http://www.gourmex.com/images/icons/estrelavazia.png' />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Comentários de usuários(<?php echo $empresa['comentarios_total']; ?>)</td>
                        <td class='comentario_container'>
                            <?php foreach ($empresa['comentarios'] as $usuario => $comentario) { ?>
                                <div class='comentario' style="display:none"><i>"<?php echo $comentario; ?></i>"<br><div style='float:right'> - <?php echo $usuario; ?> </div></div>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td style='text-align:center;' colspan="2"><?php echo CHtml::button("Visualizar promoções", array('title' => "Visualizar promoções", 'style' => 'margin:auto', 'onclick' => 'js:redirecionarRestaurante(' . $key . ');', 'class' => 'btn')); ?></td>
                    </tr>
                </tbody>
            </table>
            <div class='produto_hidden'>
                <?php foreach ($empresa['produtos'] as $key_produto => $produto) { ?>
                    <input type='hidden' value='<?php echo $key_produto; ?>' />
                <?php } ?>
            </div>
        </div>
        <?php if ($key % 2 != 0) { ?>
        </div>
    <?php } ?>
<?php } ?>
<?php if (count($empresas[$cidade_index]) % 2 != 0) { ?>
    </div>
<?php } ?>

<h3 class="header">Últimas opiniões
    <span class="header-line"></span>  
</h3>

<div class="row-fluid">
    <div class="span9 comentario_container">
        <?php foreach ($empresas[$cidade_index] as $key => $empresa) { ?>
            <?php foreach ($empresa['comentarios'] as $usuario => $comentario) { ?>
                <blockquote class='comentario' style='display:none;'>
                    <h2 ><?php echo $comentario; ?></h2>
                    <small><?php echo $usuario; ?> sobre <strong><?php echo $empresa['nome']; ?></strong></small>
                </blockquote>
            <?php } ?>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $.each($('.comentario_container'), function(y, container) {
            $.each($(container).find('.comentario'), function(i, val) {
                if (i > 0) {
                    setTimeout(function() {
                        $(val).prev().hide(0);
                        $(val).fadeIn(500);
                    }, 5000 + (i * 5000));
                } else {
                    $(val).fadeIn(500);
                }
            });
        });
        $("#produto_busca").change(function() {
            $('.produto_hidden').parent().show();
            var procura = $(this).val();
            if ($(this).val() != '') {
                $.each($('.produto_hidden'), function(i, val) {
                    var cont = 0;
                    $.each($(val).find('input:hidden'), function(i, el) {
                        if ($(el).val() == procura) {
                            cont++;
                        }
                    });
                    if (cont == 0)
                        $(val).parent().hide();
                });
            }
        });
        $('.produto').tooltip();
    });

    function exibir_concorrente(produto, id) {
        $(".concorrencia_tr" + id).show();
        $(".lista").hide();
        $("[class*=" + produto + ']').show();
        console.log(produto);
        $("#produto_title" + id).html("Principal concorrente em " + produto + ":");
    }

    function fechar_concorrencia(id) {
        $(".concorrencia_tr" + id).hide();
    }

    function buscarNome() {
        $('.produto_hidden').parent().show();
        var procura = $('#buscar_nome').val();
        if (procura != '') {
            $.each($('.nome_hidden'), function(i, val) {
                var cont = 0;
                if ($(val).val().indexOf(caracteres_especias(procura)) >= 0) {
                    cont++;
                }
                if (cont == 0)
                    $(val).parent().hide();
            });
        }
        var procura = $("#produto_busca").val();
        if ($("#produto_busca").val() != '') {
            $.each($('.produto_hidden'), function(i, val) {
                var cont = 0;
                $.each($(val).find('input:hidden'), function(i, el) {
                    if ($(el).val() == procura) {
                        cont++;
                    }
                });
                if (cont == 0)
                    $(val).parent().hide();
            });
        }
    }

    $('#buscar_nome').keyup(function(event) {
        if (event.keyCode == '13') {
            buscarNome();
        }
        return false;
    });

    function caracteres_especias(string) {
        for (i = 0; i < string.length; i++) {
            string = string.replace('/[`~!@#$%^&*()_|+\-=?;:",.<>\{\}\[\]\\\/]', '');
            string = string.replace(' ', '_');
        }
        return removeAcento(string.toLowerCase());
    }

    function removeAcento(strToReplace) {
        str_acento = "áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ";
        str_sem_acento = "aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC";
        var nova = "";
        for (var i = 0; i < strToReplace.length; i++) {
            if (str_acento.indexOf(strToReplace.charAt(i)) != -1) {
                nova += str_sem_acento.substr(str_acento.search(strToReplace.substr(i, 1)), 1);
            } else {
                nova += strToReplace.substr(i, 1);
            }
        }
        return nova;
    }

    function redirecionarRestaurante(id) {
        window.location = '<?php echo Yii::app()->homeUrl . '?r=site/page&view=restaurante&id='; ?>' + id;
    }

</script>

<?php

function limpar_nome($realname, $strip_spaces = true, $tolower = true) {
    $bad_chars = array("'", "\\", ' ', '/', ':', '*', '?', '"', '<', '>', '|');
    $realname = preg_replace('/[àáâãåäæ]/iu', 'a', $realname);
    $realname = preg_replace('/[èéêë]/iu', 'e', $realname);
    $realname = preg_replace('/[ìíîï]/iu', 'i', $realname);
    $realname = preg_replace('/[òóôõöø]/iu', 'o', $realname);
    $realname = preg_replace('/[ùúûü]/iu', 'u', $realname);
    $realname = preg_replace('/[ç]/iu', 'c', $realname);
    $realname = rawurlencode(str_replace($bad_chars, '_', $realname));
    $realname = preg_replace("/%(\w{2})/", '_', $realname);
    while (strpos($realname, '__') !== false) {
        $realname = str_replace("__", "_", $realname);
    }
    if ($strip_spaces === false) {
        $realname = str_replace('_', ' ', $realname);
    }

    return ($tolower === true) ? strtolower($realname) : $realname;
}
?>