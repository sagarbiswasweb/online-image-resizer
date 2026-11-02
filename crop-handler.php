<?php
get_header();
?>

<main id="primary" class="site-main crop-page py-2">
    <div class="container px-4 px-lg-5">
        <div class="preview-card d-flex justify-content-center">
            <div class="card shadow-lg rounded-4 w-100" style="max-width: 800px;">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4 fw-bold text-light">Crop Image</h1>


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
                    <!-- Container for Live Preview -->
                    <div class="d-flex justify-content-center mb-3">
                        <div class="col-md-8" id="image-cropper-container"
                            class="w-100 mx-auto bg-light border border-secondary rounded-3 mx-auto mb-4"
                            style="height: 300px; overflow: hidden;">
                            <!-- The image element will be inserted here -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="col-5">
                                <button type="button" id="crop-image" class="btn btn-lg rounded-4  w-100 mb-3 resizeButton" style="background-color: #0CC143;">Crop</button>
                            </div>
                            <!-- <div class="col-2"></div> -->
                            <div class="col-5">
                                <button type="button" id="free-form" class="btn btn-lg rounded-4 w-100 downloadButton" style="background-color:rgb(190, 153, 103);">Reset</button>
                            </div>
                        </div>
                    </div>

                    <!-- Download Button -->
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-6 col-8">
                            <a type="button" id="download-image" class="btn btn-lg rounded-4 w-100 downloadButton" style="display: none; background-color:rgb(231, 245, 152);" download="cropped-image.png">Download</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-4 col-md-2 col-lg-2 cropImg">
                <a href="#" id="resize-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-expand fa-2x mt-3 text-center"></i>
                        <h5 class=" text-center">Resize</h5>
                    </div>
                </a>
            </div>
            <div class="col-4 col-md-2 col-lg-2 rotateImg">
                <a href="#" id="rotate-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-rotate fa-2x mt-3 text-center"></i>
                        <h5 class=" text-center">Rotate</h5>
                    </div>
                </a>
            </div>
            <div class="col-4 col-md-2 col-lg-2 convertImg">
                <a href="#" id="convert-image" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <i class="fa-solid fa-arrows-left-right fa-2x mt-3 text-center"></i>
                        <h5 class=" text-center">Convert</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">change size with card</h2>
        <div class="row one-clik-resize">
            <!-- for general setting  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-solid fa-gear fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Screen</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="square" href="#" class="card-text">Square (1:1)</a></li>
                            <li><a id="monitor" href="#" class="card-text">Monitor (4:3)</a></li>
                            <li><a id="widescreen" href="#" class="card-text">Widescreen (16:9)</a></li>
                            <li><a id="panorama" href="#" class="card-text">Panorama (3:1)</a></li>
                            <li><a id="web-medium" href="#" class="card-text">Web medium (8:5)</a></li>
                            <li><a id="full-hd" href="#" class="card-text">Full HD (16:9)</a></li>
                            <li><a id="ultra-hd" href="#" class="card-text">Ultra HD 4K (16:9)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for screen  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-solid fa-desktop fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Screen</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="film" href="#" class="card-text">35mm film (3:2)</a></li>
                            <li><a id="cinemascope" href="#" class="card-text">Cinemascope (21:9)</a></li>
                            <li><a id="super-ultra-wide" href="#" class="card-text">Super Ultra Wide (32:9)</a></li>
                            <li><a id="web-mini" href="#" class="card-text">Web mini (4:3)</a></li>
                            <li><a id="web-small" href="#" class="card-text">Web small (8:5)</a></li>
                            <li><a id="web-common" href="#" class="card-text">Web common (16:9)</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- for paper  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-solid fa-book fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Paper</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="film" href="#" class="card-text">35mm film (3:2)</a></li>
                            <li><a id="a4" href="#" class="card-text">Paper A4 (1:1.414)</a></li>
                            <li><a id="a5" href="#" class="card-text">Paper A5 (1:1.414)</a></li>
                            <li><a id="a6" href="#" class="card-text">Paper A6 (1:1.414)</a></li>
                            <li><a id="paper-letter" href="#" class="card-text">Paper Letter (8.5:11)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for facebook  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-facebook fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Facebook</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="fb-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="fb-square-post" href="#" class="card-text">Square Post (1:1)</a></li>
                            <li><a id="fb-landscape-post" href="#" class="card-text">Landscape Post (1.91:1)</a></li>
                            <li><a id="fb-portrait-post" href="#" class="card-text">Portrait Post (4:5)</a></li>
                            <li><a id="fb-stories" href="#" class="card-text">Stories (9:16)</a></li>
                            <li><a id="fb-cover-photo" href="#" class="card-text">Cover Photo (16:9)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for instagram  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-instagram fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Instagram</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="ig-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="ig-square-post" href="#" class="card-text">Square Post (1:1)</a></li>
                            <li><a id="ig-landscape-post" href="#" class="card-text">Landscape Post (1.91:1)</a></li>
                            <li><a id="ig-portrait-post" href="#" class="card-text">Portrait Post (4:5)</a></li>
                            <li><a id="ig-stories-reels" href="#" class="card-text">Stories & Reels (9:16)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for linkedin  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-linkedin fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Linkedin</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="in-post-image" href="#" class="card-text">Post Image (1.91:1)</a></li>
                            <li><a id="in-square-post" href="#" class="card-text">Square Post (1:1)</a></li>
                            <li><a id="in-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="in-cover-photo" href="#" class="card-text">Cover Photo (4:1)</a></li>
                            <li><a id="in-stories" href="#" class="card-text">Stories (9:16)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for twitter  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-twitter fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Twitter</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="x-post-image" href="#" class="card-text">Post Image (16:9)</a></li>
                            <li><a id="x-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="x-header-image" href="#" class="card-text">Header Image (3:1)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for tiktok  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-tiktok fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">TikTok</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="tt-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="tt-videos" href="#" class="card-text">Videos (Full Screen) (9:16)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for youtube  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-youtube fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Youtube</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="yt-video" href="#" class="card-text">Video (Standard) (16:9)</a></li>
                            <li><a id="yt-shorts" href="#" class="card-text">Shorts (9:16)</a></li>
                            <li><a id="yt-thumbnail" href="#" class="card-text">Thumbnail (16:9)</a></li>
                            <li><a id="yt-channel-banner" href="#" class="card-text">Channel Banner (16:9)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for pinterest  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-pinterest fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Pinterest</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="pin-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="pin-standard-pin" href="#" class="card-text">Standard Pin (2:3)</a></li>
                            <li><a id="pin-square-pin" href="#" class="card-text">Square Pin (1:1)</a></li>
                            <li><a id="pin-long-pin" href="#" class="card-text">Long Pin (1:2.1)</a></li>
                            <li><a id="pin-stories" href="#" class="card-text">Stories (9:16)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for snapchat  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-snapchat fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Snapchat</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="sc-stories-ad" href="#" class="card-text">Stories and Ads (9:16)</a></li>
                            <li><a id="sc-profile-picture" href="#" class="card-text">Profile Picture (Bitmoji) (1:1)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for threads(meta)  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-threads fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Threads</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="thr-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="thr-post-image" href="#" class="card-text">Post Image (1:1)</a></li>
                            <li><a id="thr-portrait-post" href="#" class="card-text">Portrait Post (4:5)</a></li>
                            <li><a id="thr-landscape-post" href="#" class="card-text">Landscape Post (16:9)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for reddit  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-reddit fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Reddit</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="rd-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="rd-post-image" href="#" class="card-text">Post Image (16:9)</a></li>
                            <li><a id="rd-header-image" href="#" class="card-text">Header Image (4:1)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for whatsapp  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-whatsapp fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">WhatsApp</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="wa-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="wa-status-image" href="#" class="card-text">Status Image (9:16)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- for tumblr  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-tumblr fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Tumblr</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="tum-profile-picture" href="#" class="card-text">Profile Picture (1:1)</a></li>
                            <li><a id="tum-podt-image" href="#" class="card-text">Post Image (1:1)</a></li>
                            <li><a id="tum-header-image" href="#" class="card-text">Header Image (3:1)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>

