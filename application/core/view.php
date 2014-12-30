<?php

/**
 * Class View
 * Initial Setup Adopted from @link https://github.com/panique/mini/
 */
class View
{
    protected $_data = array();

    public function __construct($view_path, $_data = array())
    {
        $this->_data = $_data;

        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/' . $view_path .'.php';
        require APP . 'views/_templates/footer.php';
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->_data)) {
            return $this->_data[$name];
        }
    }
}
