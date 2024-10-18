// Grab elements
document.addEventListener('DOMContentLoaded', function () {
    const cardContainer = document.getElementById('card-container');
    const slider = document.getElementById('custom-slider');

    // Ensure cards move when slider moves
    slider.addEventListener('input', function () {
        const maxScrollLeft = cardContainer.scrollWidth - cardContainer.clientWidth;
        cardContainer.scrollLeft = (slider.value / 100) * maxScrollLeft;
    });

    // Update the slider when the user scrolls the card container
    cardContainer.addEventListener('scroll', function () {
        const maxScrollLeft = cardContainer.scrollWidth - cardContainer.clientWidth;
        slider.value = (cardContainer.scrollLeft / maxScrollLeft) * 100;
    });
});
