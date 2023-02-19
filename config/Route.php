<?php 

namespace Config;

class Route
{   


    private $handler = false;

    public function __construct () 
    {

    }

    /**
     * Recebe como parametro um caminho para associar com o returno de uma pagina php simples.
     * @param string $path
     * @param string $view
     * @return string $view
     */
    protected function getHandler($path, $view) 
    {   
        $result = [
            'type' => 'error',
            'view' => 'Não Encontrado'
        ];
        $url = $_SERVER["REQUEST_URI"];
        if ($url === $path) {
            $this->handler = true;
            $result['type'] = 'Success';
            $result['data'] = $view . '.php';
        }

        return $result;
    }

    /**
     * Recebe um caminho e uma view, e repassa para associação com uma hendler caso o metodo seja valido.
     * @param string $path
     * @param string $view
     * @return void
     */
    public function get($path, $view)
    {   

        if ($_SERVER["REQUEST_METHOD"] !== 'GET') {
            return false;
        }

        $view = $this->getHandler($path, $view);

        if ($view['type'] === 'error') {
            return false;
        }
        return include_once (handler . $view['data']);
    }

    /**
     * Recebe um caminho e uma view, e repassa para associação com uma hendler caso o metodo seja valido.
     * @param string $path
     * @param string $view
     * @return void
     */
    public function post($path, $view)
    {   
        if ($_SERVER["REQUEST_METHOD"] !== 'POST') {
            return false;
        }

        $view = $this->getHandler($path, $view);
        
        if ($view['type'] === 'error') {
            return false;
        }
        return include_once (handler . $view['data']);
    }

    /**
     * 
     */
    function __destruct() 
    {
        if (!$this->handler) {
            return include_once (handler . '404.html');
        }
    }
}