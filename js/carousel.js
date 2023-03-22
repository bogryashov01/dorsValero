const url =
  "https://api-eu-central-1.graphcms.com/v2/ckx1vku0v1tt801w8d9s65ihi/master";
axios
  .post(url, {
    query: `{
        baners {
            banerTitle
            banerDiscount
            bannerImage {
              url
            }
            id
            bannerDiscoundTitleDescription
            discountValue
            banerDiscountTime
            banerLink
          }
  }`,
  })
  .then((response) => {
    const baners = response.data.data.baners;
    bannersCarousel = document.getElementById("banerCarousel");
    baners.map((baner) => {
      const isActive = baners[0].id === baner.id;
      return (bannersCarousel.innerHTML += `
        ${
          baner.banerDiscount
            ? `
            <a href="${baner.banerLink}">
            <div class="carousel-item ${isActive ? "active" : ""}" key=${
                baner.id
              }>
              <div style="background-image:url(${
                baner.bannerImage.url
              })" class="background-img">
              </div>
              <div class="carousel-discount">
              </div>
              </a>
             `
            : ` 
            <a href="${baner.banerLink}">
            <div class="carousel-item ${isActive ? "active" : ""}" key=${
                baner.id
              }>
            <div style="background-image:url(${
              baner.bannerImage.url
            })" class="background-img">
            </div>
            </a>
            `
        }
  `);
    });
  })
  .catch((error) => {
    console.log(error);
  });
