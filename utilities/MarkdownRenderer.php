<?php

namespace app\utilities;
use yii\base\View;
use yii\base\ViewRenderer;
use yii\helpers\Markdown;

/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/28/2017
 * Time: 5:40 PM
 */
class MarkdownRenderer extends ViewRenderer
{

    /**
     * Renders a view file.
     *
     * This method is invoked by [[View]] whenever it tries to render a view.
     * Child classes must implement this method to render the given view file.
     *
     * @param View $view the view object used for rendering the file.
     * @param string $file the view file.
     * @param array $params the parameters to be passed to the view file.
     * @return string the rendering result
     */
    public function render($view, $file, $params)
    {
        return Markdown::process(file_get_contents($file));
    }
}