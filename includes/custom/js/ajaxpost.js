// Attach a submit handler to the form
function UpdateStatusTerima(noefornas,id){
  // Get some values from elements on the page:
  url = base_url+'Usulan/Terima';
  var data = {
    "nomor_efornas": noefornas
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: url, //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      if(data.code == '00'){
        $('#text_email_usulan').ckeditor();
        $('#EmailModal').modal({
          backdrop: 'static',
          keyboard: false
        });
        $('#email_usulan').html('');
        $('#type').html('');
        $('#email').val('');
        $('#no_fornas').val('');
        $('#id_usulan').val('');
        $('#email_usulan').html(data.msg);
        $('#type').html('LENGKAP');
        $('#email').val(data.msg);
        $('#no_fornas').val(noefornas);
        $('#id_usulan').val(id);
      }else if(data.code == '01'){
        alert(data.msg);
        //window.location.replace(base_url+'Dashboard');
      }else if(data.code == '02'){
        alert(data.msg);
      }
    }
  });
  return false;
}

// Attach a submit handler to the form
function UpdateStatusTolak(noefornas,id){
  // Get some values from elements on the page:
  url = base_url+'Usulan/Tolak';
  var data = {
    "nomor_efornas": noefornas
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: url, //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      if(data.code == '00'){
        $('#text_email_usulan').ckeditor();
        $('#EmailModal').modal({
          backdrop: 'static',
          keyboard: false
        });
        $('#email_usulan').html('');
        $('#type').html('');
        $('#email').val('');
        $('#no_fornas').val('');
        $('#id_usulan').val('');
        $('#email_usulan').html(data.msg);
        $('#type').html('TIDAK LENGKAP');
        $('#email').val(data.msg);
        $('#no_fornas').val(noefornas);
        $('#id_usulan').val(id);
      }else if(data.code == '01'){
        alert(data.msg);
        //window.location.replace(base_url+'Dashboard');
      }else if(data.code == '02'){
        alert(data.msg);
      }
    }
  });
  return false;
}

function EmailNow(){
  // Get some values from elements on the page:
  url = base_url+'Usulan/Email_Now';
  var noefornas = $('#no_fornas').val();
  var idusulan = $('#id_usulan').val();
  var type = $('#type').val();
  var email = $('#email').val();
  var text_email_usulan = CKEDITOR.instances['text_email_usulan'].getData();
  var data = {
    "nomor_efornas": noefornas,
    "id":idusulan,
    "type":type,
    "email":email,
    "text_email_usulan":text_email_usulan,
  };
  $.ajax({
    type: "POST",
    dataType: "json",
    url: url, //Relative or absolute path to response.php file
    data: data,
    success: function(data) {
      if(data.code == '00'){
        if(type == 'LENGKAP'){
          $('.status'+idusulan).html('LENGKAP');
          $('#terima'+idusulan).html('TERVERIFIKASI');
          alert('Usulan '+noefornas+' telah diverifikasi dan telah diterima');
        }else{
          $('.status'+idusulan).html('TIDAK LENGKAP');
          $('#terima'+idusulan).html('TERVERIFIKASI');
          alert('Usulan '+noefornas+' telah diverifikasi dan tidak diterima');
        }
      }else if(data.code == '01'){
        alert(data.msg);
        //window.location.replace(base_url+'Dashboard');
      }
    }
  });
  return false;
}
