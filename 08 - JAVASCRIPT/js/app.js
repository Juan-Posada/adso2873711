const marvel = {
    render: () => {
        const urlAPI = 'https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=251374e9774eb2e0a1c7f6b4b252009d&hash=0bf4e8a1878a49a40706ded12a9f4818&limit=250';
        const container = document.querySelector('#boxContain');
        const imgTwo = document.querySelector('.imgTwo'); // Contenedor de la imagen del personaje seleccionado
        const infoTwo = document.querySelector('.infoTwo'); // Contenedor de la información del personaje seleccionado
        const containOne = document.querySelector('.contain.one'); // Contenedor uno
        const containTwo = document.querySelector('.contain.two'); // Contenedor dos
        const containThree = document.querySelector('.contain.three'); // Contenedor tres

        containOne.style.display = 'block';
        containTwo.style.display = 'none';
        containThree.style.display = 'none';

        const enterButton = document.querySelector('.buttonWelcome .welcome');
        enterButton.addEventListener('click', () => {
            containOne.style.display = 'none';
            containTwo.style.display = 'block';
        });

        let contentHTML = '';

        fetch(urlAPI)
            .then(res => res.json())
            .then((json) => {
                console.log(json, 'RES.JSON');
                for (const hero of json.data.results) {
                    
                    contentHTML += `
                        <div 
                            class="box" 
                            data-name="${hero.name}" 
                            data-image="${hero.thumbnail.path}.${hero.thumbnail.extension}" 
                            data-description="${hero.description}" 
                            data-comics="${hero.comics.available}" 
                            data-events="${hero.events.available}"
                        >
                            <div class="for">
                                <div class="img">
                                    <img src="${hero.thumbnail.path}.${hero.thumbnail.extension}">
                                </div>
                                <div class="info">
                                    <h2>${hero.name}</h2>
                                </div>
                            </div>
                        </div>
                    `;
                }
                container.innerHTML = contentHTML;

               
                const boxes = document.querySelectorAll('.box');
                boxes.forEach(box => {
                    box.addEventListener('click', (e) => {
                        const name = box.getAttribute('data-name');
                        const image = box.getAttribute('data-image');
                        const description = box.getAttribute('data-description') || 'No description available.';
                        const comics = box.getAttribute('data-comics');
                        const events = box.getAttribute('data-events');

                        
                        imgTwo.innerHTML = `
                            <img src="${image}" alt="${name}">
                        `;

                        
                        infoTwo.innerHTML = `
                            <h2>${name}</h2>
                            <p><strong>Description:</strong> ${description}</p>
                            <p><strong>Comics:</strong> ${comics}</p>
                            <p><strong>Events:</strong> ${events}</p>
                        `;

                       
                        containTwo.style.display = 'none';
                        containThree.style.display = 'block';
                    });
                });
            })
            .catch(error => console.error('Error fetching data:', error));

        
        const backButtons = document.querySelectorAll('.back');
        backButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (containThree.style.display === 'block') {
                    
                    containThree.style.display = 'none';
                    containTwo.style.display = 'block';
                } else if (containTwo.style.display === 'block') {
                    
                    containTwo.style.display = 'none';
                    containOne.style.display = 'block';
                }
            });
        });
    }
};

marvel.render();