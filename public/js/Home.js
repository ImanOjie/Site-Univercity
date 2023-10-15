$(document).scroll(function(e){
    let scrollTop = $(document).scrollTop();
    if(scrollTop > 0){
        $('.navbar').css("position","fixed");
        $('.navbar').css("height","50px");
    } else {
        $('.navbar').css("position","relative");
        $('.navbar').css("height","60px");
    }
});






/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
