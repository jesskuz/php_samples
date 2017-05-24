<?php
   // Recursive string reversal
   function reverse($string) {

      static $output = '';

      $split = str_split($string);

      $output .= array_pop($split);

      if (substr($output,-1,1) == $string) 
         return $output;

      return call_user_func(__FUNCTION__, implode($split));

   };

