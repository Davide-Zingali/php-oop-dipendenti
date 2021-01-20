<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Oop 2</title>
    </head>
    <body>

        <div id="container">

            <?php

                // creare 3 classi per rappresentare la seguente realta':
                // classe - persona
                class Persona {
                    private $nome;
                    private $cognome;
                    private $dataNascita;

                    public function __construct($nome, $cognome, $dataNascita) {
                        $this -> setNome($nome);
                        $this -> setCognome($cognome);
                        $this -> setDataNascita($dataNascita);
                    }
                    
                    // get e sen di nome
                    public function getNome() {
                        return $this -> nome;
                    }
                    public function setNome($nome) {
                        if (strlen($nome) < 3) {
                            throw new Exception('Error');
                        }
                        
                        $this -> nome = $nome;
                    }
                    
                    // get e set di cognome
                    public function getCognome() {
                        return $this -> cognome;
                    }
                    public function setCognome($cognome) {
                        if (strlen($cognome) < 3) {
                            throw new Exception('Error');
                        }

                        $this -> cognome = $cognome;
                    }

                    // get e set data di nascita
                    public function getDataNascita() {
                        return $this -> dataNascita;
                    }
                    public function setDataNascita($dataNascita) {
                        $this -> dataNascita = $dataNascita;
                    }

                    public function __toString() {
                        return
                          'Nome: ' . $this -> getNome() . '<br>'
                        . 'Cognome: ' . $this -> getCognome() . '<br>'
                        . 'Nato il: ' . $this -> getDataNascita() . '<br>';
                    }
                }

                // istanza persona con gestione errori
                try {
                    $persona = new Persona('Davide', 'Zingali', '25/08/1987');
                } catch (Exception $e) {
                    echo 'Inserisci almeno 3 caratteri';
                }

                // classe - dipendente
                class Dipendente extends Persona {
                    
                    private $ruolo;
                    private $stipendio;
                    private $sicurezza;
                    
                    public function __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio, $sicurezza) {
                        //invece di riscrivere tutti gli attributi come sotto
                        // $this -> nome = $nome;
                        // $this -> cognome = $cognome;
                        // $this -> data_di_nascita = $dataNascita;
                        
                        //useremo il parent per portare dietro tutti gli attributi della classe persona
                        parent:: __construct($nome, $cognome, $dataNascita);
                        
                        $this -> setRuolo($ruolo);
                        $this -> setStipendio($stipendio);
                        $this -> setSicurezza($sicurezza);
                    }

                    // get e set ruolo
                    public function getRuolo() {
                        return $this -> ruolo;
                    }
                    public function setRuolo($ruolo) {
                        $this -> ruolo = $ruolo;
                    }

                    // get e set stipendio
                    public function getStipendio() {
                        return $this -> stipendio;
                    }
                    public function setStipendio($stipendio) {
                        $this -> stipendio = $stipendio;
                    }

                    // get e set livello sicurezza
                    public function getSicurezza() {
                        return $this -> sicurezza;
                    }
                    public function setSicurezza($sicurezza) {
                        if ($sicurezza > 5 || $sicurezza < 1) {
                            throw new Exception('Error');
                        }

                        $this -> sicurezza = $sicurezza;
                    }

                    public function __toString() {
                        return
                           parent:: __toString() . '<br>'
                        . 'Ruolo in azienza: ' . $this -> getRuolo() . ' ' . '<br>'
                        . 'Retribuzione mensile: ' . $this -> getStipendio() . ' €' . '<br>'
                        . 'Livello di sicurezza: ' . $this -> getSicurezza() . ' ' . '<br>';
                    }

                }

                // istanza dipendente con gestione errori
                try {                    
                    $dipendente = new Dipendente('Ongaro', 'Filippo', '05/06/1967', 'Commessa', 1500, 2);
                } catch (Exception $e) {
                    echo 'Inserisci almeno 3 caratteri';
                }

                // classe - boss
                class Capo extends Dipendente {

                    public function __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio, $sicurezza) {
                        parent:: __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio, $sicurezza);
                    } 
                    
                    public function __toString() {
                        return parent:: __toString() . '<br>';
                    }

                    // condizione differenziata per il capo
                    public function setSicurezza($sicurezza) {
                        if ($sicurezza > 10 || $sicurezza < 5) {
                            throw new Exception('Error');
                        }

                        $this -> sicurezza = $sicurezza;
                    }
                }

                // istanza capo e gestione errori
                try {     
                    $capo = new Capo('Mario', 'Rossi', '10/02/1950', 'Amministrativo', 5000, 6);
                } catch (Exception $e) {
                    echo 'Inserisci almeno 3 caratteri';
                }

                // stampa
                ?>
                    <div class="box">
                        <?php
                        
                            echo 'Persona <br>' . $persona;
                            
                        ?>
                    </div>

                    <div class="box">
                        <?php
                        
                            echo 'Capo <br>' . $capo;
                            
                        ?>
                    </div>

                    <div class="box">
                    
                        <?php
                        
                            echo 'Dipendente <br>' . $dipendente;
                            
                        ?>
                    
                    </div>
                <?php

                // GOAL: sulla base dell'esercizio di ieri (vedi correzione qui su slack) aggiungere i seguenti vincoli di integrita':
                // - nomi e cognomi devono essere di > 3 caratteri
                // - i livelli di sicurezza devono essere [1;5] per i dipendenti e [6;10] per i boss
                // - ral employee [10.000;100.000]
                // - non puo' esistere boss senza dipendenti
                // Durante la fase di test, utilizzare il costrutto try-catch per gestire l'errore e informare l'utente
                
            ?>

        </div>

    </body>
</html>


