<?php

/* * Created Date: 2018-01-18 * Author: liboy * */

class ThinkPhpValetDriver extends ValetDriver
{
    /**
     * Determine if the driver serves the request.
     *
     * @param  string  $sitePath
     * @param  string  $siteName
     * @param  string  $uri
     * @return bool
     */
    public function serves($sitePath, $siteName, $uri)
    {

        return file_exists($sitePath.'/ThinkPHP');
    }

    /**
     * Determine if the incoming request is for a static file.
     *
     * @param  string  $sitePath
     * @param  string  $siteName
     * @param  string  $uri
     * @return string|false
     */
    public function isStaticFile($sitePath, $siteName, $uri)
    {
        if (file_exists($staticFilePath = $sitePath.$uri) && is_file($staticFilePath)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     *
     * @param  string  $sitePath
     * @param  string  $siteName
     * @param  string  $uri
     * @return string
     */
    public function frontControllerPath($sitePath, $siteName, $uri)
    {
 if(strpos($uri,'/Users/liboy/.composer/vendor/laravel/valet')>=0){
 $uri=str_replace('/Users/liboy/.composer/vendor/laravel/valet','',$uri);
        }
        $_SERVER['SCRIPT_FILENAME'] = $sitePath.'/index.php';
        $_SERVER['SERVER_NAME'] = $_SERVER['HTTP_HOST'];
        $_SERVER['SCRIPT_NAME'] = '/index.php';
        $_SERVER['PHP_SELF'] = '/index.php';
        $_GET['s'] = $uri;
        return $sitePath.'/index.php';


    }

}