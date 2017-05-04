<?php

namespace Api\Controller;

use Api\Models\LoginModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * @SWG\Resource(
 *     apiVersion="1.0",
 *     swaggerVersion="1.2",
 *     basePath="/Album"
 * )
 */


class AuthController extends AbstractRestfulController {



    /**
     * @SWG\Api(
     *     path="auth/login",
     *     @SWG\Operation(
     *         method="POST",
     *         summary="Updates a message",
     *         type="Message",
     *         @SWG\Parameters(
     *             @SWG\Parameter(
     *                 name="messageId",
     *                 paramType="path",
     *                 description="ID of message to fetch",
     *                 required=true,
     *                 type="integer",
     *                 minimum="1.0"
     *             ),
     *             @SWG\Parameter(
     *                 name="message",
     *                 paramType="body",
     *                 description="The updated message object",
     *                 required=true,
     *                 type="Message"
     *             )
     *         ),
     *         @SWG\ResponseMessage(code=200, message="Message successfully updated"),
     *         @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     *         @SWG\ResponseMessage(code=404, message="Message not found"),
     *         @SWG\ResponseMessage(code=410, message="Message has been deleted")
     *     )
     * )
     */
    public function loginAction($id,$message) {
        $request = $this->getRequest();
        $response = array();
        if($request->isPost()){
            $loginModel = new LoginModel($this->getEntityManager());
            $response['data'] = json_encode(array('login'=>'diego','senha'=>'senha'));
            $this->response->setStatusCode(200);
        }

        return new JsonModel($response);
    }


}