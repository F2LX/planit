const dropAreas = document.getElementById("drop-areas");
const inputFiles = document.getElementById("input-files");
const imageViews = document.getElementById("img-views");

inputFiles.addEventListener("change", uploadImages);

function uploadImages(){
    let imgLink = URL.createObjectURL(inputFiles.files[0]);
    imageViews.style.backgroundImage = `url(${imgLink})`;
    imageViews.textContent = "";
    imageViews.style.border= 0;
}

dropAreas.addEventListener("dragover", function(e){
    e.preventDefault();
});

dropAreas.addEventListener("drop", function(e){
    e.preventDefault();
    inputFiles.files = e.dataTransfer.files;
    uploadImage();
});