function getUrlVars() {
  var vars = {};
  console.log(window.location.href, 'href');
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
    vars[key] = value;
  });
  console.log(vars);
  return vars;
}

let url = window.location.href;
let urlParse = url.split('/');
const id = urlParse[5];
console.log(id);

const lang = document.getElementById('lang').value;
const description = lang === 'en' ? 'doorDescriptionEn' : 'doorDescriptionUkr';
const currentPostId = getUrlVars();
const doorUrl = 'https://api-eu-central-1.graphcms.com/v2/ckx1vku0v1tt801w8d9s65ihi/master';

const CURRENT_DOOR_QUERY = `
query currentDoor{
  door(where:{id: "${id}"}) {
    id
    doorCategory
    ${description}
    doorImage {
      url
    }
    doorTitle
    doorShortDescription
  }
}`;

axios
  .post(doorUrl, {
    query: CURRENT_DOOR_QUERY,
  })
  .then((responce) => {
    const currentDoor = responce.data.data.door;
    let currentDoorView = document.getElementById('door-block');
    currentDoorView.innerHTML = `
    <div class="current-item">
        <div>
            <div class="item-title">
                <h2 class="current-item-title">${currentDoor.doorCategory}</h2>
                <p>${currentDoor.doorTitle}</p>
            </div>
            <div>
                <p class="item-description">${
                  lang === 'en' ? currentDoor.doorDescriptionEn : currentDoor.doorDescriptionUkr
                }</p>
            </div>
        </div>
        <div class="current-item-image">
            <img src=${currentDoor.doorImage.url} alt=${currentDoor.doorTitle}>
        </div>
    </div>
    `;
  });
