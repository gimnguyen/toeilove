<?php

class InputToeicP1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $bookcode = '67937';
        $testID = '51464';

        echo 'read txt file';
        $handle = fopen('C:\xampp\htdocs\toeic\public\books\67937\51464\p1\answer.txt', 'r');
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $txt = $line;
            }

            fclose($handle);
        } else {
            // error opening the file.
        }

        $iparr = explode ("(", $txt);


        echo '<br> arr:';
        print_r($iparr);

        $gurl = 'public/books/'.$bookcode.'/'.$testID.'/p1/';


        $transimg = '';
        $ishow = 1;
        $quest = '';

        for ($i = 1; $i <=10; $i++){
            $mp3url = '';
            $transcript = '';
            $tmpstring = str_split($iparr[''.$i.''], 1);
            $trueans = $tmpstring[0];
            $questID = $i;
            $quest = $gurl.$testID.'_'.$i.'.png';

            if ($i == 1){
                $mp3url = $gurl.$testID.'p1.mp3';
                $transcript = nl2br( file_get_contents( 'C:/xampp/htdocs/toeic/public/books/'.$bookcode.'/'.$testID.'/p1/trans.txt'));
                echo '<br>'.$mp3url;
            }


            echo '<br>'.$i.': '.$trueans;
            echo '<br>'.$i.': '.$quest;
//            echo '<br>'.$transcript;

            $this->load->Model("InputData");
            $this->InputData->insertP1($mp3url, $quest, $trueans, $transcript, $transimg, $ishow,
                $questID, $bookcode, $testID);
        }





//        echo 'start';
//
//        $dir = 'C:\xampp\htdocs\toeic\public\books\67937\54564\p1';
//        if ($dh = opendir($dir)){
//            $imgArray = array();
//            $i = 0;
//
//            while (($file = readdir($dh)) !== false){
//                $imgArray[$i] = $file;
//                $i++;
//            }
//            closedir($dh);
//        }
//        $data['listImg'] = $imgArray;
//
//        print_r($data);



//        $this->load->view('top', $proListArray);
//        $this->load->view('toeicp1', $proListArray);
//        $this->load->view('bottom');
    }
}