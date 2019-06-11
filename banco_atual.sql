
CREATE SCHEMA `salao` ;
USE `salao` ;

CREATE TABLE IF NOT EXISTS `salao`.`Cliente` (
  `cpfCliente` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `telefone1` VARCHAR(11) NULL,
  `telefone2` VARCHAR(11) NULL,
  PRIMARY KEY (`cpfCliente`));

CREATE TABLE IF NOT EXISTS `salao`.`Nota` (
  `idNota` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `totalBruto` DECIMAL(5,2) NULL,
  `desconto` TINYINT NULL,
  `totalLiquido` DECIMAL(5,2) NULL,
  `Cliente_cpfCliente` VARCHAR(11) NOT NULL,
  `data` DATETIME NULL,
  PRIMARY KEY (`idNota`, `Cliente_cpfCliente`),
  CONSTRAINT `fk_Nota_Cliente1`
    FOREIGN KEY (`Cliente_cpfCliente`)
    REFERENCES `salao`.`Cliente` (`cpfCliente`)
    on update cascade on delete cascade);



-- -----------------------------------------------------
-- Table `salao`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao`.`Produto` (
  `idProduto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `marca` VARCHAR(25) NULL,
  `preco` DECIMAL(5,2) NULL,
  `quantidade` INT UNSIGNED NULL,
  PRIMARY KEY (`idProduto`));


-- -----------------------------------------------------
-- Table `salao`.`Produto_has_Produto`
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Table `salao`.`Produto_has_ListaProdutos`
-- -----------------------------------------------------




-- -----------------------------------------------------
-- Table `salao`.`Servicos`


CREATE TABLE IF NOT EXISTS `salao`.`Servicos` (
  `idServico` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `preco` DECIMAL(5,2) NULL,
  `comissao` TINYINT NULL,
  PRIMARY KEY (`idServico`));


