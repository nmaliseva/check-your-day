<?php 


print "\t ----Контроль веса---- \t \n";

function calculate_imt($argument_current_weight, $argument_height)
{
    $argument_height = $argument_height / 100;
    $height2 = $argument_height * $argument_height; 
    $result = $argument_current_weight / $height2;
    return $result;
}
function make_note($user_name, $user_height, $current_date, $size_waist, $size_stomach, $size_hips , $current_weight)
{
    $name = "Имя: ";
    $height = "Рост: ";
    $date = "Дата: ";
    $waist = "Обхват талии: ";
    $stomach = "Обхват живота: ";
    $hips = "Обхват бедер: ";
    $weight = "Текущий вес: ";
    $imt = "Индекс массы тела: ";
    $current_imt = calculate_imt($current_weight, $user_height);

    print $name . $user_name . "\n";
    print $height . $user_height . "\n";
    print $date . $current_date . "\n";
    print $waist . $size_waist . "\n";
    print $stomach . $size_stomach . "\n";
    print $hips . $size_hips . "\n";
    print $weight . $current_weight . "\n";
    print $imt . $current_imt;
   
    if ($current_imt <= 24.99) {
        echo "   ~~~~~Норма~~~~ \n";
    }
    elseif ($current_imt >= 25 && $current_imt <=29.9) {
        echo "   ~~~~Избыточная масса тела (предожирение)~~~~\n";
    }
    elseif ($current_imt >=30 && $current_imt <= 35) {
        echo "   ~~~~Ожирение~~~~\n";
    }

}

make_note("test01", 172, "29/10/2019", 85, 102, 109, 82.2) . "\t";
make_note("test02", 172, "29/10/2019", 85, 102, 109, 82.2) . "\t";
make_note("test03", 172, "05/10/2019", 85, 94, 104, 81,3) . "\t";

    
    
    
