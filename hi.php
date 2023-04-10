<?php
    //<div class="wrapper"> 
    $hour = date('G');
if (06 <= $hour && $hour < 11) {
?>
    <h1 style="color: red" class="hi">Доброе утро!<br>Добро пожаловать на наш сайт</h1>
<?
} else 
    if (11 <= $hour && $hour < 18) {
?>
    <h1 style="color: yellow" class="hi">Добрый день!<br>Добро пожаловать на наш сайт</h1>
<?
} else
    if (18 <= $hour && $hour < 23) {
?>
    <h1 style="color: blue" class="hi">Добрый вечер!<br>Добро пожаловать на наш сайт</h1>
<?

} else
    if (23 <= $hour || $hour < 06) {
?>
    <h1 style="color: blaсk" class="hi">Доброй ночи!<br>Добро пожаловать на наш сайт</h1>

<?
}
?>