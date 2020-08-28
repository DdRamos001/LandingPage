<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<header class='header2'>
<body class='body'>
    
<div class='container-1'>

     

<div class='container-2'>

     <h1 id='title2'>Diogo Ramos</h1>
     <h2 id='sub-title2'>Designer Gráfico</h2>

</div>

</div>
<div class="container-31">

 <h1 class='textoP2'>E-MAIL ENVIADO COM SUCESSO</h1>
 <h2 class='textoP22'>De uma olhada na sua lixeira do E-Mail</h2>

</div>
</header>



</body>
<footer class='f2'>

</footer>
</html>

<?php
if(isset($_POST['submit'])){


    $name=$_POST['name'];
    $mail=$_POST['email'];

    $string_file = $name."|".$mail;

    if($file=fopen('dados.txt', 'a')){

        if(fwrite($file, $string_file)){

            echo 'Registrado com sucesso';

        }else{

                echo 'falha no registro';

        }

    }
 

    $arquivo = "
    <html>
        <body>
            <h1>Ola $name,</h1>
            
            <h2>Aqui Esta o link do arquivo PDF</h2>
            <a href='http://www.mediafire.com/file/ysyyohf0engeyf0/Diogo_Ramos_Designer_Gr%25C3%25A1fico.pdf/file'> Clique aqui para ir pra pagina de download</a>

        </body>

    </html>
  ";

  $sendmail_from = "diogo_assis_ramos7@hotmail.com";

  $mail_send = $mail;

  $destino = $mail;

  $assunto = 'Diogo Ramos Designer Gráfico - Informações';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: Diogo Ramos <diogo_assis_ramos7@hotmail.com>';

//$headers .= "Bcc: $EmailPadrao\r\n";


$enviarEmail = mail($destino, $assunto, $arquivo, $headers);

if($enviarEmail){

    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
     
}else {

    $mgn = 'ERRO AO ENVIAR, 404';
    echo " ";

}








    
}
?>