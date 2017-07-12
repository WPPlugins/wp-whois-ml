<?php
/*
Plugin Name: wp-whois-ml
Plugin URI: http://slammweb.net/wordpress-whois-widget.html
Version: 0.5
Author: D_slammer
Author URI: http://slammweb.net
*/

function my_domain_search() {
?>
<script type="text/javascript">
function show (block) {
  document.getElementById(block).style.display='';
  }
   function hide (block) {
  document.getElementById(block).style.display='none';
  }
</script>
<?
include ('default.php');
echo '<div class=whois_form> <form action="" method="post" >


               <center>'.$enter_dom.':&nbsp;www.<input name="domain_ip" type="text" size="20" />&nbsp;<input type="submit" class="button" name="submitBtn"  value="'.$l_check.'" /></center>
              <center>'.$dom_zon.' :

            <input type="checkbox" name="top_ru" checked="checked"/>&nbsp;.ru
             <input type="checkbox" name="top_su"/>&nbsp;.su
            <input type="checkbox" name="top_com"/>&nbsp;.com
            <input type="checkbox" name="top_net"/>&nbsp;.net
            <input type="checkbox" name="top_org" />&nbsp;.org
            <input type="checkbox" name="top_info"/>&nbsp;.info
            <input type="checkbox" name="top_name"/>&nbsp;.name
            <input type="checkbox" name="top_biz" />&nbsp;.biz
            <input type="checkbox" name="top_tv" />&nbsp;.tv				</center>


            </form>  </div>';
echo "<div class=whois_answer>";
   if(!empty($_POST['domain_ip'])) {

if ($_POST['top_ru']==TRUE){
sleep(1);
  $check_dom= $_POST['domain_ip'] .".ru";
$answer= whois("whois.ripn.net",$check_dom);
if (strpos ($answer,"No entries found for the selected source")==FALSE){

echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('ru')"><?echo $lbusy; ?></a>
 <div id="ru" style="display:none">
 <br><a href="javascript:hide ('ru')"> <?echo $laddit; ?> </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}
  if ($_POST['top_com']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".com";
$answer= whois("whois.verisign-grs.com",$check_dom);
if (strpos ($answer,"No match for")==FALSE){
 echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('com')"> <?echo $lbusy; ?> </a>
 <div id="com" style="display:none">
 <br><a href="javascript:hide ('com')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

 if ($_POST['top_su']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".su";
$answer= whois("whois.ripn.net",$check_dom);
if (strpos ($answer,"No entries found for the selected source")==FALSE){
 echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('su')"> <?echo $lbusy; ?> </a>
 <div id="su" style="display:none">
 <br><a href="javascript:hide ('su')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

   if ($_POST['top_net']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".net";
$answer= whois("whois.verisign-grs.com",$check_dom);
if (strpos ($answer,"No match for")==FALSE){
echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('net')"> <?echo $lbusy; ?> </a>
 <div id="net" style="display:none">
 <br><a href="javascript:hide ('net')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

   if ($_POST['top_org']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".org";
$answer= whois("whois.pir.org",$check_dom);
 if ((strlen($answer))>=20){

 echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('org')"> <?echo $lbusy; ?> </a>
 <div id="org" style="display:none">
 <br><a href="javascript:hide ('org')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

  if ($_POST['top_info']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".info";
$answer= whois("whois.afilias.net",$check_dom);
 if ((strlen($answer))>=20){
echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('info')"> <?echo $lbusy; ?> </a>
 <div id="info" style="display:none">
 <br><a href="javascript:hide ('info')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

   if ($_POST['top_name']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".name";
$answer= whois("whois.nic.name",$check_dom);
 if (strpos ($answer,"No match")==FALSE){
 echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('name')"> <?echo $lbusy; ?> </a>
 <div id="name" style="display:none">
 <br><a href="javascript:hide ('name')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

  if ($_POST['top_biz']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".biz";
$answer= whois("whois.biz",$check_dom);
if ((strlen($answer))>=1650){
 echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('biz')"> <?echo $lbusy; ?> </a>
 <div id="biz" style="display:none">
 <br><a href="javascript:hide ('biz')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
}

   if ($_POST['top_tv']==TRUE){

 sleep (1);
  $check_dom= $_POST['domain_ip'] .".tv";
$answer= whois("tvwhois.verisign-grs.com",$check_dom);
if (strpos ($answer,"No match for")==FALSE){
echo "<br>$ldom $check_dom";?>   <a href="javascript:show ('ru')"> <?echo $lbusy; ?> </a>
 <div id="tv" style="display:none">
 <br><a href="javascript:hide ('tv')"> <?echo $laddit; ?>  </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>$ldom $check_dom $l_free ";
    }
  }

}
 echo "</div>";
}

  function whois($url,$domain_ip){
  $sock = fsockopen($url, 43, $errno, $errstr);
    if (!$sock) exit("$errno($errstr)");
   else
   {
     fputs ($sock, $domain_ip."\r\n");
     $text = "";
     while (!feof($sock))
     {
       $text .= fgets ($sock, 128)."<br>";
     }
    fclose ($sock);
    $pattern = "|ReferralServer: whois://([^\n<:]+)|i";
     preg_match($pattern, $text, $out);
    if(!empty($out[1])) return whois($out[1], $domain_ip);
    else return $text;
    }

}

 function widget_whois($args){
  extract($args, EXTR_SKIP);
  echo $before_widget;
  my_domain_search();
  echo $after_widget;
}

      function widget_whois_init(){
  wp_register_sidebar_widget(WHOIS_WIDGET_ID,__('WHOIS'),'widget_whois');
}
add_action("plugins_loaded", "widget_whois_init");
?>