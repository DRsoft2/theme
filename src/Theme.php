<?php
/**
 * Created by PhpStorm.
 * User:  Rabie dif <dif.rabie@gmail.com>
 * Date: 29/07/2017
 * Time: 14:07
 */

namespace Drsoft\Theme;

use App\Http\Requests;
use Session;
use Config;
class Theme
{
    public function display(){
        return "your theme is default";
    }
    public static function getCSSTheme($nametheme,$filename='style.css')
    {
        $path=str_replace('.',DIRECTORY_SEPARATOR,self::getPathTemplates());
        $path=resource_path('views'.DIRECTORY_SEPARATOR.$path.$nametheme.DIRECTORY_SEPARATOR);
        //return $path;
        return  response()->download($path.'assets'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.$filename);
    }
    public static function getJSTheme($nametheme,$filename='style.js')
    {
        $path=str_replace('.',DIRECTORY_SEPARATOR,self::getPathTemplates());
        $path=resource_path('views'.DIRECTORY_SEPARATOR.$path.$nametheme.DIRECTORY_SEPARATOR);
        // return $path;
        return  response()->download($path.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.$filename);
    }
    public static function getViewInTheme($pathView,$content_parametres=null,$header_content_parametres=null,$footer_content_parametres=null,$other_parametres=null)
    {

        $variables=['view_content'=>$pathView,
            'content_parametres'=>$content_parametres,
            'header_content_parametres'=>$header_content_parametres,
            'footer_content_parametres'=>$footer_content_parametres,
            'other_parametres'=>$other_parametres,
        ];

        return view(self::getViewerThemes(),['variables'=>$variables]);
    }
    public static function getPathThemes()
    {
        return Config::get('theme.root_path');
        // return 'layouts.themes.';
    }
    public static function getPathTemplates()
    {
        return self::getPathThemes().'templates.';
    }
    public static function getViewerThemes()
    {
        return self::getPathThemes().'viewer-theme';
    }
    public static function showViewForCss($view,$data)
    {
        return View(Self::getPathThemes().'viewer-css',compact('view','data'));
    }

}
