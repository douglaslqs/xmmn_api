<?php

namespace Api\Controller;

use Api\Models\CategoriaModel;
use Api\Models\ConsultorModel;
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


class CategoriaController extends AbstractRestfulController {

    /**
     * @SWG\Api(
     *     path="categoria/get",
     *     @SWG\Operation(
     *         method="GET",
     *         summary="Retorna dados da categoria",
     *         type="Message",
     *         @SWG\Parameters(
     *             @SWG\Parameter(
     *                 name="login",
     *                 paramType="path",
     *                 description="login",
     *                 required=true,
     *                 type="integer",

     *             ),
     *             @SWG\Parameter(
     *                 name="cpf",
     *                 paramType="body",
     *                 description="Cpf sem caracteres especiais",
     *                 required=true,
     *                 type="integer"
     *             )
     *         ),
     *         @SWG\ResponseMessage(code=200, message="Message successfully updated"),
     *         @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     *         @SWG\ResponseMessage(code=404, message="Message not found"),
     *         @SWG\ResponseMessage(code=410, message="Message has been deleted")
     *     )
     * )
     */
    public function getAction()
    {
        $request = $this->getRequest();

        if($request->isGet()){
            $get = $params = $request->getContent();
            $parametros = json_decode($params);
            $categoriaModel = new CategoriaModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

            if(isset($parametros->categoria)){
                if($validatorStringLength->isValid($parametros->categoria))
                    $filters['categoria'] = $parametros->categoria;
                else
                    $data['message']['ResponseError']['categoria'] = "Excedido máximo de Caracteres permitido";
            }


            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $categorias = $categoriaModel->setCategorias($filters)->getCategorias();

                        if(!empty($categorias)){
                            $i=0;
                            foreach($categorias as $categoria) {
                                $data['categorias'][$i]['id'] = $categoria->getId();
                                $data['categorias'][$i]['categoria'] = $categoria->getNome();
                                $i++;
                            }
                            $this->response->setStatusCode(200);
                            $this->response->setContent('Sucesso');
                        }else{
                            $data['message']['responseType'] = "Erro";
                            $data['message']['responseMessage'] = "Categoria não encontrada";
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
            $data['message']['responseType'] = "Método de envio";
            $this->response->setStatusCode(400);
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
            $data['d'] = $params->categoria;

            $categoriaModel = new CategoriaModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

//            if(isset($params->categoria)){
//                if($validatorStringLength->isValid($params->categoria))
                    $filters['categoria'] = $params->categoria;
//                else
//                    $data['message']['ResponseError']['categoria'] = "Excedido máximo de Caracteres permitido";
//            }


//            if(isset($parametros->subcategoria)){
//                if($validatorStringLength->isValid($parametros->subcategoria))
//                    $post['categoria'] = $parametros->subcategoria;
//                else
//                    $data['message']['ResponseError']['subcategoria'] = $validatorStringLength->getMessages();
//            }



            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $categoria = $categoriaModel->setCategoria($filters)->getCategoria();

//                        if(!empty($categoria)){
//                            $data['categorias']['id'] = $categoria->getId();
//                            $data['categorias']['categoria'] = $categoria->getNome();
//                            $data['categorias']['subcategoria'] = $categoria->getPai();
//
//                            $this->response->setStatusCode(200);
//                            $this->response->setContent('Sucesso');
//                        }else{
//                            $data['message']['responseType'] = "Erro";
//                            $data['message']['responseMessage'] = "Não foi possivel inserir a categoria";
//                            $this->response->setStatusCode(400);
//                            $this->response->setContent('Error');
//                        }

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
            $data['message']['responseType'] = "Método de envio";
            $this->response->setStatusCode(400);
            $this->response->setContent('Error');
        }

        return new JsonModel($data);
    }




    public function testeAction()
    {
        $array = array('categoria' => 'teste');
        $token = 123;
        $json = json_encode($array);

        $ch = curl_init('http://api.mediaw.com/api/categoria/add');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "post");
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