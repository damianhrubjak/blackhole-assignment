import { onClickOutside, onEscape } from "./utils";

const mapButton = document.querySelector("#map-button");
const mapElement = document.querySelector("#map-element");
const className = "translate-x-full";

onClickOutside(mapElement, mapButton, () => {
    mapElement.classList.add(className);
});

mapButton.addEventListener("click", () => {
    mapElement.classList.toggle(className);
});

onEscape(() => {
    mapElement.classList.add(className);
});
