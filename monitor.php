<?php
// Simulate changing variable value
$monitoredValue = rand(5, 500);

$bidder_value=300;

if ($monitoredValue>$bidder_value)
{
echo "You are less than the highest bid: $bidder_value|$monitoredValue";
}
elseif ($monitoredValue<$bidder_value)
{
echo "You are greater than the highest bid: $bidder_value|$monitoredValue";
}

?>
