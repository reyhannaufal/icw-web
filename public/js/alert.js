// Auto fade-out alert
window.setTimeout(function () {
    let element = document.querySelector(".alert");
    if (element) {
        removeElement(element);
    }
}, 2000);

function closeAlert(target_id) {
    let element = document.querySelector("#" + target_id);
    removeElement(element);
}

function removeElement(element) {
    element.classList.add("fade-out");
    element.addEventListener("transitionend", function () {
        element.parentNode.removeChild(element);
    });
}
