<?php
/**
 * Created by PhpStorm.
 * User:  Rabie dif <dif.rabie@gmail.com>
 * Date: 29/07/2017
 * Time: 14:11
 */
namespace Drsoft\Theme\Facades;
use  Illuminate\Support\Facades\Facade;
class Theme extends Facade{

  protected static function  getFacadeAccessor()
  {
      return 'drsoft-theme';
  }
}
