<!-- Создание своего ХУКА -->
<?php 
    // Функция выполнения
    function print_hello() {
        echo 'Hello World';
    };

    // Создание Хука
    add_action('my_hook', 'print_hello');

    // Выполнение
    do_action('my_hook');
?>


<!-- Создание своего ХУКА c несколькими функциями и приоритетами --> 
<?php 
function print_hello() {
    echo 'Hello World <br>';
};
function print_hello_1() {
    echo 'Hello World_1 <br>';
};
function print_hello_2() {
    echo 'Hello World_2 <br>';
};
add_action('my_hook', 'print_hello', 15);
add_action('my_hook', 'print_hello_1');
add_action('my_hook', 'print_hello_2', 5);
do_action('my_hook')
?>


<!-- Создание своего ХУКА c несколькими переменными --> 
<?php 
function print_hello($text, $name) {
    echo $text . ' ' . $name;
};
add_action('my_hook', 'print_hello', 15, 2);
do_action('my_hook', 'Hello', 'Tim')
remove_action( 'my_hook', 'print_hello', 15)
?>


<!-- Хук фильтрации -->
<?php 
// Выполняемая функция
function my_filter_function($str) {
    return 'Hello ' . $str;
};

add_filter( 'my_filter', 'my_filter_function', 11); // Создание хука
echo apply_filters( 'my_filter', 'Marina'); // работа с хуком
remove_filter( 'my_filter', 'my_filter_function', 11) // Удаление хука
?>