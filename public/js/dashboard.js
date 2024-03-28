document.getElementById("dashboardMinimize").addEventListener("click", function() {
    var menu = document.querySelector(".menu");
    if (!menu.classList.contains("minimize")) {
        menu.classList.add("minimize");
        document.querySelector(".menu-padding").classList.add("menu-padding-minimize")
        document.querySelector(".menu h2").classList.add("hide");
    } else {
        document.querySelector(".menu-padding").classList.remove("menu-padding-minimize")
        menu.classList.remove("minimize");
        document.querySelector(".menu h2").classList.remove("hide");
    }
});
