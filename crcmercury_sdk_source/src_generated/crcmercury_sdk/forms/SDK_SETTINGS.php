<?php
namespace crcmercury_sdk\forms;

use std, gui, framework, crcmercury_sdk;


class SDK_SETTINGS extends AbstractForm
{

    /**
     * @event closewindow.click-Left 
     */
    function doClosewindowClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('SDK_SETTINGS');

    }



}
