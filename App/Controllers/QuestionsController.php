<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Question;

class QuestionsController extends AControllerBase
{
    public function authorize($action)
    {
        switch ($action) {
            case "delete":
            case "create":
            case "store":
            case "edit":
                return $this->app->getAuth()->isLogged();
        }
        return true;
    }

    public function index(): Response {
        $questions = Question::getAll();
        return $this->html($questions);
    }

    public function create() {
        return $this->html(new Question(), viewName: 'create.form');
    }

    public function store() {
        $id = $this->request()->getValue('id');
        $question = ($id ? Question::getOne($id) : new Question());
        $question->setQuestion($this->request()->getValue('new_question'));
        $question->setReply($this->request()->getValue('new_reply'));
        $question->save();
        return $this->redirect("?c=questions");
    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $questionToEdit =  Question::getOne($id);
        if ($questionToEdit) {
            return $this->html($questionToEdit ,viewName: 'create.form'); //znova vytvaram
        }
    }

    public function delete() {
        $id = $this->request()->getValue('id');
        $questionToDelete = ($id ? Question::getOne($id) : new Question());
        if ($questionToDelete) {
            $questionToDelete->delete();
        }
        return $this->redirect("?c=questions");
    }
    //.
}