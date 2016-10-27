<?php
require_once 'helper.php';
//include 'helper.php';
function createTable($table,$thead,$tbody,$caption="")
{
	$html = '<table ';
	$html.=loopthroughAssoicate($table);
	$html .='>';
	$html .='<caption>'.$caption.'</caption>';
	// Populate Table Body
	$html .= '<thead><tr>';
	for($counter =0; $counter < sizeof($thead); $counter ++ )
	{
		$html .='<th>'.$thead[$counter].'</th>';
	}
	$html .= '</tr></thead>';
	// Populate Table Body
	
	$html.=generateTableBody($tbody);
	
	/*$html .='<tbody>';
	$noOfRows = sizeof($tbody);// Count number of rows
	for ($rowCounter =0; $rowCounter < $noOfRows; $rowCounter ++ )
	{
		if(($rowCounter % 2)==0) 
		  {
			  $rowStyle = "evenRow";
		  }
		  else
		  {
			 $rowStyle = "oddRow";
		  }
		
		$html .= '<tr class="'.$rowStyle.'">';
		$noOfCols = sizeof($tbody[$rowCounter]);// Count number of columns per row
		for ($colCounter =0; $colCounter < $noOfCols;$colCounter ++)
		{
			$html .= '<td>'.$tbody[$rowCounter][$colCounter].'</td>';
		}
		$html .= '</tr>';
		
	}
	$html .='</tbody>';*/
	$html .= '</table>';
	return $html;
}


function generateTableBody($tableData)
{
	
	$tablerows = sizeof($tableData);
		
	$html ='<tbody>';
	for($tablerow = 0; $tablerow< $tablerows; $tablerow++)
	{
		$tablecols = sizeof($tableData[$tablerow]);
		$rowStyle = "oddRow";
		if(($tablerow% 2)==0)
		{
			 $rowStyle = "evenRow";
		}
		$html .= "<tr class='".$rowStyle."'>";
		for($tablecol = 0; $tablecol < $tablecols; $tablecol++)
		{
			{
				$html .="<td>";
			}
			
			$html .= $tableData[$tablerow][$tablecol];
			$html .="</td>";
		}
		$html .='</tr>';
	}
	$html .='</tbody>';
	return $html;
}


?>

<?php 

/*$row1 = array('802.11a','5','20','Up to 54');
$row2 = array('802.11b','2.4','20','Up to 11');
$tableHeader = array('Wi-Fi<br>Standard','Frequency<br>(GHZ)','Bandwidth<br>(MHZ)','Speed<br>(Mbits <sup>-1</sup>)');
$tableData = array($row1,$row2);
$table = array('id'=>'WiFi table');

echo createTable($table,$tableHeader,$tableData,'Table 1 802.11 details');*/
?>


