const carouselDivs = document.getElementById('carousel__divs')
const carouselDiv = document.querySelectorAll('#carousel__divs div')

let carouselCounter = 0

function carousel(option){
    carouselCounter++

    let lastChild = carouselDivs.lastChild;
    lastChild.cloneNode(true)

    switch (option) {
        case 'next':
            if(carouselCounter > carouselDiv.length - 1){
                carouselCounter = 0
                lastChild.appendChild(carouselDiv)
            }
            carouselDivs.style.transform = `translateX(${-carouselCounter * 500}px)`
            break;
        default:
            carouselDivs.style.transform = `translateX(${carouselCounter * 500}px)`
            break;
    }
}

// setInterval(carousel, 1800)