// document.addEventListener('DOMContentLoaded', function(){
//     const popup = document.querySelector('#popup-inform');

//     document.querySelector('.agree').addEventListener('click', function(){
//         popup.style.display = "none";
//     });
//     document.querySelector('.no-agree').addEventListener('click', function(){
//         window.location.href = "https://www.gaviscon.ru/";
//     })
     
// })   
document.addEventListener('DOMContentLoaded', function () {

    const popup = document.querySelector('.popup');
    const agreeBtn = document.querySelector('.agree');
    const noAgreeBtn = document.querySelector('.no-agree');

   if (!popup) return;

    const isReload = performance.getEntriesByType("navigation")[0]?.type === "reload";

    if (isReload) {
        sessionStorage.removeItem('popupAccepted');
    }
    if (sessionStorage.getItem('popupAccepted') === 'true') {
        popup.style.display = "none";
        return;
    }

    popup.style.display = "flex";

    if (agreeBtn) {
        agreeBtn.addEventListener('click', function () {
            sessionStorage.setItem('popupAccepted', 'true');
            popup.style.display = "none";
        });
    }

    if (noAgreeBtn) {
        noAgreeBtn.addEventListener('click', function () {
            window.location.href = "https://www.gaviscon.ru/";
        });
    }

});


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

