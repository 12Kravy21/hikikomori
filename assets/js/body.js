// waterfall
let water = document.getElementsByClassName('waterfall__label');
for (let i=0;i<water.length;i++){
  water[i].addEventListener('click', () => {
      console.log(water[i].nextSibling.nextSibling);
    if (water[i].nextSibling.nextSibling.style.display == "block"){
      water[i].nextSibling.nextSibling.style.display = "none";
    }
    else {
      water[i].nextSibling.nextSibling.style.display = "block";
    }
  });
}