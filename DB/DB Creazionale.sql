

CREATE TABLE Corso (
 ID_Corso INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 nome VARCHAR(50),
 descrizione VARCHAR(500)
);


CREATE TABLE MUSCOLO (
 ID_MUSCOLO INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50)
);


CREATE TABLE PALESTRA (
 ID_PALESTRA INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50),
 indirizzo VARCHAR(50),
 citta VARCHAR(50)
);


CREATE TABLE PERSONA (
 ID_PERSONA INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50),
 COGNOME VARCHAR(50),
 DATA_NASCITA DATETIME,
 CODICE_FISCALE VARCHAR(16),
 sesso TINYINT(1) NOT NULL,
 indirizzo VARCHAR(50),
 citta VARCHAR(50),
 peso INT,
 altezza INT
);


CREATE TABLE Tipologia_abbonamento (
 ID_TIPOLOGIA_ABBONAMENTO INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50)
);


CREATE TABLE Tipologia_esecuzione (
 ID_Tipologia_Esecuzione INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50),
 DESCRIZIONE VARCHAR(500)
);


CREATE TABLE Tipologia_esercizio (
 ID_TIPOLOGIA_ESERCIZIO INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50) NOT NULL,
 DESCRIZIONE VARCHAR(500),
 ID_MUSCOLO INT NOT NULL,

 FOREIGN KEY (ID_MUSCOLO) REFERENCES MUSCOLO (ID_MUSCOLO)
);


CREATE TABLE Tipologia_Scheda (
 ID_Tipologia_Scheda INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50)
);


CREATE TABLE Tipologia_Singola_Serie (
 ID_Tipologia_Singola_Serie INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 nome VARCHAR(50)
);


CREATE TABLE UTENTE_REGISTRATO (
 ID_PERSONA INT NOT NULL PRIMARY KEY,
 username VARCHAR(50),
 password VARCHAR(50),

 FOREIGN KEY (ID_PERSONA) REFERENCES PERSONA (ID_PERSONA)
);


CREATE TABLE Abbonamento (
 ID_Abbonamento INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 ID_TIPOLOGIA_ABBONAMENTO INT NOT NULL,
 DATA_INIZIO DATE,
 DATA_FINE DATE,

 FOREIGN KEY (ID_TIPOLOGIA_ABBONAMENTO) REFERENCES Tipologia_abbonamento (ID_TIPOLOGIA_ABBONAMENTO)
);


CREATE TABLE Amministratore (
 ID_PERSONA INT NOT NULL PRIMARY KEY,

 FOREIGN KEY (ID_PERSONA) REFERENCES UTENTE_REGISTRATO (ID_PERSONA)
);


CREATE TABLE Cliente (
 ID_PERSONA INT NOT NULL PRIMARY KEY,

 FOREIGN KEY (ID_PERSONA) REFERENCES UTENTE_REGISTRATO (ID_PERSONA)
);


CREATE TABLE Esercizio (
 ID_Esercizio INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 ID_Tipologia_Esecuzione INT NOT NULL,
 ID_TIPOLOGIA_ESERCIZIO INT NOT NULL,

 FOREIGN KEY (ID_Tipologia_Esecuzione) REFERENCES Tipologia_esecuzione (ID_Tipologia_Esecuzione),
 FOREIGN KEY (ID_TIPOLOGIA_ESERCIZIO) REFERENCES Tipologia_esercizio (ID_TIPOLOGIA_ESERCIZIO)
);


CREATE TABLE Istruttore (
 ID_PERSONA INT NOT NULL PRIMARY KEY,

 FOREIGN KEY (ID_PERSONA) REFERENCES UTENTE_REGISTRATO (ID_PERSONA)
);


CREATE TABLE News (
 ID_News INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 titolo VARCHAR(50),
 descrizione VARCHAR(500),
 data DATETIME,
 ID_PALESTRA INT NOT NULL,

 FOREIGN KEY (ID_PALESTRA) REFERENCES PALESTRA (ID_PALESTRA)
);


