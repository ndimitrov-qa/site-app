<?php
require('client.php');
$api_key = '94c175a8-e264-4d84-8149-fb8e3b49f37c';
$company_name = $_POST['q']; // The company name you're searching for

$api = new companiesHouseApi($api_key);
$response = $api->send('/search/companies', ['q' => $company_name]); // Process API request
$company_list =array();
if(!empty($response))
{
	
	foreach($response['items'] as $company)
	{
		$company_list['company'][]= ['title' =>$company['title'],'established_year' => date("Y", strtotime($company['date_of_creation'])), 'company_number' =>$company['company_number'], 'address' =>base64_encode(json_encode($company['address']))];
	}
	
	
}

echo json_encode($company_list);
?>