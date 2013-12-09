<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->session['logado'] = false;
        Yii::app()->session['username'] = '';
        Yii::app()->session['name'] = '';
        Yii::app()->session['cidade_index'] = '';
        Yii::app()->session['cidade'] = '';
        Yii::app()->session['cep'] = '';
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionCep() {
//        $data = array();
//        $data["myValue"] = "Content updated in AJAX";
//
//        $this->renderPartial('index', $data, false, true);
        $this->renderPartial('index', array('data' => 'Ur-data'), false, true);
    }

    public function actionSession() {
        $plano = $_POST['plano'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $tipo = $_POST['tipo'];
        
        $descricao = 'Plano ' . $tipo . ' (tamanho ' . ucfirst($plano) . '): ' . $nome;
        
        Yii::app()->session['descricao'] = $descricao;
        Yii::app()->session['valor_total'] = $valor;
        
        echo true;
//        $this->renderPartial('index');
        exit;
    }
    public function actionSessionCep() {
        $cidade = $_POST['cidade'];
        $cidade_index = $_POST['cidade_index'];
        $cep = $_POST['cep'];
        
        Yii::app()->session['cep'] = $cep;
        Yii::app()->session['cidade'] = $cidade;
        Yii::app()->session['cidade_index'] = $cidade_index;
        
        echo true;
//        $this->renderPartial('index');
        exit;
    }
    
    public function actionLoginAjax(){
        $usuarios[0] = array(
            'name' => 'Pedro Afonso',
            'username' => 'user1@marmitao.com.br',
            'password' => '123456',
            'cidade' => 'São Paulo',
            'cidade_index' => 'sao_paulo',
            'cep' => '04543-020'
        );
        $usuarios[1] = array(
            'name' => 'Laura Gabriela',
            'username' => 'user2@marmitao.com.br',
            'password' => '123456',
            'cidade' => 'Sorocaba',
            'cidade_index' => 'sorocaba',
            'cep' => '18045-000'
        );
        $usuarios[2] = array(
            'name' => 'Ricardo Alberto',
            'username' => 'user3@marmitao.com.br',
            'password' => '123456',
            'cidade' => 'São Carlos',
            'cidade_index' => 'sao_carlos',
            'cep' => '18045-000'
        );
        
        $user = $_POST['username'];
        $senha = $_POST['password'];
        
        Yii::app()->session['logado'] = false;
        Yii::app()->session['username'] = '';
        Yii::app()->session['name'] = '';
        Yii::app()->session['cidade_index'] = '';
        Yii::app()->session['cidade'] = '';
        Yii::app()->session['cep'] = '';
        foreach($usuarios as $u){
            if($user == $u['username'] && $senha == $u['password']){
                Yii::app()->session['logado'] = true;
                Yii::app()->session['username'] = $u['username'];
                Yii::app()->session['name'] = $u['name'];
                Yii::app()->session['cidade'] = $u['cidade'];
                Yii::app()->session['cidade_index'] = $u['cidade_index'];
                Yii::app()->session['cep'] = $u['cep'];
                break;
            }
        }
        
        echo Yii::app()->session['logado'];
    }
}