document.addEventListener('DOMContentLoaded', () => {

    const arrowsElements = Array.from(document.querySelectorAll('.arrow > *'));
    console.log(arrowsElements);

    let delay = 0;

    arrowsElements.forEach(e => {
        
        e.classList.add('show');
        e.style.transitionDelay = delay + 's'; 
        delay += 0.25;
        if (e.classList.contains('triangle')) {
            e.classList.add('show_triangle');
        } 
    })
    

});