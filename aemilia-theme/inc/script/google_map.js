document.addEventListener('DOMContentLoaded', () => {

    const coordinates = Array.from(document.querySelectorAll('p._Coordinates'));
    coordinates.forEach(e => e.addEventListener('mouseover', evt => {
        console.log(e.innerHTML);
    }))
});