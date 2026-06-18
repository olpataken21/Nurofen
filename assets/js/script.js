document.addEventListener('DOMContentLoaded', function(){
    const popup = document.querySelector('#popup-inform');

    document.querySelector('.agree').addEventListener('click', function(){
        popup.style.display = "none";
    });
    document.querySelector('.no-agree').addEventListener('click', function(){
        window.location.href = "https://www.gaviscon.ru/";
    })
     
})   



document.addEventListener('DOMContentLoaded', () => {
    Fancybox.bind("[data-fancybox]", {
        dragToClose: false,
        placeFocusBack: false,
        closeButton:false,
    // Carousel: {
    //     Panzoom: {
    //         touch: false
    //     },
    //     Navigation:false,
    // }
    });
});

