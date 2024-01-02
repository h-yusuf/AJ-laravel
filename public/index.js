// function toggleVisibility() {
//     var previewContainer = document.getElementById('preview-container');
//     var formContainer = document.getElementById('form-container');

//     // Tampilkan preview, sembunyikan formulir
//     previewContainer.classList.add = ('grid');
//     console.log('previewContainer');
//     formContainer.classList.remove('hidden'); // Menghapus class 'hidden'
// }

function toggleVisibility() {
    var previewContainer = document.getElementById('preview-container');
    var formContainer = document.getElementById('form-container');
    console.log();
    // Tampilkan preview jika ada data, sembunyikan formulir
    if (previewContainer.style.display === 'none') {
        previewContainer.style.display = 'grid';
        formContainer.classList.add('hidden'); // Tambahkan class 'hidden' pada formulir
        console.log('Formulir disembunyikan.');
    } else {
        previewContainer.style.display = 'none';
        formContainer.classList.remove('hidden'); // Hapus class 'hidden' pada formulir
        console.log('Formulir ditampilkan.');
    }
}

