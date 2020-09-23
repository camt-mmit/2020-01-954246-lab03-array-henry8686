<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
echo"Input number of data: ";
fscanf(STDIN,"%d",$data);
for($i=1;$i<=$data;$i++){
	echo"Input score ",$i,": ";
	fscanf(STDIN,"%f",$a);
	$sum+=$a;
}echo"The average score = ",$sum/$data;
?>