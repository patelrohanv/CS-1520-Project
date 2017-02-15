/*Remember
    $(selector).action()
    #id selector
    .class selector
*/
$(function() {
    $("#yearOneContainer").click(function() {
        $(".yearOne").slideToggle();
    });
});
$(function() {
    $("#yearTwoContainer").click(function() {
        $(".yearTwo").slideToggle();
    });
});
$(function() {
    $("#yearThreeContainer").click(function() {
        $(".yearThree").slideToggle();
    });
});
$(function() {
    $("#yearFourContainer").click(function() {
        $(".yearFour").slideToggle();
    });
});
$(function() {
    $("#courseContainer").click(function() {
        $(".courses").slideToggle();
    });
});