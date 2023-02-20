const cardTitle = document.querySelector('.card-title');
const cardText = document.querySelector('.card-text');
const cardShow = document.querySelector('#show');
const form = document.querySelector('form');
form.addEventListener('submit', event => {
  event.preventDefault();
  const formData = new FormData(event.target);
  sendData(formData);
});

function sendData(formData) {
  console.log(formData);
  fetch('api.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error('Error al obtener la respuesta');
    }
  })
  .then(data => {
    stringify = JSON.stringify(data);
    cardShow.classList.remove('hide');
    beauty = js_beautify(stringify)
    cardTitle.innerHTML = data.name;
    cardText.innerHTML = beauty;
  })
  .catch(error => {
    console.error('Error:', error);
  });
}