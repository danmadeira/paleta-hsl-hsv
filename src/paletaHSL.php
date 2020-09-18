<?php

ini_set('precision', 8);

require_once("ConversaoEspacoCor.class.php");

$cec = new ConversaoEspacoCor;

echo '<!DOCTYPE html><html><head><title>Paleta HSL</title>
<style>
/* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
  top: -5px;
  left: 105%; 
 
  /* Position the tooltip text - see examples below! */
  position: absolute;
  z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
}

.tooltip .tooltiptext::after {
  content: " ";
  position: absolute;
  top: 50%;
  right: 100%; /* To the left of the tooltip */
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent black transparent transparent;
}
</style>
</head><body>' . PHP_EOL;

for ($h = 0; $h <= 24; $h++) {
    $hue = $h * 15;
    echo '<table cellpadding="5em" style="text-align:center">' . PHP_EOL;
    echo '<tr><td colspan="2" style="text-align:left">Hue = '.$hue.'°</td><td colspan="21">Saturation</td></tr>' . PHP_EOL;
    echo '<tr><td>&nbsp;</td><td>&nbsp;</td>';
    for ($i = 0; $i <= 20; $i++) {
        $p = $i * 5;
    echo '<td>'.$p.'%</td>';
    }
    echo '</tr>' . PHP_EOL;
    for ($l = 1; $l <= 19; $l++) {
        echo '<tr>';
        if ($l == 1) {
            echo '<td rowspan="19">Lightness</td>';
        }
        $lightness = $l * 5;
        echo '<td>'.($lightness).'%</td>';
        for ($s = 0; $s <= 20; $s++) {
            $saturation = $s * 5;
            $rgb = $cec->hsltorgb(array('hue' => $hue, 'saturation' => $saturation, 'lightness' => $lightness));
            echo '<td style="background-color:rgb('.$rgb['red'].','.$rgb['green'].','.$rgb['blue'].')"><div class="tooltip">&nbsp;&nbsp;&nbsp;<span class="tooltiptext">'.$rgb['red'].','.$rgb['green'].','.$rgb['blue'].'</span></div></td>';
        }
        echo '</tr>' . PHP_EOL;
    }
    
    echo '</table><br><br>' . PHP_EOL;
    echo '</body></html>' . PHP_EOL;
}

