const btnMobile = document.querySelector("#btn_mobile");

function toggleMenu()
{
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  btnMobile.setAttribute('aria-expanded',active);
  if(active)
  {
    btnMobile.setAttribute('aria-label','Fechar Menu');
    return 0;
  } //Else {
  btnMobile.setAttribute('aria-label','Abrir Menu');

}
btnMobile.addEventListener('click', toggleMenu);