// Function to fetch wedding-related images from API to populate carousel
async function populateCarousel() {
    const accessKey = 'Ac_rQcpdMtXQA7kee6BPdmUPDg0Ibuj93M1qfrWJDM4';
    const count = 15; 
    const query = 'wedding'; 
    const apiUrl = `https://api.unsplash.com/photos/random?count=${count}&query=${query}&client_id=${accessKey}`;

    try {
        const response = await fetch(apiUrl);
        const imageData = await response.json();

        // Get carousel inner element
        const carouselInner = document.querySelector('.carousel-inner');

        // Iterate through the image data and create carousel items
        imageData.forEach((image, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.classList.add('carousel-item');
            if (index === 0) {
                carouselItem.classList.add('active');
            }

            const img = document.createElement('img');
            img.src = image.urls.regular; 
            img.classList.add('d-block');
            img.classList.add('w-100');
            img.alt = image.alt_description; 

            carouselItem.appendChild(img);
            carouselInner.appendChild(carouselItem);
        });
    } catch (error) {
        console.error('Error fetching images from Unsplash:', error);
    }
}


populateCarousel();
