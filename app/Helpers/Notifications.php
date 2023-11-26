<?php

use App\Models\Maintenance;

if (!function_exists('notifications')) {
   function notifications()
   {
      return new Maintenance();
   }
}
