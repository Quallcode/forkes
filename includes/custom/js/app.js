$(function () {
  Autocomplete();
  $("#dataTable").DataTable();
  $(".dataTable").DataTable();
  Check_Id();
});

function Autocomplete(){
    $("#inputFaskes").select2();
    $("#inputNamaObat").select2();
    $("#inputSediaan").select2();
    $("#inputKekuatan").select2();
    $("#inputSatuan").select2();
}

function Check_Id(){
  $('.inputSediaan').change(function(){
      alert($(this).find(':selected').data('id'));
  });
}

function create_usulan_html(num){
  var obat = $('#idSelectObatHidden').html();
  var sediaan = $('#idSelectSediaanHidden').html();
  var kekuatan = $('#idSelectKekuatanHidden').html();
  var satuan = $('#idSelectSatuanHidden').html();

  var html = '<div class="box-body clonedInput" id="entry'+num+'">\
                <h2 class="heading-reference">Entry #'+num+'</h2>\
                <div class="form-group">\
                  <label for="inputNamaObat'+num+'" class="col-sm-2 control-label labelNamaObat">Nama Obat</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputNamaObat" id="inputNamaObat'+num+'" name="id_atc_obat[]">';
  var html2 =       '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputSediaan'+num+'" class="col-sm-2 control-label labelSediaan">Sediaan</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputSediaan" id="inputSediaan'+num+'" name="id_sediaan[]">';
  var html3 =      '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputKekuatan'+num+'" class="col-sm-2 control-label labelKekuatan">Kekuatan</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputKekuatan" id="inputKekuatan'+num+'" name="id_kekuatan[]">';
  var html4 =       '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputSatuan'+num+'" class="col-sm-2 control-label labelSatuan">Satuan</label>\
                  <div class="col-sm-10">\
                    <select class="form-control inputSatuan" id="inputSatuan'+num+'" name="id_satuan[]">';
  var html5 =      '</select>\
                  </div>\
                </div>\
                <div class="form-group">\
                  <label for="inputJurnal'+num+'" class="col-sm-2 control-label labelJurnal">Link Jurnal</label>\
                  <div class="col-sm-10">\
                    <input type="file" id="inputJurnal'+num+'" class="form-control inputJurnal" name="jurnal[]">\
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
                    <input type="text" class="form-control inputTypeUsulan" id="inputTypeUsulan'+num+'" placeholder="Type Usulan">\
                  </div>\
                </div>\
              </div><!-- /.box-body -->';

  var final_html =html + obat + html2 +sediaan + html3 + kekuatan +html4+satuan+html5;
  return final_html;
}

$(function () {
  $('#btnAdd').click(function () {
      var num     = $('.clonedInput').length, // how many "duplicatable" input fields we currently have
          newNum  = new Number(num + 1),
          final_html = create_usulan_html(newNum);     // the numeric ID of the new input field being added

      $('#form-usulan').append(final_html).fadeIn('slow');

      // create the new element via clone(), and manipulate it's ID using newNum value
      // manipulate the name/id values of the input inside the new element
      // H2 - section
      $("#inputNamaObat"+ newNum ).select2();
      $("#inputSediaan"+ newNum ).select2();
      $("#inputKekuatan"+ newNum ).select2();
      $("#inputSatuan"+ newNum ).select2();
      window.location.hash = "#entry"+ newNum

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

});
