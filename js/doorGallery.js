const galleryUrl = 'https://api-eu-central-1.graphcms.com/v2/ckx1vku0v1tt801w8d9s65ihi/master';

const GET_GALLERY_DATA_QUERY = `
query doorsGallery {
    doorsImageGalleries  {
        id
        doorImageAlt
        doorGalleryImage {
          url
        }
    }
  }
  `;

axios
  .post(galleryUrl, {
    query: GET_GALLERY_DATA_QUERY,
  })
  .then((responce) => {
    const gallery = responce.data.data.doorsImageGalleries;
    console.log(gallery);
    const galleryView = document.getElementById('gallery');
    gallery.map((item) => {
      var resultitem = `
          <img alt="${item.doorImageAlt}" src="${item.doorGalleryImage?.url}" data-image="${item.doorGalleryImage?.url}"
          data-description="${item.doorImageAlt}"">
        `;
      return galleryView.insertAdjacentHTML('beforeend', resultitem);
    });
    $('#gallery').unitegallery();
  });
