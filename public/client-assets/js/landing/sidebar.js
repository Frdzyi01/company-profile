let sidebarButton = document.getElementById("humburger-menu")
let sidebar = document.getElementById("sidebar")
let sidebarOverlay = document.getElementById("overlay-sidebar")

sidebarButton.addEventListener("click", () => {
    sidebar.classList.remove("translate-x-full")
    sidebarOverlay.classList.remove("hidden")
})

let closeButtonSidebar = document.getElementById("close-button-sidebar")

closeButtonSidebar.addEventListener("click", () => {
    sidebar.classList.add("translate-x-full")
    sidebarOverlay.classList.add("hidden")
})
