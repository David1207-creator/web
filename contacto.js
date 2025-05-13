document.addEventListener("DOMContentLoaded", function () {
    const contactoBoxes = document.querySelectorAll(".contacto-box");

    // Aplica animación de aparición con IntersectionObserver
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.5 });

    contactoBoxes.forEach((box, index) => {
        observer.observe(box);
        box.style.transitionDelay = `${index * 200}ms`; // Retraso progresivo
    });

    // Efecto de hover para resaltar los cuadros de contacto con brillo
    contactoBoxes.forEach(box => {
        box.addEventListener("mouseover", () => {
            box.classList.add("hovered");
        });

        box.addEventListener("mouseleave", () => {
            box.classList.remove("hovered");
        });
    });
});
