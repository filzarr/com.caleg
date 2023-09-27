@extends('layout.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/js-circle-progress/dist/circle-progress.min.js" type="module"></script>
    <div class=" pl-80 pr-10 py-10">
      <x-head.header judul="Dashboard"></x-head.header>
        <div class="py-10 pr-10">
            <div class="flex gap-16">
                <x-card.-cardheader coloricon="#41ABE5" colorcircle="#EDF2FD" icon="bi bi-house-door-fill" jumlah="19.000" desc="Jumlah TPS" ></x-card.-cardheader>
                <x-card.-cardheader coloricon="#B0348B" colorcircle="#FFE0ED" icon="bi bi-people-fill" jumlah="2.103.000" desc="Jumlah DPT" ></x-card.-cardheader>
                <x-card.-cardheader coloricon="#5FC679" colorcircle="#E1FFEC" icon="bi bi-person-circle" jumlah="1.201" desc="Jumlah Relawan" ></x-card.-cardheader>
            
               
            </div>
        </div>
        <div class="py-5 flex gap-10 w-full pr-5">
            <div class="flex flex-col gap-10 w-1/4">
                <x-card.-cardrectangle color="#FF023F" jumlah="1.300.200" desc="Pemilih Pria"></x-card.-cardrectangle>
                <x-card.-cardrectangle color="#00FF42" jumlah="1.300.200" desc="Pemilih Wanita"></x-card.-cardrectangle>
                <x-card.-cardrectangle color="#00A1FF" jumlah="1.300.200" desc="Pemilih Lansia"></x-card.-cardrectangle>
                <x-card.-cardrectangle color="#FAFF00" jumlah="1.300.200" desc="Pemilih Muda"></x-card.-cardrectangle>
           
            </div>
            <div class="flex flex-col gap-10 justify-center w-3/4 h-full items-center content-center">
                <p class="text-4xl font-bold text-gray-700">Persentase Prolehan Potensi Suara</p>
                <circle-progress text-format="percent" value="50" max="100"></circle-progress>
                <div class="flex  gap-10">
                    <div class="flex items-center gap-5">
                        <i class="bi bi-square text-xl  text-[#FF023F]"></i>
                        <div class="">
                            <p class="text-lg font-bold text-gray-800">2.050.000</p>
                            <p class=" font-semibold text-gray-500">Jumlah DPT</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <i class="bi bi-square text-xl  text-[#FF04E6]"></i>
                        <div class="">
                            <p class="text-lg font-bold text-gray-800">1.026.120</p>
                            <p class=" font-semibold text-gray-500">Jumlah Potensi Suara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 flex gap-16 w-full pr-5 mt-10">
            <div class="flex  flex-col w-3/4">
                <p class="text-3xl font-bold text-gray-700">Sebaran Usia Pemilih</p>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="flex flex-col w-1/4">
                <div class="flex items-center gap-5 pb-5 border-b-4 pr-20 ">
                    <div class="text-xl  text-[#FF023F]"><i class="bi bi-square"></i></div>
                    <div class="">
                        <p class="text-xl font-bold text-gray-800">33</p>
                        <p class="text-lg font-semibold text-gray-500">Kabupaten/Kota</p>
                    </div>
                </div>
                <div class="flex items-center gap-5 pb-5 border-b-4 pr-20 pt-5 ">
                    <div class="text-xl  text-[#00FF42]"><i class="bi bi-square"></i></div>
                    <div class="">
                        <p class="text-xl font-bold text-gray-800">325</p>
                        <p class="text-lg font-semibold text-gray-500">Kecamatan</p>
                    </div>
                </div>
                <div class="flex items-center gap-5 pb-5 border-b-4 pr-20 pt-5 ">
                    <div class="text-xl  text-[#00A1FF]"><i class="bi bi-square"></i></div>
                    <div class="">
                        <p class="text-xl font-bold text-gray-800">5.456</p>
                        <p class="text-lg font-semibold text-gray-500">Jumlah Kelurahan/Desa</p>
                    </div>
                </div>
                <div class="flex items-center gap-5 pb-5 border-b-4 pr-20 pt-5 ">
                    <div class="text-xl  text-[#FAFF00]"><i class="bi bi-square"></i></div>
                    <div class="">
                        <p class="text-xl font-bold text-gray-800">1.300.200</p>
                        <p class="text-lg font-semibold text-gray-500">Jumlah TPS</p>
                    </div>
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
                labels: ['18-30', '31-40', '41-50', '51-60', '60>'],
                datasets: [{
                    label: '# of Votes',
                    data: [7500, 2301, 8401, 6013, 1064],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(249, 125, 73, 1)',
                        'rgba(249, 125, 73, 1)',
                        'rgba(249, 125, 73, 1)',
                        'rgba(249, 125, 73, 1)',
                        'rgba(249, 125, 73, 1)',
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
    <script lang="javascript">
        new CircleProgress('.progress', {
            max: 100,
            value: 60,
            textFormat: 'percent',
        });
    </script>
@endsection
