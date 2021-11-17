<?php 
session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CPoppins:300,400,500,600,700%7CMuli:200,300,400,500">
    <link rel="stylesheet" href="stylecss/bootstrap.css">
    <link rel="stylesheet" href="stylecss/fonts.css">
    <link rel="stylesheet" href="stylecss/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>

      <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1519307/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
      <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1519307/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
      <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1519307/charts/8?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
     
</iframe>
  </body>
</html>