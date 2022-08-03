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
        mylog("Error: invalid ip. Not reporting the ip as this may help an exploit.");
        echo("You do not seem to be from this planet.");
        exit;
    }
    return $ipaddress;
}

function logBadLogin()
{
    global $GLOBALS;
    if(array_key_exists("badLoginLogFilePath",$GLOBALS)){
      $logspath=$GLOBALS["badLoginLogFilePath"];
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
