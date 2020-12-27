<?php

namespace frontend\controllers;

use Yii;
use common\models\Meeting;
use frontend\models\meetingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
//use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * MeetingController implements the CRUD actions for Meeting model.
 */
class MeetingController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],

            
        ];
    }

    /**
     * Lists all Meeting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new meetingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        

        // $modelMeetingByUser = (new \yii\db\Query())
        // ->select(['*'])
        // ->from('meeting')
        // ->where(['user_id' => Yii::$app->user->identity->id])
        // ->all();
          
            if(Yii::$app->user->isGuest){
                $dataProviderByUser = new ActiveDataProvider([
                    'query' => Meeting::find()->where(['user_id' => '0'])
                 ]);
               
            }else{
                  $dataProviderByUser = new ActiveDataProvider([
                    'query' => Meeting::find()->where(['user_id' => Yii::$app->user->identity->id])  
                 ]);

            }

      

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderByUser'=>$dataProviderByUser,
        ]);

       // var_dump($rows);
     
    }   

    /**
     * Displays a single Meeting model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Meeting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Meeting();

        if ($model->load(Yii::$app->request->post()) ) {

            $model->user_id = Yii::$app->user->identity->id;
            $model->status = 'Waiting';
            
            $model->created_at = new Expression('NOW()');
            $model->updated_at = new Expression('NOW()');

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Meeting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->updated_at = new Expression('NOW()');
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Meeting model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Meeting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Meeting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Meeting::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
