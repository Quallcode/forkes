$(function () {
  Autocomplete();
  $("#dataTable").DataTable();
  $(".dataTable").DataTable();
});

function Autocomplete(){
    $("#inputKelasTerapi1").select2({
    });
    $("#inputFaskes1").select2();
    $("#inputNamaObat1").select2();
    $("#inputSediaan1").select2();
    $("#inputKekuatan1").select2();
    $("#inputSatuan1").select2();
    $("#inputJurnal1").ckeditor();
}

function CheckObat(obat,id){
  var data = {
    "id_atc_obat": obat
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: base_url+"Checking/Obat", //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      if(data.status == '00'){
        GetMsg(id);
      }
    }
  });
  return false;
}

function CheckSediaan(sediaan,id){
  var data = {
    "id_sediaan": sediaan
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: base_url+"Checking/Sediaan", //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      GetMsg(id);
    }
  });
  return false;
}

function CheckSatuan(satuan,id){
  var data = {
    "id_satuan": satuan
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: base_url+"Checking/Satuan", //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      GetMsg(id);
    }
  });
  return false;
}



function CheckKekuatan(kekuatan,id){
  var data = {
    "id_kekuatan": kekuatan
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: base_url+"Checking/Kekuatan", //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      GetMsg(id);
    }
  });
  return false;
}

function GetMsg(id){
  var data = {
    "trigger": 1
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: base_url+"Checking/GetMsg", //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      $('#inputTypeUsulan'+id).val(data.msg);
      $('#inputTypeUsulanRead'+id).val(data.msg);
    }
  });
  return false;
}

function create_usulan_html(num){
  var kelas_terapi = $('#idSelectTerapiHidden').html();
  var obat = $('#idSelectObatHidden').html();
  var sediaan = $('#idSelectSediaanHidden').html();
  var kekuatan = $('#idSelectKekuatanHidden').html();
  var satuan = $('#idSelectSatuanHidden').html();

  var html = '<div class="box-body clonedInput" id="entry'+num+'">\
                <h2 class="heading-reference">Entry #'+num+'</h2>\
                <div class="form-group">\
                  <label for="inputKelasTerapi'+num+'" class="col-sm-2 control-label labelKelasTerapi">Kelas Terapi</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputKelasTerapi" id="inputKelasTerapi'+num+'" name="id_terapi[]">';
  var html2 =       '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputNamaObat'+num+'" class="col-sm-2 control-label labelNamaObat">Nama Obat</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputNamaObat" id="inputNamaObat'+num+'" name="id_atc_obat[]" onchange="CheckObat(this.value,'+num+')">';
  var html3 =       '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputSediaan'+num+'" class="col-sm-2 control-label labelSediaan">Sediaan</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputSediaan" id="inputSediaan'+num+'" name="id_sediaan[]" onchange="CheckSediaan(this.value,'+num+')">';
  var html4 =      '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputKekuatan'+num+'" class="col-sm-2 control-label labelKekuatan">Kekuatan</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputKekuatan" id="inputKekuatan'+num+'" name="id_kekuatan[]" onchange="CheckKekuatan(this.value,'+num+')">';
  var html5 =       '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputSatuan'+num+'" class="col-sm-2 control-label labelSatuan">Satuan</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputSatuan" id="inputSatuan'+num+'" name="id_satuan[]" onchange="CheckSatuan(this.value,'+num+')">';
  var html6 =      '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputJurnal'+num+'" class="col-sm-2 control-label labelJurnal">Link Jurnal</label>\
                  <div class="col-sm-10">\
                    <textarea class="form-control inputJurnal" rows="3" placeholder="Masukkan Jurnal" id="inputJurnal'+num+'" name="jurnal[]"></textarea>\
                    <b>File Pendukung Jurnal (optional)</b>\
                    <input type="file" id="inputJurnal'+num+'" class="form-control inputJurnal" name="file_jurnal[]">\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputAlasan'+num+'" class="col-sm-2 control-label labelAlasan">Alasan</label>\
                  <div class="col-sm-10">\
                    <textarea class="form-control inputAlasan" rows="3" placeholder="Masukkan Alasan" id="inputAlasan'+num+'" name="alasan[]"></textarea>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputRestriksi'+num+'" class="col-sm-2 control-label labelRestriksi">Restriksi baru</label>\
                  <div class="col-sm-10">\
                    <textarea class="form-control inputRestriksi" rows="3" placeholder="Masukkan Restriksi baru" id="inputRestriksi'+num+'" name="restriksi[]"></textarea>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputTypeUsulan'+num+'" class="col-sm-2 control-label labelTypeUsulan">Type Usulan</label>\
                  <div class="col-sm-10">\
                    <input type="hidden" class="form-control inputTypeUsulan" id="inputTypeUsulan'+num+'" placeholder="Type Usulan" name="tipe_usulan[]">\
                    <input type="text" class="form-control inputTypeUsulan"   id="inputTypeUsulanRead'+num+'" readonly="readonly">\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputTingkatFaskes'+num+'" class="col-sm-2 control-label labelTigkatFaskes">Tingkat Faskes</label>\
                  <div class="col-sm-2">\
                    <input type="radio" class="inputTingkatFaskes" id="inputTingkatFaskes'+num+'" name="tingkat_faskes'+num+'" value="1" checked>\
                    TK I\
                    </input>\
                  </div>\
                  <div class="col-sm-2">\
                    <input type="radio" class="inputTingkatFaskes" id="inputTingkatFaskes'+num+'" name="tingkat_faskes'+num+'" value="2">\
                    TK II\
                    </input>\
                  </div>\
                  <div class="col-sm-2">\
                    <input type="radio" class="inputTingkatFaskes" id="inputTingkatFaskes'+num+'" name="tingkat_faskes'+num+'" value="3">\
                    TK III\
                    </input>\
                  </div>\
                </div>\
              </div><!-- /.box-body -->';

  var final_html =html +kelas_terapi + html2 +obat + html3 +sediaan + html4 + kekuatan +html5+satuan+html6;
  return final_html;
}

