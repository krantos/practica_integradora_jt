export function toggleBlockNone(id) {
  const element = document.getElementById(id);
  if(element.style.display != "none") {
    element.style.display = "none";
  } else {
    element.style.display = "block";
  }
}

