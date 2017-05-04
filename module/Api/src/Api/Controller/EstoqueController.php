<?php

namespace Api\Controller;


use Api\Models\EstoqueModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Validator\StringLength;
use Zend\View\Model\JsonModel;


/**
 * @SWG\Resource(
 *     apiVersion="1.0",
 *     swaggerVersion="1.2",
 *     basePath="/Api"
 * )
 */


class EstoqueController extends AbstractRestfulController {

    public function getAction()
    {
        $request = $this->getRequest();
        $data = array();
        if($request->isGet()){
            $get = $params = $request->getContent();
            $parametros = json_decode($params);
            $estoqueModel = new EstoqueModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

            if(isset($parametros->categoria)){
                if($validatorStringLength->isValid($parametros->categoria))
                    $filters['categoria'] = $parametros->categoria;
                else
                    $data['message']['ResponseError']['nome'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->idLoja)){
                if($validatorStringLength->isValid($parametros->idLoja))
                    $filters['idLoja'] = $parametros->idLoja;
                else
                    $data['message']['ResponseError']['nome'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($parametros->referencia)){
                if($validatorStringLength->isValid($parametros->referencia))
                    $filters['referencia'] = $parametros->referencia;
                else
                    $data['message']['ResponseError']['nome'] = "Excedido máximo de Caracteres permitido";
            }
            if(isset($parametros->marca)){
                if($validatorStringLength->isValid($parametros->marca))
                    $filters['referencia'] = $parametros->marca;
                else
                    $data['message']['ResponseError']['nome'] = "Excedido máximo de Caracteres permitido";
            }

            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $estoque = $estoqueModel->search($filters);
                        if(!empty($estoque)){
                            $i=0;
                            foreach($estoque as $dados) {
                                $data['estoque'][$i] = $dados;
                                $i++;
                            }
                            $this->response->setStatusCode(200);
                            $this->response->setContent('Sucesso');
                        }else{
                            $data['message']['responseType'] = "Erro";
                            $data['message']['responseMessage'] = "Estoque não encontrado";
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
        $array = array('idLoja' => '0');
        $token = 123;
        $json = json_encode($array);

        $ch = curl_init('http://api.mediaw.com/api/estoque/get');

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