<?php

include 'config.php';
include 'main.php';

index();

echo "$cyan\n Menu$red >$white ";
$input = trim(fgets(STDIN));
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
if ($input == 1 OR $input == 01){
    brute($input);
    echo "$cyan\n Menu$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        logfin($input);
    }
    elseif ($input == 2 OR $input == 02){
        dirscan($input);
    }
    elseif ($input == 3 OR $input == 03){
        shellscan($input);
    }
    elseif ($input == 4 OR $input == 04){
        subdoscan($input);
    }
}
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////    Scanner Menu    /////////////////////////////////////////////////
elseif ($input == 2 OR $input == 02){
    scan($input);
    echo "$cyan\n Menu$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        whois($input);
    }
    elseif ($input == 2 OR $input == 02){
        dnslookup($input);
    }
    elseif ($input == 3 OR $input == 03){
        host($input);
    }
    elseif ($input == 4 OR $input == 04){
        nmap($input);
    }
}
/////////////////////////////////////////////////    Scanner Menu    /////////////////////////////////////////////////
/////////////////////////////////////////////////   Endecode  Menu   /////////////////////////////////////////////////
elseif ($input == 3 OR $input == 03){
    endecode($input);
    echo "$cyan\n Menu$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        encode($input);
    }
}
/////////////////////////////////////////////////   Endecode  Menu   /////////////////////////////////////////////////
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
elseif ($input == 4 OR $input == 04){
    generator($input);
    echo "$cyan\n Menu$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 0 OR $input == 00){
        custgen($input);
    }
}
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
/////////////////////////////////////////////////    Miscellanous    /////////////////////////////////////////////////
elseif ($input == 'h' OR $input == '0h'){
    help($input);
}
elseif ($input == 'a' OR $input == '0a'){
    about($input);
}
/////////////////////////////////////////////////    Miscellanous    /////////////////////////////////////////////////
/////////////////////////////////////////////////       Bonus        /////////////////////////////////////////////////
elseif ($input == 'Hax0r' OR $input == 'hax0r'){
    mine($input);
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/archive/mine$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        bukalapak($input);
    }
    elseif ($input == 2 OR $input == 02){
        gojek($input);
    }
    elseif ($input == 3 OR $input == 03){
        frestea($input);
    }
    elseif ($input == 4 OR $input == 04){
        tokped($input);
    }
}
/////////////////////////////////////////////////       Bonus        /////////////////////////////////////////////////
?>
