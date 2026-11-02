<?php
get_header();
?>

<main id="primary" class="site-main py-2">
    <div class="container px-4 px-lg-5">
        <div class="preview-card d-flex justify-content-center">
            <div class="card shadow-lg rounded-4 w-100" style="max-width: 800px;">
                <div class="card-body">
                    <h1 class="mb-4 text-center">Convert Image</h1>

                    <!-- Image Upload -->
                    <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-8">
                            <button id="uploadButton" class="btn btn-primary w-100">Upload New Image</button>
                            <div id="imageUploadDiv" class="mt-3" style="display: none;">
                                <label for="imageUpload" class="form-label text-light">Upload an Image:</label>
                                <input type="file" id="imageUpload" class="form-control form-control-lg rounded-4 ps-4" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <!-- Canvas for Live Preview -->
                    <div class="d-flex justify-content-center">
                        <div class="bg-light border border-secondary rounded-3 p-4 mb-4">
                            <img id="image-to-convert" class="w-100 mx-auto" alt="Image Preview" style="max-height: 300px;">
                        </div>
                    </div>
                    <div>
                        <div class="container mt-2">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-sm-12 border rounded p-3 shadow-sm">
                                    <h5 class="text-center mb-3">Choose Image Format</h5>
                                    <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="imageFormat" value="png" class="d-none"> PNG
                                        </label>
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="imageFormat" value="jpeg" class="d-none"> JPEG
                                        </label>
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="imageFormat" value="jpg" class="d-none"> JPG
                                        </label>
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="imageFormat" value="webp" class="d-none"> WEBP
                                        </label>
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="imageFormat" value="bmp" class="d-none"> BMP
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="col-lg-6 col-8">
                            <a type="button" id="download-image" class="btn btn-lg rounded-4 w-100 downloadButton" style="display: none; background-color:rgb(231, 245, 152);">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-4 col-md-2 col-lg-2 cropImg">
                <a href="#" id="crop-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-crop fa-2x mt-3 text-center"></i>
                        <h5 class="text-center">Crop</h5>
                    </div>
                </a>
            </div>
            <div class="col-4 col-md-2 col-lg-2 rotateImg">
                <a href="#" id="rotate-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-rotate fa-2x mt-3 text-center"></i>
                        <h5 class="text-center">Rotate</h5>
                    </div>
                </a>
            </div>
            <div class="col-4 col-md-2 col-lg-2 cropImg">
                <a href="#" id="resize-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-expand fa-2x mt-3 text-center"></i>
                        <h5 class="text-center">Resize</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var img = document.getElementById('image-to-convert');
    var radioButtons = document.querySelectorAll('input[name="imageFormat"]');
    var downloadButton = document.getElementById('download-image');
    var uploadButton = document.getElementById('uploadButton');
    var imageUploadDiv = document.getElementById('imageUploadDiv');
    var imageUpload = document.getElementById('imageUpload');
    
    const cropImage = document.getElementById('crop-image');
    const rotateImage = document.getElementById('rotate-image');
    const resizeImage = document.getElementById('resize-image');

    // Check if there is an image stored in sessionStorage
    var uploadedImage = sessionStorage.getItem('uploadedImage');
    if (uploadedImage) {
        img.src = uploadedImage;
        img.style.display = 'block';
    } else {
        alert('No image found in sessionStorage. Please upload an image first.');
    }

    // Show the image upload input when clicking the upload button
    uploadButton.addEventListener('click', function() {
        uploadButton.style.display = 'none'; // Hide the upload button
        imageUploadDiv.style.display = 'block'; // Show the image upload input
    });

    // Handle image file selection
    imageUpload.addEventListener('change', function(e) {
        var file = e.target.files[0];
        if (!file) {
            alert('No file selected.');
            return;
        }

        // Create a new FileReader to display the selected image
        var reader = new FileReader();
        reader.onload = function(event) {
            // Update sessionStorage with the new image URL
            sessionStorage.setItem('uploadedImage', event.target.result);

            // Update the image preview
            img.src = event.target.result;
            img.style.display = 'block';

            // Hide the file input after selecting the image
            imageUploadDiv.style.display = 'none';

            // Show the upload button again
            uploadButton.style.display = 'block';
        };
        
        // Read the selected file as a data URL
        reader.readAsDataURL(file);
    });

    // Ensure all radio buttons are unchecked initially
    radioButtons.forEach(radio => radio.checked = false);

    // Hide the download button initially
    downloadButton.style.display = 'none';

    // Handle image format selection
    radioButtons.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (!img.src || img.src === '') {
                alert('No image found to convert!');
                return;
            }

            var format = this.value; // Get selected format
            this.checked = true; // Keep the radio button selected

            // Add 'active' class to the label for visual feedback (optional)
            document.querySelectorAll('label').forEach(label => label.classList.remove('active'));
            this.parentNode.classList.add('active'); // Highlight the selected label

            // Create a canvas to draw the image
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');
            canvas.width = img.naturalWidth;
            canvas.height = img.naturalHeight;
            ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight);

            // Check for the selected format and handle each conversion type
            let mimeType = 'image/' + format;
            if (format === 'jpg' || format === 'jpeg') mimeType = 'image/jpeg'; // Handle JPG/JPEG as the same type
            
            // Convert the canvas content to the selected image format
            canvas.toBlob(function(blob) {
                if (!blob) {
                    alert("Conversion failed. Try again.");
                    return;
                }

                var url = URL.createObjectURL(blob);
                downloadButton.href = url;
                downloadButton.style.display = 'block';
                downloadButton.setAttribute('download', 'converted-image.' + format);
            }, mimeType);
        });
    });

    // Cleanup: Revoke the object URL after download
    downloadButton.addEventListener('click', function() {
        setTimeout(() => URL.revokeObjectURL(this.href), 100);
    });

    // Crop, rotate, and resize image actions
    cropImage.addEventListener('click', function() {
        window.location.href = '<?php echo esc_url(home_url("/crop")); ?>';
    });
    rotateImage.addEventListener('click', function() {
        window.location.href = '<?php echo esc_url(home_url("/rotate")); ?>';
    });
    resizeImage.addEventListener('click', function() {
        window.location.href = '<?php echo esc_url(home_url("/resize")); ?>';
    });
});


</script>
