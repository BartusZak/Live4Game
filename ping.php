<?php

function ping($host,$port=10011,$timeout=2)
{
        @$fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
        if (!$fsock)
        {
                echo 'STATUS: <span style="color:#ff0c0c;">OFFLINE</span><br />
				IP: live4game.pl<br />
				<span style="color:#ff0c0c;">Aktualnie trwa przerwa techniczna!</span><br /><br />';
        }
        else
        {
                echo 'STATUS: <span style="color:#51ff0c;">ONLINE</span><br />
				IP: live4game.pl<br /><br />
				Serwery Team-Speak najwyższej jakości!<br /><br />';
        }
}

echo ping("217.160.252.177");
?>