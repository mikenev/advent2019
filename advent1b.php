<?php

function FuelCounterUpper($mass) {
	$fuelRequired = 0;
	while ($mass > 0) {
		$val = floor($mass / 3) - 2;
		if ($val < 0) { $val = 0; }

		$fuelRequired += $val;
		$mass = $val;
	}

	return $fuelRequired;

}

echo "One: 1969 " . FuelCounterUpper(1969) . "\r\n";
echo "Two: 100756 " . FuelCounterUpper(100756) . "\r\n";


$sum = 0;
$sum += FuelCounterUpper(50669);
$sum += FuelCounterUpper(83199);
$sum += FuelCounterUpper(108957);
$sum += FuelCounterUpper(102490);
$sum += FuelCounterUpper(121216);
$sum += FuelCounterUpper(57848);
$sum += FuelCounterUpper(76120);
$sum += FuelCounterUpper(121042);
$sum += FuelCounterUpper(143774);
$sum += FuelCounterUpper(106490);
$sum += FuelCounterUpper(76671);
$sum += FuelCounterUpper(119551);
$sum += FuelCounterUpper(109598);
$sum += FuelCounterUpper(124949);
$sum += FuelCounterUpper(148026);
$sum += FuelCounterUpper(119862);
$sum += FuelCounterUpper(112854);
$sum += FuelCounterUpper(96289);
$sum += FuelCounterUpper(73573);
$sum += FuelCounterUpper(142714);
$sum += FuelCounterUpper(109875);
$sum += FuelCounterUpper(126588);
$sum += FuelCounterUpper(69748);
$sum += FuelCounterUpper(62766);
$sum += FuelCounterUpper(104446);
$sum += FuelCounterUpper(61766);
$sum += FuelCounterUpper(133199);
$sum += FuelCounterUpper(118306);
$sum += FuelCounterUpper(141410);
$sum += FuelCounterUpper(64420);
$sum += FuelCounterUpper(129370);
$sum += FuelCounterUpper(69444);
$sum += FuelCounterUpper(104178);
$sum += FuelCounterUpper(109696);
$sum += FuelCounterUpper(54654);
$sum += FuelCounterUpper(126517);
$sum += FuelCounterUpper(138265);
$sum += FuelCounterUpper(87100);
$sum += FuelCounterUpper(130934);
$sum += FuelCounterUpper(138946);
$sum += FuelCounterUpper(118078);
$sum += FuelCounterUpper(135109);
$sum += FuelCounterUpper(137330);
$sum += FuelCounterUpper(130913);
$sum += FuelCounterUpper(50681);
$sum += FuelCounterUpper(53071);
$sum += FuelCounterUpper(63070);
$sum += FuelCounterUpper(144616);
$sum += FuelCounterUpper(64122);
$sum += FuelCounterUpper(122603);
$sum += FuelCounterUpper(86612);
$sum += FuelCounterUpper(144666);
$sum += FuelCounterUpper(62572);
$sum += FuelCounterUpper(72247);
$sum += FuelCounterUpper(79005);
$sum += FuelCounterUpper(102223);
$sum += FuelCounterUpper(82585);
$sum += FuelCounterUpper(54975);
$sum += FuelCounterUpper(68539);
$sum += FuelCounterUpper(107964);
$sum += FuelCounterUpper(148333);
$sum += FuelCounterUpper(100269);
$sum += FuelCounterUpper(134101);
$sum += FuelCounterUpper(115960);
$sum += FuelCounterUpper(75866);
$sum += FuelCounterUpper(99371);
$sum += FuelCounterUpper(56685);
$sum += FuelCounterUpper(142199);
$sum += FuelCounterUpper(102107);
$sum += FuelCounterUpper(84075);
$sum += FuelCounterUpper(112733);
$sum += FuelCounterUpper(92180);
$sum += FuelCounterUpper(131056);
$sum += FuelCounterUpper(142803);
$sum += FuelCounterUpper(145495);
$sum += FuelCounterUpper(70900);
$sum += FuelCounterUpper(73129);
$sum += FuelCounterUpper(60764);
$sum += FuelCounterUpper(77576);
$sum += FuelCounterUpper(99160);
$sum += FuelCounterUpper(61897);
$sum += FuelCounterUpper(78675);
$sum += FuelCounterUpper(100890);
$sum += FuelCounterUpper(74787);
$sum += FuelCounterUpper(131911);
$sum += FuelCounterUpper(93106);
$sum += FuelCounterUpper(91267);
$sum += FuelCounterUpper(142663);
$sum += FuelCounterUpper(130649);
$sum += FuelCounterUpper(103857);
$sum += FuelCounterUpper(81178);
$sum += FuelCounterUpper(78896);
$sum += FuelCounterUpper(73745);
$sum += FuelCounterUpper(84463);
$sum += FuelCounterUpper(92926);
$sum += FuelCounterUpper(121715);
$sum += FuelCounterUpper(74959);
$sum += FuelCounterUpper(71911);
$sum += FuelCounterUpper(89102);
$sum += FuelCounterUpper(53428);

echo "$sum\r\n";
