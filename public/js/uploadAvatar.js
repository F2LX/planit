const Tempatdrop = document.getElementById('drop-area-2');
const masukinFile = document.getElementById('masukin-file');
const lihatGambar = document.getElementById('img-view-2');

masukinFile.addEventListener("change", uploadGambar)

function uploadGambar(){
    let imgLink = URL.createObjectURL(masukinFile.files[0]);
    lihatGambar.style.backgroundImage = `url(${imgLink})`;
    lihatGambar.textContent = "";
    lihatGambar.style.border = 0;
}

Tempatdrop.addEventListener("dragover", function(e){
    e.preventDefault();
});
Tempatdrop.addEventListener("drop", function(e){
    e.preventDefault();
    masukinFile.files = e.dataTransfer.files;
    uploadImage();
});
