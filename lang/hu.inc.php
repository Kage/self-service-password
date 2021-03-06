<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

#==============================================================================
# Hungarian
#==============================================================================
$messages['phpupgraderequired'] = "PHP upgrade required";
$messages['nophpldap'] = "A program használatához telepíteni kell a PHP LDAP csomagot";
$messages['nophpmhash'] = "A Samba üzemmód használatához telepíteni kell a PHP mhash csomagot";
$messages['ldaperror'] = "Nem érhető el az LDAP szolgáltatás";
$messages['loginrequired'] = "A felhasználónév megadása kötelező!";
$messages['oldpasswordrequired'] = "A régi jelszó megadása kötelező!";
$messages['newpasswordrequired'] = "Az új jelszó megadása kötelező!";
$messages['confirmpasswordrequired'] = "Kérem, hagyja jóvá az új jelszavát!";
$messages['passwordchanged'] = "A jelszó sikeresen megváltozott!";
$messages['nomatch'] = "A beírt új jelszavak nem egyeznek meg!";
$messages['badcredentials'] = "A felhasználónév vagy a jelszó nem megfelelő!";
$messages['passworderror'] = "A jelszó megváltoztatását visszautasította az LDAP szolgáltatás";
$messages['title'] = "Budapest Közút KAPU - Jelszókezelő";
$messages['login'] = "Felhasználónév";
$messages['oldpassword'] = "Régi jelszó";
$messages['newpassword'] = "Új jelszó";
$messages['confirmpassword'] = "Új jelszó ismét";
$messages['submit'] = "Küldés";
$messages['getuser'] = "Get user";
$messages['tooshort'] = "A megadott jelszó túl rövid";
$messages['toobig'] = "A megadott jelszó túl hosszú";
$messages['minlower'] = "A megadott jelszó nem tartalmaz elegendő kisbetűs karaktert!";
$messages['minupper'] = "A megadott jelszó nem tartalmaz elegendő nagybetűs karaktert!";
$messages['mindigit'] = "A megadott jelszó nem tartalmaz elegendő számjegy karaktert!";
$messages['minspecial'] = "A megadott jelszó nem tartalmaz elegendő speciális karaktert!";
$messages['sameasold'] = "Az új jelszava nem egyezhet meg a régi jelszavával!";
$messages['policy'] = "A megadott jelszónak meg kell felelni a következő elvárásoknak:";
$messages['policyminlength'] = "Minimális hossz:";
$messages['policymaxlength'] = "Maximális hossz:";
$messages['policyminlower'] = "Kisbetűs karakterek minimális száma:";
$messages['policyminupper'] = "Nagybetűs karakterek minimális száma:";
$messages['policymindigit'] = "Számjegy karakterek minimális száma:";
$messages['policyminspecial'] = "Speciális karakterek minimális száma:";
$messages['forbiddenchars'] = "A megadott jelszó érvénytelen karaktereket tartalmaz!";
$messages['policyforbiddenchars'] = "Érvénytelen karakterek:";
$messages['policynoreuse'] = "Az új jelszó nem lehet azonos a régivel!";
$messages['questions']['birthday'] = "Mikor van a születésnapja?";
$messages['questions']['color'] = "Mi a kedvenc színe?";
$messages['password'] = "Jelszó";
$messages['question'] = "Kérdés";
$messages['answer'] = "Válasz";
$messages['setquestionshelp'] = "Adja meg a jelszó módosításhoz szükséges kérdést és választ <a href=\"?action=resetbyquestions\">itt</a>.";
$messages['answerrequired'] = "Kérem, írjon be egy választ";
$messages['questionrequired'] = "Kérem, válasszon ki egy kérdést";
$messages['passwordrequired'] = "Jelszó megadás kötelező";
$messages['answermoderror'] = "A válasz nem lett elmentve";
$messages['answerchanged'] = "A válasz elmentve";
$messages['answernomatch'] = "Nem megfelelő válasz";
$messages['resetbyquestionshelp'] = "Új jelszó megadásához válasszon egy kérdést és adja meg a megfelelő választ. A funkció csak akkor működik, ha korábban <a href=\"?action=setquestions\">beállított legalább egy kérdést</a>.";
$messages['changehelp'] = "Kérem, írja be régi jelszavát és adjon meg egy újat.";
$messages['changehelpreset'] = "Elfelejtett jelszó?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">Jelszó megváltoztatásához válaszoljon a kérdésre</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">Jelszó megváltoztatása E-mailen keresztül</a>";
$messages['changehelpsms'] = "<a href=\"?action=sendsms\">Jelszó megváltoztatása SMS-en keresztül</a>";
$messages['resetmessage'] = "Kedves {login},\n\nKattintson ide a jelszava megváltoztatásához:\n{url}\n\nTekintse tárgytalannak az e-mailt, amennyiben nem Ön kezdeményezte a jelszóváltoztatást,";
$messages['resetsubject'] = "Jelszó megváltoztatása";
$messages['sendtokenhelp'] = "Kérem, írja be a felhasználónevét és e-mail címét jelszava megújításához. A további teendőket e-mailben kapja meg.";
$messages['mail'] = "E-mail";
$messages['mailrequired'] = "E-mail cím megadása kötelező";
$messages['mailnomatch'] = "Az e-mail cím / felhasználónév páros hibás.";
$messages['tokensent'] = "Visszaigazoló email kiküldve";
$messages['tokennotsent'] = "Hiba a visszaigazoló email küldése közben";
$messages['tokenrequired'] = "Kód hiányzik";
$messages['tokennotvalid'] = "Kód nem megfelelő";
$messages['resetbytokenhelp'] = "Az e-mailben kapott link segítségével új jelszót állíthat be. Új link kéréséhez, <a href=\"?action=sendtoken\">kattintson ide</a>.";
$messages['resetbysmshelp'] = "Az SMS-ben kapott kóddal új jelszót állíthat be. Új kód kéréséhez <a href=\"?action=sendsms\">kattintson ide</a>.";
$messages['changemessage'] = "Tisztelt {login},\n\nA jelszava megváltozott.\n\nAmennyiben nem Ön kezdeményezte jelszava megváltoztatását, kérem, lépjen kapcsolatba az oldal adminisztrátorával!";
$messages['changesubject'] = "Jelszava sikeresen módosítva.";
$messages['badcaptcha'] = "A reCAPTCHA helytelen. Kérem, próbálja meg újra.";
$messages['notcomplex'] = "A jelszó nem elég komplex. Kérem, használjon kis- és nagybetűket, számokat vagy speciális karaktereket.";
$messages['policycomplex'] = "A jelszó a következő karaktertípusokat tartalmazhatja: kisbetű, nagybetű, szám vagy speciális karakter. Ezek közül válasszon ki legalább ennyit:";
$messages['sms'] = "SMS szám";
$messages['smsresetmessage'] = "Jelszava megváltoztatásához írja be az alábbi kódot:";
$messages['sendsmshelp'] = "Írja be felhasználónevét, majd az SMS-ben kapott aktiváló kódot.";
$messages['smssent'] = "Aktiváló kód SMS-ben kiküldve";
$messages['smsnotsent'] = "Hiba az SMS küldése közben";
$messages['smsnonumber'] = "Mobilszám nem található";
$messages['userfullname'] = "Teljes név";
$messages['username'] = "Felhasználónév";
$messages['smscrypttokensrequired'] = "A crypt_tokens beállítás nélül nem használhatod az SMS küldést";
$messages['smsuserfound'] = "Kérem, ellenőrizze a beírt adatok helyességét, majd kattintson a küldés gombra.";
$messages['smstoken'] = "SMS kód";
$messages['nophpmbstring'] = "Telepítse fel a PHP mbstring-et";
$messages['menuquestions'] = "Question";
$messages['menutoken'] = "E-mail";
$messages['menusms'] = "SMS";
$messages['nophpxml'] = "A program használatához telepíteni kell a PHP XML csomagot";
$messages['tokenattempts'] = "Invalid token, try again";
$messages['emptychangeform'] = "Change your password";
$messages['emptysendtokenform'] = "Email a password reset link";
$messages['emptyresetbyquestionsform'] = "Reset your password";
$messages['emptysetquestionsform'] = "Set your password reset questions";
$messages['emptysendsmsform'] = "Get a reset code";
$messages['sameaslogin'] = "Your new password is identical to your login";
$messages['policydifflogin'] = "Your new password may not be the same as your login";
$messages['changesshkeymessage'] = "Tisztelt {login}, \n\nA SSH kulcs megváltozott. \n\nHa nem Ön kezdeményezte ezt a változást, kérje a rendszergazda azonnal.";
$messages['menusshkey'] = "SSH kulcs";
$messages['changehelpsshkey'] = "<a href=\"?action=changesshkey\">Változtasd meg SSH kulcs</a>";
$messages['sshkeychanged'] = "Az SSH kulcs megváltozott";
$messages['sshkeyrequired'] = "SSH kulcs szükséges";
$messages['changesshkeysubject'] = "Az SSH kulcs megváltozott";
$messages['sshkey'] = "SSH kulcs";
$messages['emptysshkeychangeform'] = "Változás az SSH kulcs";
$messages['changesshkeyhelp'] = "Írja be a jelszót és az új SSH kulcs.";
$messages['sshkeyerror'] = "SSH kulcs elutasította az LDAP címtár";
$messages['keyinvalid'] = "Az SSH kulcs érvénytelen";
$messages['keytoosmall'] = "Az SSH kulcs bitmérete túl kicsi";
$messages['sshkeypolicy'] = "Az SSH kulcsnak meg kell felelnie az alábbi korlátozásoknak:";
$messages['sshkeypolicyminbits'] = "Az SSH kulcs legkisebb bites mérete:";
$messages['sshpubkey'] = "SSH nyilvános kulcs";
$messages['sshkeyexample'] = "SSH kulcs (meg kell kezdeni: ssh-rsa AAAA ...)";
?>
