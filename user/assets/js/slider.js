let slider = document.getElementById("range")
let value = document.querySelector('.value');

value.innerHTML = slider.value;

slider.addEventListener('input', function(){
	value.textContent = this.value;
})