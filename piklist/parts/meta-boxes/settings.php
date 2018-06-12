<?php

/*
Title: Indstillinger
Post Type: footboard, plank_21mm, plank_16mm, parquet
*/

// Price
piklist('field', array(

  'type'  => 'number',
  'field' => 'price',
  'label' => 'Fra pris:'

));

// Frontpage slider
piklist('field', array(

  'type'  => 'radio',
  'field' => 'frontpage_slider',
  'label' => 'Vis i forside slideren?',
  'value' => 'no',

  'choices' => array(
    'yes' => 'Ja',
    'no'  => 'Nej',
  )

));