const cardTitle = document.querySelector('.card-title');
const cardText = document.querySelector('.card-text');
const cardShow = document.querySelector('#show');

function sendForm(formulario) {
  event.preventDefault();
  const data = new FormData(formulario);
  sendData(data);
}

function sendData(formData) {
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
    if(data.status){
        M.toast({html: data.msg, classes: 'rounded red darken-1'});
    }else{
      stringify = JSON.stringify(data);
      cardShow.classList.remove('hide');
      beauty = js_beautify(stringify)
      cardTitle.innerHTML = data.name;
      cardText.innerHTML = beauty;
    }
  })
  .catch(error => {
    console.error('Error:', error);
    M.toast({html: 'Se produjo un error al obtener los datos.', classes: 'rounded red darken-1'});
  });
}
