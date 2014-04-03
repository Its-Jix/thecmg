<?php

/**
 * Implements theme_preprocess_html()
 *
 **/

function cmg_preprocess_html(&$vars, $hook)
{
  drupal_add_css(
    '//fonts.googleapis.com/css?family=Open+Sans:300,300italic,700,700italic',
    array('type' => 'external')
  );
}

/**
 * Implements theme_preprocess_page()
 *
 **/

function cmg_preprocess_page(&$variables) 
{
  if (arg(0) == 'user' && arg(1) == '') {
    $variables['title'] =t('');
  }
  if (arg(0) == 'user' && arg(1) == 'register') {
    $variables['title'] =t('');
  }
  if (arg(0) == 'user' && arg(1) == 'password') {
    $variables['title'] =t('');
  }
}


/**
 * Implements hook_theme()
 *
 **/

function cmg_theme() 
{
  $items = array();
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'cmg') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
      'cmg_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'cmg') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'cmg_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'cmg') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'cmg_preprocess_user_pass'
    ),
  );
  return $items;
}

function cmg_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('<h1 class="title">Log in to your CMG account</h1><p>Need an account? <a href="/user/register">Click here to create one</a>.</p>');
}

function cmg_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('<h1 class="title">Create a CMG account</h1>');
}

function cmg_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('<h1 class="title">Request a new password</h1><p>Need an account? <a href="/user/register">Click here to create one</a>.</p>');
  $vars['form']['actions']['submit']['#value'] = t('Submit');
}

/**
 * Implements hook_form_alter()
 *
 */

function cmg_form_alter(&$form, $form_state, $form_id)
{
  if ($form_id == "user_register_form" )
  {
    $form['#validate'][] = "validate_phone_numbers";
  }
}

function validate_phone_numbers(&$form, &$form_state)
{
  $phone_number = $form_state['input']['phone-Primary-1'];

  if ($phone_number != NULL)
  { 
    $pattern = '/(\d)?(\s|-)?(\()?(\d){3}(\))?(\s|-){1}(\d){3}(\s|-){1}(\d){4}/'; 

    if (!preg_match($pattern, $phone_number))
    {
      form_set_error('[phone-Primary-1]', t('Please format your phone as xxx-xxx-xxxx.'));
    }
  }
}
