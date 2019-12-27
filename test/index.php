<?php

require __DIR__."/../lib_ext/autoload.php";

USE Notification\Email;


$novoEmail = new Email(2, "smtp.office365.com", "leoprofissional@live.com", "8804@profile","STARTTLS",587,"leoprofissional@live.com", "Nome do destinátario");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um email de <b>TESTE</b>!</p>", "leo@agilsystem.com.br", "Leonardo",  "leo@agilsystem.com.br", "Leonardo");


// var_dump($novoEmail);