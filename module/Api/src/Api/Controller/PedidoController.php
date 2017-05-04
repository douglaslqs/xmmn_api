<?php

namespace Api\Controller;


use Api\Models\PedidoModel;
use Api\Models\ProdutoModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Validator\StringLength;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

/**
 * @SWG\Resource(
 *     apiVersion="1.0",
 *     swaggerVersion="1.2",
 *     basePath="/Api"
 * )
 */


class PedidoController extends AbstractRestfulController {

    public function getAction()
    {
        $request = $this->getRequest();

        if($request->isGet()){
            $get = $params = $request->getContent();
            $parametros = json_decode($params);
            $pedidoModel = new PedidoModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

            if(isset($parametros->idLoja)){
                if($validatorStringLength->isValid($parametros->idLoja))
                    $filters['idLoja'] = $parametros->idLoja;
                else
                    $data['message']['ResponseError']['idLoja'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->idConsultor)){
                if($validatorStringLength->isValid($parametros->idConsultor))
                    $filters['idConsultor'] = $parametros->idConsultor;
                else
                    $data['message']['ResponseError']['idConsultor'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->dataPedido)){
                if($validatorStringLength->isValid($parametros->dataPedido))
                    $filters['dataPedido'] = $parametros->dataPedido;
                else
                    $data['message']['ResponseError']['dataPedido'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->dataPag)){
                if($validatorStringLength->isValid($parametros->dataPag))
                    $filters['dataPag'] = $parametros->dataPag;
                else
                    $data['message']['ResponseError']['dataPag'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->status)){
                if($validatorStringLength->isValid($parametros->status))
                    $filters['status'] = $parametros->status;
                else
                    $data['message']['ResponseError']['status'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->integracao)){
                if($validatorStringLength->isValid($parametros->integracao))
                    $filters['integracao'] = $parametros->integracao;
                else
                    $data['message']['ResponseError']['integracao'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->cancelado)){
                if($validatorStringLength->isValid($parametros->cancelado))
                    $filters['integracao'] = $parametros->cancelado;
                else
                    $data['message']['ResponseError']['cancelado'] = "Excedido máximo de Caracteres permitido";
            }

            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $pedidos = $pedidoModel->search($filters);

                        if(!empty($pedidos)){
                            $i = 0;
                            foreach($pedidos as $pedido){
                                $data['pedido'][$i]['idLoja'] = $pedido['idLoja'];
                                $data['pedido'][$i]['idConsultor'] = $pedido['idConsultor'];
                                $data['pedido'][$i]['dataPedido'] = $pedido['data'];
                                $data['pedido'][$i]['tipoEntrega'] = utf8_encode($pedido['tipoEntrega']);
                                $data['pedido'][$i]['formaEntrega'] = $pedido['formaEntrega'];
                                $data['pedido'][$i]['endereco'] = $pedido['endereco'];
                                $data['pedido'][$i]['numero'] = $pedido['numero'];
                                $data['pedido'][$i]['bairro'] = $pedido['bairro'];
                                $data['pedido'][$i]['cidade'] = utf8_encode($pedido['cidade']);
                                $data['pedido'][$i]['estado'] = $pedido['estado'];
                                $data['pedido'][$i]['cep']             = $pedido['cep'];
                                $data['pedido'][$i]['complemento']     = $pedido['complemento'];
                                $data['pedido'][$i]['tipo']            = utf8_encode($pedido['tipo']);
                                $data['pedido'][$i]['tipoPagamento']   = $pedido['tipoPagamento'];
                                $data['pedido'][$i]['subtotal']        = $pedido['subtotal'];
                                $data['pedido'][$i]['total']           = $pedido['total'];
                                $data['pedido'][$i]['frete']           = $pedido['frete'];
                                $data['pedido'][$i]['dataPag']         = $pedido['dataPagamento'];
                                $data['pedido'][$i]['status']          = utf8_encode($pedido['status']);
                                $data['pedido'][$i]['dataPag']         = $pedido['dataPagamento'];
                                $data['pedido'][$i]['cancelado']       = $pedido['cancelado'];
                                $data['pedido'][$i]['dataCancelado']   = $pedido['dataCancelado'];
                                $i++;
                            }

                            $this->response->setStatusCode(200);
                            $this->response->setContent('Sucesso');
                        }else{
                            $data['message']['responseType'] = "Erro";
                            $data['message']['responseMessage'] = "Pedido não encontrado";
                            $this->response->setStatusCode(401);
                            $this->response->setContent('Error');
                        }

                    }
                    catch(Exception $e){
                        $data['message']['responseType'] = "Erro";
                        $data['message']['responseMessage'] = $e->getMessage();
                        $this->response->setStatusCode(400);
                        $this->response->setContent('Ocorreu um erro');
                    }
                }else{
                    $data['message']['responseType'] = "Erro";
                    $data['message']['responseMessage'] = "Falha no Envio, Campos obrigatórios não preenchidos";
                    $this->response->setStatusCode(400);
                    $this->response->setContent('Ocorreu um erro');
                }

            }else{
                $data['message']['responseType'] = "Erro";
                $this->response->setStatusCode(400);
                $this->response->setContent('Error');
            }

        }else{
            $data['message']['responseType'] = "Erro";
            $data['message']['responseType'] = "Método de envio incorreto";
            $this->response->setStatusCode(401);
            $this->response->setContent('Error');
        }

        return new JsonModel($data);
    }

    public function addAction()
    {
        $request = $this->getRequest();

        if($request->isPost()){

            $params = $request->getContent();
            $params = json_decode($params);
            $categoriaModel = new CategoriaModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

            if(isset($params->categoria)){
                if($validatorStringLength->isValid($params->categoria))
                    $filters['categoria'] = $params->categoria;
                else
                    $data['message']['ResponseError']['categoria'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($params->subcategoria)){
                if($validatorStringLength->isValid($params->subcategoria))
                    $post['categoria'] = $params->subcategoria;
                else
                    $data['message']['ResponseError']['subcategoria'] = "Excedido máximo de Caracteres permitido";
            }



            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $categoria = $categoriaModel->setCategoria($filters)->getCategoria();

                        if(!empty($categoria)){
                            $data['categorias']['id'] = $categoria->getId();
                            $data['categorias']['categoria'] = $categoria->getNome();
                            $data['categorias']['subcategoria'] = $categoria->getPai();

                            $this->response->setStatusCode(200);
                            $this->response->setContent('Sucesso');
                        }else{
                            $data['message']['responseType'] = "Erro";
                            $data['message']['responseMessage'] = "Não foi possivel inserir a categoria";
                            $this->response->setStatusCode(400);
                            $this->response->setContent('Error');
                        }

                    }
                    catch(Exception $e){
                        $data['message']['responseType'] = "Erro";
                        $data['message']['responseMessage'] = $e->getMessage();
                        $this->response->setStatusCode(400);
                        $this->response->setContent('Ocorreu um erro');
                    }
                }else{
                    $data['message']['responseType'] = "Erro";
                    $data['message']['responseMessage'] = "Falha no Envio, Campos obrigatórios não preenchidos";
                    $this->response->setStatusCode(400);
                    $this->response->setContent('Ocorreu um erro');
                }

            }else{
                $data['message']['responseType'] = "Erro";
                $this->response->setStatusCode(400);
                $this->response->setContent('Error');
            }

        }else{
            $data['message']['responseType'] = "Erro";
            $data['message']['responseType'] = "Método de envio incorreto";
            $this->response->setStatusCode(400);
            $this->response->setContent('Error');
        }

        return new JsonModel($data);
    }


    public function testeAction()
    {
        $array = array('idConsultor' => '411');
        $token = 123;
        $json = json_encode($array);

        $ch = curl_init('http://api.mediaw.com/api/pedido/get');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "get");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: OAuth '.$token,
            'Content-Length: ' . strlen($json))

        );
        $jsonRet = json_decode(curl_exec($ch));
        \Zend\Debug\Debug::dump($jsonRet);

    }

}