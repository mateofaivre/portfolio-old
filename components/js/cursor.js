const cursor = document.querySelector(".cursor");
document.body.addEventListener("mousemove", (e) => {
  const coord = {
    x: e.pageX, 
    y: e.pageY
  };
  cursor.style.transform = `translate3D(calc(${coord.x}px - 50%), calc(${coord.y}px - 50%), 0)`;
});