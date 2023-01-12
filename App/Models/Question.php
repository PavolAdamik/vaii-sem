<?php

namespace App\Models;

use App\Core\Model;

class Question extends Model
{
    //todo: ked sa zamyslim, staci mi 2 veci v tabulke + idecko ?
    protected $id;
    protected $question; // zakaznik polozi otazku
    protected $reply; // toto by mohol odpovedat len admin

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question): void
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @param mixed $reply
     */
    public function setReply($reply): void
    {
        $this->reply = $reply;
    } //toto by videl len admin, resp. on by mohol replynut


}