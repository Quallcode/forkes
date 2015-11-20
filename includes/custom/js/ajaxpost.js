// Attach a submit handler to the form
function UpdateStatusTerima(noefornas,id) {
  // Get some values from elements on the page:
  url = base_url+'Usulan/Terima';

  // Send the data using post
  var posting = $.post( url, { nomor_efornas: noefornas } );

  // Put the results in a div
  posting.done(function( data ) {
    $('.status'+id).html('LENGKAP');
    $('#terima'+id).html('TERVERIFIKASI');
    alert('Usulan '+noefornas+' telah diverifikasi dan diterima');
  });
}

function UpdateStatusTolak(noefornas,id) {
  // Get some values from elements on the page:
  url = base_url+'Usulan/Tolak';

  // Send the data using post
  var posting = $.post( url, { nomor_efornas: noefornas } );

  // Put the results in a div
  posting.done(function( data ) {
    $('.status'+id).html('TIDAK LENGKAP');
    $('#terima'+id).html('TERVERIFIKASI');
    alert('Usulan '+noefornas+' telah diverifikasi dan tidak diterima');
  });
}
