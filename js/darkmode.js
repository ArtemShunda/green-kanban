document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark");
    }
    const toggle = document.querySelector(".darkmode");
    console.log("toggle:", toggle);
    if (toggle) {
        toggle.addEventListener("click", () => {
            document.body.classList.toggle("dark");

            if (document.body.classList.contains("dark")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
        });
    } else {
        console.warn("Кнопка .darkmode не найдена");
    }
});