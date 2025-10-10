<?php

return [
  'title' => 'Registration - VDUHSC 2025',
  'description' => 'Register for Viet Duc University Hospital International Scientific Conference 2025. Fill in all required information to complete your registration.',
  'keywords' => 'VDUHSC 2025, registration, attend, conference, Viet Duc Hospital',

  'page_title' => 'Registration',
  'page_subtitle' => 'Registration Form',

  'form' => [
    'title' => 'Registration Form',
    'subtitle' => 'Registration Form',
    'required_note' => 'Please fill in all required fields',
    'required_note_en' => 'Please fill in all required fields',

    'fields' => [
      'full_name' => [
        'label' => 'Full name',
        'label_en' => 'Full name',
        'placeholder' => 'Enter your full name',
        'placeholder_en' => 'Enter your full name',
      ],
      'gender' => [
        'label' => 'Gender',
        'label_en' => 'Gender',
        'options' => [
          'male' => 'Male',
          'female' => 'Female',
          'other' => 'Other',
        ],
      ],
      'date_of_birth' => [
        'label' => 'Date of birth',
        'label_en' => 'Date of birth',
        'placeholder' => 'DD/MM/YYYY',
      ],
      'organization' => [
        'label' => 'Organization',
        'label_en' => 'Organization',
        'placeholder' => 'Enter your organization name',
        'placeholder_en' => 'Enter your organization name',
      ],
      'department' => [
        'label' => 'Department',
        'label_en' => 'Department',
        'placeholder' => 'Enter your department name',
        'placeholder_en' => 'Enter your department name',
      ],
      'title' => [
        'label' => 'Title',
        'label_en' => 'Title',
        'placeholder' => 'Enter your current title',
        'placeholder_en' => 'Enter your current title',
      ],
      'email' => [
        'label' => 'Email',
        'placeholder' => 'Enter your email address',
        'placeholder_en' => 'Enter your email address',
      ],
      'phone' => [
        'label' => 'Tel',
        'label_en' => 'Tel',
        'placeholder' => 'Enter your phone number',
        'placeholder_en' => 'Enter your phone number',
      ],
    ],

    'buttons' => [
      'submit' => 'Register',
      'submit_en' => 'Register',
      'reset' => 'Reset',
      'reset_en' => 'Reset',
    ],

    'messages' => [
      'success' => 'Registration successful! We will contact you soon.',
      'success_en' => 'Registration successful! We will contact you soon.',
      'error' => 'An error occurred. Please try again.',
      'error_en' => 'An error occurred. Please try again.',
    ],
  ],

  'success' => [
    'title' => 'Registration Successful!',
    'message' => 'Thank you for registering for VDUHSC 2025. Your registration has been received and is being processed.',
    'registration_code' => 'Your Registration Code',
    'next_steps' => 'What happens next?',
    'email_confirmation' => 'You will receive an email confirmation shortly',
    'phone_contact' => 'Our team will contact you via phone to confirm details',
    'event_updates' => 'You will receive updates about the event schedule',
    'back_home' => 'Back to Home',
    'register_another' => 'Register Another Person',
    'contact_title' => 'Need Help?',
    'contact_message' => 'If you have any questions or need assistance, please contact us:',
  ],
];
