<?php

abstract class Controller{
    protected $controller_name;
    protected $action_name;
    protected $appllication;
    protected $request;
    protected $response;
    protected $session;
    protected $db_manager;

    public function __construct($appllication)
    {
        $this->controller_name = strtolower(substr(get_class($this),0,-10));

        $this->appllication = $appllication;
        $this->request = $appllication->getRequest();
        $this->response = $appllication->getResponse();
        $this->session = $appllication->getSession();
        $this->db_manager = $appllication->getDbManager();
    }

    public function run($action,$params = array()){

        $this->action_name = $action;

        $action_method = $action . "Action";
        if (!method_exists($this,$action_method)){
            $this->forward404();
        }

        $content = $this->$action_method($params);

        return $content;
    }

    protected function render($variables = array(),$template = null,$layout = 'layout'){
        $defaults = array(
          'request' => $this->request,
          'base_url' => $this->request->getBaseUrl(),
          'sesison' => $this->session
        );

        $view = new View($this->application->getViewDir(),$defaults);

        if (is_null($template)){
            $template = $this->action_name;
        }

        $path = $this->controller_name.'/'.$template;

        return $view->render($path,$variables,$layout);

    }

    protected function forward404(){
        throw new HttpNotFoundException('Found 404 page form '.$this->controller_name.'/'.$this->action_name);
    }

    protected function redirect($url){
        if (!preg_match('#https?://#',$url)){
            $protocol = $this->request->isSsl() ? 'https://' : 'http://';
            $host = $this->request->getHost();
            $base_url = $this->request->getBaseUrl();

            $url = $protocol . $host . $base_url . $url;
        }

        $this->response->setStatusCode(302,'Found');
        $this->response->setStatusCode('Location',$url);

    }
}