const imageInput = document.getElementById('imageInput');
const selectedImage = document.getElementById('selectedImage');
const fileName = document.getElementById('fileName');

imageInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = (e) => {
                selectedImage.src = e.target.result;
                selectedImage.style.display = 'block';
                fileName.innerText = `Nama File: ${file.name}`;
                fileName.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            selectedImage.style.display = 'none';
            fileName.style.display = 'none';
        }
    } else {
        selectedImage.style.display = 'none';
        fileName.style.display = 'none';
    }
});
