<?php 
class metalPrice{
    
    function goldToEUR(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("</tr>", $data1[1]);
        $data3 = explode('<td>', $data2[0]);
        if((float)$data3[4]<= 0){
            $amount = $data3[3];
        }else{
            $amount = $data3[4];
        }
        return $amount;
    }
    function goldToUSD(){        
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("<td class='bold'>", $data1[1]);
        $data3 = explode('</td>', $data2[1]);
        $data4 = explode('</td>', $data2[2]);
        if((float)$data4[0]<= 0){
            $amount = $data3[0];
        }else{
            $amount = $data4[0];
        }
        return $amount;
    }
    function goldToGPB(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("</tr>", $data1[1]);
        $data3 = explode('<td>', $data2[0]);
        if((float)$data3[2]<= 0){
            $amount = $data3[1];
        }else{
            $amount = $data3[2];
        }
        return $amount;
    }
    function silverToEUR(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table?metal=silver');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("<td class='bold'>", $data1[1]);
        $data3 = explode('</td>', $data2[1]);
        $amount = $data3[2];
        return $amount;
    }
    function silverToUSD(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table?metal=silver');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("<td class='bold'>", $data1[1]);
        $data3 = explode('</td>', $data2[1]);
        $amount = $data3[0];
        return $amount;
    }
    function silverToGPB(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table?metal=silver');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("<td class='bold'>", $data1[1]);
        $data3 = explode('</td>', $data2[1]);
        $amount = $data3[1];
        return $amount;
    }
    
    function platinumToUSD(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table?metal=platinum');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("<td class='bold'>", $data1[1]);
        $data3 = explode('</td>', $data2[1]);
        $data4 = explode('</td>', $data2[2]);
        if((float)$data4[0]<= 0){
            $amount = $data3[0];
        }else{
            $amount = $data4[0];
        }
        return $amount;
    }
    function platinumToEUR(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table?metal=platinum');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("</tr>", $data1[1]);
        $data3 = explode('<td>', $data2[0]);
        if((float)$data3[4]<= 0){
            $amount = $data3[3];
        }else{
            $amount = $data3[4];
        }
        return $amount;
    }
    function platinumToGPB(){
        $amount = 0;
        $data = file_get_contents('http://lbma.oblive.co.uk/table?metal=platinum');
        $data1 = explode('<tbody>', $data);
        $data2 = explode("</tr>", $data1[1]);
        $data3 = explode('<td>', $data2[0]);
        if((float)$data3[2]<= 0){
            $amount = $data3[1];
        }else{
            $amount = $data3[2];
        }
        return $amount;
    }
}
?>