<?php
//array names
$names=["mohamed","salama","ahamed","ail","mousa"];
//exist name >> salama,mousa
if(in_array("salama",$names)and in_array("mousa",$names))
{
echo "existing values in array";
}
else
{
echo "not existing";
}
