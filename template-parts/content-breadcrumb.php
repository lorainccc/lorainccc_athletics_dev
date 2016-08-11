<?php
   //LCCC Custom Breadcrumb Display Code
  if (function_exists('lccc_breadcrumb')){
    if (is_home() || is_front_page()) {
     echo lccc_breadcrumb() . get_bloginfo('name') ;
    } else {
     echo lccc_breadcrumb() . "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > " . get_the_title() ;
    };
   };
  ?>