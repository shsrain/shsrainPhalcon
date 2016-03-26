<?php

$router->add(
    "/admin?([a-zA-Z0-9_-]*)/?([a-zA-Z0-9_]*)(/.*)*",
    array(
        'module'     => 'backend',
        'controller' => 'index',
        'action'     => 'index'
    )
);

$router->add(
    "/:module/:controller/:action/:params",
    array(
        'module'     => 1,
        'controller' => 2,
        'action'     => 3,
        'params'     => 4
    )
);

$router->add(
    "/admin/login",
    array(
        'module'     => 'backend',
        'controller' => 'Login',
        'action'     => 'index'
    )
);

$router->add(
    "/admin/site/config",
    array(
        'module'     => 'backend',
        'controller' => 'Config',
        'action'     => 'edit'
    )
);

$router->add(
    "/admin/site/config/update",
    array(
        'module'     => 'backend',
        'controller' => 'Config',
        'action'     => 'update'
    )
);

$router->add(
    "/admin/view/position/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Posid',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/db/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Database',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/document/channel/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Category',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/document/type/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Type',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/document/module/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Module',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/document/article/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'article',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/site/language/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Lang',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/site/menu/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Menu',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/member/:action/:params",
    array(
        'module'     => 'backend',
        'controller' => 'User',
        'action'     => 1,
        'params'     => 2
    )
);

$router->add(
    "/admin/access/group/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Group',
        'action'     => 'index',
        'params'     => 1
    )
);

$router->add(
    "/admin/access/node/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Node',
        'action'     => 'index',
        'params'     => 1
    )
);

$router->add(
    "/admin/view/block/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Node',
        'action'     => 'index',
        'params'     => 1
    )
);

$router->add(
    "/admin/view/page/:params",
    array(
        'module'     => 'backend',
        'controller' => 'Node',
        'action'     => 'index',
        'params'     => 1
    )
);

$router->add(
    "/admin/dologin",
    array(
        'module'     => 'backend',
        'controller' => 'Login',
        'action'     => 'login'
    )
);

$router->add(
    "/admin/logout",
    array(
        'module'     => 'backend',
        'controller' => 'Login',
        'action'     => 'logout'
    )
);
