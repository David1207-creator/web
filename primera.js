document.addEventListener("DOMContentLoaded", function () {
    function showInfo(section) {
        const sections = document.querySelectorAll(".info-section");
        sections.forEach(s => s.style.display = "none"); // Oculta todas las secciones

        const selectedSection = document.getElementById(section);
        if (selectedSection) {
            selectedSection.style.display = "block"; // Muestra la sección seleccionada
        }
    }

    document.getElementById("btn-mision").addEventListener("click", function () {
        showInfo("mision");
    });

    document.getElementById("btn-vision").addEventListener("click", function () {
        showInfo("vision");
    });

    document.getElementById("btn-valores").addEventListener("click", function () {
        showInfo("valores");
    });
});
