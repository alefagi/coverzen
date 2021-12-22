/* 3. Fornisci una o più query SQL che creino una tabella completa capace di ospitare i dati anagrafici di un utente. */

CREATE TABLE `utenti` (
  `id` INT NOT NULL AUTO_INCREMENT, UNIQUE,
  `nome` VARCHAR(50) NOT NULL,
  `cognome` VARCHAR(50) NOT NULL,
  `data_di_nascita` DATE NULL,
  `citta_di_nascita` VARCHAR(20) NULL,
  `codice_fiscale` CHAR(16) NULL UNIQUE,
  `citta_di_residenza` VARCHAR(50) NULL,
  `indirizzo_di_residenza` VARCHAR(50) NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
);