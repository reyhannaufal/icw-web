function _scrollTo(curr, id, delayTo = '') {
    if (delayTo !== '') {
        window.location.href = delayTo;
        setDelayOn(id);
        return;
    }
    let element = document.getElementById(id);
    let adder = 0; // getAdder(id)

    window.scroll({
        behavior: 'smooth',
        left: 0,
        top: (element) ? element.getBoundingClientRect().top + window.scrollY + adder : 0
    });
}

function reScroll(curr) {
    if (localStorage.delay) {
        _scrollTo(curr, localStorage.temp_id);
        setDelayOff();
    }
}

function setDelayOn(id) {
    localStorage.delay = true;
    localStorage.temp_id = id;
}

function setDelayOff() {
    localStorage.delay = false;
    localStorage.temp_id = '';
}

// function getAdder(id) {
//     let adder;
//     switch(id) {
//         case "introduction":
//             adder = 120;
//             break;
//         case "recap":
//             adder = 63
//             break;
//         default:
//             adder = 0;
//     }
//     return adder;
// }
