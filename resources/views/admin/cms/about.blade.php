<x-admin.app-layout>
    <div class="table-wrap bg-white border py-3 px-3">
        <div class="table-title d-flex justify-content-between pt-3 pb-4">
            <h3 class="font-weight-bold">
                Gambar
            </h3>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditImage">
                <i class="fa-regular fa-pen-to-square pr-3"></i>Edit Gambar
            </button>
        </div>
        <table id="table-home" class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th style="width: auto;">Gambar</th>
                    <th style="width: 25%;">Deskripsi</th>
                    <th style="width: 25%;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle" style="height: 100%;">
                        <img src="{{ asset('client-assets/img/landing/hero-1.jpg') }}" alt="hero-1"
                            style="width: 20rem">
                    </td>
                    <td class="align-middle" style="height: 100%;">Hero-1</td>
                    <td class="align-middle" style="height: 100%;"> 4</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="cms-title w-100 bg-white py-3 px-3" style="height: auto;">
        <div class="title d-flex w-100 justify-content-between py-3">
            <h4 class="font-weight-bold">Teks About</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditContent">
                <i class="fa-regular fa-pen-to-square pr-3"></i>Edit Konten
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
                    Tentang Kami
                </td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>
                    :
                </td>
                <td>
                    PT. TEGUH MAJU JAYA adalah perusahaan yang bergerak dibidang usaha Kontraktor, Pengelolaan Gedung ,
                    Konsultan Engineering dan Usaha Perdagangan dan Jasa Lainnya. Tujuan dibentuknya perusahaan ini atas
                    dasar ikut berperan serta dalam peningkatan ekonomi kerakyatan (micro) dan berperan serta dalam
                    kegiatan perekonomian Indonesia secara global (macro), menuju masyarakat Indonesia seutuhnya.
                    Kegiatan usaha yang kami lakukan adalah usaha dibidang property, pengelolaan gedung, jasa
                    konstruksi, perdagangan dan usaha lainnya.
                </td>
            </tr>
            <tr>
                <td>Visi Kami</td>
                <td>
                    :
                </td>
                <td>
                    Visi kami adalah menjadi perusahaan yang berbasis pada profesionalisme kerja, yang terus memberikan
                    kontribusi aktif dalam mengiringi perkembangan dan pembangunan di Indonesia.
                </td>
            </tr>
            <tr>
                <td>Misi Kami</td>
                <td>
                    :
                </td>
                <td>
                    <ul>
                        <li>
                            menjadi perusahaan yang handal dan terpercaya dengan mengutamakan standard mutu pelayanan demi
                            kepuasan para pelanggan
                        </li>
                        <li>
                            menjadi perusahaan yang berperan aktif bagi kesejahteraan karyawan dan masyarakat sekitar
                        </li>
                    </ul>

                </td>
            </tr>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEditImage" tabindex="-1" role="dialog"
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
                            <input type="text" class="col-9 w-100" value="Tentang Kami">
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="content" class="col-3">Isi</label>
                            <textarea name="content" id="content" class="w-100 col-9" style="max-height: 8rem; min-height: 8rem;">PT. TEGUH MAJU JAYA adalah perusahaan yang bergerak dibidang usaha Kontraktor, Pengelolaan Gedung , Konsultan Engineering dan Usaha Perdagangan dan Jasa Lainnya. Tujuan dibentuknya perusahaan ini atas dasar ikut berperan serta dalam peningkatan ekonomi kerakyatan (micro) dan berperan serta dalam kegiatan perekonomian Indonesia secara global (macro), menuju masyarakat Indonesia seutuhnya. Kegiatan usaha yang kami lakukan adalah usaha dibidang property, pengelolaan gedung, jasa konstruksi, perdagangan dan usaha lainnya.</textarea>
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="vision" class="col-3">Visi Kami</label>
                            <textarea name="vision" id="vision" class="w-100 col-9" style="max-height: 8rem; min-height: 8rem;">Visi kami adalah menjadi perusahaan yang berbasis pada profesionalisme kerja, yang terus memberikan kontribusi aktif dalam mengiringi perkembangan dan pembangunan di Indonesia.</textarea>
                        </div>
                        <div class="input-group row w-100 py-2">
                            <label for="mission" class="col-3">Misi Kami</label>
                            <textarea name="mission" id="mission" class="w-100 col-8 mr-4" style="max-height: 8rem; min-height: 4rem;">menjadi perusahaan yang handal dan terpercaya dengan mengutamakan standard mutu pelayanan demi kepuasan para pelanggan</textarea>
                            <button class="btn btn-success" class="w-100 col-1">+</button>
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
    @endpush
</x-admin.app-layout>
