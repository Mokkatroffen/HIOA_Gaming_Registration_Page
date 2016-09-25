<?php
//Simple functions to remove special characters, anti-hacking.


function test_input($data)
{
    $data = trim($data);
    return preg_replace('/[^A-Za-z0-9æøåÆØÅ\`\-\. ]/', '', $data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}


function test_date($data)
{
   $data = trim($data);
    return preg_replace('~^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$~','', $data);
    $data = htmlspecialchars($data);
}
function test_birth($data)
{
    $data = trim($data);
    return preg_replace('~^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$~','', $data);
    $data = htmlspecialchars($data);
}

?>
