CREATE TABLE cadastro (
     id INTEREGER PRIMARY KEY AUTOINCREMENT,
     nome TEXT ,
     email TEXT,

);
 INSERT INTO clientes (nome, email)
 VALUES ( 'Raul Correa', 'raulcorrea@gmail.com');
 
 INSERT INTO clientes (nome, email)
 VALUES ( 'Emilyn Ferreira', 'emilynferreira@gmail.com');


 CREATE TABLE cadastro_automatico 
 (
    id INTEREGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    data_cadastro DATE DEFAULT CURRENT_DATE
    
    INSERT INTO cadastro_automatico
    (nome)
    VALUES ('Raul');
    INSERT INTO cadastro_automatico
    (nome)
    VALUES ('Emilyn');
 );


