<?php


namespace app\services;


class RenderServices implements RenderInt
{
    public function render($template, $params = [])
    {
        $content = $this->renderTpl($template, $params);

        $title = 'Общий';
        if (!empty($params['title'])) {
            $title = $params['title'];
        }

        return $this->renderTpl(
            'layouts/main',
            [
                'content' => $content,
                'title' => $title,
            ]
        );
    }

    public function renderTpl($template, $params = [])
    {
        ob_start();
        extract($params);
        include dirname(__DIR__) . '/views/' . $template . '.php';
        return ob_get_clean();
    }
}