const btn = document.getElementById('btn');
btn.addEventListener('click', function () {
  Swal.fire({
    title: 'Data Berhasil Disimpan',
    text: '',
    imageUrl: 'img/yey.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Custom image',
  })
});