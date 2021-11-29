<?php
namespace controllers;

use http\Client\Curl\User;
use Ubiquity\attributes\items\acl\Allow;
use Ubiquity\attributes\items\acl\Resource;
use Ubiquity\attributes\items\acl\Permission;
use Ubiquity\attributes\items\router\Route;
use Ubiquity\controllers\auth\AuthController;
use Ubiquity\controllers\auth\WithAuthTrait;
use Ubiquity\controllers\Controller;
use Ubiquity\security\acl\controllers\AclControllerTrait;
use Ubiquity\utils\http\USession;

#[Route(path: "Main",automated: true)]
#[Resource('Main')]
class MainController extends Controller{
    use WithAuthTrait;
    use AclControllerTrait, WithAuthTrait {
        WithAuthTrait::isValid insteadof AclControllerTrait;
        AclControllerTrait::isValid as AclValid;
    }

    #[Permission('READ', 49)]
    #[Allow('@USER', 'Main', 'READ')]
    public function index()
    {
        $this->loadView("MainController/index.html");
    }

    #[Route('autre')]
    #[Permission('SHOW', 50)]
    public function autreAction()
    {
        echo 'SHOW autorisé';
    }

    public function _getRole()
    {
        return USession::get('ActiveUser','@NOBODY');
    }

    /**
     * {@inheritdoc}
     * @see \Ubiquity\controllers\Controller::onInvalidControl()
     */
    public function onInvalidControl(){
        echo $this->_getRole() . ' is not allowed!';
    }

    protected function getAuthController(): AuthController
    {
       return new MyAuth($this);
    }
}