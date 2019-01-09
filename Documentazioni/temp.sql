CREATE TABLE Utente(
    id_utente,
    nome,
    cognome,
    luogo_nascita,
    cap,
    indirizzo,
    citta,
    provincia,
    data_nascita,
    genere
)

CREATE TABLE Dati_fiscali(
    id_dati,
    numero_documento,
    tipo_abbonamento,
)

CREATE TABLE Tessera(
    data_tesseramento,
    numero_tessera,
    scadenza_tessera,
)

CREATE TABLE Fornitore(
    id_fornitore,
     nome,
     ragione_sociale,
     indirizzo,
     cap,
     citta,
     provincia,
     tipo_fornitura,
     note,
)

CREATE TABLE Iscritto(
     cod_fiscale,
     numero_cell,
     numero_tel,
     email,
     data_stipula_ass,
     scadenza_ass,
     numero_ass,
     data_cert_medico,
     scadenza_cert_medico,
     ruolo,
     note,
     p_iva,
)

CREATE TABLE Corso(
    id_corso,
    nome,
    costo_orario,

)

CREATE TABLE Disciplina(
    id_disciplina,
    nome
)

CREATE TABLE Programmazione(
    id_programmazione,
    giorno,
    orario
)

CREATE TABLE Sala(
    id_sala,
    nome,
)


CREATE TABLE Pacchetto(
    id_pacchetto,
    nome,
    prezzo,
)

CREATE TABLE Transazione(
    id_transazione,
    importo,
    file_fattura,
    descrizione,
    data,
    tipo_fattura,

)

CREATE TABLE Uscita(
    id_uscita
    modalita_pagamento
    importo
    tipo_fattura
)

CREATE TABLE Entrata(
    id_entrata
    modalita_pagamento
    importo
    tipo_ricevuta
)



CREATE TABLE Utente_sito(
    id_utente_sito
    email,
    pass,
)




CREATE TABLE Asd(
    id_asd
    nome,
    logo,
    numero_tel,
    indirizzo,
    citta,
    fax,
    email,
    p_iva,
    cap,
    provincia,
    
)






-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 
-- 

Fornisce
    Dati_fiscali FK
    utente          FK

Riceve
    Tessera FK
    Utente  FK

Percepisce
    data

Stipendia
    data

Paga
    data

Iscrizione
    data



