<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_ezpages.php 2982 2006-02-07 07:56:41Z birdbrain $
 *
 * BetterCategoriesEzInfo v1.3.5 added  2006-09-19  gilby
 * Modified by Anne (Picaflor-Azul.com) Responsive Sheffield Blue v1.0
 */
 
  $pointer = '<i class="fa fa-caret-right"></i>';
  // uncomment next line to add 1 space between image & text
  // $pointer .= '&nbsp;';

  $content = "";
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">';
  $content  .= "\n" . '<ul style="margin: 0; padding: 0; list-style-type: none;">' . "\n";
  for ($i=1, $n=sizeof($var_linksList); $i<=$n; $i++) { 
    $content .= '<li><div class="betterEzpages"><a href="' . $var_linksList[$i]['link'] . '">' . $pointer . $var_linksList[$i]['name'] . '</a></div></li>' . "\n" ;
  } // end FOR loop
  $content  .= '</ul>' . "\n";
  $content .= '</div>';
?>