<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'email' => array(
    'from' => 'ashpathak6@gmail.com',
    'to' => 'dnayak1997n@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    'date' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Date',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'select' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'select',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    'text' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'text',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'text\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 7,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 8,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 9,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 10,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 11,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 12,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 13,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 14,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 15,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 16,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 17,
    'type' => 'string',
    'label' => 'radiobutton',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'radiobutton\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>