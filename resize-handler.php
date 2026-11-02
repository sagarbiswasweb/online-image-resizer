<?php
get_header();
?>
<main id="primary" class="site-main resize-page py-2">
    <div class="container px-4 px-lg-5">
        <div class="preview-card d-flex justify-content-center">
            <div class="card shadow-lg rounded-4 w-100" style="max-width: 800px;">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4 fw-bold text-light">Resize Image</h1>

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
                            <canvas id="canvas" class="w-100 mx-auto" style="max-height: 300px;"></canvas>
                        </div>
                    </div>

                    <!-- Resize Controls -->
                    <div class="row d-flex justify-content-center g-lg-5 g-md-4 g-0">
                        <div class="col-md-4 mb-3">
                            <label for="widthInput" class="form-label">Width (px):</label>
                            <input type="number" id="widthInput" class="form-control form-control-lg rounded-4 ps-4" placeholder="Enter width in pixels">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="heightInput" class="form-label">Height (px):</label>
                            <input type="number" id="heightInput" class="form-control form-control-lg rounded-4 ps-4" placeholder="Enter height in pixels">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="col-lg-6 col-8">
                            <button type="button" id="resizeButton" class="btn btn-lg rounded-4  w-100 mb-3 resizeButton" style="background-color: #0CC143;">Resize</button>
                        </div>
                    </div>

                    <!-- Download Button -->
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-6 col-8">
                            <button type="button" id="downloadButton" class="btn btn-lg rounded-4 w-100 downloadButton" style="display: none; background-color:rgb(231, 245, 152);">Download</button>
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


    <div class="container mt-5">
        <h2 class="text-center mb-3 text-light">Resize With One Click</h2>
        <div class="row one-clik-resize">
            <!-- for facebook  -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card d-flex flex-column h-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-brands fa-facebook fa-3x mb-1 text-warning"></i>
                            <h2 class="card-title text-warning">Facebook</h2>
                        </div>
                        <ol class="p-0 m-0" style="list-style: none;">
                            <li><a id="fb-cover" href="#" class="card-text">Cover Photo (820 x 312)</a></li>
                            <li><a id="fb-profile" href="#" class="card-text">Profile Photo (400 x 400)</a></li>
                            <li><a id="fb-shared-image" href="#" class="card-text">Shared Image Post (1200 x 630)</a></li>
                            <li><a id="fb-shared-link-image" href="#" class="card-text">Shared Link Image (1200 x 628)</a></li>
                            <li><a id="fb-stories" href="#" class="card-text">Stories (1080 x 1920)</a></li>
                            <li><a id="fb-event-cover" href="#" class="card-text">Event Cover Photo (1200 x 628)</a></li>
                            <li><a id="fb-group-cover" href="#" class="card-text">Group Cover Photo (820 x 332)</a></li>
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
                            <li><a id="ig-profile" href="#" class="card-text">Profile Picture (320 x 320)</a></li>
                            <li><a id="ig-square-post" href="#" class="card-text">Post (Square) (1080 x 1080)</a></li>
                            <li><a id="ig-portrait-post" href="#" class="card-text">Post (Portrait) (1080 x 1350)</a></li>
                            <li><a id="ig-landscape-post" href="#" class="card-text">Post (Landscape) (1080 x 566)</a></li>
                            <li><a id="ig-stories" href="#" class="card-text">Stories (1080 x 1920)</a></li>
                            <li><a id="ig-reels" href="#" class="card-text">Reels (1080 x 1920)</a></li>
                            <li><a id="ig-highlights-cover" href="#" class="card-text">Highlights Cover (1080 x 1920)</a></li>
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
                            <li><a id="in-personal-profile" href="#" class="card-text">Personal Profile Picture (400 x 400)</a></li>
                            <li><a id="in-company-profile" href="#" class="card-text">Company Profile Picture (300 x 300)</a></li>
                            <li><a id="in-personal-background" href="#" class="card-text">Personal Background Photo (1584 x 396)</a></li>
                            <li><a id="in-company-background" href="#" class="card-text">Company Background Photo (1536 x 768)</a></li>
                            <li><a id="in-post-image" href="#" class="card-text">Post Image (1200 x 627)</a></li>
                            <li><a id="in-stories" href="#" class="card-text">Stories (1080 x 1920)</a></li>
                            <li><a id="in-hero" href="#" class="card-text">Hero Image (Company Pages) (1128 x 376)</a></li>
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
                            <li><a id="x-profile" href="#" class="card-text">Profile Picture (400 x 400)</a></li>
                            <li><a id="x-header" href="#" class="card-text">Header Photo (1500 x 500)</a></li>
                            <li><a id="x-image-tweet" href="#" class="card-text">Image Tweet (1200 x 675)</a></li>
                            <li><a id="x-card-images" href="#" class="card-text">Card Images (800 x 418)</a></li>
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
                            <li><a id="yt-channel-profile" href="#" class="card-text">Channel Profile Picture (800 x 800)</a></li>
                            <li><a id="yt-channel-cover" href="#" class="card-text">Channel Cover Art (2560 x 1440)</a></li>
                            <li><a id="yt-thumbnail" href="#" class="card-text">Thumbnail (1280 x 720)</a></li>
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
                            <li><a id="pin-profile" href="#" class="card-text">Profile Picture (165 x 165)</a></li>
                            <li><a id="pin-pin" href="#" class="card-text">Pin (1000 x 1500)</a></li>
                            <li><a id="pin-cover" href="#" class="card-text">Board Cover Photo (222 x 150)</a></li>
                            <li><a id="pin-story" href="#" class="card-text">Story Pin (1080 x 1920)</a></li>
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
                            <li><a id="tt-profile" href="#" class="card-text">Profile Picture (200 x 200)</a></li>
                            <li><a id="tt-video" href="#" class="card-text">Video (1080 x 1920)</a></li>
                            <li><a id="tt-safe-zone" href="#" class="card-text">Safe Zone for Text (1080 x 1500)</a></li>
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
                            <li><a id="sc-profile" href="#" class="card-text">Profile Picture (Snapcode) (1080 x 1920)</a></li>
                            <li><a id="sc-stories" href="#" class="card-text">Stories/Spotlight (1080 x 1920)</a></li>
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
                            <li><a id="wa-profile" href="#" class="card-text">Profile Picture (500 x 500)</a></li>
                            <li><a id="wa-image" href="#" class="card-text">Status Image/Video (1080 x 1920)</a></li>
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
                            <li><a id="rd-profile" href="#" class="card-text">Profile Icon (256 x 256)</a></li>
                            <li><a id="rd-banner-image" href="#" class="card-text">Banner Image (1920 x 384)</a></li>
                            <li><a id="rd-thumbnail" href="#" class="card-text">Post Thumbnail (1200 x 675)</a></li>
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
                            <li><a id="tum-profile" href="#" class="card-text">Profile Picture (128 x 128)</a></li>
                            <li><a id="tum-header-image" href="#" class="card-text">Header Image (3000 x 1055)</a></li>
                            <li><a id="tum-image" href="#" class="card-text">Image Post (1280 x 1920)</a></li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php
