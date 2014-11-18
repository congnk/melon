<?php 
$context="/php/melon" ;
print <<< dND
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Alice 例子</title>
    <link media="all" href="$context/css/one-debug.css" rel="stylesheet">
	<link media="all" href="http://aliceui.org/button/dist/button.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" media="screen" href="http://aliceui.org/button/src/ui-button-green.css">
	<!--link media="all" href="https://a.alipayobjects.com/alice/one/1.1.0/one.css" rel="stylesheet"-->
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script charset="utf-8" id="seajsnode"src="	
	http://static.alipayobjects.com/??seajs/seajs/2.1.1/sea.js,
seajs/seajs-combo/1.0.0/seajs-combo.js,
seajs/seajs-debug/1.0.0/seajs-debug.js,
seajs/seajs-style/1.0.0/seajs-style.js,
seajs/seajs-health/0.1.0/seajs-health.js">
</script>
	<style>
        
    </style>
	<script>
		seajs.config({
		alias: {
		  '$': 'gallery/jquery/1.7.2/jquery',
		  'position': 'arale/position/1.0.0/position',
		  'calendar':'arale/calendar/1.0.0/calendar',
		  'select':'arale/select/0.9.9/select',
		  "select.css":"alice/select/1.0.2/select.css",
		  "tabs":"arale/switchable/1.0.2/tabs",
		  "qrcode":"arale/qrcode/1.0.3/qrcode",
		  "dialog":'arale/dialog/1.2.6/dialog',
		  "confirmbox":'arale/dialog/1.2.6/confirmbox',
		  "tip":'arale/tip/1.2.2/tip',
		  "detector":'arale/detector/1.3.0/detector',
		  "autocomplete":'arale/autocomplete/1.3.0/autocomplete',
		  "upload":"arale/upload/1.1.1/upload",
		  "dialog.css": "css/dialog.css"
		}
	  });
  </script>
    </head>
<body>
dND
?>