CREATE TABLE Programmazione (
 ID_Programmazione INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 ID_PALESTRA INT NOT NULL,
 ID_Corso INT NOT NULL,
 ID_PERSONA INT NOT NULL,
 ora_inizio TIME(6),
 ora_fine TIME(6),
 ANNO INT,

 FOREIGN KEY (ID_PALESTRA) REFERENCES PALESTRA (ID_PALESTRA),
 FOREIGN KEY (ID_Corso) REFERENCES Corso (ID_Corso),
 FOREIGN KEY (ID_PERSONA) REFERENCES Istruttore (ID_PERSONA)
);


CREATE TABLE Scheda (
 ID_Scheda INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 ID_Tipologia_Scheda INT NOT NULL,
 ID_PERSONA INT NOT NULL,

 FOREIGN KEY (ID_Tipologia_Scheda) REFERENCES Tipologia_Scheda (ID_Tipologia_Scheda),
 FOREIGN KEY (ID_PERSONA) REFERENCES Istruttore (ID_PERSONA)
);


CREATE TABLE Scheda_Esercizio (
 ID_Scheda INT NOT NULL,
 ID_Esercizio INT NOT NULL,

 PRIMARY KEY (ID_Scheda,ID_Esercizio),

 FOREIGN KEY (ID_Scheda) REFERENCES Scheda (ID_Scheda),
 FOREIGN KEY (ID_Esercizio) REFERENCES Esercizio (ID_Esercizio)
);


CREATE TABLE Segretaria (
 ID_PERSONA INT NOT NULL PRIMARY KEY,

 FOREIGN KEY (ID_PERSONA) REFERENCES UTENTE_REGISTRATO (ID_PERSONA)
);


CREATE TABLE Singola_serie (
 ID_Singola_serie INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 NOME VARCHAR(50),
 NUM_RIPETIZIONI INT,
 ID_Tipologia_Singola_Serie INT NOT NULL,

 FOREIGN KEY (ID_Tipologia_Singola_Serie) REFERENCES Tipologia_Singola_Serie (ID_Tipologia_Singola_Serie)
);


CREATE TABLE Singola_Serie_Tipologia_Esecuzione (
 ID_Tipologia_Singola_Serie INT NOT NULL,
 ID_Tipologia_Esecuzione INT AUTO_INCREMENT NOT NULL,

 PRIMARY KEY (ID_Tipologia_Singola_Serie,ID_Tipologia_Esecuzione),

 FOREIGN KEY (ID_Tipologia_Singola_Serie) REFERENCES Tipologia_Singola_Serie (ID_Tipologia_Singola_Serie),
 FOREIGN KEY (ID_Tipologia_Esecuzione) REFERENCES Tipologia_esecuzione (ID_Tipologia_Esecuzione)
);


CREATE TABLE Storico_Scheda_Cliente  (
 ID_PERSONA INT NOT NULL,
 ID_Scheda INT NOT NULL,
 attiva TINYINT(1) NOT NULL,
 DATA_INIZIO DATE,
 DATA_FINE DATE,

 PRIMARY KEY (ID_PERSONA,ID_Scheda),

 FOREIGN KEY (ID_PERSONA) REFERENCES Cliente (ID_PERSONA),
 FOREIGN KEY (ID_Scheda) REFERENCES Scheda (ID_Scheda)
);


CREATE TABLE UTENTE_PALESTRA (
 ID_PALESTRA INT NOT NULL,
 ID_PERSONA INT NOT NULL,

 PRIMARY KEY (ID_PALESTRA,ID_PERSONA),

 FOREIGN KEY (ID_PALESTRA) REFERENCES PALESTRA (ID_PALESTRA),
 FOREIGN KEY (ID_PERSONA) REFERENCES UTENTE_REGISTRATO (ID_PERSONA)
);


CREATE TABLE Abbonamento_Cliente (
 ID_Abbonamento_Cliente INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 ID_PERSONA INT NOT NULL,
 ID_Abbonamento INT NOT NULL,
 ID_Corso INT NOT NULL,

 FOREIGN KEY (ID_PERSONA) REFERENCES Cliente (ID_PERSONA),
 FOREIGN KEY (ID_Abbonamento) REFERENCES Abbonamento (ID_Abbonamento),
 FOREIGN KEY (ID_Corso) REFERENCES Corso (ID_Corso)
);

