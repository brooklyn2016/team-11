
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootswatch: Yeti</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="./static/css/custom/yeti-bootstrap.css" media="screen">
  <link rel="stylesheet" href="./static/css/custom/yeti-custom.min.css">

</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="../" class="navbar-brand">FreeTheSlaves</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li>
            <a href="../form.php">Form</a>
          </li>
          <li>
            <a href="../data.php">Data</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" target="_blank">Logout</a></li>
        </ul>

      </div>
    </div>
  </div>


  <div class="container">

  </div>


      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../assets/js/custom.js"></script>
      <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
      </html>
	  
<?php

$fileR = fopen("OutputFile.txt", "r") or die("Unable to open"); 
$FileContents= fread($fileR, filesize($fileR));
fclose($fileR);

$dataOutput = json_decode($FileContents, true);

echo "Organization: $dataOutput['organization']";
echo "Village/Settlement: $dataOutput['settlement']";
echo "District: $dataOutput['district']";
echo "Date this assessment was completed: $dataOutput['datecompleted']";
echo "Estimated population: $dataOutput['estimated_population']";
echo "Traffickers, whether from the village or from outside the village, cannot operate any more: $dataOutput['A1']";
echo "Question 1 comment: $dataOutput['A1textarea']";

?>
