<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 7/12/2017
 * Time: 10:52 AM
 */

namespace app\utilities;


use Symfony\Component\Yaml\Yaml;
use yii\web\Response;
use yii\web\ResponseFormatterInterface;

class YamlResponseFormatter implements ResponseFormatterInterface
{

    const FORMAT = 'yaml';

    /**
     * Formats the specified response.
     * @param Response $response the response to be formatted.
     */
    public function format($response)
    {
        $response->headers->set('Content-Type: apllication/yaml');
        $response->headers->set('Content-Disposition: inline');
        $response->content = Yaml::dump($response->data);

    }
}