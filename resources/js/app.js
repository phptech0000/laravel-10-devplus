import Dropzone from "dropzone";

document.querySelector("DOMContentLoaded", function () {
    const DocumentImage = document.querySelector('[name="image"]');

    Dropzone.autoDiscover = false;

    const dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Subir imagem",
        acceptedFiles: ".png,.jpg,.jpeg,.gif",
        addRemoveLinks: true,
        dictRemoveFile: "Excluir arquivo",
        maxFiles: 1,
        uploadMultiple: false,

        init: function () {
            if (DocumentImage.value.trim()) {
                const imagePublic = {};
                imagePublic.size = 1234;
                imagePublic.name = DocumentImage.value;

                this.options.addedfile.call(this, imagePublic);
                this.options.thumbnail.call(
                    this,
                    imagePublic,
                    `/uploads/${imagePublic.name}`
                );
                imagePublic.previewElement.classList.add(
                    "dz-success",
                    "dz-complete"
                );
            }
        },
    });

    dropzone.on("success", function (file, response) {
        DocumentImage.value = response.image;
    });

    dropzone.on("removedfile", function () {
        DocumentImage.value = "";
    });
});
