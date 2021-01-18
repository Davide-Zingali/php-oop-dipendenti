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
                    public $nome;
                    public $cognome;
                    public $dataNascita;

                    function __construct($nome, $cognome, $dataNascita) {
                        $this -> nome = $nome;
                        $this -> cognome = $cognome;
                        $this -> dataNascita = $dataNascita;
                    }

                    public function __toString() {
                        return
                          'Persona' . '<br>'
                        . 'Nome: ' . $this -> nome . ' ' . '<br>'
                        . 'Cognome: ' . $this -> cognome . ' ' . '<br>'
                        . 'Nato il: ' . $this -> dataNascita . ' ' . '<br>';
                    }
                }

                // istanza persona
                $persona = new Persona('Davide', 'Zingali', '25/08/1987');

                // classe - dipendente
                class Dipendente extends Persona {
                    
                    public $ruolo;
                    public $stipendio;
                    
                    function __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio) {
                        //invece di riscrivere tutti gli attributi come sotto
                        // $this -> nome = $nome;
                        // $this -> cognome = $cognome;
                        // $this -> data_di_nascita = $dataNascita;
                        
                        //useremo il parent per portare dietro tutti gli attributi della classe persona
                        parent:: __construct($nome, $cognome, $dataNascita);
                        
                        $this -> ruolo = $ruolo;
                        $this -> stipendio = $stipendio;
                    }

                    public function __toString() {
                        return
                          'Dipendente' . '<br>'
                        . 'Nome: ' . $this -> nome . ' ' . '<br>'
                        . 'Cognome: ' . $this -> cognome . ' ' . '<br>'
                        . 'Nato il: ' . $this -> dataNascita . ' ' . '<br>'
                        . 'Ruolo in azienza: ' . $this -> ruolo . ' ' . '<br>'
                        . 'Retribuzione mensile: ' . $this -> stipendio . ' €';
                    }

                }

                // istanza dipendente
                $dipendente = new Dipendente('Ongaro', 'Filippo', '05/06/1967', 'Commessa', 1500);

                // classe - boss
                class Capo extends Dipendente {

                    function __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio) {
                        parent:: __construct($nome, $cognome, $dataNascita, $ruolo, $stipendio);
                    } 
                    
                    public function __toString() {
                        return
                          'Capo' . '<br>'
                        . 'Nome: ' . $this -> nome . ' ' . '<br>'
                        . 'Cognome: ' . $this -> cognome . ' ' . '<br>'
                        . 'Nato il: ' . $this -> dataNascita . ' ' . '<br>'
                        . 'Ruolo in azienza: ' . $this -> ruolo . ' ' . '<br>'
                        . 'Retribuzione mensile: ' . $this -> stipendio . ' €';
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
                        
                            echo $persona;
                            
                        ?>
                    </div>

                    <div class="box">
                        <?php
                        
                            echo $capo;
                            
                        ?>
                    </div>

                    <div class="box">
                    
                        <?php
                        
                            echo $dipendente;
                            
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