<!-- Add Cropper.js CDN -->
<link href="https://unpkg.com/cropperjs/dist/cropper.min.css" rel="stylesheet">
<script src="https://unpkg.com/cropperjs/dist/cropper.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const uploadButton = document.getElementById('uploadButton');
        const imageUploadDiv = document.getElementById('imageUploadDiv');
        const imageUploadInput = document.getElementById('imageUpload');
        const imageCropperContainer = document.getElementById('image-cropper-container');
        let cropper = null; // Store cropper instance globally

        // Show the file input field and hide the upload button when clicked
        uploadButton.addEventListener('click', function() {
            imageUploadDiv.style.display = 'block';
            uploadButton.style.display = 'none'; // Hide the upload button
        });


        // Handle image upload
        imageUploadInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const newImageSrc = e.target.result;

                    // Clear previous image and cropper instance
                    imageCropperContainer.innerHTML = '';
                    if (cropper) {
                        cropper.destroy(); // Destroy previous cropper instance
                        cropper = null;
                    }

                    // Create new image element
                    const img = document.createElement('img');
                    img.id = 'image-to-crop';
                    img.src = newImageSrc;
                    img.style.display = 'block';
                    imageCropperContainer.appendChild(img);

                    // Save the image in session storage
                    sessionStorage.setItem('uploadedImage', newImageSrc);

                    // Initialize Cropper.js
                    cropper = new Cropper(img, {
                        aspectRatio: NaN,
                        viewMode: 2,
                        autoCropArea: 0.5,
                        responsive: true,
                        movable: true,
                        zoomable: true,
                        scalable: true,
                        rotatable: true
                    });

                    // Hide input field and show upload button again after image upload
                    imageUploadDiv.style.display = 'none';
                    uploadButton.style.display = 'inline-block';

                    // Show crop button
                    document.getElementById('crop-image').style.display = 'inline-block';

                    // Handle cropping
                    document.getElementById('crop-image').addEventListener('click', function() {
                        if (!cropper) return;
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImage = croppedCanvas.toDataURL('image/png');

                        // Enable download button
                        const downloadButton = document.getElementById('download-image');
                        downloadButton.href = croppedImage;
                        downloadButton.style.display = 'inline-block';
                    });

                    // Attach aspect ratio handlers dynamically
                    updateAspectRatioButtons();
                };
                reader.readAsDataURL(file);
            }
        });

        // Function to attach event listeners for aspect ratio buttons
        function updateAspectRatioButtons() {
            const aspectRatios = {
                // for general setting 
                'square': 1,
                'monitor': 4 / 3,
                'widescreen': 16 / 9,
                'panorama': 3 / 1,
                'film': 3 / 2,
                'cinemascope': 21 / 9,
                'super-ultra-wide': 32 / 9,
                'web-mini': 4 / 3,
                'web-small': 8 / 5,
                'web-common': 16 / 9,
                'web-medium': 8 / 5,
                'full-hd': 16 / 9,
                'ultra-hd': 16 / 9,
                'a4': 1 / 1.414,
                'a5': 1 / 1.414,
                'a6': 1 / 1.414,
                'paper-letter': 8.5 / 11,
                // for facebook 
                'fb-profile-picture': 1,
                'fb-square-post': 1,
                'fb-landscape-post': 1.91 / 1,
                'fb-portrait-post': 4 / 5,
                'fb-stories': 9 / 16,
                'fb-cover-photo': 16 / 9,
                // for instagram 
                'ig-profile-picture': 1,
                'ig-square-post': 1,
                'ig-landscape-post': 1.91 / 1,
                'ig-portrait-post': 4 / 5,
                'ig-stories-reels': 9 / 16,
                // for linkedin 
                'in-post-image': 1.91 / 1,
                'in-square-post': 1,
                'in-profile-picture': 1,
                'in-cover-photo': 4 / 1,
                'in-stories': 9 / 16,
                // for twitter 
                'x-post-image': 16 / 9,
                'x-profile-picture': 1,
                'x-header-image': 3 / 1,
                // for tiktok 
                'tt-profile-picture': 1,
                'tt-videos': 16 / 9,
                // for youtube 
                'yt-video': 16 / 9,
                'yt-shorts': 9 / 16,
                'yt-thumbnail': 16 / 9,
                'yt-channel-banner': 16 / 9,
                // for pinterest
                'pin-profile-picture': 1,
                'pin-standard-pin': 2 / 3,
                'pin-square-pin': 1,
                'pin-long-pin': 1 / 2.1,
                'pin-stories': 9 / 16,
                // for snapchat
                'sc-stories-ad': 9 / 16,
                'sc-profile-picture': 1,
                // for threads(meta)
                'thr-profile-picture': 1,
                'thr-post-image': 1,
                'thr-portrait-post': 4 / 5,
                'thr-landscape-post': 16 / 9,
                // for reddit
                'rd-profile-picture': 1,
                'rd-post-image': 16 / 9,
                'rd-header-image': 4 / 1,
                // for reddit
                'wa-profile-picture': 1,
                'wa-status-image': 9 / 16,
                // for tumblr
                'tum-profile-picture': 1,
                'tum-podt-image': 1 / 1,
                'tum-header-image': 3 / 1,

            };


            Object.entries(aspectRatios).forEach(([id, ratio]) => {
                const button = document.getElementById(id);
                if (button) {
                    button.onclick = function(e) {
                        e.preventDefault();
                        if (cropper) cropper.setAspectRatio(ratio);
                        document.getElementById('image-cropper-container').scrollIntoView({
                            behavior: 'smooth',
                        });
                    };
                }
            });

            // Reset to freeform aspect ratio
            const freeFormButton = document.getElementById('free-form');
            if (freeFormButton) {
                freeFormButton.onclick = function() {
                    if (cropper) cropper.setAspectRatio(NaN);
                };
            }
        }

        // Load previously uploaded image if available
        const uploadedImage = sessionStorage.getItem('uploadedImage');
        if (uploadedImage) {
            const img = document.createElement('img');
            img.id = 'image-to-crop';
            img.src = uploadedImage;
            img.style.display = 'block';
            imageCropperContainer.appendChild(img);

            // Initialize Cropper.js
            cropper = new Cropper(img, {
                aspectRatio: NaN,
                viewMode: 2,
                autoCropArea: 0.5,
                responsive: true,
                movable: true,
                zoomable: true,
                scalable: true,
                rotatable: true
            });

            document.getElementById('crop-image').style.display = 'inline-block';

            document.getElementById('crop-image').addEventListener('click', function() {
                if (!cropper) return;
                const croppedCanvas = cropper.getCroppedCanvas();
                const croppedImage = croppedCanvas.toDataURL('image/png');

                const downloadButton = document.getElementById('download-image');
                downloadButton.href = croppedImage;
                downloadButton.style.display = 'inline-block';
            });


            const resizeImage = document.getElementById('resize-image');
            const rotateImage = document.getElementById('rotate-image');
            const convertImage = document.getElementById('convert-image');
            resizeImage.addEventListener('click', function() {
                // Redirect to the resize page
                window.location.href = '<?php echo esc_url(home_url("/resize")); ?>';
            });
            rotateImage.addEventListener('click', function() {
                // Redirect to the resize page
                window.location.href = '<?php echo esc_url(home_url("/rotate")); ?>';
            });
            convertImage.addEventListener('click', function() {
                // Redirect to the resize page
                window.location.href = '<?php echo esc_url(home_url("/convert")); ?>';
            });

            updateAspectRatioButtons();
        } else {
            document.getElementById('no-image-text').textContent = 'Please upload an image first.';
        }
    });
</script>


<!-- for card scrolling effect  -->
<script>
    // Select all the card elements
    const cards = document.querySelectorAll('.card');

    // Create an intersection observer
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // If the card is in view
            if (entry.isIntersecting) {
                // Add the 'visible' class to trigger the animation
                entry.target.classList.add('visible');
                // Once the card is in view, we stop observing it
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2 // When 20% of the card is in view, trigger the animation
    });

    // Observe each card
    cards.forEach(card => {
        observer.observe(card);
    });
</script>