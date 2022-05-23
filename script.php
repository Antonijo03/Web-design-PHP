<link rel="stylesheet" href="style.css" type = "text/css">

<?php
    if(isset($_POST['pohrana'])){
        $prezimena = array($_POST['prezime1'], $_POST['prezime2'], $_POST['prezime3'], $_POST['prezime4'], $_POST['prezime5'], $_POST['prezime6'], $_POST['prezime7'], $_POST['prezime8'], $_POST['prezime9'], $_POST['prezime10']);
        $imena = array($_POST['ime1'], $_POST['ime2'], $_POST['ime3'], $_POST['ime4'], $_POST['ime5'], $_POST['ime6'], $_POST['ime7'], $_POST['ime8'], $_POST['ime9'], $_POST['ime10']);
        $visine = array($_POST['visina1'], $_POST['visina2'], $_POST['visina3'], $_POST['visina4'], $_POST['visina5'], $_POST['visina6'], $_POST['visina7'], $_POST['visina8'], $_POST['visina9'], $_POST['visina10']);
        $mase = array($_POST['masa1'], $_POST['masa2'], $_POST['masa3'], $_POST['masa4'], $_POST['masa5'], $_POST['masa6'], $_POST['masa7'], $_POST['masa8'], $_POST['masa9'], $_POST['masa10']);
        $bmi = array((round(($mase[0] / $visine[0] / $visine[0] * 10000),2)), (round(($mase[1] / $visine[1] / $visine[1] * 10000),2)), (round(($mase[2] / $visine[2] / $visine[2] * 10000),2)), (round(($mase[3] / $visine[3] / $visine[3] * 10000),2)),(round(($mase[4] / $visine[4] / $visine[4] * 10000),2)), (round(($mase[5] / $visine[5] / $visine[5] * 10000),2)), (round(($mase[6] / $visine[6] / $visine[6] * 10000),2)),(round(($mase[7] / $visine[7] / $visine[7] * 10000),2)),(round(($mase[8] / $visine[8] / $visine[8] * 10000),2)), (round(($mase[9] / $visine[9] / $visine[9] * 10000),2)));


        echo '<table style="text-align:center;margin-left:auto; margin-right:auto;margin-top:10vh;font-size:1vw;border:1px black solid;border-collapse:collapse;padding: 15px;margin-top: 10px;"><td style = "border: 1px black solid; padding:5px; color:whitesmoke; background-color: rgb(7,7,61); width:7vw;">Prezime</td><td style = "border: 1px black solid; padding:5px; color:whitesmoke; background-color: rgb(7,7,61); width:7vw;">Ime</td><td style = "border: 1px black solid; padding:5px; color:whitesmoke; background-color: rgb(7,7,61); width:7vw;">Visina [cm]</td><td style = "border: 1px black solid; padding:5px; color:whitesmoke; background-color: rgb(7,7,61); width:7vw;">Masa [kg]</td><td style = "border: 1px black solid; padding:5px; color:whitesmoke; background-color: rgb(7,7,61); width:7vw;">BMI</td><tr><td>' . $prezimena[0] . '</td><td>' . $imena[0] . '</td><td>' . $visine[0] . '</td><td>' . $mase[0] . '</td><td>' . $bmi[0] . '</td></tr><tr><td>' . $prezimena[1] . '</td><td>' . $imena[1] . '</td><td>' . $visine[1] . '</td><td>' . $mase[1] . '</td><td>' . $bmi[1] . '</td></tr><tr><td>' . $prezimena[2] . '</td><td>' . $imena[2] . '</td><td>' . $visine[2] . '</td><td>' . $mase[2] . '</td><td>' . $bmi[2] . '</td></tr><tr><td>' . $prezimena[3] . '</td><td>' . $imena[3] . '</td><td>' . $visine[3] . '</td><td>' . $mase[3] . '</td><td>' . $bmi[3] . '</td></tr><tr><td>' . $prezimena[4] . '</td><td>' . $imena[4] . '</td><td>' . $visine[4] . '</td><td>' . $mase[4] . '</td><td>' . $bmi[4] . '</td></tr><tr><td>' . $prezimena[5] . '</td><td>' . $imena[5] . '</td><td>' . $visine[5] . '</td><td>' . $mase[5] . '</td><td>' . $bmi[5] . '</td></tr><tr><td>' . $prezimena[6] . '</td><td>' . $imena[6] . '</td><td>' . $visine[6] . '</td><td>' . $mase[6] . '</td><td>' . $bmi[6] . '</td></tr><tr><td>' . $prezimena[7] . '</td><td>' . $imena[7] . '</td><td>' . $visine[7] . '</td><td>' . $mase[7] . '</td><td>' . $bmi[7] . '</td></tr><tr><td>' . $prezimena[8] . '</td><td>' . $imena[8] . '</td><td>' . $visine[8] . '</td><td>' . $mase[8] . '</td><td>' . $bmi[8] . '</td></tr><tr><td>' . $prezimena[9] . '</td><td>' . $imena[9] . '</td><td>' . $visine[9] . '</td><td>' . $mase[9] . '</td><td>' . $bmi[9] . '</td></tr></table>';

        echo '<br><br><br>';

        echo '<h3 style = margin-left:10vw>Pretili učenici su: <br><br></h3>';

        for ($i=0; $i < sizeof($bmi); $i++) { 
            if($bmi[$i] > 30){
                echo '<p style = margin-left:12.5vw>' . $imena[$i]. ' '. $prezimena[$i]. ' ' .'[BMI: '. $bmi[$i]. ']</p>';
            }
        }
        
        }
?>