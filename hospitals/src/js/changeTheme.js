
const dark_violet = getComputedStyle(document.documentElement).getPropertyValue('--dark-violet');
const dark_light_violet = getComputedStyle(document.documentElement).getPropertyValue('--dark-light-violet');
const light_violet = getComputedStyle(document.documentElement).getPropertyValue('--light-violet');
const light_transparent_violet = getComputedStyle(document.documentElement).getPropertyValue('--light-transparent-violet');
const popup = getComputedStyle(document.documentElement).getPropertyValue('--popup-background-violet');

const checkbox = document.getElementById('themeCheckbox');

checkbox.addEventListener('change', () => {
    if (document.getElementById('themeCheckbox').checked){
        document.documentElement.style.setProperty('--dark-blue', dark_violet);
        document.documentElement.style.setProperty('--dark-light-blue', dark_light_violet);
        document.documentElement.style.setProperty('--light-blue', light_violet);
        document.documentElement.style.setProperty('--ligh-transparent-blue', light_transparent_violet);
        document.documentElement.style.setProperty('--popup-background-blue', popup);
        document.getElementById('banner1').src="src/img/banners/main-banner2.png";
    } else {
        document.documentElement.style.setProperty('--dark-blue', '#105f83');
        document.documentElement.style.setProperty('--dark-light-blue', '#1b76a3');
        document.documentElement.style.setProperty('--light-blue', '#24b0f3');
        document.documentElement.style.setProperty('--ligh-transparent-blue', '#d1eaf9b3');
        document.documentElement.style.setProperty('--popup-background-blue', '#0219309f');
        document.getElementById('banner1').src="src/img/banners/main-banner.png";
    }
});

