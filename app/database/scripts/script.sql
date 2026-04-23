CREATE TABLE IF NOT EXISTS animais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especie VARCHAR(50) NOT NULL,
    raca VARCHAR(50),
    sexo ENUM('Macho', 'Fêmea') NOT NULL,
    idade VARCHAR(50),
    porte ENUM('Pequeno', 'Médio', 'Grande') NOT NULL,
    historico_saude TEXT,
    castrado TINYINT(1) DEFAULT 0,
    foto VARCHAR(255),
    status ENUM('disponível', 'em processo de adoção', 'adotado') DEFAULT 'disponível',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO animais (nome, especie, raca, sexo, idade, porte, historico_saude, castrado, status) 
VALUES 
('Rex', 'Cachorro', 'Vira-lata', 'Macho', '2 anos', 'Médio', 'Vacinas em dia', 1, 'disponível'),
('Luna', 'Gato', 'Siamês', 'Fêmea', '1 ano', 'Pequeno', 'Saudável', 1, 'disponível'),
('Thor', 'Cachorro', 'Golden Retriever', 'Macho', '5 meses', 'Grande', 'Em tratamento de vermes', 0, 'em processo de adoção'),
('Mel', 'Cachorro', 'Poodle', 'Fêmea', '4 anos', 'Pequeno', 'Castrada recentemente', 1, 'adotado'),
('Mingau', 'Gato', 'Persa', 'Macho', '3 anos', 'Pequeno', 'Nenhuma observação', 1, 'disponível');