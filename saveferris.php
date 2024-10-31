<?php
/*
Plugin Name: Save Ferris Corner Ribbon
Plugin URI: 
Description: Places a banner for The Save Ferris Project in the upper right hand corner of the screen, and links to www.TheSaveFerrisProject.com fundraiser site.
Author: Davis Ray Sickmon, Jr, based on the work of Steven Noble
Version: 1.0
Author URI: http://www.TheSaveFerrisProject.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
if ( !isset( $_SESSION ) )
    $_SESSION = null;
if ( !is_array( $_SESSION ) )
    session_start();
$ribbon_url = plugins_url('saveferrisribbon.png', __FILE__ );
if(! is_admin() ) { echo("<a href='http://www.thesaveferrisproject.com' style='position: fixed; top: " . $padding_top ."px; right: 0; z-index: 100000; border:none;' title='Save Ferris! A fundraiser to retrain and employ a person in need!' target='_blank'><img src='{$ribbon_url}' style='position: fixed; top: ".$padding_top ."px; right: 0; z-index: 100000; border:none;' /></a>"); } ?>