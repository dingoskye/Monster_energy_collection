window.addEventListener('load', init);

//Globals
const apiUrl = 'http://prg03-eindopdracht.test/webservice/';
let monsterData = {};
let body;
let gallery;
let detailModal;
let detailContent;
let favorites = JSON.parse(localStorage.getItem('favorites')) || {};

/**
 * Initialize after the DOM is ready
 */
function init() {
    body = document.querySelector('body');

    // Retrieve the gallery
    gallery = document.querySelector('#monster-gallery');
    gallery.addEventListener('click', monsterClickHandler);

    // Retrieve modal elements and handle events
    detailModal = document.querySelector('#monster-detail');
    detailContent = document.querySelector('.modal-content');
    detailModal.addEventListener('click', detailModalClickHandler);
    detailModal.addEventListener('close', detailModalCloseHandler);

    // Start the application with loading the API data
    ajaxRequest(apiUrl, createMonster);
}

function ajaxRequest(url, successHandler) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error (${response.status}): ${response.statusText}`);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler);
}

function createMonster(data) {
    console.log(data);

    for (let getMonsters of data) {
        console.log(getMonsters);

        // Create monster energy collection card
        const collection = document.createElement('div');
        collection.classList.add('monster-card');
        collection.dataset.id = getMonsters.id;

        // Title
        const title = document.createElement('h2');
        title.innerText = getMonsters.name;
        collection.appendChild(title);

        // Image
        const img = document.createElement('img');
        img.src = getMonsters.image;
        img.alt = getMonsters.name;
        collection.appendChild(img);

        // Button to open details
        const button = document.createElement('button');
        button.innerText = 'Details';
        button.classList.add('details');
        button.dataset.id = getMonsters.id;
        collection.appendChild(button);

        // Favorites Button
        const favoritesButton = document.createElement('button');
        favoritesButton.dataset.id = getMonsters.id;
        updateFavoriteButton(favoritesButton, getMonsters.id);
        favoritesButton.addEventListener('click', toggleFavorite);
        collection.appendChild(favoritesButton);

        // Append collection to the gallery
        gallery.appendChild(collection);

        // Store data for later use
        monsterData[getMonsters.id] = {
            id: getMonsters.id,
            name: getMonsters.name,
            description: getMonsters.description
        };
    }
}

function monsterClickHandler(e) {
    console.log(e.target);
    const clickedItem = e.target;

    if (clickedItem.nodeName !== 'BUTTON' || clickedItem.innerText === 'Mark as favorite' || clickedItem.innerText === 'Remove from favorites') {
        return;
    }

    // Get monster details
    const monster = monsterData[clickedItem.dataset.id];

    // Reset the content
    detailContent.innerHTML = '';

    // Show the monster energy name
    const title = document.createElement('h1');
    title.innerHTML = monster.name;
    detailContent.appendChild(title);

    // Show the description
    const description = document.createElement('p');
    description.innerText = `Description: ${monster.description}`;
    detailContent.appendChild(description);

    // Open the modal
    detailModal.showModal();
    body.classList.add('dialog-open');
}

function toggleFavorite(e) {
    const monsterId = e.target.dataset.id;

    if (favorites[monsterId]) {
        delete favorites[monsterId];
    } else {
        favorites[monsterId] = true;
    }

    // Update localStorage
    localStorage.setItem('favorites', JSON.stringify(favorites));

    // Update button text
    updateFavoriteButton(e.target, monsterId);
}

function updateFavoriteButton(button, monsterId) {
    if (favorites[monsterId]) {
        button.innerText = 'Remove from favorites';
        button.classList.remove('add-favorite');
        button.classList.add('remove-favorite');
    } else {
        button.innerText = 'Mark as favorite';
        button.classList.remove('remove-favorite');
        button.classList.add('add-favorite');
    }
}

function detailModalClickHandler(e) {
    if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON') {
        detailModal.close();
    }
}

function detailModalCloseHandler() {
    body.classList.remove('dialog-open');
}

function ajaxErrorHandler(error) {
    console.error(error);

    const message = document.createElement('div');
    message.classList.add('error');
    message.innerHTML = 'Er is iets fout gegaan.';
    gallery.before(message);
}