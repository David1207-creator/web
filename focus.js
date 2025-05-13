document.addEventListener("DOMContentLoaded", function () {
    const animatedText = document.querySelector(".animated-text");
    animatedText.style.opacity = 0;
    animatedText.style.transform = "translateY(20px)";
    setTimeout(() => {
        animatedText.style.transition = "opacity 1s ease-out, transform 1s ease-out";
        animatedText.style.opacity = 1;
        animatedText.style.transform = "translateY(0)";
    }, 500);

    const carImage = document.querySelector(".car-image");
    carImage.style.opacity = 0;
    setTimeout(() => {
        carImage.style.transition = "opacity 1.5s ease-in-out";
        carImage.style.opacity = 1;
    }, 800);
    carImage.addEventListener("mouseenter", () => {
        carImage.style.transition = "transform 0.3s ease-in-out";
        carImage.style.transform = "scale(1.05)";
    });
    carImage.addEventListener("mouseleave", () => {
        carImage.style.transform = "scale(1)";
    });
    const backButton = document.querySelector(".back-button");
    backButton.addEventListener("mouseenter", () => {
        backButton.style.backgroundColor = "#008B8B";
    });
    backButton.addEventListener("mouseleave", () => {
        backButton.style.backgroundColor = "#00FFFF";
    });
});
