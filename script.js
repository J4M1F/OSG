
        document.getElementById('cesta-link').addEventListener('click', function(event) {
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
        });