// lazy load front page images 

const io = new IntersectionObserver((entries) =>
            entries.forEach((entry) => {
                // set image source only when it is in the viewport
                if (entry.isIntersecting) {
                    const image = entry.target;
                    // setting image source from the dataset
                    image.src = image.dataset.src;

                    // when image is loaded, we do not need to observe it any more
                    io.unobserve(image);
                }
            })
        );

        document.querySelectorAll(".lazy").forEach((element) => io.observe(element));

function menuOnClick() {
  document.getElementById("menu-bar").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  document.getElementById("menu-bg").classList.toggle("change-bg");
}

document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
  document.getElementByClassName("menu-bar").classList.remove(".change");
  document.getElementsByClassName("nav").classList.remove(".change");
  document.getElementByClassName("menu-bg").classList.remove(".change-bg");
	}
});