<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
use common\components\AccessRule;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\State;
use backend\models\Form;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'reset' , 'signup' ,'logout' , 'password','form' , 'track' , 'view'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index' , 'supervisorsignup' , 'update' ,'viewsupervisor'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */


    public function actionIndex()
    {
        // return $this->render('index');
        $role = Yii::$app->user->identity->role;
        if($role === 'admin'){
            $form = Form::find()->all();
            $this->layout= 'headerrest';
            return $this->render('adminhome',['form'=> $form]);           //admin dashboard
        }
        else{
            $state = Yii::$app->user->identity->state;
            $form = Form::find()->where(['fromstate' => $state])->all();
            $this->layout= 'headerrest';
            return $this->render('supervisorhome',['form' => $form]);      // supervisor dashboard
        }
    }

    /**
     * Login action.
     *
     * @return string
     */

//Action Login for both Admin and Supervisor-------------------------------------------------------------
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';
            $this->layout= 'header';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
//Action Login for both Admin and Supervisor(end)--------------------------------------------------------


//Action Reset and Password for password reset-----------------------------------------------------------
    public function actionReset(){
        $this->layout= 'headersignup';
        return $this->render('reset');
    }

    public function actionPassword(){
        $this->layout= 'headersignup';
        return $this->render('password');
    }
//Action Reset and Password for password reset(end)------------------------------------------------------


//Action Signup for Admin--------------------------------------------------------------------------------
    public function actionSignup()
    {
       
        $model = new User();
        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post();
           // echo "<pre>";print_r($data);die();
            $model->username =$data['User']['username'];
            $model->phone =$data['User']['phone'];
            $model->email =$data['User']['email'];
            $password = $data['User']['password_hash'];
            $model->password_hash =Yii::$app->security->generatePasswordHash($password);
            $model->status =10;
            $model->state = time().rand(100,999);
            $model->role = 'admin' ;
            if($model->save()){
                Yii::$app->session->setFlash('success', 'Admin Registered Successfully!');
                return $this->goHome();
            }
            
        }
        $this->layout= 'headersignup';
        return $this->render('signup', ['model' => $model,]);
    }
//Action Signup for Admin(end)--------------------------------------------------------------------------

//Action for Supervisor Signup---------------------------------------------------------------------------------------
    public function actionSupervisorsignup(){
        $model = new User();
        $state = State::find()->all();
        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post();
           // echo "<pre>";print_r($data);die();
            $model->username =$data['User']['username'];
            $model->phone =$data['User']['phone'];
            $model->email =$data['User']['email'];
            $password = $data['User']['password_hash'];
            $model->password_hash =Yii::$app->security->generatePasswordHash($password);
            $model->status =10;
            $model->state = $data['User']['state'];
            $model->role = 'supervisor' ;
            try{
                if($model->save()){
                    Yii::$app->session->setFlash('success', 'Supervisor Registered Successfully');
                    return $this->goHome();
                }   
            }
            catch (\yii\db\IntegrityException $e) {

                // do error handling
                Yii::$app->session->setFlash('success', 'Supervisor Registeration Failed, Duplicate State or Email entry ');
                return $this->goHome();

            }

            
        }
        $this->layout= 'headerrest';
        return $this->render('supervisorsignup', ['model' => $model,'state'=> ArrayHelper::map($state,'state','state') ,]);
    }
//Action for Supervisor Signup(end)----------------------------------------------------------------------------------

//Action for filled form submission----------------------------------------------------------------------------------
    public function actionForm(){
        $model = new Form();
        $state = State::find()->all();
        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post();
           // echo "<pre>";print_r($data);die();
            $model->name =$data['Form']['name'];
            $model->phone =$data['Form']['phone'];
            $model->noofpeople =$data['Form']['noofpeople'];
            $model->aadhar =$data['Form']['aadhar'];
            $model->fromstate =$data['Form']['fromstate'];
            $model->fromdistrict =$data['Form']['fromdistrict'];
            $model->todistrict =$data['Form']['todistrict'];
            $model->traveldatefrom =$data['Form']['traveldatefrom'];
            $model->traveldateto =$data['Form']['traveldateto'];
            $model->viastate1 =$data['Form']['viastate1'];
            $model->viastate2 =$data['Form']['viastate2'];
            $model->viastate3 =$data['Form']['viastate3'];
            $model->status = $data['Form']['status'] ;
            $model->applicationno = mt_rand() ;
            $application = $model->applicationno ;
            if($model->save()){
                Yii::$app->session->setFlash('success', "Application Number <strong>$application</strong> Generated Successfully "); 
                return $this->redirect('form');
            }
            
        }
        $this->layout = 'headersignup';
        return $this->render('form', ['model' => $model, 'state' => ArrayHelper::map($state , 'state' , 'state') ,]);
    }
//Action for filled form submission (end)----------------------------------------------------------------------------
    public function actionTrack() {
        $this->layout = 'headersignup';
        $model = new Form ;
        return $this->render('track' , ['model' => $model,]);
    }

// Action update to update the application number---------------------------------------------------------------------
    public function actionUpdate($id)
    {
        $form=Form::findOne($id);
        $application = Yii::$app->db->createCommand('SELECT applicaitonno FROM form WHERE id = $id') ;
        if($form->load(yii::$app->request->post()) && $form->save())
        {
            Yii::$app->getSession()->setFlash('message','Application no <strong>$application</strong> Updated Sucessful');
                return $this->goHome();
        }
        $this->layout= 'headerrest';
        return $this->render('update',['form'=>$form]);
    }
// Action update to update the application number(end)----------------------------------------------------------------

// Action to view all the supervisors---------------------------------------------------------------------------------

    public function actionViewsupervisor(){
        $role = 'supervisor';
        $model = User::find()->where(['role' => $role])->all();
        $this->layout= 'headerrest';
        return $this->render('viewsupervisor',['model' => $model]);
    }

// Action to view all the supervisors(end)----------------------------------------------------------------------------

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
