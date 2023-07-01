@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<!-- ======= AGAMA Section ======= -->
<section id="AGAMA" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>AGAMA</h2>
            <div class="row">
                
            </div>
            <div class="card">

                <div id="pekerjaan" style="min-height: 400px;" class="echart"></div>
            </div>
    </div>

</section><!-- End AGAMA Section -->

@include('layouts.footer')

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#pekerjaan")).setOption({
           
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: 'bottom'
            },
            toolbox: {
                show: true,
                feature: {
                    mark: {
                        show: true
                    },
                    dataView: {
                        show: true,
                        readOnly: false
                    },
                    restore: {
                        show: false
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [{
                name: 'Populasi',
                type: 'pie',
                radius: '50%',
                data: [
                    @foreach ($pekerjaan as $d)
                        {
                        @foreach ($penduduk as $p)
                            value: {{ $penduduk->where("id_pekerjaan",$d->id)->count() }},
                        @endforeach
                            name: "{{ $d->nama_pekerjaan }}",
                        },

                    @endforeach
                   
                   
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
    });
</script>
@endsection
@endsection
