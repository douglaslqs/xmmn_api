<?php
return array(
    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/api/doc',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Api',
                        'action'     => 'index',
                    ),
                ),
            ),
            'login' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/auth[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Auth',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'consultor' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/consultor[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Consultor',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'categoria' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/categoria[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Categoria',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'produto' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/produto[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Produto',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'estoque' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/estoque[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Estoque',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'pedido' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/pedido[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Pedido',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'teste' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/teste[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Teste',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),
            'message' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/message[/:action[/:id][/:token]]',
                    'defaults' => array(
                        'controller' => 'Api\Controller\Message',
                        'action' => 'index',
                        'id' => null,
                        'token' => null,
                    )
                )
            ),

        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Api\Controller\Api'        => 'Api\Controller\ApiController',
            'Api\Controller\Message'    => 'Api\Controller\MessageController',
            'Api\Controller\Auth'       => 'Api\Controller\AuthController',
            'Api\Controller\Consultor'  => 'Api\Controller\ConsultorController',
            'Api\Controller\Categoria'  => 'Api\Controller\CategoriaController',
            'Api\Controller\Produto'    => 'Api\Controller\ProdutoController',
            'Api\Controller\Estoque'    => 'Api\Controller\EstoqueController',
            'Api\Controller\Pedido'    => 'Api\Controller\PedidoController',
            'Api\Controller\Teste'      => 'Api\Controller\TesteController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);