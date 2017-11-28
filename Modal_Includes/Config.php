<?php

/* Configuration File */

class Config
{
    // Database Connection
    public static $db_host      = 'localhost';
    public static $db_id        = 'root';
    public static $db_pw        = '';
    public static $db_name      = 'fifa';
    
    // Logo File Location
    public static $logo_path    = 'path here';
    
    // Table Name and Column for Insert
    public static $tb_name      = 'posts';
    public static $col_name     = array ('name','description','file_name');
    
    // Title of Modal
    public static $modal_title  = 'Add new item';
    
    // Global Text input limit
    public static $max_lg_limit = 100;
    
    // Image Path Save
    public static $Save_to      = 'Images/';
    
    public static $Return_to    = 'http://localhost/CKC';
    
}
?>