-- -----------------------------------------------------
-- Table `salao`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao`.`Funcionario` (
  `cpfFuncionario` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `telefone1` VARCHAR(11) NULL,
  `telefone2` VARCHAR(11) NULL,
  `rua` VARCHAR(45) NULL,
  `bairro` VARCHAR(25) NULL,
  `cep` VARCHAR(8) NULL,
  `horarioini` TIME NULL,
  `horariofim` TIME NULL,
  PRIMARY KEY (`cpfFuncionario`));



CREATE TABLE IF NOT EXISTS `salao`.`Administrativo` (
  `funcao` VARCHAR(20) NULL,
  `Funcionario_cpfFuncionario` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`Funcionario_cpfFuncionario`),
  CONSTRAINT `fk_Administrativo_Funcionario1`
    FOREIGN KEY (`Funcionario_cpfFuncionario`)
    REFERENCES `salao`.`Funcionario` (`cpfFuncionario`)
    on update cascade on delete cascade);


-- -----------------------------------------------------
-- Table `salao`.`Salao`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `salao`.`Salao` (
  `comissao` DECIMAL(5,2) NULL,
  `Funcionario_cpfFuncionario` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`Funcionario_cpfFuncionario`),
  CONSTRAINT `fk_Salao_Funcionario1`
    FOREIGN KEY (`Funcionario_cpfFuncionario`)
    REFERENCES `salao`.`Funcionario` (`cpfFuncionario`)
    on update cascade on delete cascade);


-- -----------------------------------------------------
-- Table `salao`.`Especialista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao`.`Especialista` (
  `Servicos_idServico` INT NOT NULL,
  `Salao_Funcionario_cpfFuncionario` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`Servicos_idServico`, `Salao_Funcionario_cpfFuncionario`),
  CONSTRAINT `fk_Especialista_Salao1`
    FOREIGN KEY (`Salao_Funcionario_cpfFuncionario`)
    REFERENCES `salao`.`Salao` (`Funcionario_cpfFuncionario`)
    on update cascade on delete cascade
   );


-- -----------------------------------------------------
-- Table `salao`.`Agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao`.`Agendamento` (
  `idAgendamento` INT UNSIGNED NOT NULL,
  `dataHora` DATETIME NULL,
  `Cliente_cpfCliente` VARCHAR(11) NOT NULL,
  `Servicos_idServico` INT UNSIGNED NOT NULL,
  `Funcionario_cpfFuncionario` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`idAgendamento`, `Cliente_cpfCliente`, `Servicos_idServico`, `Funcionario_cpfFuncionario`),
  CONSTRAINT `fk_Agendamento_Cliente1`
    FOREIGN KEY (`Cliente_cpfCliente`)
    REFERENCES `salao`.`Cliente` (`cpfCliente`)
    on update cascade on delete cascade,
  CONSTRAINT `fk_Agendamento_Servicos1`
    FOREIGN KEY (`Servicos_idServico`)
    REFERENCES `salao`.`Servicos` (`idServico`)
    on update cascade on delete cascade,
  CONSTRAINT `fk_Agendamento_Funcionario1`
    FOREIGN KEY (`Funcionario_cpfFuncionario`)
    REFERENCES `salao`.`Funcionario` (`cpfFuncionario`)
    on update cascade on delete cascade);


-- -----------------------------------------------------
-- Table `salao`.`Salario`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `salao`.`Salario` (
  `Funcionario_cpfFuncionario` VARCHAR(11) NOT NULL,
  `mes` DATE NOT NULL,
  `salarioBase` DECIMAL(5,2) UNSIGNED NULL,
  `acrescimo` DECIMAL(5,2) UNSIGNED NULL,
  `desconto` DECIMAL(5,2) UNSIGNED NULL,
  `salarioBruto` DECIMAL(5,2) UNSIGNED NULL,
  `salarioLiquido` DECIMAL(5,2) UNSIGNED NULL,
  PRIMARY KEY (`Funcionario_cpfFuncionario`, `mes`),
  CONSTRAINT `fk_Salario_Funcionario1`
    FOREIGN KEY (`Funcionario_cpfFuncionario`)
    REFERENCES `salao`.`Funcionario` (`cpfFuncionario`)
    on update cascade on delete cascade);

-- -----------------------------------------------------
-- Table `salao`.`listaServicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao`.`listaServicos` (
  `Nota_idNota` INT UNSIGNED NOT NULL,
  `Servicos_idServico` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Nota_idNota`, `Servicos_idServico`),
  CONSTRAINT `fk_Nota_has_Servicos_Nota1`
    FOREIGN KEY (`Nota_idNota`)
    REFERENCES `salao`.`Nota` (`idNota`),
  CONSTRAINT `fk_Nota_has_Servicos_Servicos1`
    FOREIGN KEY (`Servicos_idServico`)
    REFERENCES `salao`.`Servicos` (`idServico`)
    on update cascade on delete cascade);


-- -----------------------------------------------------
-- Table `salao`.`listaProdutos`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `salao`.`listaProdutos` (
  `Nota_idNota` INT UNSIGNED NOT NULL,
  `Produto_idProduto` INT UNSIGNED NOT NULL,
  `quantidade` INT(20) UNSIGNED NULL,
  PRIMARY KEY (`Nota_idNota`, `Produto_idProduto`),
  CONSTRAINT `fk_Nota_has_Produto_Nota1`
    FOREIGN KEY (`Nota_idNota`)
    REFERENCES `salao`.`Nota` (`idNota`)
    on update cascade on delete cascade,
  CONSTRAINT `fk_Nota_has_Produto_Produto1`
    FOREIGN KEY (`Produto_idProduto`)
    REFERENCES `salao`.`Produto` (`idProduto`)
    on update cascade on delete cascade);

CREATE TABLE IF NOT EXISTS `salao`.`autenticacao` (
  `usuario` VARCHAR(15) NULL,
  `senha` VARCHAR(11) NULL,
  `Funcionario_cpfFuncionario` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`senha`, `usuario`),
  CONSTRAINT `fk_Login_Funcionario1`
    FOREIGN KEY (`Funcionario_cpfFuncionario`)
    REFERENCES `salao`.`Funcionario` (`cpfFuncionario`)
    on update cascade on delete cascade
   );
