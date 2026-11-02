<?php
get_header();
?>

<main id="primary" class="site-main py-2">
    <div class="container px-4 px-lg-5">
        <div class="preview-card d-flex justify-content-center">
            <div class="card shadow-lg rounded-4 w-100" style="max-width: 800px;">
                <div class="card-body">
                    <h1 class="mb-4 text-center">Rotate Image</h1>

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

                    <div id="image-rotate-container" class="text-center p-4" style="width: 100%; overflow: hidden; position: relative; display: flex; justify-content: center; align-items: center;">
                        <img id="image-to-rotate" alt="Image Preview" style="width: 80%; max-width: 400px; height: auto; margin: 0; transition: transform 0.3s ease-in-out;">
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 d-flex flex-wrap justify-content-evenly g-2 g-md-3">
                            <div class="col-6 col-md-3 p-0 p-md-3">
                                <a href="#" id="left" class="text-decoration-none">
                                    <div class="card h-100 shadow-sm">
                                        <i class="fa-solid fa-rotate-left fa-2x mt-3 d-block text-center"></i>
                                        <h6 class="text-center">Left</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 p-0 p-md-3">
                                <a href="#" id="right" class="text-decoration-none">
                                    <div class="card h-100 shadow-sm">
                                        <i class="fa-solid fa-rotate-right fa-2x mt-3 d-block text-center"></i>
                                        <h6 class="text-center">Right</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 p-0 p-md-3">
                                <a href="#" id="horizontal" class="text-decoration-none">
                                    <div class="card h-100 shadow-sm">
                                        <i class="fa-solid fa-left-right fa-2x mt-3 d-block text-center"></i>
                                        <h6 class="text-center">Horizontal</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 p-0 p-md-3">
                                <a href="#" id="vertical" class="text-decoration-none">
                                    <div class="card h-100 shadow-sm">
                                        <i class="fa-solid fa-up-down fa-2x mt-3 d-block text-center"></i>
                                        <h6 class="text-center">Vertical</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-6 col-8">
                            <a type="button" id="download-image" class="btn btn-lg rounded-4 w-100 downloadButton" style="display: none; background-color:rgb(231, 245, 152);" download="cropped-image.png">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 pb-5">
        <div class="row justify-content-center">
            <div class="col-4 col-md-2 col-lg-2 cropImg">
                <a href="#" id="resize-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-expand fa-2x mt-3 text-center"></i>
                        <h5 class="text-center">Resize</h5>
                    </div>
                </a>
            </div>
            <div class="col-4 col-md-2 col-lg-2 cropImg">
                <a href="#" id="crop-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-crop fa-2x mt-3 text-center"></i>
                        <h5 class="text-center">Crop</h5>
                    </div>
                </a>
            </div>
            <div class="col-4 col-md-2 col-lg-2 convertImg">
                <a href="#" id="convert-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-arrows-left-right fa-2x mt-3 text-center"></i>
                        <h5 class="text-center">Convert</h5>
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
    const uploadButton = document.getElementById('uploadButton');
    const imageUploadDiv = document.getElementById('imageUploadDiv');
    const imageUpload = document.getElementById('imageUpload');
    const downloadButton = document.getElementById('download-image');
    const img = document.getElementById('image-to-rotate');

    let rotation = 0, scaleX = 1, scaleY = 1;

    // Function to update the image immediately when uploaded
    function updateImageDisplay(src) {
        img.src = src;
        img.style.display = 'block';
        downloadButton.style.display = 'block';
        sessionStorage.setItem('uploadedImage', src);
    }

    // Load image from sessionStorage if available
    const storedImage = sessionStorage.getItem('uploadedImage');
    if (storedImage) {
        updateImageDisplay(storedImage);
    } else {
        img.style.display = 'none';
    }

    // Show the upload input when the button is clicked
    uploadButton.addEventListener('click', function() {
        imageUploadDiv.style.display = 'block';  
        uploadButton.style.display = 'none';  // Hide the button
    });

    // Handle image upload
    imageUpload.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                updateImageDisplay(e.target.result);

                // Restore upload button after image selection
                uploadButton.style.display = 'inline-block';
                imageUploadDiv.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    });

    // Function to apply transformations
    function applyTransform() {
        img.style.transform = `rotate(${rotation}deg) scaleX(${scaleX}) scaleY(${scaleY})`;
    }

    // Rotate and flip functions
    document.getElementById('left').addEventListener('click', function() {
        rotation = (rotation - 90) % 360;
        applyTransform();
    });

    document.getElementById('right').addEventListener('click', function() {
        rotation = (rotation + 90) % 360;
        applyTransform();
    });

    document.getElementById('horizontal').addEventListener('click', function() {
        scaleX *= -1;
        applyTransform();
    });

    document.getElementById('vertical').addEventListener('click', function() {
        scaleY *= -1;
        applyTransform();
    });

    // Download function
    downloadButton.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');

        const isRotated = Math.abs(rotation % 180) === 90;
        const imgWidth = img.naturalWidth;
        const imgHeight = img.naturalHeight;
        const canvasWidth = isRotated ? imgHeight : imgWidth;
        const canvasHeight = isRotated ? imgWidth : imgHeight;

        canvas.width = canvasWidth;
        canvas.height = canvasHeight;

        ctx.translate(canvasWidth / 2, canvasHeight / 2);
        ctx.rotate((rotation * Math.PI) / 180);
        ctx.scale(scaleX, scaleY);
        ctx.drawImage(img, -imgWidth / 2, -imgHeight / 2, imgWidth, imgHeight);

        downloadButton.href = canvas.toDataURL('image/png');
    });


    const resizeImage = document.getElementById('resize-image');
    const cropImage = document.getElementById('crop-image');
    const convertImage = document.getElementById('convert-image');

    resizeImage.addEventListener('click', function() {
        // Redirect to the resize page
        window.location.href = '<?php echo esc_url(home_url("/resize")); ?>';
    });
    cropImage.addEventListener('click', function() {
        // Redirect to the rotate page
        window.location.href = '<?php echo esc_url(home_url("/crop")); ?>';
    });
    convertImage.addEventListener('click', function() {
        // Redirect to the rotate page
        window.location.href = '<?php echo esc_url(home_url("/convert")); ?>';
    });
});

</script>
