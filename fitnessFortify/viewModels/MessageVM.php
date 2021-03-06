<?php

/**
 * View model for error and status messages.
 *
 * @author MR
 * @version 171231
 */
class MessageVM {

    public $errorMsg;
    public $statusMsg;
        
    // User type constants used for switching in the controller.
    const ADMIN_USER = 'admin';
    const APPRAISER_USER = 'appraiser';
    const INVALID_LOGIN = 'invalid_login';
    
    public function __construct() {
        $this->errorMsg = '';
        $this->statusMsg = array();
    }

    public static function getErrorInstance() {
        $vm = new self();
        return $vm;
    }
}
