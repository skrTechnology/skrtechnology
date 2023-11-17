CREATE TABLE compras (
    id INTEREGER PRIMARY KEY AUTOINCREMENT ,
    data_compra DATE,
    produto TEXT 
    quantidade INTEREGER 
    preco_unitario dECIMAL (300),
    total DECIMAL (300),
);
INSERT INTO compras (data_compra, produto, quantidade, preco_unitario,total)
VALUES ('2023-09-22', 'kit tc', 1, 300);
INSERT INTO compras (data_compra, produto, quantidade, preco_unitario,total)
VALUES ('2023-09-19', 'kit tc', 1, 300);
