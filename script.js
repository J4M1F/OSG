document.getElementById('cesta-link').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('cesta-box').classList.add('show');
});
window.addEventListener('click', function (event) {
    if (!event.target.matches('#cesta-img')) {
        var cartBox = document.getElementById('cesta-box');
        if (cartBox.classList.contains('show')) {
            cartBox.classList.remove('show');
        }
    }
});