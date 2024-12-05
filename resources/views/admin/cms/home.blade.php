<x-admin.app-layout>

    <div class="cms-title w-100 bg-white py-3 px-3" style="height: auto;">
        <div class="title d-flex w-100 justify-content-between py-3">
            <h4 class="font-weight-bold">Teks Header</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditContent">
                <i class="fa-regular fa-pen-to-square pr-3"></i>Edit
            </button>
        </div>
        <table class="table w-100">
            <tr>
                <th style="width: 25%;">Nama Konten</th>
                <th style="width: 2%;"></th>
                <th style="width: 73%;">Teks</th>
            </tr>
            <tr>
                <td>Judul</td>
                <td>
                    :
                </td>
                <td>
                    Teguh Maju Jaya
                </td>
            </tr>
            <tr>
                <td>Sub Judul</td>
                <td>
                    :
                </td>
                <td>
                    Filosofi kami lahir dari pemahaman dan harapan untuk menjadi yang terbaik
                    di mata tuhan dan manusia
                </td>
            </tr>
            <tr>
                <td>Button 1</td>
                <td>
                    :
                </td>
                <td>
                    Dukung Kami
                </td>
            </tr>
            <tr>
                <td>Button 2</td>
                <td>
                    :
                </td>
                <td>
                    Baca Selengkapnya
                </td>
            </tr>
        </table>
    </div>

    <div class="table-wrap bg-white border py-3 px-3">
        <div class="table-title d-flex justify-content-between pt-3 pb-4">
            <h3 class="font-weight-bold">
                Tabel Gambar
            </h3>
            <button class="btn btn-success" data-toggle="modal" data-target="#modalCreateImage">
                <i class="fa-solid fa-plus pr-3"></i>Tambah Gambar
            </button>
        </div>
        <table id="table-home" class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: auto;">Gambar</th>
                    <th style="width: 25%;">Deskripsi</th>
                    <th style="width: 25%;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle" style="height: 100%;">
                        1
                    </td>
                    <td class="align-middle" style="height: 100%;">
                        <img src="{{ asset('client-assets/img/landing/hero-1.jpg') }}" alt="hero-1"
                            style="width: 20rem">
                    </td>
                    <td class="align-middle" style="height: 100%;">Hero-1</td>
                    <td class="align-middle" style="height: 100%;"> 4</td>
                </tr>
                <tr>
                    <td class="align-middle" style="height: 100%;">
                        1
                    </td>
                    <td class="align-middle" style="height: 100%;">
                        <img src="{{ asset('client-assets/img/landing/hero-2.jpg') }}" alt="hero-1"
                            style="width: 20rem">
                    </td>
                    <td class="align-middle" style="height: 100%;">Hero-2</td>
                    <td class="align-middle" style="height: 100%;"> 4</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalEditContent" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="input-group row w-100 py-2">
                            <label for="title" class="col-3">Judul</label>
                            <input type="text" class="col-9 w-100" value="Teguh Maju Jaya">
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="sub-title" class="col-3">Sub Judul</label>
                            <textarea name="sub-title" id="sub-title" class="w-100 col-9" style="height: auto; max-height: 6rem">Filosofi kami lahir dari pemahaman dan harapan untuk menjadi yang terbaik di mata tuhan dan manusia</textarea>
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="button-1" class="col-3">Button 1</label>
                            <input type="text" class="col-9 w-100" value="Dukung Kami">
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="button-2" class="col-3">Button 2</label>
                            <input type="text" class="col-9 w-100" value="Baca Selengkapnya">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCreateImage" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Gambar Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="input-group row w-100 py-2">
                            <label for="image" class="col-3">gambar</label>
                            <input type="file" class="col-9 w-100" id="image">
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="description" class="col-3">Deskripsi</label>
                            <input name="description" id="description" class="w-100 col-9" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    @push('default-js')
        {{-- <script src="datatables.js"></script> --}}
        <script>
            // $(document).ready(function() {
            //     $('#table-home').DataTable();
            // });
            $(function() {
                $('#table-home').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endpush
</x-admin.app-layout>
