set foreign_key_checks=0;


#
# //Criação da Tabela : tb_autenticacao
#

CREATE TABLE `tb_autenticacao` (
  `aut_id` int(11) NOT NULL AUTO_INCREMENT,
  `aut_nome_completo` varchar(60) NOT NULL,
  `aut_email` varchar(80) NOT NULL,
  `aut_senha` int(11) NOT NULL,
  PRIMARY KEY (`aut_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_autenticacao VALUES('1', 'Vitor', 'vitorjensen6@gmail.com', '12345')
,('2', 'Guilherme Fabretti', 'guilherme@gmail.com', '123')
,('3', 'Leonardo Cremasco', 'leonardo@gmail.com', '102938')
;

#
# //Criação da Tabela : tb_cliente
#

CREATE TABLE `tb_cliente` (
  `cli_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(120) NOT NULL,
  `cli_telefone` varchar(13) NOT NULL,
  `cli_cpf` varchar(14) NOT NULL,
  `cli_rua` varchar(120) NOT NULL,
  `cli_numero` varchar(120) NOT NULL,
  `cli_bairro` varchar(40) NOT NULL,
  `cli_cidade` varchar(120) NOT NULL,
  `cli_estado` char(2) NOT NULL,
  `cli_complemento` varchar(255) NOT NULL,
  PRIMARY KEY (`cli_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_cliente VALUES('1', 'Maria Joana', '19 99432-3230', '345.643.298-75', 'Rua das Dálias', '50', 'Jd Alvorada', 'Americana', 'SP', 'Apto')
,('2', 'Juliana ', '19 99576-3455', '123.876.453-20', 'Rua Amélia ', '500', 'Jd das Flores', 'Nova Odessa', 'SP', 'Apto.')
,('3', 'Maria Fernandes ', '19 99467-8945', '667.876.558-90', 'Rua Carlos Maia', '120', 'Jd América', 'Sumaré', 'SP', 'Casa')
,('4', 'Beatriz', '19 99785-5434', '225.765.446-43', 'Rua Cuba', '400', 'Jd São Paulo', 'Piracicaba', 'SP', 'Casa')
,('5', 'Joana', '19 99568-8845', '111.233.455-66', 'Rua Nova Morada', '20', 'Jd Terra Nova', 'Americana', 'SP', 'Apto.')
,('9', 'Mariana', '19 99546-7666', '235.542.342-34', 'Rua Itabirí', '400', 'Jd Alvorada', 'Americana', 'SP', 'Casa')
;

#
# //Criação da Tabela : tb_curso
#

CREATE TABLE `tb_curso` (
  `cur_id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_nome_curso` varchar(120) NOT NULL,
  `cur_descricao` varchar(13) NOT NULL,
  `cur_professor` varchar(14) NOT NULL,
  `cur_duracao` varchar(255) NOT NULL,
  `cur_status` text NOT NULL,
  PRIMARY KEY (`cur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_curso VALUES('1', 'Eng.Computação', 'Dificil', 'Clerivaldo', '5 anos', '0')
,('2', 'Eng.Produção', 'Dificil', 'Jorge', '5 anos', '1')
,('3', 'Ciência da Computação', 'Dificil', 'Clerivaldo', '4 anos', '1')
,('4', 'Eng.Ambiental', 'Dificil', 'Matheus', '5 anos', '0')
,('5', 'Eng.Mecânica', 'Dificil', 'Odahyr', '5 anos', '1')
,('6', 'Administração', 'Dificil', 'Roberto', '4 anos', '1')
;
