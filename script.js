function revolve() {
    var element = document.getElementById('loco');

    if (element.className === "happy-div") {
        element.className = "rotate";
    }
    else if ( element.className === "rotate") {
        element.className = 'happy-div';
    }
}

function rotate() {
    var element = document.getElementById('loco-1');

    if (element.className === "sad-div") {
        element.className = "rotate";
    }
    else if ( element.className === "rotate") {
        element.className = 'sad-div';
        
    }
}