<?php
if ( count(get_included_files()) === 1 ) die("Direct access forbidden");

function get_client_ip_env()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } elseif (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } elseif (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } elseif (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }
    if(!filter_var($ipaddress, FILTER_VALIDATE_IP)){
        echo("You do not seem to be from this planet. Bye bye.");
        // Not reporting further as this is probably an exploit attempt without a real IP. Thus, reporting bad logins is pointless as the outcome of the login attempt is unknown to the requester anyway.
        exit;
    }
    return $ipaddress;
}

function logBadLogin()
{
    global $GLOBALS;
    if(array_key_exists("badLoginLogPath",$GLOBALS['_MAX']['CONF']['ui'])&&
        !empty($GLOBALS['_MAX']['CONF']['ui']["badLoginLogPath"])){
        $logspath=$GLOBALS['_MAX']['CONF']['ui']["badLoginLogPath"];
    }
    else{
      return(false);
    }
    $error=false;
    $handle = fopen($logspath, 'a') or $error=true;
    if($error){
      return(false);
    }
    $message=get_client_ip_env();
    fwrite($handle, gmdate('U').": ".$message."\n");
    fclose($handle);
    return(true);
}
logBadLogin();
?>
