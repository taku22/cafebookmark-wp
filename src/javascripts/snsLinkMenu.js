export default () => {
  const snsLink = document.querySelector('.snsLink');
  const snsLinkMenuClosed = document.querySelector('.snsLink__menu--closed');

  snsLink.addEventListener('click', () => {
    snsLinkMenuClosed.classList.toggle('snsLink__menu--opened');
  })
}
