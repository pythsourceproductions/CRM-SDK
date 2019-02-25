<?php
namespace crcmercury_sdk\forms;

use std, gui, framework, crcmercury_sdk;


class MainForm extends AbstractForm
{

    /**
     * @event closewindow.click-Left 
     */
    function doClosewindowClickLeft(UXMouseEvent $e = null)
    {    
        app()->shutdown();
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $this->form("MainForm")->transparent = 40;
    }



}
