document.addEventListener('DOMContentLoaded', function () {
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        const regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
        const results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Get the selected image path from the URL parameter
    const selectedImage = getParameterByName('selectedImage');
    const foodName = getParameterByName('foodName');
    const foodDescription = getParameterByName('foodDescription') ;
    const foodPrice = getParameterByName('foodPrice');

    // Display the selected image on the second page
    const imageElement = document.createElement('img');
    if (selectedImage) {
        // Insert the selected image into the detail-card
        const detailCard = document.querySelector('.detail-card');
        if (detailCard) {
            const detailImg = detailCard.querySelector('.detail-img');
            const foodNameElement = detailCard.querySelector('#foodName');
            const foodDescriptionElement = detailCard.querySelector('#foodDescription');
            const foodPriceElement = detailCard.querySelector('#foodPrice');
            const checkoutForm = detailCard.querySelector('#checkoutForm');
            //const actualCheckoutForm = detailCard.querySelector('#actualCheckoutForm');

            if (detailImg) {
                detailImg.src = selectedImage;
            }

            if (foodNameElement) {
                foodNameElement.textContent = foodName; // Set the food name
            }

            if (foodDescriptionElement) {
                foodDescriptionElement.textContent = foodDescription; // Set the food description
            }

            if (foodPriceElement) {
                foodPriceElement.textContent = foodPrice; // Set the food price
            }

            // Set the style properties for centering and resizing the card
            detailCard.style.display = 'flex';
            detailCard.style.flexDirection = 'column';
            detailCard.style.alignItems = 'center';
            detailCard.style.justifyContent = 'center';
            detailCard.style.width = '35%'; // Set your desired width
            detailCard.style.margin = 'auto';

             // Show the checkout form
             checkoutForm.style.display = 'block';

             // Add a submit event listener to the actual checkout form
            //  if (actualCheckoutForm) {
            //      actualCheckoutForm.addEventListener('submit', function (event) {
            //          // Prevent the default form submission (you can handle the submission logic here)
            //          event.preventDefault();
            //          alert('Checkout form submitted!');
            //      });
            //  }

             



        }
        document.body.appendChild(imageElement);

    } else {
        const messageElement = document.createElement('p');
        messageElement.textContent = 'No image selected';
        document.body.appendChild(messageElement);
        console.error('No image path found in the URL.');
    }
});

