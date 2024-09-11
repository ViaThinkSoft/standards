#!/usr/bin/php
<?php

$std_list = [];

foreach (glob('../'.'*.txt') as $f) {

	$cont = file_get_contents($f);

	$std['basename'] = substr(basename($f),0,-strlen('.txt'));
	$std['title'] = $f;

	$tmp = basename($f);
	$tmp = str_replace('viathinksoft-std-', '', $tmp);
	$tmp = substr($tmp,0,4);
	$std['no'] = $tmp;
	$std['title'] = preg_match('@=== (.+) ===@ismU', $cont, $m) ? trim($m[1]) : '???';;
	$std['state'] = preg_match('@State:\s*(.+)\n@ismU', $cont, $m) ? trim($m[1]) : '???';
	$std['revision'] = preg_match('@Revision:\s*(.+)\n@ismU', $cont, $m) ? trim($m[1]) : '???';
	$std['oid'] = preg_match('@OID:\s*(.+)\n@ismU', $cont, $m) ? trim($m[1]) : '???';
	$std['weid'] = preg_match('@WEID:\s*(.+)\n@ismU', $cont, $m) ? trim($m[1]) : '???';

	$std_list[] = $std;

}

// Create HTML page for each standard

foreach ($std_list as $std) {

ob_start();

?><!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $std['title']; ?></title>
	<style>

        /** === DESKTOP === */

        @media (min-width: 601px) {

        a, a:visited, a:link, a:active, a:hover {
            color: #046D95 !important;
        }

        body {
            color: black !important;
            background-color: #f5f5f5 !important;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
        }

        .page {
            width: 100%;
            max-width: 700px; /* 72 Zeichen Breite in Pixel (bei Desktop-Ansicht) */
            margin-bottom: 20px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: monospace;
            white-space: pre-wrap;
            overflow: hidden;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        }

        /** === MOBILE === */

        @media (max-width: 600px) {

        a, a:visited, a:link, a:active, a:hover {
            color: #046D95 !important;
        }

        body {
            color: black !important;
            background-color: #f5f5f5 !important;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .page {
            width: 100%;
            max-width: 100%; /* Ensures the page takes up full width on mobile */
            margin-bottom: 20px;
            padding: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: monospace;
            white-space: pre-wrap;
            overflow: auto; /* Ensures overflow is handled */
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 8.7px; /* Smaller font size for mobile */
        }

        }

    </style>

</head>

<body>

<span style="font-family:Verdana">&larr; <a href="index.html">Back to Standards index</a></span><br><br>

<div id="content">
<?php

$out = [];
exec('/usr/bin/python3 ./step2.py ../'.$std['basename'].'.txt', $out, $ec);
//exec('/usr/bin/python3 ./step2.py https://raw.githubusercontent.com/ViaThinkSoft/standards/main/'.$std['basename'].'.txt', $out, $ec);

// Let it look like pages
$str = implode("\n", $out);
$str = str_replace('<pre class="newpage">', '</div><div class="page">', $str);
$str = str_replace('<hr', '<span', $str);
$str = '<div class="container"><div class="page">'.$str.'</div></div>';

echo $str;

?>
</div>

</body>

</html><?php

$cont = ob_get_contents();
ob_end_clean();

file_put_contents('../'.$std['basename'].'.html', $cont);


}

// Create index page

ob_start()
?><!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ViaThinkSoft/Webfan Standards Collection</title>
	<style>
        a, a:visited, a:link, a:active, a:hover {
            color: #046D95 !important;
        }

	body {
		color: black !important;
		background-color: #f5f5f5 !important;
		font-family: Verdana;
	}
	</style>
</head>

<body>

<?php

echo '<h1>ViaThinkSoft/Webfan Standards Collection</h1>';

echo '<ul>';

foreach ($std_list as &$std) {

	$files = glob('../'.$std['basename'].'*');

	echo '<li><b>Std. '.trim($std['no'],'0').': '.htmlentities($std['title']).'</b><ul>'."\n";

	$std['view'] = [];
	$std['resources'] = [];
	foreach ($files as $f) {
		$g = substr($f, strlen('../'.$std['basename']));
		$shorts = ltrim(strtoupper($g),'.-');
		$item = '<a href="'.htmlentities(basename($f)).'">'.htmlentities($shorts).'</a>';
		if ($shorts == 'HTML') {
			$std['view'][] = '<b>'.$item.'</b>';
		} else if ($shorts == 'TXT') {
			$std['view'][] = $item;
		} else {
			$std['resources'][] = $item;
		}
	}

	if ($std['state'] == 'In Force') $color = 'green';
	if ($std['state'] == 'Deprecated') $color = 'red';
	echo '<li>State: <font color="'.$color.'">'.$std['state'].'</font></li>'."\n";
	echo '<li>Current Revision: '.$std['revision']."\n";
	echo '<br><font color="gray" size="-2">URN: <a href="https://hosted.oidplus.com/viathinksoft/?goto=urn%3Ax-viathinksoft%3Astd%3A'.$std['no'].'"><font color="gray">urn:x-viathinksoft:std:'.$std['no'].'</font></a>:'.explode(' ',$std['revision'])[0]."</font>\n";
	echo '<br><font color="gray" size="-2">OID: <a href="https://hosted.oidplus.com/viathinksoft/?goto=oid%3A'.$std['oid'].'"><font color="gray">'.$std['oid'].'</font></a>'."</font>\n";
	echo '<br><font color="gray" size="-2">WEID: '.$std['weid']."</font></li>\n";
	echo '<li>View: '.implode(', ',$std['view']).'</li>'."\n";
	echo '<li>Resources: '.implode(', ',$std['resources']).'</li>'."\n";
	echo '</ul><br></li>'."\n";

}

echo '</ul></body></html>';

$index_html = ob_get_contents();
ob_end_clean();

file_put_contents('../index.html', $index_html);



