const dropAreas2 = document.getElementById("drop-areas-2");
const inputFiles2 = document.getElementById("input-files-2");
const imageViews2 = document.getElementById("img-views-2");

inputFiles2.addEventListener("change", uploadImages2);

function uploadImages2(){
    let imgLink = URL.createObjectURL(inputFiles2.files[0]);
    imageViews2.style.backgroundImage = `url(${imgLink})`;
    imageViews2.textContent = "";
    imageViews2.style.border= 0;
}

dropAreas2.addEventListener("dragover", function(e){
    e.preventDefault();
});

dropAreas2.addEventListener("drop", function(e){
    e.preventDefault();
    inputFiles2.files = e.dataTransfer.files;
    uploadImage();
});