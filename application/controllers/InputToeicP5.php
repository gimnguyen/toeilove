<?php

class InputToeicP5 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('inputp5');
    }

    public function save(){
        $gquest = $this->input->post('vquest');
        $gansw = $this->input->post('vansw');

        echo 'aaaaaaaaaaaaaaa:';
        echo $gquest;
        echo '<br>mmmmmmmmmmmmm<br>';
        echo $gansw;

//        replace khoang trong dap an

        $repla1 = str_replace('  ',' ______ ',$gquest,$numberRepl);
        echo '<br>thay the '.$numberRepl.' lan';
        $repla2 = str_replace('xxx',' ______ ',$repla1,$numberRep2);
        echo '<br>thay the '.$numberRep2.' lan';


//        cut question
        $iquest = explode("(", $repla2);

        echo '<br>so phan tu= '.count($iquest);
        echo '<br>';
        print_r($iquest);


        $i = 1;
        foreach ($iquest as $key => $value){

            if ($i == 1){
                echo '<br>';
                echo '--------------<br>';
                $cauhoi = substr($value, 4);
                echo 'cau hoi = '.$cauhoi;
                $i++;
            }
            if (strpos($value, 'A)') === 0 ){
                $dapA = str_replace('A) ', '', $value);
                echo '<br>dapA = '.$dapA;
            }
            if (strpos($value, 'B)') === 0 ){
                $dapB = str_replace('B) ', '', $value);
                echo '<br>dapB = '.$dapB;
            }
            if (strpos($value, 'C)') === 0 ){
                $dapC = str_replace('C) ', '', $value);
                echo '<br>dapC = '.$dapC;
            }
            if (strpos($value, 'D)') === 0 ){
                $tachD = $iquest = explode(". ", $value);
                $dapD = str_replace('D) ', '', $tachD[0]);
                $dapDfinal = substr($dapD, 0, -3);
                echo '<br>dapD = '.$dapDfinal;
// tach cau hoi
                $cauhoi = $tachD[1];
                echo '<br>cau hoi = '.$cauhoi;

            }
        }







    }

    public function saveindex()
    {
        $bookcode = '39744';
        $testID = '26813';

//        read question file

        $handleQes = fopen('C:\xampp\htdocs\toeic\public\books\39744\26813\p3\quest-'.$testID.'.txt', 'r');

        $index = 0;

        if ($handleQes) {
            while (($line = fgets($handleQes)) !== false) {
                $txt = $line;
                $iquest = explode (". ", $txt);

                if (count($iquest) == 2){
                    $gquest[$index] = $iquest[1];
                    $index++;
                }else{
                    $arrans = explode(" (", $iquest[0]);

//                    print_r($arrans);
//                    echo '<br>nnnnnnnnnnnnnnnnnn';

                    $anA = str_replace('(A)','',$arrans[0]);
                    $anB = str_replace('B)','',$arrans[1]);
                    $anC = str_replace('C)','',$arrans[2]);
                    $anD = str_replace('D)','',$arrans[3]);

                    $gquest[$index] = $anA;
                    $index++;
                    $gquest[$index] = $anB;
                    $index++;
                    $gquest[$index] = $anC;
                    $index++;
                    $gquest[$index] = $anD;
                    $index++;
                }

            }

            fclose($handleQes);
        }

        print_r($gquest);

        echo '<br>eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee';

//        end read question

        echo 'read txt file';
        $handle = fopen('C:\xampp\htdocs\toeic\public\books\39744\26813\p3\answer.txt', 'r');
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

        $gurl = 'public/books/'.$bookcode.'/'.$testID.'/p3/';


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

        $mp3url = $gurl.$testID.'p3.mp3';
        $transcript = nl2br( file_get_contents( 'C:/xampp/htdocs/toeic/public/books/'.$bookcode.'/'.$testID.'/p3/trans.txt'));


        echo '<br>Mp3: '.$mp3url;
        echo '<br>'.$i.': '.$arrtrueans['5'];
        echo '<br>'.$i.': '.$transcript;
//            echo '<br>'.$transcript;

        $this->load->Model("InputData");
//            $this->InputData->insertP2($mp3url, $arrtrueans['1'], $arrtrueans['2'],
//                $arrtrueans['3'], $arrtrueans['4'], $arrtrueans['5'], $arrtrueans['6'], $arrtrueans['7'],
//                $arrtrueans['8'], $arrtrueans['9'], $arrtrueans['10'],$arrtrueans['11'], $arrtrueans['12'],
//                $arrtrueans['13'], $arrtrueans['14'],$arrtrueans['15'], $arrtrueans['16'], $arrtrueans['17'],
//                $arrtrueans['18'], $arrtrueans['19'], $arrtrueans['20'], $arrtrueans['21'], $arrtrueans['22'],$arrtrueans['23']
//        , $arrtrueans['24'], $arrtrueans['25'], $arrtrueans['26'], $arrtrueans['27'], $arrtrueans['28'], $arrtrueans['29']
//                , $arrtrueans['30'], $transcript, $transimg, $ishow, $bookcode, $testID);


    }
}