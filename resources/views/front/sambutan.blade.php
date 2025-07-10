@extends('front.layout.main_front')

@section('title', 'Sambutan Direktur RS')

@section('content')
<div class="row align-items-start">
    <div class="col-md-4 mb-4 text-center">
        <img src="{{ asset('img/direktur_rs.jpg') }}" 
             class="img-fluid rounded shadow-sm" 
             alt="Direktur RS" 
             width="100%">
        <p class="mt-2"><em>Direktur RS</em></p>
    </div>
    <div class="col-md-8">
        <h2 class="fw-bold mb-3">Sambutan Direktur Rumah Sakit</h2>
        <p>Assalamualaikum Warahmatullahi Wabarakatuh,</p>

        <p>
            Puji syukur ke hadirat Tuhan Yang Maha Esa atas rahmat dan karunia-Nya, 
            Rumah Sakit Universitas Hang Tuah Pekanbaru kini terus berkembang dalam memberikan pelayanan kesehatan kepada masyarakat luas.
        </p>

        <p>
            Kami berkomitmen untuk memberikan layanan kesehatan yang prima, berbasis teknologi, serta menjunjung tinggi profesionalisme dan etika kedokteran. 
            SIMRS ini hadir sebagai bagian dari transformasi digital guna meningkatkan efisiensi dan kualitas pelayanan.
        </p>

        <p>
            Terima kasih atas kepercayaan dan dukungan yang diberikan kepada kami. 
            Semoga kehadiran SIMRS ini menjadi langkah maju menuju pelayanan kesehatan yang lebih baik.
        </p>

        <p>Wassalamualaikum Warahmatullahi Wabarakatuh.</p>

        <p class="fw-bold mt-4 mb-1">dr. Kusuma Januarto, Sp.OG., Subsp.Obginsos</p>
        <p class="mb-0">Direktur Rumah Sakit UHT Pekanbaru</p>
    </div>
</div>
@endsection
