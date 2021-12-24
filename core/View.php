<?php

namespace  Core;

class View
{
    public function render(Page $page)
    {
        return $this->renderLayout($page, $this->renderView($page));
    }

    private function renderLayout(Page $page, $content)
    {
        $layoutPath = $_SERVER['DOCUMENT_ROOT'] . "/project/layouts/{$page->layout}.php";

        if (file_exists($layoutPath)) {
            ob_start();
                $title = $page->title;
                include $layoutPath;
            return ob_clean();
        }
        return new \Exception('layout not found!!!!');
    }

    /**
     * @param Page $page
     * @return bool
     */
    private function renderView(Page $page)
    {
        $viewPath = $_SERVER['DOCUMENT_ROOT'] . "/project/views/{$page->view}.php";

        if (file_exists($viewPath)) {
            ob_start();
                $data = $page->data;
                extract($data); // массив в переменные
                include $viewPath; // подключаем файл с представлением
            return ob_clean();
        }
    }
}
