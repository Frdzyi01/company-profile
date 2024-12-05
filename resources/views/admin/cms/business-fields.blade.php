<x-admin.app-layout>


    <div class="table-wrap bg-white border py-3 px-3">
        <div class="table-title d-flex justify-content-between pt-3 pb-4">
            <h3 class="font-weight-bold">
                Tabel Bidang Usaha
            </h3>
            <button class="btn btn-success" data-toggle="modal" data-target="#modalCreateBusinessFields">
                <i class="fa-solid fa-plus pr-3"></i>Tambah Bidang Usaha
            </button>
        </div>
        <table id="table-home" class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 70%;">Nama Bidang</th>
                    <th style="width: 20%;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle" style="height: 100%;">
                        1
                    </td>
                    <td class="align-middle" style="height: 100%;">
                        Khusus
                    </td>
                    <td class="align-middle" style="height: 100%;">
                        Edit
                    </td>
                </tr>
                <tr>
                    <td class="align-middle" style="height: 100%;">
                        2
                    </td>
                    <td class="align-middle" style="height: 100%;">
                        Umum
                    </td>
                    <td class="align-middle" style="height: 100%;">
                        Edit
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="cms-title w-100 bg-white py-3 px-3" style="height: auto;">
        <div class="title d-flex justify-content-between w-100 py-3">
            <h4 class="font-weight-bold">Teks Judul</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditContent">
                <i class="fa-regular fa-pen-to-square pr-3"></i>Edit Konten
            </button>
        </div>
        <table class="table w-100">
            <tr>
                <th style="width: 25%;">Nama Konten</th>
                <th style="width: 2%;"></th>
                <th style="width: 48%;">Teks</th>
                <th style="width: 25%;">Pengaturan</th>
            </tr>
            <tr>
                <td>Judul</td>
                <td>
                    :
                </td>
                <td>
                    Bidang Usaha
                </td>
                <td>
                    Edit
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    :
                </td>
                <td>
                    <img src="{{ asset('client-assets/img/landing/hero-2.jpg') }}" alt="test" class="w-75 h-auto">
                </td>
                <td>
                    Edit
                </td>
            </tr>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalCreateBusinessFields" tabindex="-1" role="dialog"
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
                            <label for="business-fields" class="col-3">Nama Bidang Usaha</label>
                            <input name="business-fields" id="business-fields" class="w-100 col-9" />
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
    <div class="modal fade" id="modalEditContent" tabindex="-1" role="dialog"
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
                            <label for="title" class="col-3">Judul</label>
                            <input name="title" id="title" class="w-100 col-9" />
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="image" class="col-3">gambar</label>
                            <input type="file" class="col-9 w-100" id="image">
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="description" class="col-3">Deskripsi Gambar</label>
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
