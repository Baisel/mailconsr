<!DOCTYPE html>
<html>
	<head>
		<title>伝言板</title>
		<link type="text/css" rel="stylesheet" href="./dengonban.css">
	</head>

	<body>
		<h1 class="title">資料</h1>

		<table class="dengon">
		<tr>
			<!--<th style="width:50%">-->
			<th style="width:200px">誰の</th>
			<th style="width:700px">資料名</th>

		</tr>

      <?php
      $pieces = [
    0 => "bar",
    1 => "foo",
    2 => "ioji",
    3 =>  "kop",
    4 => "rkot",
    5 => "ko4io"
];
      $i1=0;
      $i2=0;
      $i3=0;
      $i=0;

      $kazu=count($pieces);
      $kazu=$kazu/3;


      for($i = 1; $i >= $kazu; $i--){
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
