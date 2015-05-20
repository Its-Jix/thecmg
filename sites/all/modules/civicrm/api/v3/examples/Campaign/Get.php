<?php
/**
 * Test Generated example of using campaign get API
 * *
 */
function campaign_get_example(){
$params = array(
  'title' => 'campaign title',
  'description' => 'Call people, ask for money',
  'created_date' => 'first sat of July 2008',
);

try{
  $result = civicrm_api3('campaign', 'get', $params);
}
catch (CiviCRM_API3_Exception $e) {
  // handle error here
  $errorMessage = $e->getMessage();
  $errorCode = $e->getErrorCode();
  $errorData = $e->getExtraParams();
  return array('error' => $errorMessage, 'error_code' => $errorCode, 'error_data' => $errorData);
}

return $result;
}

/**
 * Function returns array of result expected from previous function
 */
function campaign_get_expectedresult(){

  $expectedResult = array(
  'is_error' => 0,
  'version' => 3,
  'count' => 1,
  'id' => 2,
  'values' => array(
      '2' => array(
          'id' => '2',
          'name' => 'campaign_title',
          'title' => 'campaign title',
          'description' => 'Call people, ask for money',
          'is_active' => '1',
          'created_date' => '2013-07-28 08:49:19',
        ),
    ),
);

  return $expectedResult;
}


/*
* This example has been generated from the API test suite. The test that created it is called
*
* testGetCampaign and can be found in
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/CampaignTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api/explorer
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/