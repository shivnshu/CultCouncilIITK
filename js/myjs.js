
function startUp() {
    // Adjust heigt of Left Sidebar
    $('.topBar').width( $(window).width() + 15);
    $('.leftBar').height( $(window).height() - 170 );
    $('.bottomBar').width( $(window).width() + 15);

}
window.onload = startUp;
