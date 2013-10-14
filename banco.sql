drop table if exists tabela_parceiro;
create table tabela_parceiro(
    id_parceiro  INT(6) NOT NULL,
    nome     varchar(100) NOT NULL,
    cnpj    varchar(100) NOT NULL,
    cep     varchar(100) NOT NULL,
    endereco     varchar(500) NOT NULL,
    complemento     varchar(500) NOT NULL,
    bairro     varchar(100) NOT NULL,
    cidade     varchar(100) NOT NULL,
    uf     varchar(2) NOT NULL,
    telefone     varchar(20) NOT NULL,
    celular     varchar(20) NOT NULL,
    email     varchar(100) NOT NULL,
    PRIMARY KEY (`id_parceiro`)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;