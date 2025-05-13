document.addEventListener("DOMContentLoaded", function () {
    const animatedText = document.querySelector(".animated-text");
    animatedText.style.opacity = 0;
    animatedText.style.transform = "translateY(20px)";
    setTimeout(() => {
        animatedText.style.transition = "opacity 1s ease-out, transform 1s ease-out";
        animatedText.style.opacity = 1;
        animatedText.style.transform = "translateY(0)";
    }, 500);

    const carBoxes = document.querySelectorAll(".car-box");
    carBoxes.forEach(box => {
        box.addEventListener("mouseenter", () => {
            box.style.transition = "all 0.3s ease-in-out";
            box.style.transform = "scale(1.1)";
        });
        box.addEventListener("mouseleave", () => {
            box.style.transform = "scale(1)";
        });
    });
});
