function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

onmessage = function(event) {
    
    //getRandomInt(600)
    postMessage([getRandomInt(600),getRandomInt(600)]);
}