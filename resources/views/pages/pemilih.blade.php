@extends('layout.main')
@section('content')
    <div class="pl-80 pr-10 py-10">
        <x-head.header judul="Pemilih" judul="Pemilih"></x-head.header>
        <div class="py-10 pr-5">
            <div class="flex gap-16">
                <x-card.-cardheader coloricon="#5FC679" colorcircle="#E1FFEC" icon="bi bi-person-circle" jumlah="1.201.203"
                    desc="Jumlah DPT"></x-card.-cardheader>
                <x-card.-cardheader coloricon="#41ABE5" colorcircle="#EDF2FD" icon="bi bi-house-door-fill" jumlah="19.000"
                    desc="Jumlah TPS"></x-card.-cardheader>
                <x-card.-cardheader coloricon="#5FC679" colorcircle="#E1FFEC" icon="bi bi-person-circle" jumlah="1.201"
                    desc="Jumlah Relawan"></x-card.-cardheader>
            </div>
            <div class="flex w-full justify-center flex-col mt-20">
                <p class="text-center text-3xl font-bold text-[#454545]">Persebaran Potensi Suara Di Kabupaten/Kota</p>
                <div class="">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="flex w-full justify-center flex-col mt-20">
                <p class="text-center text-3xl font-bold text-[#454545]">Kota/Kabupaten</p>
                <div class="flex flex-wrap gap-10 mt-10">
                    <x-button.buttongray>
                        Medan
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Karo
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Binjai
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Deli Serdang
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Humbang Hasundutan
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Karo
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Labuhan Batu
                    </x-button.buttongray>
                    <x-button.buttongray>
                        Labuhan Batu Selatan
                    </x-button.buttongray>
             
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Medan', 'Deli Serdang', 'Serdang Bedagai', 'Tapanuli Selatan', 'Nias','Sibolga','Langkat','Samosir','Parapat','Karo','Padang Lawas', 'Binjai','Simalungun','Dairi','Labuhan Batu','Batu Bara'],
                datasets: [{
                    label: '# of Votes',
                    data: [7500, 2301, 8401, 6013, 1064,5413,354,8465,4578,2544,2154,8460,2459,5478,5452,4793],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                        'rgba(241, 178, 179, 1)',
                    ],
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
