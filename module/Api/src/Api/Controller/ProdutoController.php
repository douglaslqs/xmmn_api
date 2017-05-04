<?php

namespace Api\Controller;


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


class ProdutoController extends AbstractRestfulController {

    public function getAction()
    {
        $request = $this->getRequest();

        if($request->isGet()){
            $get = $params = $request->getContent();
            $parametros = json_decode($params);
            $produtoModel = new ProdutoModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

            if(isset($parametros->nome)){
                if($validatorStringLength->isValid($parametros->nome))
                    $filters['nome'] = $parametros->nome;
                else
                    $data['message']['ResponseError']['nome'] = "Excedido máximo de Caracteres permitido";
            }

            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $produtos = $produtoModel->search($filters);

                        if(!empty($produtos)){
                            $i=0;
                            foreach($produtos as $produto) {
                                $data['produtos'][$i]['id'] = $produto['id'];
                                $data['produtos'][$i]['produto'] = $produto['nome'];
                                $i++;
                            }
                            $this->response->setStatusCode(200);
                            $this->response->setContent('Sucesso');
                        }else{
                            $data['message']['responseType'] = "Erro";
                            $data['message']['responseMessage'] = "Produto não encontrado";
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
        $array = array('nome' => 'teste');
        $token = 123;
        $json = json_encode($array);

        $ch = curl_init('http://api.mediaw.com/api/produto/get');

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