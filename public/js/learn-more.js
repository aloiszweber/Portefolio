function showDescription(index) {
  console.log("index" + index);
  console.log(carouselDescriptions);
  carouselDescriptions.forEach((description, i) => {
    console.log(description);
    if (i === index) {
      description.classList.toggle("visible");
    } else {
      description.classList.remove("visible");
    }
  });
}
