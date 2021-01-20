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
                        $this -> setNognome($cognome);
                        $this -> setDataNascita($dataNascita);
                    }
                    
                    // get e sen di nome
                    public function getNome() {
                        return $this -> nome;
                    }
                    public function setNome($nome) {
                        $this -> nome = $nome;
                    }
                    
                    // get e set di cognome
                    public function getCognome() {
                        return $this -> cognome;
                    }
                    public function setNognome($cognome) {
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
                          'Nome: ' . $this -> getNome() . ' ' . '<br>'
                        . 'Cognome: ' . $this -> getCognome() . ' ' . '<br>'
                        . 'Nato il: ' . $this -> getDataNascita() . ' ' . '<br>';
                    }
                }

                // istanza persona
                $persona = new Persona('Davide', 'Zingali', '25/08/1987');

                // classe - dipendente
                class Dipendente extends Persona {
                    
                    private $ruolo;
                    private $stipendio;
                    
                    public function __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio) {
                        //invece di riscrivere tutti gli attributi come sotto
                        // $this -> nome = $nome;
                        // $this -> cognome = $cognome;
                        // $this -> data_di_nascita = $dataNascita;
                        
                        //useremo il parent per portare dietro tutti gli attributi della classe persona
                        parent:: __construct($nome, $cognome, $dataNascita);
                        
                        $this -> setRuolo($ruolo);
                        $this -> setStipendio($stipendio);
                    }

                    public function getRuolo() {
                        return $this -> ruolo;
                    }
                    public function setRuolo($ruolo) {
                        $this -> ruolo = $ruolo;
                    }
                    public function getStipendio() {
                        return $this -> stipendio;
                    }
                    public function setStipendio($stipendio) {
                        $this -> stipendio = $stipendio;
                    }

                    public function __toString() {
                        return
                           parent:: __toString() . '<br>'
                        . 'Ruolo in azienza: ' . $this -> getRuolo() . ' ' . '<br>'
                        . 'Retribuzione mensile: ' . $this -> getStipendio() . ' €';
                    }

                }

                // istanza dipendente
                $dipendente = new Dipendente('Ongaro', 'Filippo', '05/06/1967', 'Commessa', 1500);

                // classe - boss
                class Capo extends Dipendente {

                    public function __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio) {
                        parent:: __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio);
                    } 
                    
                    public function __toString() {
                        return parent:: __toString() . '<br>';
                    }
                }

                // istanza capo
                $capo = new Capo('Mario', 'Rossi', '10/02/1950', 'Amministrativo', 5000);
                
                // var_dump($capo);
                // var_dump($dipendente);
                // var_dump($persona);

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

                // cercare inoltre di sciegliere alcune variabili di istanza (max 3 o 4 per classe) che possono avere senso in questa realta' e decidere le relazione di parantela (chi estende chi);
                // per ogni classe definire eventuale classe padre, variabili di istanza, costruttore, proprieta' e toString;
                // instanziando le varie classi provare a stampare cercando di ottenere un log sensato
                
            ?>

        </div>

    </body>
</html>