function create_obat_html(num){
  var obat = $('#idSelectObatHidden').html();

  var html = '<div class="box-body clonedInput" id="entry'+num+'">\
                <div class="form-group">\
                  <label for="inputNamaObat'+num+'" class="col-sm-2 control-label labelNamaObat">Nama Obat</label>\
                  <div class="col-sm-6">\
                    <select class="form-control inputNamaObat" id="inputNamaObat'+num+'" name="id_atc_obat[]">';
  var html2 =       '</select>\
                  </div>\
                </div>\
              </div><!-- /.box-body -->';


  var final_html2 =html +obat + html2;
  return final_html2;
}

$(function () {

  $('#btnAddObat').click(function () {
      var num     = $('.clonedInput').length, // how many "duplicatable" input fields we currently have
          newNum  = new Number(num + 1),
          final_html = create_obat_html(newNum);     // the numeric ID of the new input field being added

      $('#form-usulan2').append(final_html);
      // create the new element via clone(), and manipulate it's ID using newNum value
      // manipulate the name/id values of the input inside the new element
      // H2 - section
      $("#inputKelasTerapi"+ newNum ).select2();
      $("#inputNamaObat"+ newNum ).select2();
      $("#inputSediaan"+ newNum ).select2();
      $("#inputKekuatan"+ newNum ).select2();
      $("#inputSatuan"+ newNum ).select2();
      $("#inputJurnal"+ newNum ).ckeditor();
      window.location.hash = "#entry"+ newNum;
      $('#btnDel').attr('disabled', false);
      // right now you can only add 5 sections. change '5' below to the max number of times the form can be duplicated
      if (newNum == 99)
      $('#btnAddObat').attr('disabled', true).prop('value', "Anda telah melewati batas untuk memasukkan detail usulan");
  });

  $('#btnAdd').click(function () {
      var num     = $('.clonedInput').length, // how many "duplicatable" input fields we currently have
          newNum  = new Number(num + 1),
          final_html = create_usulan_html(newNum);     // the numeric ID of the new input field being added

      $('#form-usulan').append(final_html);
      // create the new element via clone(), and manipulate it's ID using newNum value
      // manipulate the name/id values of the input inside the new element
      // H2 - section
      $("#inputKelasTerapi"+ newNum ).select2();
      $("#inputNamaObat"+ newNum ).select2();
      $("#inputSediaan"+ newNum ).select2();
      $("#inputKekuatan"+ newNum ).select2();
      $("#inputSatuan"+ newNum ).select2();
      $("#inputJurnal"+ newNum ).ckeditor();
      window.location.hash = "#entry"+ newNum;
      $('#btnDel').attr('disabled', false);
      // right now you can only add 5 sections. change '5' below to the max number of times the form can be duplicated
      if (newNum == 99)
      $('#btnAdd').attr('disabled', true).prop('value', "Anda telah melewati batas untuk memasukkan detail usulan");
  });

  $('#btnDel').click(function () {
  // confirmation
      if (confirm("Are you sure you wish to remove this section? This cannot be undone."))
          {
              var num = $('.clonedInput').length;
              // how many "duplicatable" input fields we currently have
              $('#entry' + num).slideUp('slow', function () {$(this).remove();
              // if only one element remains, disable the "remove" button
              if (num-1 === 1)
              $('#btnDel').attr('disabled', true);
              // enable the "add" button
              $('#btnAdd').attr('disabled', false).prop('value', "add section");});
          }
      return false;
      // remove the last element

      // enable the "add" button
      $('#btnAdd').attr('disabled', false);
  });

  $('#btnDel').attr('disabled', true);
  //Script For Jquery Upload
  var inputFile = $('input[name=file]');
  var inputFile2 = $('input[name=file2]');
  var progressBar = $('#progress-bar');
  listFilesOnServer();

  $('#upload-btn').on('click', function(event) {
    var fileToUpload = inputFile[0].files[0];
    // make sure there is file to upload
    if (fileToUpload != 'undefined') {
      // provide the form data
      // that would be sent to sever through ajax
      var formData = new FormData();
      formData.append("file", fileToUpload);
      var num = $('.uploadsItems').length;
      if(num == 2){
        alert('Anda sudah melebihi batas file upload. Maks file upload 2');
      }else{
        // now upload the file using $.ajax
        $.ajax({
          url: uploadURI,
          type: 'post',
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
            alert(data);
            listFilesOnServer();
          },
          error: function(data){
            alert('Error di Upload anda');
          },
          xhr: function() {
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(event) {
              if (event.lengthComputable) {
                var percentComplete = Math.round( (event.loaded / event.total) * 100 );
                // console.log(percentComplete);

                $('.progress').show();
                progressBar.css({width: percentComplete + "%"});
                progressBar.text(percentComplete + '%');
                $('.progress').hide();
              };
            }, false);
            return xhr;
          }
        });
      }
      document.getElementById('upload1').style.visibility = 'hidden';
    }
  });

  $('#upload-btn2').on('click', function(event) {
    var fileToUpload2 = inputFile2[0].files[0];
    // make sure there is file to upload
    if (fileToUpload2 != 'undefined') {
      // provide the form data
      // that would be sent to sever through ajax
      var formData = new FormData();
      formData.append("file2", fileToUpload2);
      var num = $('.uploadsItems').length;
      if(num == 2){
        alert('Anda sudah melebihi batas file upload. Maks file upload 2');
      }else{
        // now upload the file using $.ajax
        $.ajax({
          url: uploadURI2,
          type: 'post',
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
            alert(data);
            listFilesOnServer();
          },
          error: function(data){
            alert('Error di Upload anda');
          },
          xhr: function() {
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(event) {
              if (event.lengthComputable) {
                var percentComplete = Math.round( (event.loaded / event.total) * 100 );
                // console.log(percentComplete);

                $('.progress').show();
                progressBar.css({width: percentComplete + "%"});
                progressBar.text(percentComplete + '%');
                $('.progress').hide();
              };
            }, false);

            return xhr;
          }
        });
      }
      document.getElementById('upload2').style.visibility = 'hidden';
    }
  });

  $('body').on('click', '.remove-file', function () {
    var me = $(this);

    $.ajax({
      url: uploadURI,
      type: 'post',
      data: {file_to_remove: me.attr('data-file')},
      success: function(data) {
        alert(data);
        me.closest('li').remove();
      }
    });

  })

  function listFilesOnServer () {
    var items = [];

    $.getJSON(uploadURI, function(data) {
      $.each(data, function(index, element) {
        items.push('<li class="list-group-item uploadsItems"><input type="hidden" value="uploads/'+basefolder+'/'+no_fornas+'/'+element+'" name ="UploadFile[]"/><a href="'+base_url+'uploads/'+basefolder+'/'+no_fornas+'/'+element+'" target="_blank">' + element  + '</a><div class="pull-right"><a href="#" data-file="' + element + '" class="remove-file"><i class="glyphicon glyphicon-remove"></i></a></div></li>');
      });
      $('.list-group').html("").html(items.join(""));
    });
  }

  $('body').on('change.bs.fileinput', function(e) {
    $('.progress').hide();
    progressBar.text("0%");
    progressBar.css({width: "0%"});
  });

});
