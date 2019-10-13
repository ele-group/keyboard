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
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeIn($this->progressBar_load, 250, function () use ($e, $event) {});
        $file=fopen("com3", "wb");
        fwrite($file, uiText($this->text_area));
        fclose($file);
        waitAsync(1000, function () use ($e, $event) {
            Animation::fadeOut($this->progressBar_load, 250, function () use ($e, $event) {});
        });
    }


}
