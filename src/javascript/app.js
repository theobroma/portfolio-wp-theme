import $ from 'jquery';

/*Динамический padding для Global-wrap чтобы прижать footer к низу  */
var gwPadding = function() {                                      //  Функция для назначения padding-bottom
  var $footerHeight =$('#footer').height();                   //  Определяем высоту футера и это значение присваиваем переменной
      $('.global-wrap').css("padding-bottom",$footerHeight);  //  Добавляем CSS свойство .global-wrap
};
$(document).ready(gwPadding);                                 //  Вызов функции при загрузке документа
$(window).resize(gwPadding);                                  //  Вызов функции при изменении ширины окна
