<?php

require_once("model/Manager.php");

class ChapterManager extends Manager
{
    public function getChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM p4_chapters ORDER BY creation_date DESC LIMIT 0,8");

        return $req;
    }
}
