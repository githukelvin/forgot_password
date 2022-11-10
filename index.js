const div = document.querySelectorAll(".eye");
div.forEach((index) => {
  index.addEventListener("click", () => {
    const InputT = document.querySelector(".passI");
    const visible = index.getAttribute("data-visible");
    console.log(visible === "true");
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
  });
});

const ham = document.querySelector(".ham");

ham.addEventListener("click", () => {
  const list = document.querySelector("ul");
console.log(list)
  let visibled = list.getAttribute("aria-expanded");
  console.log(visibled === "false");

  if (visibled === "false") {
    ham.classList.add("close");
    ham.classList.remove("open");
    ham.setAttribute("data-visible", "false");
    list.setAttribute("aria-expanded", "true");
  } else if (visibled === "true") {
    ham.classList.add("open");
    ham.classList.remove("close");
    ham.setAttribute("data-visible", "true");
    list.setAttribute("aria-expanded", "false");
  }
});
