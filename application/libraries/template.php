<?php

class template
{
    protected $_ciTemplate;

    function __construct()
    {
        $this->_ciTemplate = &get_instance();
    }

    function Tampilan($template = null, $data = null)
    {
        if ($template != null)
            $data['_content'] = $this->_ciTemplate->load->view($template, $data, TRUE);

        $data['_header'] = $this->_ciTemplate->load->view('template/header', $data, TRUE);
        // $data['_sidebar'] = $this->_ciTemplate->load->view('Template/sidebar', $data, TRUE);
        $data['_footer'] = $this->_ciTemplate->load->view('template/footer', $data, TRUE);
        $data['_template'] = $this->_ciTemplate->load->view('template/template', $data);
    }
}