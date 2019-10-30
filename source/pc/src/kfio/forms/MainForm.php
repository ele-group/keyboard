<?php
namespace kfio\forms;

use std, gui, framework, kfio;
use action\Animation; 


class MainForm extends AbstractForm
{

    /**
     * @event circle_close.mouseDown-Left 
     */
    function doCircle_closeMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        
        app()->shutdown();
    }

    /**
     * @event button_do.mouseDown-Left 
     */
    function doButton_doMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }




}
