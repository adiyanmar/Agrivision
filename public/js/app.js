document.addEventListener('DOMContentLoaded', function () {
    var score = document.getElementById('confidence_score');
    var preview = document.getElementById('preview-status');
    var form = document.getElementById('form-deteksi');

    function statusFor(v) {
        if (v < 50) return { t: 'Tidak Pasti', c: 'badge-gray' };
        if (v <= 80) return { t: 'Indikasi Hama', c: 'badge-yellow' };
        return { t: 'Hama Terkonfirmasi', c: 'badge-red' };
    }

    function updatePreview() {
        if (!score || !preview) return;
        if (score.value === '') { preview.innerHTML = ''; return; }
        var v = parseInt(score.value, 10);
        if (isNaN(v) || v < 0 || v > 100) {
            preview.innerHTML = '<span class="badge badge-red">Nilai harus 0–100</span>';
            return;
        }
        var s = statusFor(v);
        preview.innerHTML = 'Perkiraan status: <span class="badge ' + s.c + '">' + s.t + '</span>';
    }

    if (score) {
        score.addEventListener('input', updatePreview);
        updatePreview();
    }

    if (form) {
        form.addEventListener('submit', function (e) {
            var kerusakan = parseFloat(document.getElementById('tingkat_kerusakan').value);
            var v = parseInt(score.value, 10);
            if (isNaN(v) || v < 0 || v > 100 || isNaN(kerusakan) || kerusakan < 0 || kerusakan > 100) {
                e.preventDefault();
                alert('Confidence score dan tingkat kerusakan harus bernilai 0–100.');
            }
        });
    }
});