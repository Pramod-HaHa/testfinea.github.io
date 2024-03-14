const scriptURL = 'https://script.google.com/macros/s/AKfycbx36fM7mSBnNLbfxfgwn5Qmg_iBoahfXbx34aywRCn2GGz9r5B_8XdFWTIiIUgQZtjI/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})
