const uploadArea= document.getElementById("uploadArea");
const fileInput= document.getElementById("FileInput");
const previewImage=document.getElementById("previewImage");
const icon= document.getElementById("icon");



uploadArea.addEventListener('click',()=>{
    fileInput.click();
});
fileInput.addEventListener('change', fuction(Event){
    const file = Event.AT_TARGET.files[0];

    if(file){
        const reader = new FileReader();
        reader.onload = function(e){
            previewImage.src = e.target.result;
            previewImage.style.display = 'block'
            icon.style.display = 'none'


            };
            reader.readAsDataURL(file);

            }
        });

    

