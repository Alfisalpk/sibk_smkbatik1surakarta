<?php

if (!function_exists('set_active')) {
    function set_active($uri)
    {
        return service('uri')->getPath() === $uri ? 'active' : '';
    }
}


// if (!function_exists('set_active')) {
//     function set_active($uri)
//     {
//         return (service('uri')->getPath() === $uri || strpos(service('uri')->getPath(), $uri) === 0) ? 'active' : '';
//     }
// }

?>