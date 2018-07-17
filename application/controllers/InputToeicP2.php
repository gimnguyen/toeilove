<?php

class InputToeicP2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $bookcode = '67937';
        $testID = '26813';

        echo 'read txt file';
        $handle = fopen('C:\xampp\htdocs\toeic\public\books\67937\26813\p2\answer.txt', 'r');
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

        $gurl = 'public/books/'.$bookcode.'/'.$testID.'/p2/';


        $transimg = '';
        $ishow = 1;
        $quest = '';

        for ($i = 1; $i <=30; $i++) {
            $transcript = '';
            $tmpstring = str_split($iparr['' . $i . ''], 1);
            $trueans = $tmpstring[0];
            $arrtrueans[''.$i.''] = $trueans;
        }

        echo '<br>';
        print_r($arrtrueans);

            $mp3url = $gurl.$testID.'p2.mp3';
            $transcript = nl2br( file_get_contents( 'C:/xampp/htdocs/toeic/public/books/'.$bookcode.'/'.$testID.'/p2/trans.txt'));

//      Remove enter
            $replaTrans = str_replace(' (A)','<br>(A)', $transcript);

            echo '<br>Mp3: '.$mp3url;
            echo '<br>number 5:'.$arrtrueans['5'];
            echo '<br>repla: '.$replaTrans;
//            echo '<br>'.$transcript;

            $this->load->Model("InputData");
            $this->InputData->insertP2($mp3url, $arrtrueans['1'], $arrtrueans['2'],
                $arrtrueans['3'], $arrtrueans['4'], $arrtrueans['5'], $arrtrueans['6'], $arrtrueans['7'],
                $arrtrueans['8'], $arrtrueans['9'], $arrtrueans['10'],$arrtrueans['11'], $arrtrueans['12'],
                $arrtrueans['13'], $arrtrueans['14'],$arrtrueans['15'], $arrtrueans['16'], $arrtrueans['17'],
                $arrtrueans['18'], $arrtrueans['19'], $arrtrueans['20'], $arrtrueans['21'], $arrtrueans['22'],$arrtrueans['23']
        , $arrtrueans['24'], $arrtrueans['25'], $arrtrueans['26'], $arrtrueans['27'], $arrtrueans['28'], $arrtrueans['29']
                , $arrtrueans['30'], $replaTrans, $transimg, $ishow, $bookcode, $testID);


    }
}