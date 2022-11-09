const div = document.querySelectorAll(".eye");
div.forEach(index => {
    index.addEventListener("click", () => {
        const InputT = document.querySelector(".passI");
        const visible = index.getAttribute("data-visible");
        if (visible === "true") {
          index.classList.add("active");
          index.classList.remove("closed");
          InputT.setAttribute("type", "text");
          index.setAttribute("data-visible", "false");
        } else if (visible === "false") {
          index.classList.add("closed");
          index.classList.remove("active");
          index.setAttribute("data-visible", "true");
          InputT.setAttribute("type", "password");
        }
      })
    
});





