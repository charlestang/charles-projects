<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
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
    public function actionIndex($week_id=null)
    {
        $week_infos_dataProvider = new CActiveDataProvider('Week', array(
                    'criteria' => array(
                        'order' => 'end desc',
                    ),
                    'pagination' => array(
                        'pageSize' => 5,
                    ),
                ));
        $curr_week = false;
        if (!is_null($week_id)) { //如果参数传入了当前周
            $curr_week = $week_id;
        }


        $today = strtotime(date('Y-m-d'));

        $weeks = $week_infos_dataProvider->data;
        $last_week = false;
        foreach ($weeks as $week) {
            if (!$curr_week) {//如果没指定当前周，指定当前周
                if ($today > strtotime($week->start)) {
                    $curr_week = $week->id;
                }
            }
            $curr_start = '0000-00-00';
            if ($curr_week && $curr_week == $week->id) { //算出当前周的起始日期
                $curr_start = $week->start;
            }
            if ($curr_week && ! $last_week && strtotime($curr_start) > strtotime($week->end)){ //计算出上一周
                $last_week = $week->id;
            }
            if ($curr_week && $last_week) {
                break;
            }
        }
        
        $user_list = new CActiveDataProvider('User', array(
            'criteria' => array(
                'condition' => 'status > 0'
            ),
        ));
        
        $users = array();
        foreach ($user_list->data as $user){
            $users[] = $user->rtxname;
        }
        
        $curr_week_task_list = array();
        if ($curr_week) { //取得本周所有任务
            $curr_week_tasks = new CActiveDataProvider('Task', array(
                'criteria' => array(
                    'condition' => 'weeknum = ' . $curr_week,
                    'order' => 'rtxname asc',
                ),
            ));
            
            foreach ($users as $user) {
                foreach ($curr_week_tasks->data as $task){
                    if ($task->rtxname == $user){
                        if (!isset($curr_week_task_list[$user])){
                            $curr_week_task_list[$user] = array();
                        }
                        $curr_week_task_list[$user][] = $task;
                    }
                }
            }
        }
        
        
        
        $last_week_tasks = null;
        $last_week_task_list = array();
        if ($last_week) { //取得上周所有任务
            $last_week_tasks = new CActiveDataProvider('Task', array(
                'criteria' => array(
                    'condition' => 'weeknum = ' . $last_week,
                    'order' => 'rtxname asc',
                ),
            ));
            
            foreach ($users as $user) {
                foreach ($last_week_tasks->data as $task){
                    if ($task->rtxname == $user){
                        if (!isset($last_week_task_list[$user])){
                            $last_week_task_list[$user] = array();
                        }
                        $last_week_task_list[$user][] = $task;
                    }
                }
            }
        }
        

        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index', array(
            'curr_week' => $curr_week,
            'weeks' => $week_infos_dataProvider,
            'curr_week_tasks' => $curr_week_task_list,
            'last_week_tasks' => $last_week_task_list,
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
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
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject,
                        $model->body, $headers);
                Yii::app()->user->setFlash('contact',
                        'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
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
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}