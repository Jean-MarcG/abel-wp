<?php
/**
* The header
*
* @package Bathe
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen' ); ?>>
  <?php wp_body_open(); ?>



  <div class="lg:flex grow">
    <main id="primary" class="grow p-8" role="main">