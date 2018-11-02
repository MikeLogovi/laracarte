<?php
  if(!function_exists('page_title')){
      function page_title($title){
          $base_title=config('app.name')." | ";
          return $base_title.$title;
      }
  }
  if(!function_exists('set_route_active')){
     function set_route_active($route){
        return Route::is($route)? 'active':'';
     }
  }
