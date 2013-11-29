<?php use_helper('I18N') ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>MySMe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
</head>
<body>
<div style="position:relative;width:750px;min-height:180px;background-color:#efeee8;border:1px solid #c5c5c5;padding:25px;font-family:arial, verdana;font-size:14px;margin:50px auto;line-height:18px;">
    <img src="<?php echo $my_sme ?>" width="117" height="65" alt="My Sme" style="position:absolute;top:-20px;left:15px;"><img src="<?php echo $smeppo ?>" width="314" height="257" alt="Smeppo" style="position:absolute;top:-50px;right:-25px;"/>
    <br/><br/>
    Gentile <strong><?php echo $sfGuardUserProfile->getFirstName(). " ".$sfGuardUserProfile->getLastName() ?></strong><br/>
    abbiamo ricevuto la tua richiesta di iscrizione a MySme, clicca:<br/>
    <strong><?php echo link_to('qui','@sf_guard_register_confirm?key='.$sfGuardUser->getPassword().'&id='.$sfGuardUser->getId(),array('style'=>"color:#417adb;", 'title'=>"Completa registrazione")) ?></strong><br/>
    per completare la registrazione e scoprire tutti i servizi a te dedicati!
</div>
</body>
</html>