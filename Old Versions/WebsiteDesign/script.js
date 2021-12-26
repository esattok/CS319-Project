const missionDiv = document.querySelector('#missionDiv');
const aboutDiv = document.querySelector('#aboutDiv');
const teamDiv = document.querySelector('#teamDiv');
const missionNav = document.getElementById('#missionNav');
const aboutNav = document.getElementById('#aboutNav');
const teamNav = document.getElementById('#teamNav');
const missionButton = document.getElementById('#missionButton');

missionNav.addEventListener('click', () => {
  missionNav.setAttribute('class', 'active');
  aboutNav.removeAttribute('class');
  teamNav.removeAttribute('class');
  missionDiv.setAttribute('style', 'display: block');
  aboutDiv.setAttribute('style', 'display: none');
  teamDiv.setAttribute('style', 'display: none');
});

aboutNav.addEventListener('click', () => {
  aboutNav.setAttribute('class', 'active');
  missionNav.removeAttribute('class');
  teamNav.removeAttribute('class');
  aboutDiv.setAttribute('style', 'display: block');
  missionDiv.setAttribute('style', 'display: none');
  teamDiv.setAttribute('style', 'display: none');
});

teamNav.addEventListener('click', () => {
  teamNav.setAttribute('class', 'active');
  missionNav.removeAttribute('class');
  aboutNav.removeAttribute('class');
  teamDiv.setAttribute('style', 'display: block');
  aboutDiv.setAttribute('style', 'display: none');
  missionDiv.setAttribute('style', 'display: none');
});
