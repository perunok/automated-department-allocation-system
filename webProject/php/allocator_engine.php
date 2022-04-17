<?php


ini_set("display_errors",true);

function calculate($ccgpa, $centrance, $cholistic, $adv,    $cgpa ,$entrance ,$holistic ,$female ,$special ,$devrig){

    if(
        ($cgpa >= 2 || $cgpa <= 4)&&
        ($entrance >= 0 || $cgpa <= 700)&&
        ($holistic >= 0 || $cgpa <= 100)&&
        ($female == 0 || $female == 1)&&
        ($special == 0 || $special == 1)&&
        ($devrig == 0 || $devrig == 1)
    ){

    $ot = $female + $special + $devrig;
    switch ($ot) {
        case 3:
            
            $others = $adv;
            break;
        case 2:
            $others = $adv - ($adv/3);
            break;
        case 1:
            $others = $adv - (($adv/3) * 2);
            break;
        case 0:
            $others = 0;
            break;
        
    }
    
    $cgpap = ($cgpa * $ccgpa)/100;
    $entrancep = ($entrance * $centrance)/100;
    $holisticp = ($holistic * $cholistic)/100;
    $sum = $cgpap + $entrancep + $holisticp;
    
    
    $othersp = (($cgpap + $entrancep + $holisticp) * $others)/100;
    $overall = $sum + $othersp;

    return $overall;
}else{
    return 'invalid input detected';
}
}

require 'db.php';

    $st_capacity = $conn->prepare("select * from department_quota");
    $st_prefrence = $conn->prepare("select * from department_prefrence");
    $student_list = $conn->prepare("select ID,Gender,CGPA,Special_need,Department,Holistic_point,Entrance_point,Developing_region from student_information");
    $st_capacity->execute();
    $st_prefrence->execute();
    $student_list->execute();
    $capacity_result = $st_capacity->fetchAll(PDO::FETCH_NUM);
    $prefrence_result = $st_prefrence->fetchAll(PDO::FETCH_NUM);
    $student_result = $student_list->fetchAll(PDO::FETCH_NUM);


//fetching the capacity of all the departments form the database
    foreach ($capacity_result as $a) {
        $dpt_capacity[$a[1]] = $a[2];
    }
//fetching the prefrence of students into multidimentional associative array :)
    foreach ($prefrence_result as $b) {
        $arr = "";
        for($i=1;$i<count($b);$i++){
            if($i == count($b)-1){
            $arr = $arr.$b[$i];
            }else{
            $arr =$arr.$b[$i].",";
            }
        }
        $x = explode(",",$arr);
        $dpt_prefrence[$b[0]] = $x;
    }
//calculate and rank the students and allocate
    $info = json_decode(file_get_contents('../data/info.json'),true);
    $fixed_cgpa = $info[0]['cgpa'];
    $fixed_entrance = $info[0]['entrance'];
    $fixed_holistic = $info[0]['coc'];
    $fixed_adv = $info[0]['suppliment'];
        foreach ($student_result as $c) {
            if($c[1] == "male"){
                $g = 0;
            }else{
                $g = 1;
            }
//$ccgpa, $centrance, $cholistic, $adv,    $cgpa ,$entrance ,$holistic ,$female ,$special ,$devrig
            $p = calculate($fixed_cgpa,$fixed_entrance,$fixed_holistic,$fixed_adv  ,$c[2],$c[6], $c[5], $g, $c[3], $c[7]);
            $rank[$c[0]] = $p; 
        }
        arsort($rank);
         //allocate ;)
         $not_choosers_str = "";
        foreach ($rank as $key => $d) {
            foreach ($dpt_prefrence[$key] as $element) {
                if($element == 'notchoosen'){
                    $not_choosers_str = $not_choosers_str.$key.",";
                    break;
                }elseif($dpt_capacity[$element] > 0 ) {
                    $allocation[$key] = $element;
                    $dpt_capacity[$element]--;
                    break;
                }

            }


        }

        $not_choosers = explode(",",$not_choosers_str);

    //students that haven't choosen their prefrences should be allocated too :)
    asort($dpt_capacity);
    foreach ($not_choosers as $name => $id) {
        foreach ($dpt_capacity as $dptk => $dptv) {
            if($dpt_capacity[$dptk] > 0 ) {
                $allocation[$id] = $dptk;
  
                $dpt_capacity[$dptk]--;
                break;
            }
        }
    }

    $alldata = "";
    foreach ($allocation as $n => $v) {
        $alldata = $alldata."update student_information set Department = '".$v."' where ID = '".$n."'; ";

    } 
        $info = json_decode(file_get_contents('../data/info.json'),true);
        $deadline = $info[0]['deadline'];

        if($deadline == date('Y-m-d')){
            $allocate =$conn->prepare($alldata);
            $allocate->execute();
        }else{
            echo 'gena new';
        }
        foreach ($rank as $key => $value) {
            echo $key."  ".$value;
            echo "<br>";
        }
        // header("Location: ../ui_adminpanel.php?s=1");
        
?>