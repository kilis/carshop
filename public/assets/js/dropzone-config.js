Dropzone.options.myAwesomeDropzone = {
  maxFiles: 1,
  accept: function(file, done) {
    console.log("uploaded");
    done();
  },
  init: function() {
    this.on("maxfilesexceeded", function(file){
        alert("No more files please!");
    });
  }
};