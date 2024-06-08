<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>BULAN ENTRY</th>
            <th>CONTRACT_NO</th>
            <th>KK_NO_GROSS</th>
            <th>KK_NO</th>
            <th>CABANG</th>
            <th>WILAYAH</th>
            <th>CUSTNAME</th>
            <th>NIK_GROSS</th>
            <th>NIK</th>
            <th>JENIS_KELAMIN</th>
            <th>TEMPAT_LAHIR</th>
            <th>TANGGAL_LAHIR</th>
            <th>AGAMA</th>
            <th>PENDIDIKAN</th>
            <th>PEKERJAAN</th>
            <th>STATUS_PERNIKAHAN</th>
            <th>STATUS_DALAM_KELUARGA</th>
            <th>KEWARGANEGARAAN</th>
            <th>AYAH</th>
            <th>IBU</th>
            <th>FLAG</th>
            <th>SOURCE</th>
            <th>CONTRACT_FIFAPPS</th>
            <th>KETERANGAN_VALILDASI</th>
            <th>TGL_UPLOAD</th>
            <th>BULAN_KONTRAK</th>
            <th>NAMA_KEPALA_KELUARGA</th>
            <th>ALAMAT</th>
            <th>DESA_KELURAHAN</th>
            <th>RT_RW</th>
            <th>KODE_POS</th>
            <th>KECAMATAN</th>
            <th>KABUPATEN_KOTA</th>
            <th>PROVINSI</th>
            <th>FLAG_OCR</th>
            <th>TANGGAL ENTRY</th>
            <th>NAMA AGENT ENTRY</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($family_cards as $kk)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ now()->format("Y-m") }}</td>
                <td>{{ $kk->contract_number }}</td>
                <td>{{ $kk->kk_no_gros }}</td>
                <td>{{ $kk->kk_no }}</td>
                <td>{{ $kk->cabang }}</td>
                <td>{{ "" }}</td>
                <td>{{ $kk->name }}</td>
                <td>{{ $kk->nik_gros }}</td>
                <td>{{ $kk->nik }}</td>
                <td>{{ $kk->gender }}</td>
                <td>{{ $kk->place_of_birth }}</td>
                <td>{{ $kk->date_of_birth }}</td>
                <td>{{ $kk->religion }}</td>
                <td>{{ $kk->education }}</td>
                <td>{{ $kk->profession }}</td>
                <td>{{ $kk->marital_status }}</td>
                <td>{{ $kk->status_on_family_card }}</td>
                <td>{{ $kk->citizenship }}</td>
                <td>{{ $kk->father_name }}</td>
                <td>{{ $kk->mother_name }}</td>
                <td>{{ "" }}</td>
                <td>{{ "" }}</td>
                <td>{{ "" }}</td>
                <td>{{ "" }}</td>
                <td>{{ "" }}</td>
                <td>{{ "" }}</td>
                <td>{{ $kk->father_on_family_card }}</td>
                <td>{{ $kk->address }}</td>
                <td>{{ $kk->kelurahan }}</td>
                <td>{{ $kk->rt_rw }}</td>
                <td>{{ $kk->postal_code }}</td>
                <td>{{ $kk->kecamatan }}</td>
                <td>{{ $kk->kabupaten }}</td>
                <td>{{ $kk->province }}</td>
                <td>{{ "" }}</td>
                <td>{{ now()->format("Y-m-d") }}</td>
                <td>{{ "" }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
