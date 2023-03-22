const catalogUrl = 'https://api-eu-central-1.graphcms.com/v2/ckx1vku0v1tt801w8d9s65ihi/master';

const lang = document.getElementById('lang').value;

function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
    vars[key] = value;
  });
  return vars;
}

const category = getUrlVars();
const GET_DOORS_FADO_QUERY = `
query fadoDoors{
  doors( where:{doorCategory: FADO}) {
    id
    doorCategory
    doorDescription
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;

const GET_DOORS_ART_DOOR_QUERY = `
query artDoors {
  doors(where: {doorCategory: ART_DOOR}) {
    id
    doorCategory
    doorDescription
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;
const GET_DOORS_DORIS_QUERY = `
query dorisDoors {
  doors( where:{doorCategory: DORIS}) {
    id
    doorCategory
    doorDescription
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;
const GET_PAPA_CARLO_QUERY = `
query dorisDoors {
  doors( where:{doorCategory: PAPA_CARLO}) {
    id
    doorCategory
    doorDescription
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;
const GET_PAULO_ROSSI_QUERY = `
query dorisDoors {
  doors( where:{doorCategory: PAULO_ROSSI}) {
    id
    doorCategory
    doorDescription
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;
const GET_ART_LINE_QUERY = `
query dorisDoors {
  doors(where: {isArtLine: ART_LINE}) {
    id
    doorCategory
    doorDescription
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;

category.category === 'DORIS'
  ? axios.post(catalogUrl, { query: GET_DOORS_DORIS_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      $('#tab1').removeClass('tab-item-active');
      $('#tab2').removeClass('tab-item-active');
      $('#tab3').addClass('tab-item-active');
      $('#tab4').removeClass('tab-item-active');
      $('#tab5').removeClass('tab-item-active');
      $('#tab6').removeClass('tab-item-active');
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
      <div key=${door.id} class="door-item" >
      <a href="/${lang}/door/${door.id}" class="door-link">
        <div class="doors-img">
          <img src="${door.doorImage.url}"/>
        </div>
        <p>${door.doorShortDescription}</p>
        </a>
      </div>
    `);
      });
    })
  : null;

category.category === 'ART_LINE'
  ? axios.post(catalogUrl, { query: GET_ART_LINE_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      $('#tab6').addClass('tab-item-active');
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
          <div key=${door.id} class="door-item" >
          <a href="/${lang}/door/${door.id}" class="door-link">
            <div class="doors-img">
              <img src="${door.doorImage.url}"/>
            </div>
            <p>${door.doorShortDescription}</p>
            </a>
          </div>
        `);
      });
    })
  : axios
      .post(catalogUrl, {
        query: GET_DOORS_FADO_QUERY,
      })
      .then((responce) => {
        const doors = responce.data.data.doors;
        const doorsCatalog = document.getElementById('doors-catalog');
        $('#tab1').addClass('tab-item-active');
        doors.map((door) => {
          return (doorsCatalog.innerHTML += `
          <div key=${door.id} class="door-item" >
          <a href="/${lang}/door/${door.id}" class="door-link">
            <div class="doors-img">
              <img src="${door.doorImage.url}"/>
            </div>
            <p>${door.doorShortDescription}</p>
            </a>
          </div>
        `);
        });
      });

const onDoorSetHandler = (categoryName) => {
  if (categoryName === 'ФАДО') {
    $('#tab1').addClass('tab-item-active');
    $('#tab2').removeClass('tab-item-active');
    $('#tab3').removeClass('tab-item-active');
    $('#tab4').removeClass('tab-item-active');
    $('#tab5').removeClass('tab-item-active');
    $('#tab6').removeClass('tab-item-active');
    axios.post(catalogUrl, { query: GET_DOORS_FADO_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      link = document.getElementById('door-link');
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
            <div key=${door.id} class="door-item" >
            <a href="/${lang}/door/${door.id}" class="door-link">
              <div class="doors-img">
                <img src="${door.doorImage.url}"/>
              </div>
              <p>${door.doorShortDescription}</p>
              </a>
            </div>
          `);
      });
    });
  } else if (categoryName === 'АРТ_ДОР') {
    $('#tab1').removeClass('tab-item-active');
    $('#tab2').addClass('tab-item-active');
    $('#tab3').removeClass('tab-item-active');
    $('#tab4').removeClass('tab-item-active');
    $('#tab5').removeClass('tab-item-active');
    $('#tab6').removeClass('tab-item-active');
    axios.post(catalogUrl, { query: GET_DOORS_ART_DOOR_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ` `;
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
            <div key=${door.id} class="door-item" >
            <a href="/${lang}/door/${door.id}" class="door-link">
              <div class="doors-img">
                <img src="${door.doorImage.url}"/>
              </div>
              <p>${door.doorShortDescription}</p>
              </a>
            </div>
          `);
      });
    });
  } else if (categoryName === 'ДОРИС') {
    $('#tab1').removeClass('tab-item-active');
    $('#tab2').removeClass('tab-item-active');
    $('#tab3').addClass('tab-item-active');
    $('#tab4').removeClass('tab-item-active');
    $('#tab5').removeClass('tab-item-active');
    $('#tab6').removeClass('tab-item-active');
    axios.post(catalogUrl, { query: GET_DOORS_DORIS_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
            <div key=${door.id} class="door-item" >
            <a href="/${lang}/door/${door.id}" class="door-link">
              <div class="doors-img">
                <img src="${door.doorImage.url}"/>
              </div>
              <p>${door.doorShortDescription}</p>
              </a>
            </div>
          `);
      });
    });
  } else if (categoryName === 'ПАПА_КАРЛО') {
    $('#tab1').removeClass('tab-item-active');
    $('#tab2').removeClass('tab-item-active');
    $('#tab3').removeClass('tab-item-active');
    $('#tab4').addClass('tab-item-active');
    $('#tab5').removeClass('tab-item-active');
    $('#tab6').removeClass('tab-item-active');
    axios.post(catalogUrl, { query: GET_PAPA_CARLO_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
            <div key=${door.id} class="door-item" >
            <a href="/${lang}/door/${door.id}" class="door-link">
              <div class="doors-img">
                <img src="${door.doorImage.url}"/>
              </div>
              <p>${door.doorShortDescription}</p>
              </a>
            </div>
          `);
      });
    });
  } else if (categoryName === 'ПАОЛО_РОССИ') {
    $('#tab1').removeClass('tab-item-active');
    $('#tab2').removeClass('tab-item-active');
    $('#tab3').removeClass('tab-item-active');
    $('#tab4').removeClass('tab-item-active');
    $('#tab5').addClass('tab-item-active');
    $('#tab6').removeClass('tab-item-active');
    axios.post(catalogUrl, { query: GET_PAULO_ROSSI_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
            <div key=${door.id} class="door-item" >
            <a href="/${lang}/door/${door.id}" class="door-link">
              <div class="doors-img">
                <img src="${door.doorImage.url}"/>
              </div>
              <p>${door.doorShortDescription}</p>
              </a>
            </div>
          `);
      });
    });
  } else if (categoryName === 'ART_LINE') {
    $('#tab1').removeClass('tab-item-active');
    $('#tab2').removeClass('tab-item-active');
    $('#tab3').removeClass('tab-item-active');
    $('#tab4').removeClass('tab-item-active');
    $('#tab5').removeClass('tab-item-active');
    $('#tab6').addClass('tab-item-active');

    axios.post(catalogUrl, { query: GET_ART_LINE_QUERY }).then((response) => {
      let doorsResult = response.data.data.doors;
      doorsCatalog = document.getElementById('doors-catalog');
      doorsCatalog.innerHTML = ``;
      doorsResult.map((door) => {
        return (doorsCatalog.innerHTML += `
            <div key=${door.id} class="door-item" >
            <a href="/${lang}/door/${door.id}" class="door-link">
              <div class="doors-img">
                <img src="${door.doorImage.url}"/>
              </div>
              <p>${door.doorShortDescription}</p>
              </a>
            </div>
          `);
      });
    });
  }
};
