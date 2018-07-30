var total_photos_counter = 0;
var name = "";
Dropzone.options.myDropzone = {
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 16,
    maxFiles: 1,
    previewTemplate: document.querySelector('#preview').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    dictFileTooBig: 'Image is larger than 16MB',
    timeout: 10000,
    autoProcessQueue: false,
    renameFile: function (file) {
        name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        return name;
    },

    init: function () {

      var myDropzone = this;

      // Update selector to match your button
      $("#button").click(function (e) {
          e.preventDefault();
          myDropzone.processQueue();
      });

      this.on('sending', function(file, xhr, formData) {
          // Append all form inputs to the formData Dropzone will POST
          var data = $('#my-drop').serializeArray();
          $.each(data, function(key, el) {
              formData.append(el.name, el.value);
          });
      });

        this.on("removedfile", function (file) {
            $.post({
                url: '/images-delete',
                data: {id: file.customName, _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    total_photos_counter--;
                    if(total_photos_counter==0){
                      $(".dz-hidden-input").prop("disabled",false);
                    }
                }
            });
        });

        this.on("maxfilesexceeded", function(file){
          this.removeFile(file);
          $(".dz-hidden-input").prop("disabled",true);
        });

        this.on("maxfilesreached", function(file){
          $(".dz-hidden-input").prop("disabled",true);
        });
    },

    success: function (file, done) {
        total_photos_counter++;
        file["customName"] = name;
        alert('upload success!!');
        window.location = "/admin/potensi";
    }
};
