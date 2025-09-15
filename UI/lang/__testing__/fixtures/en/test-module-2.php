<?php
/**
 * Second test module for cross-module duplicate testing
 */

return [
    // Cross-module duplicate (should be reported)
    'TEST_CROSS_MODULE_KEY' => 'This key appears in multiple modules',
    
    // Normal unique key
    'TEST_UNIQUE_KEY_2' => 'This key is unique to module 2',
    
    // Another dynamic key that should be ignored
    'APP_3_UPDATE' => 'App 3 update',
];