get_sidebar();
get_footer();
?>

<script>
    const imageUpload = document.getElementById('imageUpload'); // Image upload input
    const imageData = sessionStorage.getItem('uploadedImage');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const widthInput = document.getElementById('widthInput');
    const heightInput = document.getElementById('heightInput');
    const resizeButton = document.getElementById('resizeButton');
    const downloadButton = document.getElementById('downloadButton');


    // for facebook 
    const fbCover = document.getElementById('fb-cover');
    const fbProfile = document.getElementById('fb-profile');
    const fbSharedImage = document.getElementById('fb-shared-image');
    const fbSharedLinkImage = document.getElementById('fb-shared-link-image');
    const fbStories = document.getElementById('fb-stories');
    const fbEventCover = document.getElementById('fb-event-cover');
    const fbGroupCover = document.getElementById('fb-group-cover');

    // for instagram 
    const igProfile = document.getElementById('ig-profile');
    const igSquarPost = document.getElementById('ig-square-post');
    const igPortraitPost = document.getElementById('ig-portrait-post');
    const igLandscapePost = document.getElementById('ig-landscape-post');
    const igStories = document.getElementById('ig-stories');
    const igReels = document.getElementById('ig-reels');
    const igHighlightsCover = document.getElementById('ig-highlights-cover');

    // for twitter 
    const xProfile = document.getElementById('x-profile');
    const xheader = document.getElementById('x-header');
    const xImageTweet = document.getElementById('x-image-tweet');
    const xCardImages = document.getElementById('x-card-images');

    // for linkedin 
    const inPersonalProfile = document.getElementById('in-personal-profile');
    const inCompanyProfile = document.getElementById('in-company-profile');
    const inPersonalBackground = document.getElementById('in-personal-background');
    const inCompanyBackground = document.getElementById('in-company-background');
    const inPostImage = document.getElementById('in-post-image');
    const inStories = document.getElementById('in-stories');
    const inHero = document.getElementById('in-hero');

    // for youtube 
    const ytChannelProfile = document.getElementById('yt-channel-profile');
    const ytChannelCover = document.getElementById('yt-channel-cover');
    const ytThumbnail = document.getElementById('yt-thumbnail');

    // for pinterest 
    const pinProfile = document.getElementById('pin-profile');
    const pinPin = document.getElementById('pin-pin');
    const pinCover = document.getElementById('pin-cover');
    const pinStory = document.getElementById('pin-story');

    // for tiktok 
    const ttProfile = document.getElementById('tt-profile');
    const ttVideo = document.getElementById('tt-video');
    const ttSafeZone = document.getElementById('tt-safe-zone');

    // for snapchat 
    const scProfile = document.getElementById('sc-profile');
    const scStories = document.getElementById('sc-stories');

    // for snapchat 
    const waProfile = document.getElementById('wa-profile');
    const waImage = document.getElementById('wa-image');

    // for reddit 
    const rdProfile = document.getElementById('rd-profile');
    const rdBannerImage = document.getElementById('rd-banner-image');
    const rdThumbnail = document.getElementById('rd-thumbnail');

    // for tumblr 
    const tumProfile = document.getElementById('tum-profile');
    const tumHeaderImage = document.getElementById('tum-header-image');
    const tumImage = document.getElementById('tum-image');



    // JavaScript to toggle file input visibility
    document.getElementById("uploadButton").addEventListener("click", function() {
        // Hide the button and show the file input
        this.style.display = "none";
        document.getElementById("imageUploadDiv").style.display = "block";
    });

    let originalImage = null;
    // Handle uploaded image
    imageUpload.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(event) {
                originalImage = new Image();
                originalImage.src = event.target.result;
                originalImage.onload = () => {
                    widthInput.value = originalImage.width;
                    heightInput.value = originalImage.height;
                    drawImage(originalImage.width, originalImage.height);
                    sessionStorage.setItem('uploadedImage', event.target.result); // Store image for session
                };
            };
            reader.readAsDataURL(file);
        } else {
            alert('Please upload a valid image.');
        }
    });

    // Function to draw the image on canvas
    const drawImage = (width, height) => {
        canvas.width = width;
        canvas.height = height;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(originalImage, 0, 0, width, height);
    };

    // Event listener for resizing the image
    resizeButton.addEventListener('click', () => {
        const width = parseInt(widthInput.value, 10);
        const height = parseInt(heightInput.value, 10);
        if (width > 0 && height > 0) {
            drawImage(width, height);
            downloadButton.style.display = 'block';
        } else {
            alert('Please enter valid dimensions.');
        }
    });

    // Event listener for downloading the resized image
    downloadButton.addEventListener('click', () => {
        const link = document.createElement('a');
        link.download = 'resized-image.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
    });

    if (imageData) {
        originalImage = new Image();
        originalImage.src = imageData;
        originalImage.onload = () => {
            widthInput.value = originalImage.width;
            heightInput.value = originalImage.height;
            drawImage(originalImage.width, originalImage.height);
        };

        const drawImage = (width, height) => {
            canvas.width = width;
            canvas.height = height;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(originalImage, 0, 0, width, height);
        };

        // Consolidate configurations for Facebook and Instagram
        const socialMediaConfigurations = [
            // Facebook configurations
            {
                element: fbCover,
                width: 820,
                height: 312
            },
            {
                element: fbProfile,
                width: 400,
                height: 400
            },
            {
                element: fbSharedImage,
                width: 1200,
                height: 630
            },
            {
                element: fbSharedLinkImage,
                width: 1200,
                height: 628
            },
            {
                element: fbStories,
                width: 1080,
                height: 1920
            },
            {
                element: fbEventCover,
                width: 1200,
                height: 628
            },
            {
                element: fbGroupCover,
                width: 820,
                height: 332
            },
            // Instagram configurations
            {
                element: igProfile,
                width: 320,
                height: 320
            },
            {
                element: igSquarPost,
                width: 1080,
                height: 1080
            },
            {
                element: igPortraitPost,
                width: 1080,
                height: 1350
            },
            {
                element: igLandscapePost,
                width: 1080,
                height: 566
            },
            {
                element: igStories,
                width: 1080,
                height: 1920
            },
            {
                element: igReels,
                width: 1080,
                height: 1920
            },
            {
                element: igHighlightsCover,
                width: 1080,
                height: 1920
            },
            // Twitter configurations
            {
                element: xProfile,
                width: 400,
                height: 400
            },
            {
                element: xheader,
                width: 1500,
                height: 500
            },
            {
                element: xImageTweet,
                width: 1200,
                height: 675
            },
            {
                element: xCardImages,
                width: 800,
                height: 418
            },
            // Linkedin configurations
            {
                element: inPersonalProfile,
                width: 400,
                height: 400
            },
            {
                element: inCompanyProfile,
                width: 300,
                height: 300
            },
            {
                element: inPersonalBackground,
                width: 1584,
                height: 396
            },
            {
                element: inCompanyBackground,
                width: 1536,
                height: 768
            },
            {
                element: inPostImage,
                width: 1200,
                height: 627
            },
            {
                element: inStories,
                width: 1080,
                height: 1920
            },
            {
                element: inHero,
                width: 1128,
                height: 376
            },
            // Linkedin configurations
            {
                element: ytChannelProfile,
                width: 800,
                height: 800
            },
            {
                element: ytChannelCover,
                width: 2560,
                height: 1440
            },
            {
                element: ytThumbnail,
                width: 1280,
                height: 720
            },
            // Pinterest configurations
            {
                element: pinProfile,
                width: 165,
                height: 165
            },
            {
                element: pinPin,
                width: 1000,
                height: 1500
            },
            {
                element: pinCover,
                width: 222,
                height: 150
            },
            {
                element: pinStory,
                width: 1080,
                height: 1920
            },
            // Pinterest tiktok
            {
                element: ttProfile,
                width: 200,
                height: 200
            },
            {
                element: ttVideo,
                width: 1080,
                height: 1920
            },
            {
                element: ttSafeZone,
                width: 1080,
                height: 1500
            },
            // Pinterest snapchat
            {
                element: scProfile,
                width: 1080,
                height: 1920
            },
            {
                element: scStories,
                width: 1080,
                height: 1920
            },
            // Pinterest whatsapp
            {
                element: waProfile,
                width: 500,
                height: 500
            },
            {
                element: waImage,
                width: 1080,
                height: 1920
            },
            // Pinterest reddit
            {
                element: rdProfile,
                width: 256,
                height: 256
            },
            {
                element: rdBannerImage,
                width: 1920,
                height: 384
            },
            {
                element: rdThumbnail,
                width: 1200,
                height: 675
            },
            // Pinterest tumblr
            {
                element: tumProfile,
                width: 128,
                height: 128
            },
            {
                element: tumHeaderImage,
                width: 3000,
                height: 1055
            },
            {
                element: tumImage,
                width: 1280,
                height: 1920
            },
        ];

        // Add event listeners dynamically
        socialMediaConfigurations.forEach(({
            element,
            width,
            height
        }) => {
            element.addEventListener('click', () => {
                widthInput.value = width;
                heightInput.value = height;
                drawImage(width, height);
                downloadButton.style.display = 'block'; // Show download button
            });
        });

        // Update canvas size when user changes width or height input
        widthInput.addEventListener('input', () => {
            const width = parseInt(widthInput.value, 10);
            const height = parseInt(heightInput.value, 10);
            if (width > 0 && height > 0) {
                drawImage(width, height);
            }
        });

        heightInput.addEventListener('input', () => {
            const width = parseInt(widthInput.value, 10);
            const height = parseInt(heightInput.value, 10);
            if (width > 0 && height > 0) {
                drawImage(width, height);
            }
        });

        resizeButton.addEventListener('click', () => {
            const width = parseInt(widthInput.value, 10);
            const height = parseInt(heightInput.value, 10);
            if (width > 0 && height > 0) {
                drawImage(width, height);
                downloadButton.style.display = 'block';
            } else {
                alert('Please enter valid dimensions.');
            }
        });

        downloadButton.addEventListener('click', () => {
            const link = document.createElement('a');
            link.download = 'resized-image.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        });
    } else {
        alert('No image data found. Please upload an image.');
        // window.location.href = '<?php echo esc_url(home_url("/")); ?>';
    }





    const cropImage = document.getElementById('crop-image');
    const rotateImage = document.getElementById('rotate-image');
    const convertImage = document.getElementById('convert-image');

    cropImage.addEventListener('click', function() {
        // Redirect to the resize page
        window.location.href = '<?php echo esc_url(home_url("/crop")); ?>';
    });
    rotateImage.addEventListener('click', function() {
        // Redirect to the rotate page
        window.location.href = '<?php echo esc_url(home_url("/rotate")); ?>';
    });
    convertImage.addEventListener('click', function() {
        // Redirect to the rotate page
        window.location.href = '<?php echo esc_url(home_url("/convert")); ?>';
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