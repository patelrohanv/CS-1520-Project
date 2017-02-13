/*Remember
    $(selector).action()
    #id selector
    .class selector
*/
$(function() {
    $(".ui-label").click(function() {
        $(".ui-label").children(".ui-content").slideToggle();
    });
});