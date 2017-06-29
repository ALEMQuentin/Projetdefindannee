/**
 * Created by Sanglaw on 28/06/2017.
 */
var burger = document.querySelector('.img_burger');
var nav = document.querySelector('.burger');

burger.addEventListener('click', function(){
    nav.classList.toggle('active');
});