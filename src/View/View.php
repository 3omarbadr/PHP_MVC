<?php

namespace PhpMvc\View;

class View
{

    public static function make($view, $params = [])
    {
        $baseContent = self::getBaseContent();
        $viewContent = self::getViewContent($view, $params);

        echo str_replace('{{content}}', $viewContent, $baseContent);
    }


    protected static function getBaseContent()
    {
        ob_start();
        include base_path() . 'views/layout/main.php';
        return ob_get_clean();
    }


    protected static function getViewContent($view, $params = [], $isError = false)
    {
        $path = $isError ? view_path() . '/errors' : view_path();

        if(str_contains($view, '.'))
        {
            $views = explode('.', $view);

            foreach ($views as $view) {
                var_dump($view);
            }
        }
    }
}
