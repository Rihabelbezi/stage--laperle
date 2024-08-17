<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-title" id="detailsModalLabel"></div>
                <button type="button" class="btnclose" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="modal-body"></div>
            <div class="modal-discreption"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.detailbtn', function() {
        var postId = $(this).data('id');

        $.ajax({
            url: '{{ route("modal", ":id") }}'.replace(':id', postId),
            method: 'GET',
            success: function(response) {
                var post = response.post;
                var images = response.images;
                var modaltitre = post.titre;
                var modald=   `<div class="row mt-4">
                                <div class="col-md-5 property-data">
                                <div class="prop-features prop-before">
                                    <span class="location">${post.emplacement}</span>
                                    <span class="area">${post.surface} M²</span>
                                </div>
                                <div class="prop-price">
                                    <strong class="price">${post.prix ? post.prix + ' TND' : ''}</strong>
                                </div>
                                <div class="prop-features">
                                    <span class="bed">${post.bedrooms} Bedroom</span>
                                    <span class="bath">${post.bathrooms} Baths</span>
                                </div>
                                <p>${post.description}</p></div>
                                    <div class="button-container">
                                    <a href="#" class="btn btn-danger">Contact Agent</a>
                                    </div>
                               </div>`;



                var modalBody = `
    <div id="propertyCarousel" class="carousel slide property-slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
`;

var activeIndex = 0;
var imagesToShow = [];

// Function to check if an image exists
function checkImageExists(url) {
    return new Promise((resolve) => {
        var img = new Image();
        img.onload = () => resolve(true);
        img.onerror = () => resolve(false);
        img.src = url;
    });
}

// Create promises to check all images
var imageChecks = images.map(image => {
    var imagePath = `/storage/full/${image.image}`;
    return checkImageExists(imagePath).then(exists => {
        if (exists) {
            imagesToShow.push(image);
            return {
                path: imagePath,
                index: activeIndex++
            };
        }
    });
});

// Process the results after all checks are complete
Promise.all(imageChecks).then(results => {
    // Filter out undefined results (non-existent images)
    var validResults = results.filter(result => result);

    // Create indicators
    validResults.forEach(result => {
        modalBody += `
            <li data-target="#propertyCarousel" data-slide-to="${result.index}" class="${result.index === 0 ? 'active' : ''}"></li>
        `;
    });

    modalBody += `
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    `;

    // Create slides
    validResults.forEach(result => {
        modalBody += `
            <div class="item ${result.index === 0 ? 'active' : ''}">
                <img src="${result.path}" alt="Image ${result.index + 1}">
            </div>
        `;
    });

    modalBody += `
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#propertyCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#propertyCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!-- /.carousel property-slider -->
`;

    $('#detailsModal .modal-body').html(modalBody);
    $('#detailsModal .modal-title').html(modaltitre);
    $('#detailsModal .modal-discreption').html(modald);
    $('#detailsModal').modal('show');
});
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ', status, error);
                alert('Could not load post details. Please try again.');
            }
        });
    });
</script>
