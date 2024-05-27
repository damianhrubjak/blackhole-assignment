document.addEventListener("DOMContentLoaded", () => {
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const menuContent = document.querySelector("#menu-content");
    const height = menuContent.querySelector(".get-height").offsetHeight + 20;
    let isOpened = false;

    hamburgerBtn.addEventListener("click", () => {
        menuContent.style.setProperty(
            "--menu-height",
            isOpened ? "0px" : `${height}px`
        );
        isOpened = !isOpened;
    });
});
