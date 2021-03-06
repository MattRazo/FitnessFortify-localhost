<?php

/**
 * Contains GET request allow-list for the guitarShop application.
 * 
 * @author MR
 * @version 210220
 */
class AllowList {
    
    // Set the allow list.
   private static $allowList = array('listProducts', 'viewProduct', 'login', 'addProduct',
    		'register', 'deleteProduct', 'gallery', 'logout', 'file' , 'showEditProduct');
    
    public static function getList() {
        return self::$allowList;
    }
}