<style>
td{
    border: 1px solid red;
}
</style>
<?php

//下三角程序
echo "<table>";
for($i=1;$i<=9;$i++)
{
    echo "<tr>";
    for($j=1;$j<=$i;$j++)
    {
        echo "<td>".$j."×".$i."=".$j*$i."</td>";
    }
    echo "</tr>";
    
}
echo "</table>";