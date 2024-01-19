
        /*document.getElementById('cesta-link').addEventListener('click', function(event) {
            console.log('click')
            event.preventDefault();
            document.getElementById('cesta-box').style.display = 'block';
        });
        window.addEventListener('click', function(event) {
            console.log(event.target)
            if (!event.target.matches('#cesta-img') && !event.target.matches('#cesta-link')) {
                console.log('cerrar')
                var cestaBox = document.getElementById('cesta-box');
                if (cestaBox.style.display == 'block') {
                    cestaBox.style.display = 'none';
                }
            }
        });*/

        document.getElementById('cesta-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('cesta-box').classList.add('show');
        });
        window.addEventListener('click', function(event) {
            if (!event.target.matches('#cesta-img')) {
                var cartBox = document.getElementById('cesta-box');
                if (cartBox.classList.contains('show')) {
                    cartBox.classList.remove('show');
                }
            }
        });