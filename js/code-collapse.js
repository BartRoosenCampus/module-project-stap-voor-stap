"use strict";

const titles = document.getElementsByClassName('code-title');
const contents = document.getElementsByClassName('code-content');
closeContent();

for (const title of titles) {
    title.addEventListener('click', () => {
        const element = document.getElementById(title.dataset.id);

        if (element.style.display === 'none') {
            element.style.display = '';
        } else {
            element.style.display = 'none';
        }
    });
}

function closeContent() {
    for (const cont of contents) {
        cont.style.display = 'none';
    }
}