// // Sélection du bouton (vous devrez ajouter un id="dark-mode-toggle" à votre bouton)
// const btn = document.getElementById("dark-mode-toggle");
// const html = document.documentElement;

// if (localStorage.getItem("theme") === "dark") {
//     html.classList.add("dark");
// }

// // 2. Écouter le clic pour basculer
// btn.addEventListener("click", () => {
//     html.classList.toggle("dark");
    
//     // Enregistrer le choix
//     if (html.classList.contains("dark")) {
//         localStorage.setItem("theme", "dark");
//     } else {
//         localStorage.setItem("theme", "light");
//     }
// });

    const btn = document.getElementById('dark-btn');
    // Au clic, on ajoute ou retire la classe "dark" de la racine du site (html)
    btn.addEventListener('click', () => {
        document.getElementById('html').classList.toggle('dark');
    });
