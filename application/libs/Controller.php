<?php


class Controller
{
    function __construct()
    {
        // create a view object (that does nothing, but provides the view render() method)
        $this->view = new View();
    }

    /**
     * loads the model with the given name.
     * @param $name string name of the model
     */
    public function loadModel($name)
    {
        $path = MODELS_PATH . strtolower($name) . '_model.php';

        if (file_exists($path)) {
            require MODELS_PATH . strtolower($name) . '_model.php';

            $modelName = $name . 'Model';
            return new $modelName($this->db);
        }
    }
}
