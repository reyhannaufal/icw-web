function _scrollTo(curr, id) {
    let element = document.getElementById(id);
    let adder = 0; // getAdder(id)

    window.scroll({
        behavior: 'smooth',
        left: 0,
        top: element.getBoundingClientRect().top + window.scrollY + adder
    });
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
