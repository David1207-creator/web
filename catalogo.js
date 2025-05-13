document.addEventListener("DOMContentLoaded", function () {
    const verMarcasBtn = document.getElementById("verMarcas");
    const menuMarcas = document.getElementById("menuMarcas");
    const modelosContainer = document.getElementById("modelos");
    const marcas = document.querySelectorAll(".marca");

    // Alternar visibilidad del menú con animación
    verMarcasBtn.addEventListener("click", function () {
        menuMarcas.classList.toggle("visible");
    });

    // Mostrar modelos según la marca seleccionada
    window.mostrarModelos = function (marca) {
        modelosContainer.classList.remove("hidden");

        // Ocultar todas las marcas
        marcas.forEach(m => m.classList.add("hidden"));

        // Mostrar la marca seleccionada
        document.getElementById(marca).classList.remove("hidden");
    };

    // Agregar eventos a los botones "Ver más"
    document.querySelectorAll(".car-box a").forEach(boton => {
        boton.addEventListener("click", function (event) {
            event.preventDefault();
            window.location.href = this.href;
        });
    });

    // Agregar animación de apertura y cierre del menú
    verMarcasBtn.addEventListener("click", function () {
        if (menuMarcas.style.maxHeight) {
            menuMarcas.style.maxHeight = null;
        } else {
            menuMarcas.style.maxHeight = menuMarcas.scrollHeight + "px";
        }
    });
});
