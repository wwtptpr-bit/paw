@extends('layout')

@section('content')
<div class="custom-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="m-0 font-weight-bold text-primary">Data Praktikum (Dashboard)</h5>
        <button class="btn btn-primary btn-sm" onclick="openAddModal()">
            <i class="fas fa-plus"></i> Tambah
        </button>
    </div>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>No</th><th>Nama</th><th>NBI</th><th>Kelas</th><th>Praktikum</th><th>Sesi</th><th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBody"></tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Data Praktikum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="praktikumForm">
                    <input type="hidden" id="editId">
                    <div class="mb-2"><label>Nama</label><input type="text" class="form-control" id="nama"></div>
                    <div class="mb-2"><label>NBI</label><input type="text" class="form-control" id="nbi"></div>
                    <div class="mb-2"><label>Kelas</label><select class="form-control" id="kelas"><option value="">Pilih</option><option value="A">A</option><option value="B">B</option></select></div>
                    <div class="mb-2"><label>Praktikum</label><select class="form-control" id="praktikum"><option value="">Pilih</option><option value="PBO">PBO</option><option value="PAW">PAW</option></select></div>
                    <div class="mb-2"><label>Sesi</label><select class="form-control" id="sesi"><option value="">Pilih</option><option value="Pagi">Pagi</option><option value="Sore">Sore</option></select></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="saveBtn">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Copy script Javascript Dashboard yang sebelumnya saya berikan DISINI.
    // Agar tidak terlalu panjang, saya persingkat. Intinya fungsi loadData, saveData, dll.
    
    let currentEditId = null;
    const myModal = new bootstrap.Modal(document.getElementById('formModal'));

    document.addEventListener('DOMContentLoaded', function() {
        loadData();
        document.getElementById('saveBtn').addEventListener('click', saveData);
    });

    function openAddModal() { resetForm(); myModal.show(); }

    async function loadData() {
        const res = await fetch('/api/praktikum');
        const data = await res.json();
        let html = '';
        data.forEach((item, index) => {
            html += `<tr>
                <td>${index+1}</td><td>${item.nama}</td><td>${item.nbi}</td>
                <td>${item.kelas}</td><td>${item.praktikum}</td><td>${item.sesi}</td>
                <td>
                    <button class="btn btn-success btn-sm" onclick="editData(${item.id})">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="hapusData(${item.id})">Hapus</button>
                </td>
            </tr>`;
        });
        document.getElementById('tableBody').innerHTML = html;
    }

    // ... Masukkan fungsi saveData, editData, hapusData, resetForm dari jawaban sebelumnya di sini ...
    
    async function saveData() {
        const formData = {
            nama: document.getElementById('nama').value,
            nbi: document.getElementById('nbi').value,
            kelas: document.getElementById('kelas').value,
            praktikum: document.getElementById('praktikum').value,
            sesi: document.getElementById('sesi').value
        };
        let url = currentEditId ? `/api/praktikum/${currentEditId}` : '/api/praktikum';
        let method = currentEditId ? 'PUT' : 'POST';
        
        await fetch(url, {
            method: method,
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            body: JSON.stringify(formData)
        });
        myModal.hide(); loadData(); resetForm();
    }

    async function editData(id) {
        const res = await fetch('/api/praktikum');
        const data = await res.json();
        const item = data.find(i => i.id == id);
        if(item) {
            document.getElementById('editId').value = item.id;
            document.getElementById('nama').value = item.nama;
            document.getElementById('nbi').value = item.nbi;
            document.getElementById('kelas').value = item.kelas;
            document.getElementById('praktikum').value = item.praktikum;
            document.getElementById('sesi').value = item.sesi;
            currentEditId = id;
            myModal.show();
        }
    }

    async function hapusData(id) {
        if(confirm('Hapus?')) {
            await fetch(`/api/praktikum/${id}`, { 
                method: 'DELETE',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
            });
            loadData();
        }
    }

    function resetForm() {
        document.getElementById('praktikumForm').reset();
        currentEditId = null;
    }
</script>
@endsection