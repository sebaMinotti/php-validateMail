<?php
  $verificaMail='/^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/';
  $nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
  $mail = isset($_GET['mail']) ? htmlspecialchars($_GET['mail']) : '';
  $eta = isset($_GET['eta']) ? $_GET['eta'] : '';

  if(is_numeric($eta)&&strlen($nome)>=3&& preg_match($verificaMail,$mail)){

    echo "
         <h2 style='color:green'> complimenti accesso consentito  hai inserito correttamente il tuo nome la mail e l'età</h2>
      
    ";
  }  else {
    echo"
         <h2 style='color:red'>mi spiace qualcosa è andato storto ! ricontrolla i valori inseriti</h2>
    
    ";
  }

?>