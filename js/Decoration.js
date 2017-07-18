/*
* @Author: Marte
* @Date:   2017-07-18 09:57:38
* @Last Modified by:   Marte
* @Last Modified time: 2017-07-18 15:43:01
*/

'use strict';
window.onscroll=function(){
    if ($(document).scrollTop()>=600) {
        $(".to_top").css("display","block");
    }else{
        $(".to_top").css("display","none");
    };
}