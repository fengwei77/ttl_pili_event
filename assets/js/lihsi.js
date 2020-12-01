/**
*
* @authors Your Name (you@example.org)
* @date    2020-10-15 20:37:10
* @version $Id$
*/

var orangeWidth = $(window).width();
var currentWidth = $(window).width();

function showWidth()
{
    currentWidth = $(window).width();
    currentHeight = $(window).height()

    //$("#test-width").text(currentWidth+"-"+currentHeight);
}

// if the image in the window of browser when the page is loaded, show that image

//image over change image
var sourceSwap = function () {
    var $this = $(this);
    var newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
}

$(function() {

    $('.switch').click(function(){
        if($(this).hasClass("open"))
        {
            $(this).removeClass("open");
            $(".menu_pannel").removeClass("open");
        }
        else
        {
            $(this).addClass("open");
            $(".menu_pannel").addClass("open");
        }
    });


    $('img[data-alt-src]').each(function() { 
        new Image().src = $(this).data('alt-src'); 
    }).hover(sourceSwap, sourceSwap); 
});

function resetMobileMenu()
{
    $('.switch').removeClass("open");
    $('.menu_pannel').removeClass("open");
}


$(document).ready(function() {
    showWidth();
});

$(window).resize(function() {
    showWidth();
    resetMobileMenu();
});