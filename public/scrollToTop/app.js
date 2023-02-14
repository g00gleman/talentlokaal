function scrollToTop() {
    var x = document.getElementById("top");
    x.scrollIntoView({
        block: "start",
        behavior: "smooth",
        inline: "start",
    });
}
