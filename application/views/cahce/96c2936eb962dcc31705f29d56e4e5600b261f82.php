 
<?php $__env->startSection('content'); ?>
<div class="row">

</div>
<div class="col-md-12 text-dark mt-4" style="padding-top:15px;">
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered table-feedback">
                <thead>
                    <tr>
                        <th style="width:20%">Hal</th>
                        <th style="width:5%">Tahun</th>
                        <th style="width:5%">Data</th>
                        <th style="width:5%">Satuan</th>
                        <th style="width:50%">Komentar Dari Pemakai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th colspan="2">A. NAMA PDAM</th>
                        <th colspan="4"><?php echo e($data['kode_pdam']); ?></th>

                    </tr>
                    <tr>
                        <th colspan="2">B. Nama Kota / Kabupaten</th>
                        <td colspan="4"><?php echo e($data['kabkota']); ?></td>
                    </tr>
                    <tr>
                        <th colspan="2">C. Tanggal masukan</th>
                        <td colspan="4"><?php echo e($data['tanggal']); ?></td>
                    </tr>
                    <tr>
                        <th colspan="2">D. Periode laporan yang digunakan</th>
                        <td colspan="1">
                          <?php
                            $date = DateTime::createFromFormat("Y-m-d", $data['tanggal']);
                          ?>

                        
                        <?php echo e("".$date->format("Y")); ?></td>
                        <td colspan="1">
                          <?php echo e("".$date->format("F")); ?>

                          
                             </td>
                        <td colspan="2">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">D. Keterangan Umum</th>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                    </tr>

                    <tr>
                        <th colspan="2">1. KATEGORI PDAM</th>
                        <th colspan="4">Gunakan data dari hasil evaluasi kinerja BPPSPAM</th>
                    </tr>
                    <tr>
                        <td>1.1.Nilai Kinerja Total dari BPPSPAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['nilai_kinerja_total']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan nilai total kinerja dari hasil evaluasi kinerja yang terakhir"></i>
                        </td>
                        <td>nilai</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.2.Nilai Aspek Keuangan dari BPPSPAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['nilai_aspek_keuangan']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan nilai aspek keuangan dari hasil evaluasi kinerja yang terakhir"></i>
                        </td>
                        <td>nilai</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.3.Nilai Aspek Pelayanan dari BPPSPAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['nilai_aspek_pelayanan']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan nilai aspek pelayanan dari hasil evaluasi kinerja yang terakhir"></i>
                        </td>
                        <td>nilai</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.4.Nilai Aspek Operasional dari BPPSPAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['nilai_aspek_operasional']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan nilai aspek operasional dari hasil evaluasi kinerja yang terakhir"></i>
                        </td>
                        <td>nilai</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.5.Nilai Aspek SDM dari BPPSPAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['nilai_aspek_sdm']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan nilai aspek SDM dari hasil evaluasi kinerja yang terakhir"></i>
                        </td>
                        <td>nilai</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.6.Status Kinerja PDAM (tahun sebelumnya)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['status_kinerja_1']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan status kinerja PDAM berdasarkan audit kinerja pada tahun sebelumnya"></i>
                        </td>
                        <td>kategori</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.7.Status Kinerja PDAM (2 tahun sebelumnya)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['status_kinerja_2']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan status kinerja PDAM berdasarkan audit kinerja pada 2 tahun sebelumnya"></i>
                        </td>
                        <td>kategori</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.8.Status Kinerja PDAM (3 tahun sebelumnya)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['statis_kinerja_3']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan status kinerja PDAM berdasarkan audit kinerja pada 3 tahun sebelumnya"></i>
                        </td>
                        <td>kategori</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">2. CAKUPAN PELAYANAN</th>
                        <th colspan="4">Gunakan data dari laporan teknis bulanan PDAM</th>
                    </tr>
                    <tr>
                        <td>2.1.Jumlah penduduk di wilayah administratif</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['jum_pdd_wil_adm']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah populasi di Kota atau Kabupaten "></i>
                        </td>
                        <td>jiwa</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.2.Jumlah penduduk di wilayah pelayanan teknis</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['jum_pdd_wil_yanteknis']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah populasi di daerah pelayanan"></i>
                        </td>
                        <td>jiwa</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.3.Jumlah Penduduk terlayani</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['jum_terlayani']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah populasi yang terlayani"></i>
                        </td>
                        <td>jiwa</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.4.Jumlah jiwa per keluarga (data BPS)</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['jum_jiwa_perkel']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah populasi yang terlayani"></i>
                        </td>
                        <td>jiwa</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.5.Jumlah pelanggan (total)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['jum_pelanggan']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total jumlah sambungan langsung "></i>
                        </td>
                        <td>sambungan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.6.Jumlah sambungan baru (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['jum_sambung_baru']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total jumlah sambungan baru selama periode assessment ini"></i>
                        </td>
                        <td>sambungan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.7.Jumlah sambungan rumah tangga</td>
                        <td class="text-center">
                            </td>
                        <td class="text-right">
                           <?php echo e($data['jum_sambung_rt']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah sambungan rumah tidak termasuk sambungan non-domestik) "></i>
                        </td>
                        <td>sambungan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">3. OPERASIONAL</th>
                        <th colspan="4"></th>
                    </tr>
                    <tr>
                        <td>3.1.Jumlah sistem yang beroperasi</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['jum_sistem_ops']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah sistem yang dioperasikan"></i>
                        </td>
                        <td>Sistem</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.2.Jumlah IKK atau cabang yang dioperasikan</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['jum_ikk']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah IKK atau cabang yang dioperasikan"></i>
                        </td>
                        <td>Unit</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.3.Volume air yang diproduksi (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['vol_air_prod']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah total air yang diproduksi selama periode laporan"></i>
                        </td>
                        <td>m3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.4.Apakah tersedia meter induk?</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['meter_induk']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan pilih jawaban dari menu " dropddown ",=" " ya=" " jika=" " ada=" " meter=" " induk,=" " tidak=" " kalau=" " ada"=""></i>
                        </td>
                        <td>YA / SEBAGIAN / TIDAK</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.5.Volume air yang didistribusikan (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['vol_air_distrib']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah total air yang didistribusikan selama periode laporan"></i>
                        </td>
                        <td>m3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.6.Volume air yang terjual (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['vol_air_terjual']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah total air yang terjual selama periode laporan"></i>
                        </td>
                        <td>m3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.7.Kapasitas pengambilan air baku</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['kap_ambil_airbaku']); ?>  &nbsp;
                            <i class="icon-info" title="Silahkan masukkan kapasitas instalasi pengambilan sumber air baku"></i>
                        </td>
                        <td>l/d</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.8.Kapasitas produksi air yang terpasang</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['kap_prod_air_terpasang']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total kapasitas produksi air yang terpasang"></i>
                        </td>
                        <td>l/d</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.9.Jam operasional pelayanan (rata-rata)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['jam_ops']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan rata-rata waktu pelayanan air per hari"></i>
                        </td>
                        <td>jam / hari</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.10.Total pemakaian listrik (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['total_pakai_listrik']); ?> &nbsp;
                            <i class="icon-info" title=""></i>
                        </td>
                        <td>kWh</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.11.Total pemakaian BBM (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['total_pakai_bbm']); ?> &nbsp;
                            <i class="icon-info" title=""></i>
                        </td>
                        <td>Liter</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">4. KEUANGAN</th>
                        <th colspan="4">Gunakan data dari laporan keuangan bulanan PDAM</th>
                    </tr>
                    <tr>
                        <td>4.1.Total biaya listrik (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['total_biaya_listrik']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total biaya listrik yang dikeluarkan selama periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.2.Tarif listrik PLN untuk PDAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['tarif_listrik']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan tarif listrik PLN yang diberlakukan untuk PDAM"></i>
                        </td>
                        <td>Rp / kWh</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.3.Total biaya BBM (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['total_biaya_bbm']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total biaya BBM yang dikeluarkan selama periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.4.harga BBM</td>
                        <td class="text-center">
                           </td>
                        <td class="text-right">
                            <?php echo e($data['harga_bbm']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan harga solar yang diberlakukan untuk PDAM"></i>
                        </td>
                        <td>Rp/Liter</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.5.Total biaya usaha tanpa penyusutan (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['total_biaya_usaha']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total biaya langsung (biaya operasional) tanpa depresiasi selama periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.6.Total biaya usaha dengan penyusutan (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['total_biaya_usaha_susut']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total biaya usaha (biaya operasional) tanpa depresiasi selama periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.7.Tarif air rata-rata</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['pendapatan_air']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan tarif air rata-rata"></i>
                        </td>
                        <td>Rp / m3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.8.Pendapatan air - data rekening ditagih (kumulatif selama period laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['penerimaan_air']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukan DRD kumulatif semalam periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.9.Penerimaan dari penjualan air (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total penerimaan dari DRD kumulatif selama periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.10.Pendapatan yang lain-lain (kumulatif selama periode laporan)</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['pendapatan_lain']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan total pendapatan lain-laiin selama periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">5. PEMERINTAH DAERAH</th>
                        <th colspan="4">Gunakan data dari PemDa mengenai RISPAM dan APBD</th>
                    </tr>
                    <tr>
                        <td>5.1.Nama Pemerintah Daerah</td>
                        <td colspan="5"><?php echo e($data['kabkota']); ?></td>
                    </tr>
                    <tr>
                        <td>5.2.Apakah Pemda mempunyai RISPAM?</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            &nbsp;
                            <i class="icon-info" title="Silahkan pilih jawaban dari " dropdown "=" " menu,=" " jika=" " jawaban=" " anda=" " "tidak ",=" " langsung=" " the=" " pertanyaan=" " no=" " 5.5"=""></i>
                        </td>
                        <td><?php echo e($data['ada_rispam']); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.3.Tahun RISPAM diterbitkan</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['tahun_rispam']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan tahun di mana RISPAM diterbitkan"></i>
                        </td>
                        <td>tahun</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.4.Lamanya masa berlaku RISPAM</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['masa_rispam']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan masa berlaku RISPAM"></i>
                        </td>
                        <td>tahun</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.5.Apakah Pemda sedang menyiapkan RISPAM?</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                         <?php echo e($data['sedang_persiapan_rispam']); ?>

                        </td>
                        <td>YA / TIDAK</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.6.Tahun RISPAM akan diterbitkan</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                            <?php echo e($data['tahun_rispam_terbit']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan tahun di mana RISPAM akan diterbitkan"></i>
                        </td>
                        <td>tahun</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.7.Lamanya masa berlaku RISPAM</td>
                        <td class="text-center">
                        </td>
                        <td class="text-right">
                           <?php echo e($data['masa_rispam_terbit']); ?>   &nbsp;
                            <i class="icon-info" title="Silahkan masukkan masa berlaku RISPAM"></i>
                        </td>
                        <td>tahun</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.8.Jumlah penduduk proyeksi di tahun target dalam RISPAM </td>
                        <td class="text-center">
                            2029 </td>
                        <td class="text-right">
                             <?php echo e($data['jum_pdd_proyeksi']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan perkiraan jumlah penduduk di akhir tahun perencanaan RISPAM"></i>
                        </td>
                        <td>orang</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.9.Target populasi yang akan terlayani dengan jaringan perpipaan</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['target_populasi_pipa']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan target populasi yang akan dilayani jaringan perpipaan pada akhir tahun perencanaan RISPAM"></i>
                        </td>
                        <td>orang</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.10.Target populasi yang akan terlayani dengan jaringan bukan perpipaan</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['target_populasi_nonpipa']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan target populasi yang akan dilayani dengan jaringan bukan perpipaan pada akhir tahun perencanaan RISPAM"></i>
                        </td>
                        <td>orang</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.11.Target cakupan pelayanan jaringan perpipaan di tahun target</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['target_cakupan_jaringan_pipa']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan target cakupan pelayanan jaringan perpipaan di tahun target"></i>
                        </td>
                        <td>%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.12.Target cakupan pelayanan jaringan bukan perpipaan di tahun target</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['target_cakupan_jaringan_nonpipa']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan target cakupan pelayanan jaringan bukan perpipaan di tahun target"></i>
                        </td>
                        <td>%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.13.Alokasi APBD untuk penyertaan modal PDAM</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                             <?php echo e($data['apbd_alokasi']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah penyertaan modal dari APBD untuk PDAM pada tahun anggaran periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.14.Alokasi DAK untuk penyediaan air minum</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['dak_alokasi']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah DAK yang dialokasikan untuk penyediaan air minum pada tahun anggaran periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.15.Alokasi APBD lainnya untuk penyediaan air minum</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['apbd_alokasi_lain']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumplah APBD lainnya yang dialokasikan untuk pengembangan penyediaan air minum pada tahun anggaran periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.16.Jumlah total APBD Pemda</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['total_apbd']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan jumlah total APBD pada tahun anggaran periode laporan"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.17.Kapasitas Fiskal Pemda</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['kapasitas_fiskal']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan index kapasitas fiskal PemDa pada tahun anggaran periode laporan"></i>
                        </td>
                        <td>kategori</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.18.Dana investasi non - Pemerintah</td>
                        <td class="text-center">
                             </td>
                        <td class="text-right">
                            <?php echo e($data['dana_inv_non_gov']); ?> &nbsp;
                            <i class="icon-info" title="Silahkan masukkan dana investasi Non Pemerintah"></i>
                        </td>
                        <td>Rp</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/pdam_detail.blade.php ENDPATH**/ ?>