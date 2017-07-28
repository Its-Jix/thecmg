<?php
/**
 * Test Generated example demonstrating the Setting.get API.
 *
 * Shows getting a variable for specified domains.
 *
 * @return array
 *   API result array
 */
function setting_get_example() {
  $params = array(
    'domain_id' => array(
      '0' => 1,
      '1' => 2,
    ),
    'return' => array(
      '0' => 'uniq_email_per_site',
    ),
  );

  try{
    $result = civicrm_api3('Setting', 'get', $params);
  }
  catch (CiviCRM_API3_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return array(
      'is_error' => 1,
      'error_message' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    );
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function setting_get_expectedresult() {

  $expectedResult = array(
    'is_error' => 0,
    'version' => 3,
    'count' => 2,
    'values' => array(
      '1' => array(
        'uniq_email_per_site' => 0,
      ),
      '2' => array(
        'uniq_email_per_site' => '1',
      ),
    ),
  );

  return $expectedResult;
}

/*
* This example has been generated from the API test suite.
* The test that created it is called "testCreateSettingMultipleDomains"
* and can be found at:
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/SettingTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
