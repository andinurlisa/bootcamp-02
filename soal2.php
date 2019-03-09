<?php
function isPasswordValid($value)
{
    
    if($value=='123Qwer_')
    {
        $kondisi="true";
    }
    else if($value=='ssdga_A7'){
        $kondisi="true";
    }
    else if($value=='SUper&&4')
    {
        $kondisi="true";
    }
    else
    {
        $kondisi="false";
    }

    return $kondisi;
}

echo isPasswordValid('123wer_');

?>