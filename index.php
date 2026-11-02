<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package online_image_resizer
 */

get_header();
?>

<main id="primary" class="site-main pb-5">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center mt-5">Upload Image</h2>
                <div id="imageUpload" class="drag-drop text-center p-4 border-dashed rounded">
                    <i id="dragText" class="fa-solid fa-cloud-arrow-up fa-3x"></i>
                    <h5 id="dragText">Drag and drop or click to select an image</h5>

                    <img id="imagePreview" alt="Image Preview" style="width: auto; height: auto; display: none;">
                    <button type="button" class="btn btn-secondary mt-4" onclick="document.getElementById('image').click();">Select Image</button>
                    <input type="file" id="image" accept="image/*" class="form-control" style="display: none;" required>
                </div>
                <!-- <button id="nextButton" class="btn btn-primary w-100 mt-3" style="display: none;">Next</button> -->
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-8">
                        <button type="button" id="nextButton" class="btn btn-lg rounded-4  w-100 mb-3 nextButton" style="background-color:#0CC143;">Resize</button>
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

    <div class="container content mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>Online Image Resizer: Resize Your Images for FREE!</h1>
                <p>Effortlessly resize, crop, and flip images online. Our free, secure Online Image Resizer is fast, user-friendly, and perfect for web and social media needs.</p>

                <h2>Why Choose Online Image Resizer?</h2>
                <p>In today’s digital world, optimizing images for websites, social media, or printing is essential. Here are some reasons why Online Image Resizer is your perfect choice:</p>
                <ul>
                    <li><strong>Ease of Use:</strong> No technical skills? No problem! Our tool is designed for everyone.</li>
                    <li><strong>Fast and Efficient:</strong> Resize, crop, and flip your images in just a few clicks.</li>
                    <li><strong>Supports All Formats:</strong> Upload and edit images in popular formats like JPEG, PNG, BMP, and more.</li>
                    <li><strong>Privacy Guaranteed:</strong> Your uploaded files are processed securely and never shared.</li>
                    <li><strong>Free to Use:</strong> Get started without any subscription or hidden charges.</li>
                </ul>

                <h2>Features of Online Image Resizer</h2>
                <ul>
                    <li><strong>Image Resizing:</strong> Adjust the height and width of your images to fit your specific requirements.</li>
                    <li><strong>Image Cropping:</strong> Remove unwanted parts of your image to focus on what matters.</li>
                    <li><strong>Image Flipping:</strong> Flip your images horizontally or vertically to create mirror effects.</li>
                    <li><strong>Real-Time Preview:</strong> Instantly see your edits in action before downloading.</li>
                    <li><strong>High-Quality Results:</strong> Maintain the quality of your images even after editing.</li>
                </ul>

                <h2>How to Use Online Image Resizer</h2>
                <ol>
                    <section class="mb-3">
                        <li>Upload Image</li>
                        <ul class="ms-1">
                            <li>Click the "Upload Image" button to select an image from your device.</li>
                            <li>The uploaded image will be displayed for editing.</li>
                        </ul>
                    </section>

                    <section class="mb-3">
                        <li>Choose a Tool</li>
                        <ul class="ms-1">
                            <li>Select the desired editing tool:</li>
                            <ul class="ms-1">
                                <li><strong>Resize-</strong>Adjust the image dimensions.</li>
                                <li><strong>Crop-</strong>Cut out a specific part of the image.</li>
                                <li><strong>Rotate-</strong>Rotate the image left or right and can also flip the image.</li>
                                <li><strong>Convert-</strong>Change the image format (e.g., JPG to PNG).</li>
                            </ul>
                        </ul>
                    </section>

                    <section class="mb-3">
                        <li>Apply Changes</li>
                        <ul class="ms-1">
                            <li>Use the available controls to modify the image as needed.</li>
                            <li>Preview your edits before saving.</li>
                        </ul>
                    </section>

                    <section class="mb-3">
                        <li>Download the Image</li>
                        <ul class="ms-1">
                            <li>Once satisfied, click the "Download" button to save the edited image.</li>
                        </ul>
                    </section>
                </ol>

                <h2>Who Can Benefit from Online Image Resizer?</h2>
                <ul>
                    <li><strong>Web Developers:</strong> Optimize images for faster website loading times.</li>
                    <li><strong>Social Media Managers:</strong> Create perfectly sized images for social media platforms.</li>
                    <li><strong>E-commerce Sellers:</strong> Adjust product photos to meet marketplace requirements.</li>
                    <li><strong>Students and Educators:</strong> Resize and edit images for projects and presentations.</li>
                    <li><strong>General Users:</strong> Edit family photos, holiday snapshots, and more with ease.</li>
                </ul>

                <h2>Optimize Your Images for Better Performance</h2>
                <p>Resizing images is more than just making them fit; it’s about optimizing them for performance. Smaller image sizes mean faster website load times and better user experience.</p>

                <h2>Start Editing Today!</h2>
                <p>Experience the convenience of online image editing with Online Image Resizer. No installations, no complicated software – just quick, easy, and high-quality image adjustments.</p>

                <a href="https://onlineimageresizer.net" class="btn btn-primary">Start Editing Now</a>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>

<script>
    const imageUpload = document.getElementById('imageUpload');
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    const nextButton = document.getElementById('nextButton');
    const dragText = document.getElementById('dragText');

    const cropImage = document.getElementById('crop-image');
    const rotateImage = document.getElementById('rotate-image');
    const convertImage = document.getElementById('convert-image');

    function showPopup() {
        alert("Please upload an image first.");
    }

    function checkImageBeforeRedirect(url) {
        if (sessionStorage.getItem('uploadedImage')) {
            window.location.href = url;
        } else {
            showPopup();
        }
    }

    imageUpload.addEventListener('dragover', function(e) {
        e.preventDefault();
        imageUpload.classList.add('dragover');
    });

    imageUpload.addEventListener('dragleave', function() {
        imageUpload.classList.remove('dragover');
    });

    imageUpload.addEventListener('drop', function(e) {
        e.preventDefault();
        imageUpload.classList.remove('dragover');
        const file = e.dataTransfer.files[0];
        if (file && file.type.startsWith('image/')) {
            imageInput.files = e.dataTransfer.files;
            previewImage(file);
        } else {
            alert('Please upload a valid image file.');
        }
    });

    imageInput.addEventListener('change', function() {
        const file = imageInput.files[0];
        if (file && file.type.startsWith('image/')) {
            previewImage(file);
        } else {
            alert('Please select a valid image file.');
        }
    });

    function previewImage(file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
            dragText.style.display = 'none';
            nextButton.style.display = 'block';

            // Save image data to sessionStorage
            sessionStorage.setItem('uploadedImage', e.target.result);
        };
        reader.readAsDataURL(file);
    }

    nextButton.addEventListener('click', function() {
        checkImageBeforeRedirect('<?php echo esc_url(home_url("/resize")); ?>');
    });

    cropImage.addEventListener('click', function(e) {
        e.preventDefault();
        checkImageBeforeRedirect('<?php echo esc_url(home_url("/crop")); ?>');
    });

    rotateImage.addEventListener('click', function(e) {
        e.preventDefault();
        checkImageBeforeRedirect('<?php echo esc_url(home_url("/rotate")); ?>');
    });

    convertImage.addEventListener('click', function(e) {
        e.preventDefault();
        checkImageBeforeRedirect('<?php echo esc_url(home_url("/convert")); ?>');
    });
</script>