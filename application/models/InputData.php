<?php
class InputData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertP1($mp3url, $quest, $trueans, $transcript, $transimg, $ishow,
                             $questID, $bookcode, $testID){
        $this->db->set('mp3url', $mp3url);
        $this->db->set('trueans', $trueans);
        $this->db->set('quest', $quest);
        $this->db->set('transcript', $transcript);
        $this->db->set('transimg', $transimg);
        $this->db->set('ishow', $ishow);
        $this->db->set('questID', $questID);
        $this->db->set('bookcode', $bookcode);
        $this->db->set('testID', $testID);

        $this->db->insert('toeicpart1');
    }

    public function insertP2($mp3url, $trueans1,$trueans2, $trueans3, $trueans4, $trueans5,
                             $trueans6, $trueans7, $trueans8, $trueans9, $trueans10, $trueans11
    , $trueans12, $trueans13, $trueans14, $trueans15, $trueans16, $trueans17, $trueans18, $trueans19,
                             $trueans20, $trueans21, $trueans22, $trueans23, $trueans24, $trueans25, $trueans26,
                             $trueans27, $trueans28, $trueans29, $trueans30, $transcript, $transimg, $ishow, $bookcode, $testID){
        $this->db->set('mp3url', $mp3url);
        $this->db->set('trueans1', $trueans1);
        $this->db->set('trueans2', $trueans2);
        $this->db->set('trueans3', $trueans3);
        $this->db->set('trueans4', $trueans4);
        $this->db->set('trueans5', $trueans5);
        $this->db->set('trueans6', $trueans6);
        $this->db->set('trueans7', $trueans7);
        $this->db->set('trueans8', $trueans8);
        $this->db->set('trueans9', $trueans9);
        $this->db->set('trueans10', $trueans10);
        $this->db->set('trueans11', $trueans11);
        $this->db->set('trueans12', $trueans12);
        $this->db->set('trueans13', $trueans13);
        $this->db->set('trueans14', $trueans14);
        $this->db->set('trueans15', $trueans15);
        $this->db->set('trueans16', $trueans16);
        $this->db->set('trueans17', $trueans17);
        $this->db->set('trueans18', $trueans18);
        $this->db->set('trueans19', $trueans19);
        $this->db->set('trueans20', $trueans20);
        $this->db->set('trueans21', $trueans21);
        $this->db->set('trueans22', $trueans22);
        $this->db->set('trueans23', $trueans23);
        $this->db->set('trueans24', $trueans24);
        $this->db->set('trueans25', $trueans25);
        $this->db->set('trueans26', $trueans26);
        $this->db->set('trueans27', $trueans27);
        $this->db->set('trueans28', $trueans28);
        $this->db->set('trueans29', $trueans29);
        $this->db->set('trueans30', $trueans30);

        $this->db->set('transcript', $transcript);
        $this->db->set('transimg', $transimg);
        $this->db->set('ishow', $ishow);
        $this->db->set('bookcode', $bookcode);
        $this->db->set('testID', $testID);

        $this->db->insert('toeicpart2');
    }
}
?>