<?php  
define ("NL", "\n");
$weekday = date('l');

$cleaning_array = [ "Пропылесосить", "Протереть пыль", 
                    "Стирка", "Уборка на кухне", 
                    "Уборка в ванной", "Полить цветы", "Помыть плитку", "Помыть холодильник", "Помыть микроволновку"
];
    $clean_indx = rand(0, count($cleaning_array)-1);
                    
$breakfast_array = ["Овсянная каша", "Бутерброды", "Яичница", "Омлет", "Блины", "Вафли", "Сырники", "Оладушки"
];
    $brfast_indx = rand(0, count($breakfast_array)-1);

$dinner_array = [ "Макароны", "Овощное рагу", "Салат", "Булгур", "Кускус", "Кукурузная каша", "Гречка", "Киноа"
];
    $din_indx = rand(0, count($dinner_array)-1);

$movies_array = [ "Черная Пантера", "«Мстители: Война бесконечности»", "«Зеленая книга»",
            "Веном", "Аквамен", "Joker",  "Glass", 
            "Alita: Battle Angel", "John Wick", "Gemini", 
             "Красный воробей", "Birdbox", "Doctor Sleep", "Eli", 
             "Jessica Jones", "Maniac", "Chilling Adventures of Sabrina",
             "Frontier", "Каратель", "Dark", "Rain", "Молодой папа", "Кладбище домашних животных"
];
    $movies_indx = rand(0, count($movies_array)-1);


$language_array = ["Deutsch", "English", "Russian"];
    $lang_indx = rand(0, count($language_array)-1);

switch ($weekday){
    case "Monday":
        print $cleaning_array[$clean_indx] . NL . $language_array[$lang_indx] . NL . $breakfast_array[$brfast_indx] . NL . $dinner_array[$din_indx]. NL;
        break;
    case "Tuesday":
        print  $language_array[$lang_indx] . NL . $breakfast_array[$brfast_indx] . NL . $dinner_array[$din_indx]. NL;
        break;
    case "Wednesday":
        print $movies_array[$movies_indx] . NL . $language_array[$lang_indx] . NL . $breakfast_array[$brfast_indx] . NL . $dinner_array[$din_indx]. NL;
        break;
    case "Thursday":
        print  $language_array[$lang_indx] . NL . $breakfast_array[$brfast_indx] . NL . $dinner_array[$din_indx]. NL;
        break;
    case "Friday":
        print $cleaning_array[$clean_indx] . NL . $language_array[$lang_indx] . NL . $breakfast_array[$brfast_indx] . NL . $dinner_array[$din_indx]. NL;
        break;
    default:
        print 'weekend';
        break;
}

