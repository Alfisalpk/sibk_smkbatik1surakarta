<?php

if (!function_exists('in_groups')) {
    function in_groups($roles) {
        $session = session();
        $userRole = $session->get('role');
        
        if (is_array($roles)) {
            return in_array($userRole, $roles);
        } else {
            return $userRole == $roles;
        }
    }
}
?>
