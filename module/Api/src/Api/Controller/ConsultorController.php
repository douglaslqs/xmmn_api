<?php

namespace Api\Controller;

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


class ConsultorController extends AbstractRestfulController {

    /**
     * @SWG\Api(
     *     path="consultor/get",
     *     @SWG\Operation(
     *         method="GET",
     *         summary="Retorna dados do consultor",
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
    {   $request = $this->getRequest();
        if($request->isGet()){
            $get = $params = $request->getContent();
            $params = json_decode($params);

            $consultorModel = new ConsultorModel($this->getEntityManager());

            $validatorStringLength = new StringLength(array('max' => 20));

            if(isset($params->login)){
                if($validatorStringLength->isValid($params->login))
                    $filters['loginConsultor'] = $params->login;
                else
                    $data['message']['ResponseError']['login'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($params->cpf)){
                if($validatorStringLength->isValid($params->cpf))
                    $filters['cpfConsultor'] = trim(str_replace('.-/','',$params->cpf));
                else
                    $data['message']['ResponseError']['cpf'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($params->cnpj)){
                if($validatorStringLength->isValid($params->cnpj))
                    $filters['cnpj_consultor'] = $params->cnpj;
                else
                    $data['message']['ResponseError']['cnpj'] = "Excedido máximo de Caracteres permitido";
            }

            if(isset($params->dataCadastro)){
                if($validatorStringLength->isValid($params->dataCadastro))
                    $filters['dataCadastroConsultor'] = $params->dataCadastro;
                else
                    $data['message']['ResponseError']['dataCadastro'] = "Excedido máximo de Caracteres permitido";
            }

            if(!$data['message']['ResponseError']){

                if(!empty($filters)){
                    try{
                        $consultores = $consultorModel->setConsultorByParam($filters)->getConsultores();


                        if(!empty($consultores)){
                            $i=0;
                            foreach($consultores as $consultor) {
                                $data['consultor'][$i]['idConsultor'] = $consultor->getIdConsultor();
                                $data['consultor'][$i]['login'] = $consultor->getLoginConsultor();
                                $data['consultor'][$i]['nome'] = $consultor->getNomeConsultor();
                                $data['consultor'][$i]['cpf'] = $consultor->getCpfConsultor();
                                $data['consultor'][$i]['cnpj'] = $consultor->getCnpjConsultor();
                                $data['consultor'][$i]['bloqueado'] = $consultor->getBloqueado();
                                $data['consultor'][$i]['email'] = $consultor->getEmailConsultor();
                                $data['consultor'][$i]['endereco'] = $consultor->getEnderecoConsultor();
                                $data['consultor'][$i]['numero'] = $consultor->getNumeroConsultor();
                                $data['consultor'][$i]['bairro'] = $consultor->getBairroConsultor();
                                $data['consultor'][$i]['cidade'] = $consultor->getCidadeConsultor();
                                $data['consultor'][$i]['estado'] = $consultor->getEstadoConsultor();
                                $data['consultor'][$i]['cep'] = $consultor->getCepConsultor();
                                $data['consultor'][$i]['complemento'] = $consultor->getComplementoConsultor();
                                $data['consultor'][$i]['rg'] = $consultor->getRgConsultor();
                                $data['consultor'][$i]['telefone'] = $consultor->getTelefoneConsultor();
                                $data['consultor'][$i]['celular'] = $consultor->getCelularConsultor();
                                $data['consultor'][$i]['dataCadastro'] = $consultor->getDataCadastroConsultor();
                                $data['consultor'][$i]['dataNascimento'] = $consultor->getDataNascimento();
                                $i++;
                            }
                            $this->response->setStatusCode(200);
                            $this->response->setContent('Sucesso');
                        }else{
                            $data['message']['responseType'] = "Erro";
                            $data['message']['responseMessage'] = "Consultor não Encontrado";
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


    public function testeAction()
    {
        $array = array("cpf" => "81912361507");



        $json = json_encode($array);



        $ch = curl_init('http://api.mediaw.com/api/consultor/get');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

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