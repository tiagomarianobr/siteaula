CREATE table usuario(
    id INT AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    senha VARCHAR(200) NOT NULL,
    telefone VARCHAR(11) NULL,
    tipo ENUM('cliente','administrador') NOT NULL DEFAULT 'cliente',
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE table produto(
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(200) NOT NULL,
    descricao LONGTEXT NULL,
    valor DOUBLE NOT NULL DEFAULT 0,
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

create table imagem(
    id INT NOT NULL AUTO_INCREMENT,
    id_produto INT NOT NULL,
    imagem VARCHAR(200) NOT NULL,
    principal boolean not null default false,
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_produto) REFERENCES produto(id)
);

CREATE TABLE carrinho (
    id INT NOT NULL AUTO_INCREMENT,
    id_produto INT NOT NULL,
    id_cliente INT NOT NULL,
    quantidade INT NOT NULL DEFAULT 0,
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_produto) REFERENCES produto(id),
    FOREIGN KEY (id_cliente) REFERENCES usuario(id)
);

