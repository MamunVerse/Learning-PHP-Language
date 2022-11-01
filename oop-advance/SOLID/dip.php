<?php
// Dependency Inversion Principle
class Authenticator{
    function authenticate($username, $password, $external = false, $externalService = false){
        if($external == true && 'Google' == $externalService){
            $ga = new GoogleAuthenticatior();
            $ga->authenticate();
        }elseif ($external == true && 'github' == $externalService){
            $ga = new GithubAuthenticatior();
            $ga->authenticate();
        }else{
            $la = new LocalAuthenticatior();
            $la->authenticate();
        }
    }
}


interface  AuthServiceProviderInterface{
    function authenticate();
}

class GithubAuthenticatior implements  AuthServiceProviderInterface {
    function authenticate()
    {
        // TODO: Implement authenticate() method.
    }
}

class NewAuthenticator{
    private $authServiceProvider;
    public function __construct(AuthServiceProviderInterface $asp)
    {
        $this->AuthServiceProvider = $asp;
    }

    function authenticate(){
        $this->asp->authenticate();
    }
}

$ga = new GithubAuthenticatior();

$auth = new NewAuthenticator($ga);
$auth->authenticate();