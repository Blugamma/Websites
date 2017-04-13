document.getElementById('menuButtonScript').onclick = function() {
    divTest = document.getElementById('mobileNav');
    if (divTest.style.display === "block") {
        divTest.style.display = 'none';
    }
    else {
        divTest.style.display = "block";
    }
}

