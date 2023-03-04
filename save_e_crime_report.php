<?php
require_once("../libraries/Pdf.php");

/*require_once("../individual_connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	error_log('Crimecheck URL: Full post object: '.print_r($_POST, true));
	$data = $_POST['data'];
	$data = json_decode($data);
	error_log('crimecheck_url: request ID from data: '.$data->requestId);
	error_log('downloadLink ghgghghghguut: '.$data->downloadLink);*/

	$name='smita';
	$mobile_no='7020097679';
	$type='employee';
	$amount='2000';
	$to_email_id='smitapawar926@gmail.com';
	
	$output='<div style="border:1px solid;width:75%;margin: auto;padding: 10px;"><div <img  src="miscos.png" alt="logo" class="miscos"><h2  align="center" style="height:10px;">MISCOS TECHNOLOGIES PVT.LTD.</h2>';
			 $output.='<p align="center" style="margin:0px;padding:0px;font-weight:bold;font-size:12px;height:20px;margin-top:40px;">Invoice For Advertisement</p></div><hr>';
			 $output.='<p style="font-weight:bold;font-size:12px;height:20px;float:right;padding-right:10%;">Date : '.date('d-m-Y').'</p>';
								$output.='<table width="100%" cellspacing="5" cellpadding="5" style="margin-bottom:50px;"></table>';
			
				$output.='
				<div style="display:flex;"><div><table style="font-family: arial, sans-serif;border-collapse: collapse;width: 50%;margin: auto;margin-bottom:50px;margin-left:10px; border:1px solid;">
			    <tr>
					<td style="border: 1px solid black;text-align: left;padding: 8px;width:1%;background-color:#0064b2;color:#ffffff;">'.$name.'</td>
					<td style="border: 1px solid black;text-align: left;padding: 8px;width:1%;">'.$mobile_no.'</td>
					
				</tr></table></div><div style="margin-left:100px;"><table style="font-family: arial, sans-serif;border-collapse: collapse;width: 50%;margin: auto;margin-bottom:50px;margin-left:10px; border:1px solid;">
			    <tr>
					<td style="border: 1px solid black;text-align: left;padding: 8px;width:1%;background-color:#0064b2;color:#ffffff;">Name</td>
					<td style="border: 1px solid black;text-align: left;padding: 8px;width:1%;">Dummy </td>
					
				</tr></table></div></div>';
			
			$output .= '<table><h3 style="padding-left:50px;margin-bottom:20px;">Total Cases: '.$data->numberOfCases.'</h3><h4 style="font-family: arial, sans-serif;border-collapse: collapse;width:50px;margin: auto;margin-bottom:10px;">Case Details:</h4>
			<table style="font-family: arial, sans-serif;border-collapse: collapse;width: 90%;margin: auto;margin-bottom:50px;">
			  <tr>
				<th style="border: 1px solid black;text-align: center;padding: 8px;width:1%;">Sr.No.</th>
				<th style="border: 1px solid black;text-align: center;padding: 8px;width:26%;">Case Details</th>
				<th style="border: 1px solid black;text-align: center;padding: 8px;width:26%;">Petitioner</th>
				<th style="border: 1px solid black;text-align: center;padding: 8px;width:26%;">Respondent</th>
				<th style="border: 1px solid black;text-align: center;padding: 8px;width:10%;">Status</th>
			  </tr>';
			  echo ">>".$len=sizeof($data->caseDetails);
			  for($i=0;$i<$len;$i++)
			  {
					$total=$total+$amount;
				  $output.=' <tr>
					<td style="border: 1px solid black;text-align: left;padding: 8px;width:1%;">'.$i.'. '.$type.'</td>
					<td style="border: 1px solid black;text-align: center;padding: 8px;width:26%;">Rs. '.$amount.'</td>
					<td style="border: 1px solid black;text-align: center;padding: 8px;width:26%;">Rs. '.$amount.'</td>
					<td style="border: 1px solid black;text-align: center;padding: 8px;width:26%;">Rs. '.$amount.'</td>
					<td style="border: 1px solid black;text-align: center;padding: 8px;width:10 %;">Rs. '.$amount.'</td>
				  </tr>';
				  
				  
				}
	 
			  /*$output.='<tr>
				<th style="border: 1px solid black;text-align: right;padding: 8px;width:50%;">Total :</th>
				<th style="border: 1px solid black;text-align: center;padding: 8px;width:50%;">Rs.  '.$total.'</th>
			  </tr>*/
	  
			$output.='</table><footer  style=" border-top: 1px solid black;">
  <p align="center">Developed by miscos technologies</p>
</footer></div>';
			echo $output;
			//$this->pdf->loadHtml($output);
			//$this->pdf->render();
			//file_put_contents("abc".date('Y-m-d').".pdf", $this->output());
	
	
	/*$sql="UPDATE `v_e_crime_active_transaction_all` SET `verification_report`='".$data->downloadLink."',verification_status='Report Generated' WHERE `e_crime_request_id`='".$data->requestId."'";
	$res_sql=mysqli_query($conn1,$sql);
	if($res_sql==true)
	{
		error_log('success');
	}*/
	// Query in database for the above request ID, and mark it as complete
	// Save all relevant fields from the JSON, like downloadLink, risk category, case details
	
//}

?>
