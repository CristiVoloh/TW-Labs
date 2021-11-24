const register_openPopUp = document.querySelector(".register_open_pop_up");
const register_closePopUp = document.getElementById('register_pop_up_close');
const register_popUp = document.getElementById('register_pop_up');

register_openPopUp.addEventListener('click', function(e){
	e.preventDefault();
	register_popUp.classList.add('active');
})

register_closePopUp.addEventListener('click', () => {
	register_popUp.classList.remove('active');
})



const login_openPopUp = document.querySelector(".login_open_pop_up");
const login_closePopUp = document.getElementById('login_pop_up_close');
const login_popUp = document.getElementById('login_pop_up');

login_openPopUp.addEventListener('click', function(e){
	e.preventDefault();
	login_popUp.classList.add('active');
})

login_closePopUp.addEventListener('click', () => {
	login_popUp.classList.remove('active');
})








