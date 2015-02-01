<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * core/MY_Controller.php
 * 
 * Default application controller.
 */

class MY_Controller extends CI_Controller
{
    protected $data    = array();
    protected $choices = array(
        'Guests'   => '/guest',
        'Gifts'    => '/gift',
        'Location' => '/location',
        'Login'    => '/login'
    );
    
    
    function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Sarah &amp; Jeff';
        $this->load->helper('menu');
    }
    
    
    /**
     * Render this page
     */
    function render()
    {
        $this->data['menu'] = build_menu_bar(
                $this->choices, $this->data['page_body']);
        
        $this->data['header']  = $this->parser->parse(
                '_header', $this->data, true);
        $this->data['content'] = $this->parser->parse(
                $this->data['page_body'], $this->data, true);
        $this->data['footer']  = $this->parser->parse(
                '_footer', $this->data, true);
        
        $this->data['data'] = &$this->data;
        
        $this->parser->parse('_template', $this->data);
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
