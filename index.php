<!DOCTYPE html>
<html>
	<head>
		<title>資料集</title>
		<link type="text/css" rel="stylesheet" href="./dengonban.css">
	</head>

	<body>
		<h1 class="title">Webエンジニアコース授業資料</h1>

		<table class="dengon">
		<tr>
			<!--<th style="width:50%">-->
			<th style="width:200px">誰の</th>
			<th style="width:700px">資料名</th>

	<!--	</tr>
    <tr>
    <td class="msg">sample</td>
    <td class="name"><a href= "not">添付ファイル集</a></td>
  </tr>-->

      <?php
      #$result = `ruby mid.rb`;
      #$fp = fopen("weo.txt", "a");

      #fwrite($fp,$result);
      #fclose($fp);

      $fp = fopen("weo.txt", "r");
      $file = file_get_contents('./weo.txt', FILE_USE_INCLUDE_PATH);
      $pieces = explode(" ", $file);

      fclose($fp);
      $i1=0;
      $i2=0;
      $i3=0;
      $i=0;

      $kazu=count($pieces);
      $kazu=$kazu/3;


      for($i = 1; $i <= $kazu; $i++){
        $i1=$i*1-1;
        $i2=$i*2-1;
        $i3=$i*3-1;
        print '<tr>';
        print  "<td class=\"msg\">$pieces[$i1]</td>";
        print "<td class=\"name\"><a href= \"$pieces[$i3]\">$pieces[$i2]</a></td>";
        print '</tr>';

      }

       ?>

		</tr>
		</table>
		<div class="footer">cnenn2-17</div>
	</body>
</html>
